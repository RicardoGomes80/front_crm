meses = {
    '01': 'Janeiro',
    '02': 'Fevereiro',
    '03': 'Março',
    '04': 'Abril',
    '05': 'Maio',
    '06': 'Junho',
    '07': 'Julho',
    '08': 'Agosto',
    '09': 'Setembro',
    '10': 'Outubro',
    11: 'Novembro',
    12: 'Dezembro',
}

chartColors = {
    pink2: "#6b2e62",
    red: "#dc3545",
    orange: "#fd7e14",
    yellow: "#ffc107",
    green: "#28a745",
    blue: "#007bff",
    purple: "#6f42c1",
    grey: "#6c757d",
    black: "#000000",
    blue2: "#2bafe3",
    pink: "#2bafe3",
    blue3: "#0048ff",
    green2: "#34d19a"
};

$(document).ready(() => {

    porcentagem = conversoesMes / metaAtual;
    calculaProgressoMeta(porcentagem)
    recebeDadosPainel()
    recebeDadosGraficoPizza()
});

function calculaProgressoMeta(porcentagem) {
    if(porcentagem) {

        $(".circle-progress-gradient-lg")
        .circleProgress({
            value: porcentagem,
            size: 70,
            lineCap: "round",
            fill: { gradient: ["#ff1e41", "#ff8130"] },
        })
        .on("circle-animation-progress", function(event, progress, stepValue) {
            $(this)
            .find("small")
            .html("<span>" + stepValue.toFixed(2).substr(2) + "%<span>");
        });
    }
}

$('#alteraMetaAtual').on('click', function() {
    novaMeta = $('#novaMeta').val();
    return alteraMeta(novaMeta)
})

function alteraMeta(novaMeta) {
    $.ajax({
        url: alterarMetaRoute,
        data: {
            meta_atual: novaMeta
        },
        method: 'put'
    }).done(function(response) {
        if (!response) return toastr.error('Não foi possível alterar a meta', 'Erro')
        porcentagem = conversoesMes / novaMeta;
        $('#alterar_meta_modal').modal('hide')
        $('#metaAtualLabel').html(novaMeta)
        return calculaProgressoMeta(porcentagem)
    })
}

function recebeDadosPainel(ano) {
    arrayConversoes = []
    arrayLabels = []

    somaTotal = 0
    return $.ajax({
        url: painelGraficoRoute,
        data: {
            ano: ano
        },
        method: 'get'
    }).done(function(response) {
        if (!response) return toastr.error('Não foi possível recuperar os dados desse ano no momento', 'Erro')
        $.each(response, (index, dados) => {
            arrayConversoes.push(dados.conversoes)
            arrayLabels.push(meses[dados.data_base]);
            somaTotal = somaTotal + dados.conversoes
        })
        $('#conversoesAnoLabel').html(somaTotal)
        return criaPainelGrafico(arrayConversoes, arrayLabels);
        
    })
}

function criaPainelGrafico(arrayConversoes, arrayLabels) {
    if(arrayConversoes && arrayLabels) {
    var configuracaoDoPainel = {
        chart: {
            height: 265,
            type: 'bar',
            stacked: false,
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
            },

        },
        colors: [
            chartColors.pink2,
            chartColors.red,
            chartColors.blue3,
            chartColors.orange,
            chartColors.blue2,
            chartColors.yellow,
            chartColors.green,
            chartColors.blue,
            chartColors.green2,
            chartColors.black,
            chartColors.pink,
            chartColors.purple,
        ],
        stroke: {
            width: 0,
            colors: ['#fff'],
            curve: 'smooth'
        },
        series: [{
            name: '',
            data: arrayConversoes
        }],
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " Conversões";
                }
            }
        },
        fill: {
            opacity: .8

        },
        legend: {
            position: 'bottom',
        },

        horizontalAlign: 'center',
        labels: arrayLabels,
    };
    new ApexCharts(document.querySelector("#painelPrincipal"), configuracaoDoPainel).render();
}
}

$('.mudaAno').on('change', function() {
    $('#divPainel').html('<div id="painelPrincipal"></div>')
    $('#graficosPizza').html('')
    ano = $(this).val();
    recebeDadosGraficoPizza(ano)
    return recebeDadosPainel(ano);
})

function recebeDadosGraficoPizza(ano) {
    $.ajax({
        url: painelGraficoPizzaRoute,
        data: {
            ano: ano
        },
        method: 'get'
    }).done(function(response) {
        if (!response) return toastr.error('Erro ao buscar dados de gráficos de pizza');
        user_id = '';
        arrayData = [];
        arrayLabels = [];
        totalResponse = response.length
        countItens = 0
        hash = ''
        usuario = ''

        $.each(response, (index, dados) => {
            countItens++
            if (user_id != dados.user_id) {
                if (arrayData.length > 0) {
                    geraGraficos(user_id, arrayData, arrayLabels, hash, usuario)
                }
                arrayData = []
                arrayLabels = []
                user_id = dados.user_id
                usuario = dados.usuario
                hash = dados.hash
            }
            arrayData.push(dados.conversoes);
            arrayLabels.push(meses[dados.data_base]);
        })
        return geraGraficos(user_id, arrayData, arrayLabels, hash, usuario)
    })
}



function geraGraficos(user_id, arrayData, arrayLabels, hash, usuario) {

    if (arrayData.length == 0) return;
    if (arrayLabels.length == 0) return;
    if (!hash) {
        if(imagemDefault)
        hash = imagemDefault
    }
    html = '<div class="col-sm-12 col-lg-6 col-xl-4">'
    html += '<div class="mb-3 profile-responsive card">'
    html += '<div class="dropdown-menu-header">'
    html += '<div class="dropdown-menu-header-inner bg-dark">'
    html += '<div class="menu-header-image opacity-4"></div>'
    html += '<div class="menu-header-content btn-pane-right">'
    html += '<div class="avatar-icon-wrapper mr-3 avatar-icon-xl btn-hover-shine">'
    html += '<div class="avatar-icon rounded">'
    html += '<img src="' + hash + '">'
    html += ' </div></div><div><h5 class="menu-header-title">' + usuario + '</h5></div></div></div></div>'
    html += '<ul class="list-group list-group-flush">'
    html += '<li class="p-0 list-group-item">'
    html += '<div class="widget-content">'
    html += '<div class="text-center"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>'
    html += '<canvas id="pizza' + user_id + '" style="display: block; width: 590px; height: 150px;" width="590" height="150" class="chartjs-render-monitor"></canvas>'
    html += '</div></div></li></ul></div></div>'

    $('#graficosPizza').append(html)
if(arrayData && arrayLabels) {

    var configuracaoGraficosPizza = {
        type: "doughnut",
        data: {
            datasets: [{
                data: arrayData,
                backgroundColor: [
                    chartColors.pink2,
                    chartColors.red,
                    chartColors.blue3,
                    chartColors.orange,
                    chartColors.blue2,
                    chartColors.yellow,
                    chartColors.green,
                    chartColors.blue,
                    chartColors.green2,
                    chartColors.black,
                    chartColors.pink,
                    chartColors.purple,
                ],
                label: "Dataset 1",
            }, ],
            labels: arrayLabels,
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
            },
            title: {
                display: false,
                text: usuario,
            },
            animation: {
                animateScale: true,
                animateRotate: true,
            },
        },
    };
    if (document.getElementById("pizza" + user_id)) {
        var ctx33 = document.getElementById("pizza" + user_id).getContext("2d");
        window.myDoughnut = new Chart(ctx33, configuracaoGraficosPizza);
    }
}
}