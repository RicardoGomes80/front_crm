$(document).ready(() => {
	setTimeout(function () {
		$("#reset-btn").click();
	}, 500);

	$("#smartwizard").smartWizard({
		selected: 0,
		transitionEffect: "fade",
		toolbarSettings: {
			toolbarPosition: "none",
		}
	});

	$("#prev-btn").on("click", function () {
		$('.hidden-tabs').removeClass('d-none')
		$("#smartwizard").smartWizard("prev");
		return true;
	});

	$("#reset-btn").on("click", function () {
		$('.hidden-tabs').removeClass('d-none')
		$("#smartwizard").smartWizard("reset");
		return true;
	});

	$("#next-btn").on("click", function () {
		$('.hidden-tabs').removeClass('d-none')	
		$("#smartwizard").smartWizard("next");
		return true;
	});

	$("#link-step-1,#link-step-2,#link-step-3,#link-step-4").on("click", function () {
		id = $(this).attr('id')
		$('#link-'+id).parent().removeClass('done')
		$('#link-'+id).parent().removeClass('invalid')
		$('#link-'+id).parent().addClass('active')
	});
});