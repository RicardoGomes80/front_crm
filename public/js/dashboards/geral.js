chartColors = {
	blue: "#007bff",
	red: "#dc3545",
	orange: "#fd7e14",
	yellow: "#ffc107",
	green: "#28a745",
	purple: "#6f42c1",
	grey: "#6c757d",
	pink: "#fc03b1",
	green2: "#398241",
	marrom: '#d66e2d',
	azulBB: '#19b0e3',
	roxo: '#400382',
};

cores = [
	"#007bff",
	"#dc3545",
	"#fd7e14",
	"#ffc107",
	"#28a745",
	"#6f42c1",
	"#6c757d",
	"#fc03b1",
	"#398241",
	'#d66e2d',
	'#19b0e3',
	'#400382',
	'#fcba03',
	'#41b4d1',
	'#0052d6',
	'#ff00aa'
]


$(document).ready(function (event) {

	$('.datepicker').datepicker({
		language: 'pt-BR'
	})
	chartFiliacoes()
	chartDesfiliacoes()
	getDadosForCentroDeCusto('', event);
	$('#select').select2({
		placeholder: "Escolha uma opção",
		containerCssClass: "form-control",
		width: '100%',
		theme: "bootstrap4",
	});

	$('.daterange-centered').daterangepicker({
		timePicker: true,
		buttonClasses: "btn btn-success",
		cancelClass: "btn-link bg-transparent rm-border text-danger",
		opens: "center",
		drops: "up",
		"locale": {
			"format": "DD/MM/YYYY",
			"separator": " - ",
			"applyLabel": "Aplicar",
			"cancelLabel": "Cancelar",
			"fromLabel": "De",
			"toLabel": "Até",
			"customRangeLabel": "Custom",
			"daysOfWeek": [
				"Dom",
				"Seg",
				"Ter",
				"Qua",
				"Qui",
				"Sex",
				"Sáb"
			],
			"monthNames": [
				"Janeiro",
				"Fevereiro",
				"Março",
				"Abril",
				"Maio",
				"Junho",
				"Julho",
				"Agosto",
				"Setembro",
				"Outubro",
				"Novembro",
				"Dezembro"
			],
			"firstDay": 0
		}
	});
})

function validarData(data) {
	var valido = false;
	var dia = data.split("/")[0];
	var mes = data.split("/")[1];
	var ano = data.split("/")[2];
	var MyData = new Date(ano, mes - 1, dia);
	if ((MyData.getMonth() + 1 != mes) || (MyData.getDate() != dia) || (MyData.getFullYear() != ano))
		valido = false
	else
		valido = true;
	return valido;
}

var formatter = new Intl.NumberFormat('pt-BR', {
	style: 'currency',
	currency: 'BRL',
});


