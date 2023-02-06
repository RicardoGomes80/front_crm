//busca o rf do cliente no form de criação
$(document).on('click', '.btnBuscaRf', function () {
    identificador = $('.buscaRf').val();
    $.ajax({
        data: {
            "_token": token,
            identificador: identificador,
        },
        url: localizaRfRoute,
        method: 'get',
    }).done(function (response) {
        if (!response) {
            $('.nomeClienteRF').val('');
            toastr.clear();
            toastr.error('Filiado não encontrado.', 'ATENÇÃO');
            return;
        }
        $('.editaNome').val(response.nome);
    });
});
$('#transitou').on('change', function () {
    if ($(this).is(':checked')) {
        $('#divTransitou').removeClass('d-none')
    }
    else {
        $('#data_resultado, #resultado').val('')
        $('#divTransitou').addClass('d-none')
    }
})
