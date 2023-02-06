$('.filepond').filepond({
    labelIdle: [
        'Arraste e solte o(s) arquivo(s) aqui <br>ou <br> <span class="filepond--label-action">Clique para procurar</span>'
    ],
    storeAsFile: true,
    credits : ''
})

$('.filepond').on('click',function(){
    $(this).find('.filepond--drop-label').removeClass('border  border-danger');
})