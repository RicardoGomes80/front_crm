cores = ['#063970', '#eab676', '#eeeee4', '#873e23', '#1a1602', '#ff00e6', '#807777', '##b4f52a', '#09ebd0', '#7d9ed4', '#154aa1', '#8dc272']

$(document).ready(function () {
	buscaDadosGraficoPizza(eleicao_id)
})

function buscaDadosGraficoPizza(eleicao_id) {
	return $.ajax({
		url: graficoDePizzaRoute,
		data: {
			eleicao_id: eleicao_id
		},
		method: 'get'
	}).done((response) => {
		arrayCandidatoNome = []
		arrayCandidatoVotos = []
		$.each(response, (index, data) => {
			arrayCandidatoNome.push(data.candidato)
			arrayCandidatoVotos.push(data.votos)
		})
		return geraGrafico(arrayCandidatoNome, arrayCandidatoVotos)
	})
}

function geraGrafico(arrayCandidatoNome, arrayCandidatoVotos) {
	var configDoughnut2 = {
		type: "doughnut",
		data: {
			datasets: [{
				data: arrayCandidatoVotos,
				backgroundColor: cores,
				label: "Gráfico",
			},],
			labels: arrayCandidatoNome,
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			title: {
				display: false,
				text: "Grafico de pizza",
			},
			animation: {
				animateScale: true,
				animateRotate: true,
			},
		},
	};
	var ctx33 = document.getElementById("graficoPizza").getContext("2d");
	window.myDoughnut = new Chart(ctx33, configDoughnut2);
}