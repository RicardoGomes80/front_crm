$(document).ready(function () {
    $('.tabelaParticipantes').hide();
    $('.nomeClienteParticipante').val('')
    $('.rfParticipante').val('')

    var url_string = window.location.href
    url = url_string.search('#tab-instancias')

    if (url > 1) {
        $('.btnTabInstancias').click()
    }
    urlModal = url_string.search('abreModal=sim')

    if (urlModal > 1) {
        $('.verAdicionarInstanciaBtn').click()
    }
    setTimeout(function () {
        buscaParticipantes(id_acao)
    }, 200)
});

$('.btnTabInstancias').click(function () {
    var url_string = window.location.href
    url = url_string.search('#tab-instancias')

    if (url > 1) {
        return;
    }
    window.location.href += '#tab-instancias'
})
$('.btnTabGeral').click(function (e) {
    e.preventDefault();
    url = window.location.href.replace('#tab-instancias', '')
    history.pushState({}, null, url);

})

$('.verAdicionarInstanciaBtn').on('click', function () {
    $('.datePciker')
    buscaInstanciaAtual(id_acao)
})

$(document).on('show.bs.modal', '#adicionarInstanciaModal', function () {
    $('.datepickerModal').datepicker({
        language: 'pt-BR'
    });
})

function buscaInstanciaAtual(id_acao) {
    $.ajax({
        url: buscaInstanciaAtualRota,
        data: {
            acao_id: id_acao,
        }, method: 'get'
    }).done((response) => {
        if (!response) {
            return toastr.error('Você ja adicionou o máximo de instâncias!', 'ATENÇÃO')
        }
        $('#adicionarInstanciaModal').modal('show')
        $('.instanciaAtual').html(response.descricao)
        $('.inputInstanciaAtual').val(response.id)

    })
}

//Arquivos
$(document).on("click", ".nomeImage", function () {
    id = $(this).attr("id_arquivo")
    nome = $(this).html();
    $(this).parent().html('<input type="text" id_usuario="' + id + '" name="editaArquivo"  nomeAntigo="' + nome + '" value="' + nome + '" class="form-control editaArquivo">');
    $('#editaArquivo' + id).focus()
});

$(document).on("blur", ".editaArquivo", function () {
    let nome = $(this).val();
    let id = $(this).attr('id_usuario');
    nome = nome.trim();
    $(this).val(nome);
    let nomeAntigo = $(this).attr('nomeAntigo');
    let url = editaArquivo;
    let csrf_token = token;
    let data = { "_token": csrf_token, "id": id, "nome": nome, "nomeAntigo": nomeAntigo }
    let type = "PUT";
    ajaxEditarArquivo(url, data, type, 'updateResult');
});

function ajaxEditarArquivo(url, data, type, funcao) {
    $.ajax({
        'processing': true,
        'serverSide': false,
        type: type,
        data: data,
        url: url,
        success: function (res) {
            if (funcao == 'removeResult') {
                removeResult(res, data,);
            }
            if (funcao == 'updateResult') {
                updateResult(res, data,);
            }
        },
        error: function (res) {
            if (funcao == 'removeResult') {
                removeResult(false, data);
            }
            if (funcao == 'updateResult') {
                updateResult(false, data);
            }
        }
    });
}

function updateResult(res, data) {
    if (res == 1) {
        $('#tdNomeArquivo' + data.id).html('<a class="nomeImage" id="editaArquivo' + data.id + '"> ' + data.nome + '</a>');
        toastr.success('Registro atualizado', 'SUCESSO')
    } else {
        $('#tdNomeArquivo' + data.id).html('<a class="nomeImage" id="editaArquivo' + data.id + '"> ' + data.nomeAntigo + '</a>');
        toastr.error('Registro não atualizado', 'ATENÇÃO')
    }
}

$(document).on('click', '.btnRemoveArquivo', function () {
    id_arquivo = $(this).attr('id_arquivo')
    removeArquivoSwal(id_arquivo)
});

function removeArquivoSwal(id_arquivo) {

    Swal.fire({
        title: "ATENÇÃO",
        text: "Deseja remover esse arquivo?",
        icon: "question",
        iconColor: "#ff6f6f",
        showCancelButton: true,
        confirmButtonText: 'SIM',
        cancelButtonText: 'CANCELAR',
        cancelButtonColor: '#bbb',
        focusCancel: true
    }).then(function (actions) {
        if (actions.isConfirmed != true) {
            return false;
        }
        $.ajax({
            url: rotaRemoveArquivo,
            data: {
                "_token": token,
                id: id_arquivo,
            },
            method: 'delete',
        }).done(function (response) {
            if (!response) {
                toastr.clear();
                toastr.error('Erro ao deletar arquivo', 'ATENÇÃO');
                return;
            }
            $('#removeArquivo' + id_arquivo).fadeOut(400);
            toastr.clear();
            toastr.success('Sucesso ao deletar o arquivo', 'SUCESSO');
        });
    });

}
var acceptedDropzones = '.ods,.xls,.xlsx,.jpeg,.jpg,.png,.doc,.docx,.pdf,.odf,.txt,.csv,.ods,.odt,.ott,.dot,.fodt,.uot,.docx,.ots,.dotx,.fods,.uos,.xlts,.rtf'
Dropzone.autoDiscover = false;
$(".dropzone").dropzone({
    acceptedFiles: acceptedDropzones,
    addRemoveLinks: false,
    method: "POST",
    url: rotaEnviarArquivo,
    params: {
        "acao_id": id_acao,
    },
    headers: {
        'X-CSRF-Token': $('input[name="csrf-token"]').val()
    },
    init: function () {
        this.on("success", function (file, response) {
            if (!response.id_file) {
                return toastr.error('Erro ao processar arquivo', 'Atenção')
            }
            urlArquivo = downloadRoute.replace(':id', response.id_file)
            html = '<tr id="removeArquivo' + response.id_file + '"><td id="tdNomeArquivo' + response.id_file + '"  data-toggle="tooltip" data-placement="top" title="{{ __("messages.hintChangeNome") }}" ><a id="editaArquivo' + response.id_file + '" id_arquivo="' + response.id_file + '" class="nomeImage">' + response.OriginalName + '</td>';
            html += '<td>'
            html += '<a href="' + urlArquivo + '" download="' + response.hash + '" type="button" class="btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine" title="download">'
            html += '<i class="pe-7s-cloud-download btn-icon-wrapper text-primary font-size-xlg"></i></a>'
            html += '<button type="button" id_arquivo="' + response.id_file + '" class=" btn-icon btn-icon-only btn btn-link btn-sm btn-shadow btn-hover-shine btnRemoveArquivo" title="Remover" ><i class="pe-7s-trash btn-icon-wrapper text-primary font-size-xlg"></i>'
            html += '</button>'
            html += '</td>'
            html += '</tr>'

            $('#tabelaArquivos').DataTable({
                language: {
                    url: urlDataTable
                }
            }).row.add($(html)).draw()
        })
        this.on("error", function (file, response) {
            let msg = response.errors.file[0] || 'Erro ao realizar o upload do arquivo'
            toastr.error(msg)
            $(file.previewElement).find('.dz-error-message').text(msg)
        })
    }
});

$(document).on("mouseover", ".nomeImage", function () {
    $('.tooltip').show();
    $('.nomeImage').css('cursor', 'pointer');
}).mouseout(function () {
    $('.tooltip').hide();
});