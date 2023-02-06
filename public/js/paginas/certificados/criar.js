$(document).ready(function() {
	$(".form-dropzone").hide();
	CKEDITOR.config.height='600px';
	CKEDITOR.config.autoGrow_onStartup = true;
	CKEDITOR.config.image_previewText = ' ';
	CKEDITOR.config.htmlEncodeOutput = false;
	CKEDITOR.config.entities = false;
	editor = CKEDITOR.replaceAll('CKEDITOR');
}); 
$('.nav-link').click(function () { 
	href = $(this).attr('href');
	for ( instance in CKEDITOR.instances ){
		CKEDITOR.instances[instance].updateElement();
	}
	if(href == '#tab-eg9-2'){
		frente_certificado = $('#frente_certificado').val();
		verso_certificado = $('#verso_certificado').val();
		if (~frente_certificado.indexOf("{NOME}") || ~frente_certificado.indexOf("{nome}") ){
			$(".form-dropzone").show();
			$(".form-email").hide();
			$('.btn-gerarPdf').hide();
		}
		else{
			$(".form-dropzone").hide();
			$('.btn-gerarPdf').show();
			$(".form-email").show();
		}
	}
});

Dropzone.autoDiscover = false;
setTimeout(function(){ 
	$("div#dropzone").dropzone({ 
		acceptedFiles :'.ods,.xls,.xlsx',
		addRemoveLinks: true,
		method: "post", 
		url: route_import_file,
		headers: {'X-CSRF-Token': $('input[name="csrf-token"]').val()},
		init: function() {
			this.on("success", function(file, response) {
				$('[name="tipo"]').val('lote')
				$('.btn-gerarPdf').show();
			})
		}
	});
}, 10);

$('.btn-gerarPdf').click(function() {
	for ( instance in CKEDITOR.instances ){
		CKEDITOR.instances[instance].updateElement();
	}
	frente_certificado = $('#frente_certificado').val();
	verso_certificado = $('#verso_certificado').val();

	n = Math.floor(Math.random() * 1000);
	var md5 = $.md5(n);
	md5 = md5.substr(1, 6)
	md5 = md5.toUpperCase();
	dt = new Date();
	dia = String(dt. getDate()). padStart(2, '0');
	mes = String(dt. getMonth() + 1). padStart(2, '0');
	md5 = dt.getFullYear() + '-' + md5 + '-' + dia  + '' + mes
	$('[name="codigo"]').val(md5)
	$('[name="action"]').val('gravar')

	tipo = $('[name="tipo"]').val();
	if(tipo == ''){
		$('[name="tipo"]').val('simples')
	}
	$("#form" ).removeAttr('target');		
	$("#form" ).submit();
	});

$('.btn-preview').click(function() {
	error = 0;

	for ( instance in CKEDITOR.instances ){
		CKEDITOR.instances[instance].updateElement();
	}
	frente_certificado = $('#frente_certificado').val();
	verso_certificado = $('#verso_certificado').val();

	if(!(frente_certificado.length>0)){
		alert("É Preciso que um seja preenchido o conteúdo da frente do Certificado. ");
		error = 1;
	}
	if(!(verso_certificado.length>0)){
		alert("É Preciso que um seja preenchido o conteúdo do verso do Certificado. ");
		error = 1;
	}
	if(error == 0){
		$('[name="codigo"]').val('')
		$('[name="action"]').val('preview')
		$( "#form" ).submit();
		$('.preview-modal').modal('show');
	}
})