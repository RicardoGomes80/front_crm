//call example setUploadable('dir/sub-dir')
function setUploadable(setPath = '') {
    window.alert = function () {};
    
    
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.config.extraPlugins = 'autogrow,uploadimage';
    CKEDITOR.config.filebrowserUploadUrl = rotaUploadImagem;
    CKEDITOR.config.autoGrow_onStartup = true;
    CKEDITOR.config.image_previewText = ' ';
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.config.htmlEncodeOutput = false;
    CKEDITOR.config.entities = false;
    
    
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].on( 'required', function(e) {
            $(CKEDITOR.instances[instance].container.$).addClass('border-danger');
            window.toastr.clear();
            window.toastr.error('Informe os campos em marcados em vermelho.', 'ATENÇÃO');
            e.cancel();
        } );
        CKEDITOR.instances[instance].on('focus', function(e){
            $(this.container.$).removeClass('border-danger');
        });

        CKEDITOR.instances[instance].on('fileUploadRequest', function(evt) {
            var fileLoader = evt.data.fileLoader;
            xhr = fileLoader.xhr;
            xhr.open('POST', fileLoader.uploadUrl, true);
    
            formData = new FormData();
            formData.append('_token',csrf_token);
            formData.append('upload',fileLoader.file, fileLoader.fileName);
            if (setPath != '')  {
                formData.append('tipo', setPath);
            }
            fileLoader.xhr.send( formData );
            xhr.responseType = 'json';
            evt.stop();
        });   
        
        CKEDITOR.instances[instance].on("fileUploadResponse", function(evt) {
            evt.stop();
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
    
    
}