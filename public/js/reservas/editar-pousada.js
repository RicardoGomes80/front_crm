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

    function clearFormErrorsPousada() {
        $('.error-input').addClass('d-none').text('');
        $('.span_observacao,.span_orientacao').removeClass('pl-0');
        $('.form-validate-item').removeClass('is-invalid');
        $('#cke_orientacao, #cke_observacao').removeClass('border-danger');
    }

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
    CKEDITOR.config.htmlEncodeOutput = false;
    CKEDITOR.config.entities = false;
    CKEDITOR.replace('orientacao');
    CKEDITOR.replace('observacao');
    
    $('#save').on('click',function(e){
        $('#form-1').submit();
    });

    $(".hospede-tipo-valor").maskMoney({"thousands" :"","decimal" : ",","allowEmpty" : true, "allowZero" : true});

    $('#form-1sss').on('submit',function(e){
        let action = $(this).attr("action")
        clearFormErrorsPousada();
        e.preventDefault();
        
        for (instance in CKEDITOR.instances){
            CKEDITOR.instances[instance].updateElement();
        }
        $('#orientacao').text(CKEDITOR.instances['orientacao'].getData());
        $('#observacao').text(CKEDITOR.instances['observacao'].getData());

        var formData = new FormData(this);
        var itens = [];
        
        $('.hospede-tipo-id').each(function(index){
            itens[index] =  { 'hospede_id' : $(this).val() } ;
        });

        $('.hospede-tipo-valor').each(function(index){
            if (itens[index]['hospede_id'].length) {
                itens[index]['hospede_valor'] =  $(this).val();
            }
            
        });
        
        if (itens.length) {
            formData.append('valores_hospedes_tipo', JSON.stringify(itens));
        }
        
        $.ajax({
          type: "POST",
          url: action,
          contentType: false,
          processData:false,
          data: formData,
          dataType: "json",
          success: function(response){
            if(response.success == true) {
                toastr.clear();
                if (response.redirectTo) {
                    toastr.options.onHidden = function(){
                        window.location.href = response.redirectTo
                    };
                }
                toastr.success(response.msg ?? 'Requisição concluída', 'Sucesso');
            }
          },
        }).fail(function(response){
            let status = response.status
            toastr.clear();
            if (status == 404) {
                let errors = response.responseJSON;
                toastr.error(errors.msg ?? 'Não foi possível concluir a requisição', 'Atenção');
                return;
            }
            if (status == 422) {
                let failed = response.responseJSON.failed ?? false;
                if (failed) {
                    toastr.error(response.responseJSON.msg ?? 'Não foi possível concluir a requisição', 'Atenção');
                    return;
                }
                toastr.error('Verifique os campos com erros', 'Atenção');
                var errors = response.responseJSON.errors != undefined ? response.responseJSON.errors : []
                
                for (item in errors) {
                    if($('.error-input').hasClass('span_'+item)) {
                        $('.span_'+item).removeClass('d-none').text(errors[item][0]);
                        $('input[name="'+item+'"],select[name="'+item+'"],textarea[name="'+item+'"]').addClass('is-invalid')
                        
                      
                        if (item == 'orientacao') {
                            $('.span_'+item).addClass('pl-0');
                            $('#cke_orientacao').addClass('border-danger');
                        }

                        if (item == 'observacao') {
                            $('.span_'+item).addClass('pl-0');
                            $('#cke_observacao').addClass('border-danger');
                        }
                    }
                    
                }
                
            }
            
        });
    });

    
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
            formData.append('_token',csrfToken);
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


    var fileInputGlobal = $('#file-input').filer({          
        extensions: ['jpg', 'png','jpeg','webp'],
        showThumbs: true,
        fileMaxSize: 2,
        appendTo: 'imgs',
        addMore: true,
        clipBoardPaste: true,
        excludeName: null,
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
            dragContainer: null,
        },
        uploadFile: uploadImages(),
        theme: "dragdropbox",        
        changeInput: '<div class="jFiler-input-dragDrop ml-0 w-100">\
                        <div class="jFiler-input-inner">\
                            <div class="jFiler-input-icon">\
                                <i class="icon-jfi-cloud-up-o"></i>\
                            </div>\
                            <div class="jFiler-input-text">\
                                <h3>Arraste e solte arquivos aqui</h3>\
                                <span style="display:inline-block; margin: 15px 0">ou</span>\
                            </div>\
                            <a class="jFiler-input-choose-btn btn-info text-white">Procurar arquivos</a>\
                        </div>\
                    </div>',
        captions : {
            button: "Escolher imagens",
            feedback: "Escolher imagens para o quarto",
            feedback2: "arquivos selecionados",
            drop: "Arraste uma ou mais imagens para realizar o upload",
            //removeConfirmation: "Deseja remover essa imagem?",
            errors: {
                filesType: "Somente imagens com extensões jpg,png,jpeg e webp podem ser enviadas.",
                filesSize: "A imagem {{fi-name}} é maior que o limite permitido ({{fi-fileMaxSize}} MB).",
                filesSizeAll: "A soma (em MB) não pode exceder {{fi-maxSize}} MB.",
                folderUpload: "Não é permitido o upload de pastas."
            }
        },
        dialogs : {
            alert: function(text) {
                toastr.error(text, 'ATENÇÃO');
                return ;
            },
            confirm: function(text, callback) {
                 confirm(text) ? callback() : null;
            }
        },
        templates : {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb pointer">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-thumb-overlay">\
                                        <div class="jFiler-item-info">\
                                            <div style="display:table-cell;vertical-align: middle;">\
                                                <span class="jFiler-item-title" data-src=""><b title="{{fi-name}}">{{fi-extension}}</b></span>\
                                                <span class="jFiler-item-others d-none">{{fi-size2}}</span>\
                                            </div>\
                                        </div>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action custom-trash" data-img-id=""></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
            _selectors: {
                list: ".jFiler-items-list",
                item: ".jFiler-item",
                progressBar: ".bar",
            }
            
 
        }
    });
    
    
    function removeImgById(idPousada,imgId,elRemove) {
        action = routeDeleteImagem; 
        action  = action.replace(':image_id', imgId);
        
        $.ajax({
                type: "DELETE",
                url: action,
                dataType: 'json',
        }).done(function(response) {
            elRemove.fadeOut("fast", function() {
                $(this).remove();
            });
            toastr.clear;
            toastr.success(response.msg, 'Sucesso');
        }).fail(function(response) {
            toastr.clear;
            toastr.error(response.responseJSON.msg, 'Atenção');
        });
    }

    function uploadImages(){
        
        var action = rotaNewImagem; 
        
        return {
            url: action,
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function(){
            },
            success: function(data, itemEl, listEl, boxEl, newInputEl, inputEl, id){
                var parent = itemEl.find(".jFiler-jProgressBar").parent();
                    filerKit = inputEl.prop("jFiler");
                    
                    filerKit.files_list[id].name = data.filename;
                    filerKit.files_list[id].file = data.id;
                    itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Sucesso</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                    itemEl.find('.custom-trash').attr('data-img-id',data.id);
            },
            error: function(el,itemsRow,theme,inputDragDrop,fileInput,other,response){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-danger\"><i class=\"icon-jfi-minus-circle\"></i> Erro</div>").hide().appendTo(parent).fadeIn("slow");
                });

                toastr.clear();
                toastr.error(response.responseJSON.msg, 'Atenção');
            }
        }
    }

    $(document).on('click','.jFiler-item-thumb', function(e){
        var srcImg = $(this).find('.jFiler-item-thumb-image img').attr('src');
    });
    
    $(document).on('click', '.custom-trash',function(){
        
        var imgId = $(this).attr('data-img-id');
            idPousada = dataPousadaID;
            elRemove = $(this).closest(".jFiler-item");
        $.confirm({
            title: 'Atenção!',
            content: 'Deseja remover essa imagem?',
            buttons: {
                confirmar : {
                    btnClass: 'btn-info',
                    text: 'SIM',
                    action: function () {
                        removeImgById(idPousada,imgId,elRemove);
                    }
                },
                cancelar: function () {
                    null
                }
            }
        });
    });

    $(document).on('click','.jFiler-item-thumb', function(e) {
        var imgSrc = $(this).find('.jFiler-item-thumb-image').find('img').attr('src')
        $('#imagepreview').attr('src', imgSrc);
        $('#imagemodal').modal('show');
    });

    
});