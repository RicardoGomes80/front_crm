ano = new Date().getFullYear()

$('.tab-filiados').on('click', function () {
	return makeChartFiliados()
});

$('#botaoBuscarFiliacoes').on('click', function () {
	return chartFiliacoes()
})

$('#botaoBuscarDesfiliacoes').on('click', function () {
	return chartDesfiliacoes()
})

$('.tab-desfiliacoes').on('click', function () {
	return chartDesfiliacoes()
});
$('.minimal-tab-btn-2').on('click', function () {
	return chartFiliacoes()
});

function makeChartFiliados() {
	$.ajax({
		url: buscaDadosFiliadoRoute,
		method: 'get'
	}).done((response) => {

		var ctx33 = document.getElementById("dadosPainelFiliados").getContext("2d");
		window.myDoughnut = new Chart(ctx33, makeObjectFiliados(response));
	})
}

function makeObjectFiliados(response) {
	arrayStatus = [];
	arrayDados = [];
	$.each(response, function (index, value) {
		arrayStatus.push(value.mes);
		arrayDados.push(value.filiados)
	})
	return {
		type: "doughnut",
		data: {
			datasets: [
				{
					data: arrayDados,
					backgroundColor: cores,
					label: "Filiados",
				},
			],
			labels: arrayStatus,
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: true,
			},
			title: {
				display: true,
				text: "FILIADOS EM " + ano + " - TOTAL: " + $('#filiadosAno').val() ?? 0,
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};
}

function chartFiliacoes() {
	periodo = $('#dataFiltroFiliacoes').val()
	if (!periodo) return toastr.error('É preiso prencher a data', 'ATENÇÃO')
	$.ajax({
		url: buscaDadosFiliacoesRoute,
		data: {
			periodo: periodo,
		},
		method: 'get'
	}).done((response) => {
		$('#chart-filiacoes').html('')
		$('#countFiliacoes').html(response['total'])
		new ApexCharts(
			document.querySelector("#chart-filiacoes"),
			makeObjetoChart('Filiados', response['chart'])
		).render();

	}).fail(function () {
		toastr.error('Erro ao gerar gráfico', 'ATENÇÃO')
	})
}

function chartDesfiliacoes() {
	periodo = $('#dataFiltroDesfiliacoes').val()
	if (!periodo) return toastr.error('É preiso prencher a data', 'ATENÇÃO')
	$.ajax({
		url: buscaDadosDesfiliacoesRoute,
		data: {
			periodo: periodo,
		},
		method: 'get'
	}).done((response) => {
		$('#chart-desfiliacoes').html('')
		$('#countDesfilacoes').html(response['total'])
		new ApexCharts(
			document.querySelector("#chart-desfiliacoes"),
			makeObjetoChart('Desfiliados', response['chart'])
		).render();

	}).fail(function () {
		toastr.error('Erro ao gerar gráfico', 'ATENÇÃO')
	})
}


function makeObjetoChart(texto, dados) {
	arrayMeses = [];
	arrayDados = [];
	$.each(dados, function (index, value) {
		arrayMeses.push(index)
		arrayDados.push(value)
	})
	return {
		chart: {
			height: 300,
			type: 'line',
			toolbar: {
				show: false,
			},
		},
		series: [{
			name: texto,
			type: 'column',
			data: arrayDados,
		}],
		stroke: {
			width: [0, 4]
		},
		labels: arrayMeses,
		xaxis: {
			type: 'text'
		},
		yaxis: [{
			title: {
				text: texto + ' no Período',
			},
			labels: {
				formatter: function (val) {
					return val.toFixed(0);
				}
			}
		}]
	};
}