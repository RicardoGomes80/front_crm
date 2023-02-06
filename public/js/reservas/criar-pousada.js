$(document).ready(function() {    
    var ativarTab = $('a.custom-tab[data-toggle=tab][data-active="1"]');
    
    if (ativarTab.length) {
        ativarTab.trigger('click');
    } else {
        $('a.custom-tab[data-toggle=tab]').first().trigger('click');
    }

    if (setToAstr) {
        toastr[alertType](alertMessage, alertTitle)
    }

    $('.set-select2').select2({
        placeholder: "Escolha uma opção",
        containerCssClass : "form-control",
        width: '100%',
        theme: "bootstrap4",
        escapeMarkup: function(m) {
            return m;
        }
    });

    $('#cep').mask('99999-999', {reverse: true});

    function limpaEndereco() {
        $("#endereco").val('');
        $("#cidade").val('');
        $("#estado_sigla").val('').change();
        $("#bairro").val('');
    }


    $("#cep").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');
        
        if (cep == "") {
            limpaEndereco();
            return 
        }
        var validacep = /^[0-9]{8}$/;

        if(!validacep.test(cep)) {
            limpaEndereco();
            toastr.clear();
            toastr.error('Formato de CEP inválido.', 'Atenção');
            return
        }
        $("#endereco").val('...');
        $("#cidade").val('...');
        $("#estado_sigla").val('').change();
        $("#bairro").val('...');
        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
            if (("erro" in dados)) {
                limpaEndereco();
                return
            }
            $("#endereco").val(dados.logradouro);
            $("#cidade").val(dados.localidade);
            $("#estado_sigla").val(dados.uf.toUpperCase()).change();
            $("#bairro").val(dados.bairro);

        }).fail(function() {
            limpaEndereco();
        });

        
    });

    CKEDITOR.config.extraPlugins = 'autogrow,uploadimage';
    CKEDITOR.config.filebrowserUploadUrl = rotaUploadImagem;    
    CKEDITOR.config.autoGrow_onStartup = true;
    CKEDITOR.config.image_previewText = ' ';
    CKEDITOR.config.htmlEncodeOutput = false
    CKEDITOR.config.entities = false;
    CKEDITOR.replace('orientacao');
    CKEDITOR.replace('observacao');
    
    function clearFormErrorsPousada() {
        $('.error-input').addClass('d-none').text('');
        $('.span_observacao,.span_orientacao').removeClass('pl-0');
        $('.form-validate-item').removeClass('is-invalid');
        $('#cke_orientacao, #cke_observacao').removeClass('border-danger');
    }
    
    $('.form-validate-item').on('focus blur',function(){
        clearFormErrorsPousada()
    });

    $('#save').on('click',function(e){
        $('#form-1').submit();
    });

    $(".hospede-tipo-valor").maskMoney({"thousands" :"","decimal" : ",","allowEmpty" : true, "allowZero" : true});
 
 
    CKEDITOR.instances.orientacao.on('contentDom', function() {
        this.document.on('click', function(event){
             clearFormErrorsPousada();
        });
        this.container.on('click', function(event){
            clearFormErrorsPousada();
         });
    });

    CKEDITOR.instances.observacao.on('contentDom', function() {
        this.document.on('click', function(event){
             clearFormErrorsPousada();
        });
        this.container.on('click', function(event){
            clearFormErrorsPousada();
         });
    });

    for (instance in CKEDITOR.instances){
        CKEDITOR.instances[instance].on('fileUploadRequest', function(evt) {

            
            var fileLoader = evt.data.fileLoader;
            formData = new FormData();
            xhr = fileLoader.xhr;
            xhr.open( 'POST', fileLoader.uploadUrl);
            formData.append('upload',fileLoader.file, fileLoader.fileName );
            formData.append('_token', csrfToken);
            formData.append('tipo','pousadas');
            fileLoader.xhr.send( formData );
            xhr.responseType = 'json';


            evt.stop();
        });
        
        CKEDITOR.instances[instance].on("fileUploadResponse", function(evt) {
            window.alert = function() {};
            evt.stop();
            var data = evt.data;
                xhr = data.fileLoader.xhr;
                response = xhr.response;
                if ( response.error ) {
                    toastr.clear;
                    toastr.error(response.error.message ?? 'Não foi possível realizar o upload da imagem. Tente novamente.', 'Atenção');
                    evt.cancel();
                } else {                
                    data.url = response.url;
                }
        });
    }

    $('.form-validate-item').removeAttr('disabled');
    
});