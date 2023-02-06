$(document).ready(function() {
	$('.btn-tag').click(function() {
		text = $(this).text();
		instance = $('#instance').val();
		contexto = CKEDITOR.instances[instance].getData();
		CKEDITOR.instances[instance].setData(contexto+' '+text)
	})

	$('.tab-click').click(function(e) {
		href = $(this).find('.nav-link').attr('href');

		if(href == '#tabParticipacoes1' ){
			$('#instance').val('html_frente_participacoes')

		}
		if(href == '#tabParticipacoes2' ){
			$('#instance').val('html_verso_participacoes')
		}

		if(href == '#tab-eg9-0' ){
			$('#instance').val('html_frente_certificado')
		}
		if(href == '#tab-eg9-1' ){
			$('#instance').val('html_verso_certificado')
		}
	})
})