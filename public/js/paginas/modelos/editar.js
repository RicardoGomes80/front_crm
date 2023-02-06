$(document).ready(function() {
    if ($('.checkbox-email').prop('checked') == true) { $('.email').fadeIn(500).removeClass('d-none'); }
    if ($('.checkbox-sms').prop('checked') == true) { $('.sms').fadeIn(500).removeClass('d-none'); }
    if ($('.checkbox-push').prop('checked') == true) { $('.push').fadeIn(500).removeClass('d-none'); }
    $('.checkbox').change(function() {
        isChecked = $(this).prop('checked');
        target = $(this).attr('target');
        if (isChecked == true) {
            $('.' + target).hide();
            $('.' + target).removeClass('d-none');
            $('.' + target).fadeIn(500)
            $('.conteudo_' + target).attr("required", "");
        } else {
            $('.' + target).addClass('d-none');
            $('.' + target).fadeOut(500);
            $('.conteudo_' + target).removeAttr("required");
        }
    })
    $('#divComunicacao').fadeOut(200)

    setTimeout(() => {
        $('.select-tipo').select2({
            placeholder: "Selecione o tipo",
            containerCssClass: "form-control",
            width: '100%',
            theme: "bootstrap4",
        });
        validaTipo();
    }, 300)

    CKEDITOR.replaceAll('CKEDITOR');
    CKEDITOR.config.extraPlugins = 'autogrow,uploadimage';
    CKEDITOR.config.filebrowserUploadUrl = rotaUploadImagem;
    CKEDITOR.config.autoGrow_onStartup = true;
    CKEDITOR.config.image_previewText = ' ';
    CKEDITOR.config.htmlEncodeOutput = false;
    CKEDITOR.config.entities = false;
    CKEDITOR.config.height = '600px';
    
    for (instance in CKEDITOR.instances){
        CKEDITOR.instances[instance].on('fileUploadRequest', function(evt) {
            var fileLoader = evt.data.fileLoader;
            xhr = fileLoader.xhr;
            xhr.open('POST', fileLoader.uploadUrl, true);

            formData = new FormData();
            formData.append('_token',csrf_token);
            formData.append('upload',fileLoader.file, fileLoader.fileName);
            fileLoader.xhr.send( formData );
            xhr.responseType = 'json';
            evt.stop();
        });   
        
        CKEDITOR.instances[instance].on("fileUploadResponse", function(evt) {
            evt.stop();
            window.alert = function() {};
            var data = evt.data;
                xhr = data.fileLoader.xhr;
                response = xhr.response;
                window.toastr.clear()
                if ( response.error ) {
                    window.toastr.error(response.error.message ?? 'Não foi possível realizar o upload da imagem. Tente novamente.', 'ATENÇÃO');
                    evt.cancel();
                } else {                
                    data.url = response.url;
                    data.fileName = response.fileName;
                    window.toastr.success('Envio Concluído.', 'SUCESSO');
                }
        });
    }
    


});

$("#tipo_id").on('change', function() {
    return validaTipo(true);
})

function validaTipo(isChange) {
    tipo = $("#tipo_id option:selected").text();
    if (tipo == 'CERTIFICADO') {
        $('#divCertificados').removeClass('d-none')
        $('#divCertificados').fadeIn(200)

        if (isChange) {
            $.each(CKEDITOR.instances, function(key, data) {
                data.setData('')
            })
        }
        $('#divParticipacoes').addClass('d-none')
        $('#divComunicacao').addClass('d-none')
        $('#instance').val('html_frente_certificado')

    } else if (tipo == 'COMPROVANTE DE PARTICIPAÇÃO') {
        $('#divParticipacoes').removeClass('d-none')
        $('#divParticipacoes').fadeIn(200)

        if (isChange) {
            $.each(CKEDITOR.instances, function(key, data) {
                data.setData('')
            })
        }
        $('#divCertificados').addClass('d-none')
        $('#divComunicacao').addClass('d-none')
        $('#instance').val('html_frente_participacoes')

    } else if (tipo == 'COMUNICAÇÃO') {
        $('#divComunicacao').removeClass('d-none')
        $('#divComunicacao').fadeIn(200)

        if (isChange) {
            $.each(CKEDITOR.instances, function(key, data) {
                data.setData('')
            })
        }
        $('#divParticipacoes').addClass('d-none')
        $('#divCertificados').addClass('d-none')
    }
}