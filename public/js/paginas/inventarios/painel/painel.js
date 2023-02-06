function adiionaDadosAoChart(data) {
	arrayCount = []
	arrayNomes = []
	$.each(data, function (index, value) {
		arrayCount.push(value.count_tipo)
		arrayNomes.push(value.nome)
	})
	var configChart = {
		type: "doughnut",
		data: {
			datasets: [{
				data: arrayCount,
				backgroundColor: [
					chartColors.purple,
					chartColors.green,
					chartColors.white,
					chartColors.red,
					chartColors.yellow,
					chartColors.blue,
				],
				label: "Gráfico",
			},],
			labels: arrayNomes
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			title: {
				display: false,
				text: "Grafico",
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};

	if (arrayCount.length !== 0) {
		var ctx333 = document.getElementById("graficoPorCentroDeCusto").getContext("2d");
		window.myDoughnut = new Chart(ctx333, configChart);
	}
}

function adicionaDadosAoChart2(data) {
	arrayCount = []
	arrayNomes = []
	$.each(data, function (index, value) {
		arrayCount.push(value.count_status)
		arrayNomes.push(value.status_item)
	})

	var configChart = {
		type: "doughnut",
		data: {
			datasets: [{
				data: arrayCount,
				backgroundColor: [
					chartColors.purple,
					chartColors.green,
					chartColors.white,
					chartColors.red,
					chartColors.yellow,
					chartColors.blue,
				],
				label: "Gráfico",
			},],
			labels: arrayNomes
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			title: {
				display: false,
				text: "Grafico",
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};

	if (arrayCount.length !== 0) {
		var ctx333 = document.getElementById("graficoPorCentroDeCusto2").getContext("2d");
		window.myDoughnut = new Chart(ctx333, configChart);
	}

}

function adicionaDadosAoChart3(data) {
	arrayCount = []
	arrayNomes = []
	$.each(data, function (index, value) {
		arrayCount.push(value.count_fabricante)
		arrayNomes.push(value.nome)
	})
	var configChart = {
		type: "doughnut",
		data: {
			datasets: [{
				data: arrayCount,
				backgroundColor: [
					chartColors.purple,
					chartColors.green,
					chartColors.white,
					chartColors.red,
					chartColors.yellow,
					chartColors.blue,
				],
				label: "Gráfico",
			},],
			labels: arrayNomes
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			title: {
				display: false,
				text: "Grafico",
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};

	if (arrayCount.length !== 0) {
		var ctx333 = document.getElementById("graficoPorCentroDeCusto3").getContext("2d");
		window.myDoughnut = new Chart(ctx333, configChart);
	}
}

function adicionaDadosAoChart4(data) {
	arrayCount = []
	arrayNomes = []
	$.each(data, function (index, value) {
		arrayCount.push(value.count_marca)
		arrayNomes.push(value.marca)
	})
	var configChart = {
		type: "doughnut",
		data: {
			datasets: [{
				data: arrayCount,
				backgroundColor: [
					chartColors.purple,
					chartColors.green,
					chartColors.white,
					chartColors.red,
					chartColors.yellow,
					chartColors.blue,
				],
				label: "Gráfico",
			},],
			labels: arrayNomes
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			title: {
				display: false,
				text: "Grafico",
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};

	if (arrayCount.length !== 0) {
		var ctx333 = document.getElementById("graficoPorCentroDeCusto4").getContext("2d");
		window.myDoughnut = new Chart(ctx333, configChart);
	}

}

$('#select').on('change', function () {
	limpaCharts()
	centroDeCustoId = $(this).val()
	return getDadosForCentroDeCusto(centroDeCustoId);
})

function getDadosForCentroDeCusto(centroDeCustoId) {
	if (centroDeCustoId == 'todos') centroDeCustoId = '';
	$.ajax({
		url: getDadosCentroDeCustoRoute,
		data: {
			centro_de_custo_id: centroDeCustoId
		},
		method: 'get'
	}).done(function (response) {

		if (response['centro'])
			$('#nomeCentroDashboard').html(response['centro'].nome)
		else $('#nomeCentroDashboard').html('Todos')
		$('#totalDeitensDinamico').html(response['totalDeItens'])
		$('#itensHojeDinamico').html(response['adicionadosHoje'])
		$('#totalAnotacoes').html(response['totalDeAnotacoes'])
		$('#totalDeItens').html(response['totalDeItens'])
		$('#itensAdicionadosHoje').html(response['adicionadosHoje'])
		$('#anotacoesDeHoje').html(response['anotacoesDeHoje'])
		if (!response) {
			return;
		}
		adiionaDadosAoChart(response['charts'])
		adicionaDadosAoChart2(response['charts2'])
		adicionaDadosAoChart3(response['charts3'])
		adicionaDadosAoChart4(response['charts4'])

	})
}

function limpaCharts() {
	$('#clearChart').html(`<canvas id="graficoPorCentroDeCusto"
    style="display: block; width: 558px; height: 260px;"
    width="258" height="150" class="chartjs-render-monitor"></canvas>`)
	$('#clearChart2').html(`<canvas id="graficoPorCentroDeCusto2"
    style="display: block; width: 558px; height: 260px;"
    width="258" height="150" class="chartjs-render-monitor"></canvas>`)
	$('#clearChart3').html(`<canvas id="graficoPorCentroDeCusto3"
    style="display: block; width: 558px; height: 260px;"
    width="258" height="150" class="chartjs-render-monitor"></canvas>`)
	$('#clearChart4').html(`<canvas id="graficoPorCentroDeCusto4"
    style="display: block; width: 558px; height: 260px;"
    width="258" height="150" class="chartjs-render-monitor"></canvas>`)
}