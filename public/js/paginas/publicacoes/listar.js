$(document).ready(function() {
	$(document).on('click', '.pdf_iframe', function(event) {
		html = '<div style="position: absolute; margin-left: 27%; margin-top: 10%;; z-index: 1;"><div><img  src="./../../images/carregando.gif"></div></div>'
		$('[name="pdf_iframe"]').contents().find("body").html(html);
		$('[name="pdf_iframe"]').contents().find("body").css("background", "white");
		$('.modal-fullscreen').modal('show');
	});

	var startDate = $('[name="startDate"]').val();  
	var endDate = $('[name="endDate"]').val();  

	$('input[name="daterange-created"]').daterangepicker({
		locale: {
			format: "DD/MM/yyyy",
			applyLabel: "Aplicar",
			cancelLabel: "Cancelar",
			daysOfWeek: ["Dom","Seg","Ter","Qua","Qui","Sex","Sab"],
			monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
			firstDay: 1
		},
		timePicker: false,
		buttonClasses: "btn btn-success",
		cancelClass: "btn-link bg-transparent rm-border text-danger",
		opens: "center",
		drops: "up",
		startDate: startDate,
		endDate: endDate,
	});
});

$(document).ready(() => {
	$(".multiselect-dropdown").select2({
		theme: "bootstrap4",
	});
});
