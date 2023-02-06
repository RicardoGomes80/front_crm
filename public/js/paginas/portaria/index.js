$(document).ready(function () {
	setDatePickerOnElement($('.datepicker'), false, true, 'd/m/Y H:i', 'DD/MM/YYYY H:mm', 5, 0)
	makeTableAcessos()
	makeTableHistorico()
	$('.datapicker2').datepicker({
		language: 'pt-BR',
		zIndex: 99999,
		autoHide: true
	});

	masker = "'mask\': \'99/99/9999'";
	$(".datapicker2").attr('data-inputmask', masker);
	$(".datapicker2").inputmask();
})

$('#visualizarPdf').on('hide.bs.modal', function () {
	$("#pdf_iframe").contents().find("body").html('');
	$('#carregando').removeClass('d-none')
	$('#carregado').addClass('d-none')
})

$('#visualizarPdf').on('show.bs.modal', function () {
	document.getElementById('pdf_iframe').onload = function () {
		$('#carregando').addClass('d-none')
		$('#carregado').removeClass('d-none')
	
		setTimeout(function() {
			$("#pdf_iframe").get(0).contentWindow
			.print() 
		}, 500	)
	}
})

$('#adicionaAcompanhanteModal').on('hide.bs.modal', function () {
	limparCampos()
})

$('.set-select2').select2({
	placeholder: "Escolha uma opção",
	containerCssClass: "form-control",
	width: '100%',
	theme: "bootstrap4",
	matcher: function (params, data) {
		var itensData = params.term
		searchData = data.text.toLowerCase()
		if ($.trim(itensData) === '') {
			return data;
		}
		if (typeof searchData === 'undefined') {
			return null;
		}
		itensData = itensData.toLowerCase()
		if (searchData.indexOf(itensData) > -1) {
			var modifiedData = $.extend({}, data, true);
			modifiedData.text;
			return modifiedData;
		}
		return null;
	}
});

$(document).on('click', '.delete-lembrete', function () {
	rota = $(this).attr('data-rota')
	lembreteId = $(this).attr('lembreteId')
	Swal.fire({
		title: title,
		text: "Deseja mesmo remover este lembrete?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: "SIM",
		cancelButtonText: "Não",
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {

		if (actions.isConfirmed != true) {
			return;
		} else {
			ajaxDeleteLembrete(rota, lembreteId)
		}
	});
})

$(document).on('click', '.marcarSaida', function () {
	rota = $(this).attr('data-rota')
	acessoId = $(this).attr('acesso_id')
	Swal.fire({
		title: title,
		text: "Deseja marcar a saída deste visitante ?",
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: "SIM",
		cancelButtonText: "Não",
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {

		if (actions.isConfirmed != true) {
			return;
		} else {
			ajaxMarcarSaida(rota, acessoId)
		}
	});
})

$('#buscaFiliado').click(function () {
	buscaFiliadoAjax()
})

$('#buscaAcompanhante').click(function () {
	buscaFiliadoAjax(true)
})

foto_visitante = ''
$(document).on('click', '#adicionarVisitante', function () {
	cliente = $('#cliente-visitante').val()
	identificador = $('#identificador-visitante').val()
	nome = $('#nome-visitante').val()
	rg = $('#rg-visitante').val()
	cpf = $('#cpf-visitante').val()
	setor_id = $('#setor-visitante').val()

	data = makeData(cliente, identificador, nome, rg, cpf, setor_id, foto_visitante, '', '#error-visitante')
	if (!data) {
		return;
	}

	adicionaVisitante(data)
})

function alertaErro(element, descricao) {
	$(element).append('<div class="text-danger mb-2">' + descricao + "</div>")
	toastr.warning(descricao, 'ATENÇÃO')
}

function limpaError(element) {
	toastr.clear()
	$(element).html('')
}

$(document).on('click', '.adicionaAcompanhante', function () {
	$('#anfitriao_id').val($(this).attr('anfitriao_id'))
	$('#setor-acompanhante').val($(this).attr('setor_id'))
})

foto_acompanhante = ''
$(document).on('click', '#adicionarAcompanhante', function () {
	cliente = $('#cliente-acompanhante').val()
	identificador = $('#identificador-acompanhante').val()
	nome = $('#nome-acompanhante').val()
	rg = $('#rg-acompanhante').val()
	cpf = $('#cpf-acompanhante').val()
	setor_id = $('#setor-acompanhante').val()
	anfitriao_id = $('#anfitriao_id').val()

	data = makeData(cliente, identificador, nome, rg, cpf, setor_id, foto_acompanhante, anfitriao_id, '#error-acompanhante')
	if (!data) {
		return;
	}

	adicionaVisitante(data)
})

function makeData(cliente, identificador, nome, rg, cpf, setor_id, foto, anfitriao_id, element) {

	limpaError(element)
	erro = 0

	if (!rg && !cpf && !identificador) {
		alertaErro(element, 'Preencha pelo menos um documento.');
		erro = 1
	}

	if (!nome) {
		alertaErro(element, 'O nome não pode estar vazio.');
		erro = 1
	}

	if (!setor_id) {
		alertaErro(element, 'O setor não pode estar vazio.');
		erro = 1
	}

	if (cpf && !validaCpf(cpf)) {
		alertaErro(element, 'O CPF informado não é válido.');
		erro = 1
	}

	if (!foto) {
		alertaErro(element, 'É preciso tirar uma foto do visitante.');
		erro = 1
	}

	if (erro) {
		return;
	}

	return {
		"_token": token,
		cliente_id: cliente,
		identificador: identificador,
		nome: nome,
		rg: rg,
		cpf: cpf,
		setor_id: setor_id,
		imagem: foto,
		anfitriao_id: anfitriao_id
	}
}

function adicionaVisitante(data) {
	bloqueiaPagina()
	return $.ajax({
		url: urlCreateVisistante,
		data: data,
		method: 'post'

	}).done(function (response) {
		foto_visitante = ''
		foto_acompanhante = ''
		if (response.success) {
			toastr.success('Visitante e Acesso Adicionado.', 'SUCESSO')
			$('#adicionaAcompanhanteModal').modal('hide')
			$('#click-acesso').click()
		}
		limparCampos()
		reloadTables()
		desbloqueiaPagina()
	}).fail(response => {
		desbloqueiaPagina()
		toastr.error('Não foi possível adicionar o visitante, verifique os dados.')
	})
}

$('#click-acesso').on('click', function () {
	setTimeout(() => {
		$('#sequencial').focus()
	}, 700);
})

function buscaFiliadoAjax(acompanhante) {

	if (acompanhante) {
		identificador = $('#identificador-acompanhante').val()
		rg = $('#rg-acompanhante').val()
		cpf = $('#cpf-acompanhante').val()
	} else {
		identificador = $('#identificador-visitante').val()
		rg = $('#rg-visitante').val()
		cpf = $('#cpf-visitante').val()
	}

	if (!identificador && !rg && !cpf) {
		toastr.warning('Preencha pelo menos UM documento!', 'ATENÇÃO')
		return;
	}
	dados = {
		identificador: identificador,
		rg: rg,
		cpf:cpf
	}
	$.ajax({
		url: urlBuscaFiliado,
		data: dados,
		method: 'get',
		error: function (xhr, ajaxOptions, thrownError) {
			if (xhr.status == 404) {
				toastr.warning('Este visitante não existe.', 'ATENÇÃO')
			}
			if (xhr.status == 500) {
				toastr.error('Erro inesperado ao buscar visitante', 'ATENÇÃO')
			}
		}
	}).done(function (response) {
		if (response.visitante) {
			dados = response.visitante
		} else {
			dados = response.filiado
			dados.cliente = 1
		}
		if (!acompanhante) {
			if (dados) {
				$('#nome-visitante').val(dados.nome)
				$('#rg-visitante').val(dados.rg)
				$('#identificador-visitante').val(dados.identificador)
				$('#cpf-visitante').val(dados.cpf)
				$('#cliente-visitante').val(dados.cliente_id)
				makeImg(dados.url_imagem)
			} else {
				limparCampos()
			}
		} else {
			if (dados) {
				$('#nome-acompanhante').val(dados.nome)
				$('#rg-acompanhante').val(dados.rg)
				$('#identificador-acompanhante').val(dados.identificador)
				$('#cpf-acompanhante').val(dados.cpf)
				$('#cliente-acompanhante').val(dados.cliente_id)
				makeImg(dados.url_imagem, true)
			} else {
				limparCampos()
			}
		}
	})
}

$('#sequencial').on('keypress', function (e) {
	if (e.which == 13) {
		$('#marcarSaidaSequencial').click()
	}
});

$('#marcarSaidaSequencial').on('click', function () {
	limpaError('#sequencialError')
	sequencial = $('#sequencial').val()
	if (!sequencial) {
		alertaErro('#sequencialError', 'O sequencial não pode estar vazio')
		return;
	}
	rota = urlMarcarSaidaSequencial.replace(':acessoId', sequencial)
	ajaxMarcarSaida(rota)
})

function limparCampos() {
	$('.limpar').val('').change()
	$('#image').html('');
	limpaError()
	$('#image-acompanhante').html('');
	$('#foto-visitante-img').attr('src', '')
	$('#foto-acompanhante-img').attr('src', '')
}

function ajaxDeleteLembrete(rota, lembreteId) {
	$.ajax({
		url: rota,
		method: 'get'
	}).done(function (response) {
		if (response.success) {
			toastr.success(response.success, 'SUCESSO')
			$('#lembrete_' + lembreteId).fadeOut(200)
			reloadTables()
		} else {
			toastr.error('Erro inesperado ao excluir lembrete', 'ATENÇÃO')
		}
	}).fail(response => toastr.error('Erro inesperado ao excluir lembrete', 'ATENÇÃO'))
}

function validaCpf(c) {
	c = c.replace(/[^a-z0-9]/gi, '')
	var i;
	s = c;
	var c = s.substr(0, 9);
	var dv = s.substr(9, 2);
	var d1 = 0;
	var v = false;

	for (i = 0; i < 9; i++) {
		d1 += c.charAt(i) * (10 - i);
	}
	if (d1 == 0) {

		v = true;
		return false;
	}
	d1 = 11 - (d1 % 11);
	if (d1 > 9) d1 = 0;
	if (dv.charAt(0) != d1) {

		v = true;
		return false;
	}

	d1 *= 2;
	for (i = 0; i < 9; i++) {
		d1 += c.charAt(i) * (11 - i);
	}
	d1 = 11 - (d1 % 11);
	if (d1 > 9) d1 = 0;
	if (dv.charAt(1) != d1) {

		v = true;
		return false;
	}
	if (!v) {
		return true
	}
}

function makeImg(src, acompanhante) {
	if (!acompanhante) {
		foto_visitante = src
		$('#foto-visitante-img').attr('src', src)
		$('#foto-visitante-img').width(90).height(90)
	} else {
		foto_acompanhante = src
		$('#foto-acompanhante-img').attr('src', src)
		$('#foto-acompanhante-img').width(90).height(90)
	}
}

function ajaxMarcarSaida(rota, acesso_id) {
	limpaError('#sequencialError')
	return $.ajax({
		url: rota,
		method: 'put'
	}).done((response) => {
		if (response) {
			reloadTables()
			$('#sequencial').val('')
			return toastr.success('Saída de Visitante marcada com sucesso', 'SUCESSO')
		}
		'Erro inesperado ao marcar saida de visitante'
		alertaErro('#sequencialError', message)
	}).fail(error => {
		message = error.responseJSON.msg || 'Erro inesperado ao marcar saida de visitante'
		alertaErro('#sequencialError', message)
		$('#sequencial').val('')
	})
}

function reloadTables() {
	tableAcessos.ajax.reload()
	tableHistorico.ajax.reload()
}

$('#buscar-historico').click(function () {
	tableHistorico.ajax.reload()
})

function makeTableHistorico() {
	tableHistorico = $('#table-historico').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		paging: true,
		orderable: true,
		searching: true,
		iDisplayLength: 10,
		retrieve: true,
		dom: 'lfBrtip<"links">',
		order: [
			[2, 'desc']
		],
		ajax: {
			"type": "GET",
			"url": urlBuscaHistorico,
			headers: {
				'X-CSRF-TOKEN': token
			},
			error: function (xhr, error, code) {
				makeTableHistorico()
			},
			data: function (d) {
				d.user = $('#usuario-historico').val()
				d.descricao = $('#descricao-historico').val()
				d.data = $('#data-historico').val()
			}
		},
		buttons: [{
			extend: 'csv',
			exportOptions: {
				columns: [0, 1, 2]
			}
		},
		{
			extend: 'pdf',
			exportOptions: {
				columns: [0, 1, 2]
			}
		},
			'colvis'
		],
		columns: [{
			data: 'user',
			name: 'user',
			searchable: true,

		},
		{
			data: 'descricao',
			name: 'descricao',
			searchable: true,
		},
		{
			className: 'dt-control text-center',
			data: 'created_at',
			name: 'created_at',
			searchable: true,
		},
		],
		createdRow: function (row, data, dataIndex) {
			$(row).attr('data-entry-id', data.id);
		},
		language: languageDataTables
	}).draw();
}

function makeTableAcessos() {
	tableAcessos = $('#table-acessos').DataTable({
		responsive: true,
		processing: true,
		serverSide: true,
		paging: true,
		orderable: true,
		searching: true,
		iDisplayLength: 10,
		retrieve: true,
		scrollCollapse: true,
		dom: 'lfBrtip<"links">',
		order: [
			[0, 'desc']
		],
		ajax: {
			"type": "GET",
			"url": urlBuscaAcessos,
			headers: {
				'X-CSRF-TOKEN': token,
			},
			error: function (xhr, error, code) {
				makeTableAcessos()
			}
		},
		buttons: [{
			extend: 'csv',
			exportOptions: {
				columns: [0, 1, 2, 3, 4, 5]
			}
		},
		{
			extend: 'pdf',
			exportOptions: {
				columns: [0, 1, 2, 3, 4, 5]
			}
		},
			'colvis'
		],
		columns: [
			{
				className: 'dt-control text-center',
				data: 'id',
				name: 'id',
				searchable: true,
			},
			{
				data: 'visitante',
				name: 'visitante',
				searchable: true,
			},
			{
				data: 'setor',
				name: 'setor',
				searchable: true,
			},
			{
				className: 'dt-control text-center',
				data: 'entrou_as',
				name: 'entrou_as',
				searchable: true,
			},
			{
				className: 'dt-control text-center',
				data: 'saiu_as',
				name: 'saiu_as',
				searchable: true,
			},
			{
				data: 'responsavel',
				name: 'responsavel',
				searchable: true,
			},
			{
				data: 'acoes',
				name: 'acoes',
				searchable: true,
			},

		],
		createdRow: function (row, data, dataIndex) {
			$(row).attr('data-entry-id', data.id);
		},
		language: languageDataTables
	}).draw();
}

// função para a camera
(function () {
	const video = document.querySelector("#video");
	const canvas = document.querySelector("#canvas");
	const btnScreenshot = document.querySelector("#btnScreenshot");
	const constraints = {
		video: {
			width: {
				min: 200,
				ideal: 200,
				max: 200,
			},
			height: {
				min: 200,
				ideal: 200,
				max: 200,
			},
		},

	};
	let useFrontCamera = true;
	let videoStream;
	btnScreenshot.addEventListener("click", function () {
		canvas.width = video.videoWidth;
		canvas.height = video.videoHeight;
		canvas.getContext("2d").drawImage(video, 0, 0);
		base64 = canvas.toDataURL("image/png");
		makeImg(base64)
	});
	const video2 = document.querySelector("#video-acompanhante");
	const btnScreenshot2 = document.querySelector("#btnScreenshotAcompanhante");
	let videoStream2;
	btnScreenshot2.addEventListener("click", function () {
		canvas.width = video2.videoWidth;
		canvas.height = video2.videoHeight;
		canvas.getContext("2d").drawImage(video2, 0, 0);
		base64 = canvas.toDataURL("image/png");
		makeImg(base64, true)
	});
	async function initializeCamera() {
		constraints.video.facingMode = useFrontCamera ? "user" : "environment";
		videoStream = await navigator.mediaDevices.getUserMedia(constraints, (success) => console.log(success), (error) => console.log(error));
		video.srcObject = videoStream;

		videoStream2 = await navigator.mediaDevices.getUserMedia(constraints);
		video2.srcObject = videoStream2;
	}
	initializeCamera();
})();

$('#fixo').change(function () {
	if ($('#fixo').is(':checked')) {
		$('.divData').addClass('d-none')
		$('#data_inicial').val('')
		$('#data_final').val('')
	}
	else {
		$('.divData').removeClass('d-none')
	}
})

$(document).on('click', '.verImprimirEtiqueta', function () {
	$('#verEtiquetaForm').attr('action', $(this).attr('data-rota'))
	$('#verEtiquetaForm').submit()
})

$('.focusVisitante').on('keypress', function (e) {
	if (e.which == 13) {
		$('#buscaFiliado').click()
	}
});
$('.focusAcompanhante').on('keypress', function (e) {
	if (e.which == 13) {
		$('#buscaAcompanhante').click()
	}
});
