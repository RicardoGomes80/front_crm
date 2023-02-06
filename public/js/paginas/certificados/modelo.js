$(document).ready(function() {
	CKEDITOR.config.height='600px';
	editor = CKEDITOR.replaceAll('CKEDITOR');
}); 
$('.nav-link').click(function () { 
	href = $(this).attr('href');
	for ( instance in CKEDITOR.instances ){
		CKEDITOR.instances[instance].updateElement();
	}
});

$('.btn-preview').click(function() {
	error = valida_form()
	if(error == 0){
		$( "#form" ).submit();
		$('.preview-modal').modal('show');
	}
})

$('.btn-gravar-certificado').click(function() {
	$( "#form" ).attr('action', route_gravar)
	$( "#form" ).attr('target',"");

	error = valida_form()
	if(error == 0){
		$( "#form" ).submit();
	}
})

function valida_form(){
	error = 0;
	for ( instance in CKEDITOR.instances ){
		CKEDITOR.instances[instance].updateElement();
	}
	frente_certificado = $('[name="frente_certificado"]').val()
	verso_certificado =	$('[name="verso_certificado"]').val()
	if(!(frente_certificado.length>0)){
		alert("É Preciso que um seja preenchido o conteúdo do frente_certificado. ");
		error = 1;
	}
	if(!(verso_certificado.length>0)){
		alert("É Preciso que um seja preenchido o conteúdo do verso_certificado. ");
		error = 1;
	}
	return error
}