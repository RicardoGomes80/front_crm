$(document).on('click', '.sendResetBtn', function () {
	rota = $(this).attr('data-href')
	Swal.fire({
		title: 'ATENÇÃO',
		text: 'Deseja mesmo enviar o email de redefinição de senha?',
		icon: 'question',
		iconColor: "#ff6f6f",
		showCancelButton: true,
		confirmButtonText: 'SIM',
		cancelButtonText: 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel: true
	}).then(function (actions) {
		if (actions.isConfirmed != true) {
			return false;
		}
		$.ajax({
			url: rota,
			method: 'get'
		}).done((response) => {
			if (response['type'] == 'error') {
				toastr.error(response['msg'], 'ATENÇÃO');
			}
			if (response['type'] == 'warning') {
				toastr.warning(response['msg'], 'ATENÇÃO');
			}
			if (response['type'] == 'success') {
				toastr.success(response['msg'], 'SUCESSO');
			}
		}).fail(error => toastr.error('Erro inesperado ao enviar email', 'ATENÇÃO'))
	});
})

$(document).on('click', '.notificaSemEmail', function () {
	toastr.warning('Este filiado não tem emails cadastrados', 'ATENÇÃO')
})

function makeTableCliente() {
	queryString = ''
	var url = window.location.href
	if (url.includes('?')) {
		queryString = url.substring(url.lastIndexOf("?") + 1) ?? ''
	}
	if (queryString) {

		clientes = $('#table').DataTable({
			processing: true,
			serverSide: true,
			paging: true,
			orderable: true,
			searching: true,
			iDisplayLength: 10,
			retrieve: true,
			dom: 'lfBrtip<"links">',
			order: [
				[0, 'asc']
			],
			initComplete: function (settings, json) {
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				})
			},
			ajax: {
				"type": "POST",
				"url": rotaCliente + queryString,
				headers: {
					'X-CSRF-TOKEN': token
				},
				error: function (xhr, error, code) {
					makeTableCliente()
				}
			},
			buttons: [{
				extend: 'csv',
				exportOptions: {
					columns: [0, 1, 2, 3, 4]
				}
			},
			{
				extend: 'pdf',
				exportOptions: {
					columns: [0, 1, 2, 3, 4]
				}
			},
				'colvis'
			],
			columns: [{
				data: null,
				searchable: true,
				name: 'identificador',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.identificador
						html += "</a>"
					} else {
						html += data.identificador
					}

					return html
				}
			},
			{
				data: null,
				name: 'nome',
				searchable: true,
				className: "text-left",
				name: 'identificador',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.nome
						html += "</a>"
					} else {
						html += data.nome
					}

					return html
				}
			},
			{
				data: null,
				searchable: true,
				name: 'rg',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.rg
						html += "</a>"
					} else {
						html += data.rg
					}

					return html
				}
			},
			{
				data: null,
				searchable: true,
				name: 'nascimento',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.nascimento
						html += "</a>"
					} else {
						html += data.nascimento
					}

					return html
				}
			},
			{
				data: null,
				searchable: true,
				name: 'telefone',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.telefone ?? 'NÃO CADASTRADO'
						html += "</a>"
					} else {
						html += data.telefone
					}

					return html
				}
			},
			{
				data: null,
				searchable: true,
				name: 'created_at',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += data.data_cadastro
						html += "</a>"
					} else {
						html += data.data_cadastro
					}
					return html
				}
			},
			{
				data: null,
				searchable: true,
				orderable: false,
				name: 'situacao',
				render: function (data, type, row) {
					html = '';
					if (data.link_continuar) {

						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn  " data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro" style="width: 100%;">`
						html += '<span class="badge '
						html += data.badge + '">'
						html += data.situacao
						html += "</a>"
					} else {
						html += data.situacao
					}
					return html
				}
			},
			{
				data: null,
				searchable: false,
				name: 'acoes',
				sortable: false,
				render: function (data, type, row) {
					html = ''
					if (data.link_continuar) {
						html += `<a  href="` + data.link_continuar + `"  type="button" class=" mr-2 btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine" data-toggle="tooltip" data-placement="top" title="Editar cadastro" data-original-title="Editar cadastro">
				<i class="pe-7s-note btn-icon-wrapper text-primary font-size-xlg"></i>
				</a>`
					}
					if (data.link_editar) {
						html += `<a href="` + data.link_editar + `" type="button" class="pl-2 pr-0  btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine" data-toggle="tooltip" data-placement="top" title="Visualizar Cadastro" data-original-title="Visualizar Cadastro">
				<i class="lnr-eye icon-gradient bg-premium-dark btn-icon-wrapper text-info font-size-xlg"></i>
				</a>`
					}
					if (data.link_gerar_ficha) {
						html += `<a href="` + data.link_gerar_ficha + `" target="_blank" type="button" class="pl-2 pr-0 btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine" data-toggle="tooltip" data-placement="top" title="Visualizar ficha do filiado" data-original-title="Visualizar ficha do filiado">
				<i class="fa fa-print btn-icon-wrapper text-info font-size-xlg"></i>
				</a>`
					}
					if (data.link_enviar_reset) {
						html += `<button data-href="` + data.link_enviar_reset + `"  type="button" class="pl-2 pr-0 btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine sendResetBtn" data-toggle="tooltip" data-placement="top" title="Enviar Email de Redefinição de senha" data-original-title="Enviar Email de Redefinição de senha">
				<i class="fa fa-paper-plane btn-icon-wrapper text-info font-size-xlg"></i>
				</button>`
					}
					return html;
				},
			},
			],
			createdRow: function (row, data, dataIndex) {
				$(row).attr('data-entry-id', data.id);
			},
			language: languageDatatables
		}).draw();
	}
}