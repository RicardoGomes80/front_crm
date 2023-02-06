$(document).ready(function () {

	$.ajax({
		url: getDadosChamadosCategoriaRoute,
		method: 'get'
	}).done((response) => {
		arrayStatus = [];
		arrayDados = [];
		$.each(response, function (index, value) {
			arrayStatus.push(value.descricao);
			arrayDados.push(value.chamados)
		})
		var configPizzaChamados = {
			type: "doughnut",
			data: {
				datasets: [
					{
						data: arrayDados,
						backgroundColor: [

							chartColors.blue,
							chartColors.red,
							chartColors.orange,
							chartColors.yellow,
							chartColors.purple,
							chartColors.grey,
							chartColors.pink,
							chartColors.green2,
							chartColors.marrom,
							chartColors.azulBB,
							chartColors.roxo,

						],
						label: "Chamados",
					},
				],
				labels: arrayStatus,
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				title: {
					display: false,
					text: "Chamados",
				},
				animation: {
					animateScale: true,
					animateRotate: true,
				},
			},
		};
		var ctx33 = document.getElementById("dadosChamadosCategoria").getContext("2d");
		window.myDoughnut = new Chart(ctx33, configPizzaChamados);
	});


	$.ajax({
		url: getDadosChamadosTMCategoriaRoute,
		method: 'get'
	}).done((response) => {
		arrayStatus = [];
		arrayDados = [];
		$.each(response, function (index, value) {
			arrayStatus.push(value.descricao);
			arrayDados.push(Math.round(value.tempo_medio / value.contagem))
		})
		var configPizzaChamados = {
			type: "doughnut",
			data: {
				datasets: [
					{
						data: arrayDados,
						backgroundColor: [
							chartColors.blue,
							chartColors.red,
							chartColors.orange,
							chartColors.yellow,
							chartColors.purple,
							chartColors.grey,
							chartColors.pink,
							chartColors.green2,
							chartColors.marrom,
							chartColors.azulBB,
							chartColors.roxo,

						],
						label: "Chamados",
					},
				],
				labels: arrayStatus,
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				title: {
					display: false,
					text: "Chamados",
				},
				animation: {
					animateScale: true,
					animateRotate: true,
				},
			},
		};
		var ctx33 = document.getElementById("dadosChamadosTempoMedioPorCategoria").getContext("2d");
		window.myDoughnut = new Chart(ctx33, configPizzaChamados);
	});
})