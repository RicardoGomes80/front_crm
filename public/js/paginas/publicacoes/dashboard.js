$(document).ready(function () {
    $('input[name="datepicker"]').datepicker({
        language: 'pt-BR',
        zIndex: 99999,
        autoHide: true
    });

    $('input[name="daterange-created"]').datepicker({
        language: 'pt-BR',
        changeMonth: true,
        changeYear: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
        });

});

window.Apex = {
    dataLabels: {
        enabled: false
    },
    stroke: {
        width: 1
    },
};

mesesEDatas = JSON.parse($('#mesesEDatas').val())
arrayMesesEmail = []
arrayPublicacoes = []
arrayEmails = []
arraySms = []
$.each(mesesEDatas, (index, value) => {
    arraySms.push(value.count_sms )
    arrayPublicacoes.push(value.count_publicacoes)
    arrayEmails.push(value.count_mails)
    arrayMesesEmail.push(value.meses)
})

var series =
{
    "emails": {
        "counts": arrayEmails,
        "dates": arrayMesesEmail
    },
    "publicacoes": {
        "counts": arrayPublicacoes,
        "dates": arrayMesesEmail
    },
    "sms": {
        "counts": arraySms,
        "dates": arrayMesesEmail
    },
};

var options = {
    chart: {
        height: 350,
        type: 'area',
        zoom: {
            enabled: false
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    series: [{
        name: "Emails",
        data: series.emails.counts
    },
    {
        name: "Publicações",
        data: series.publicacoes.counts
    },
    {
        name: "SMS",
        data: series.sms.counts
    },
    ],
    title: {
        text: 'Gráfico de Atividade das Comunicações',
        align: 'left'
    },
    subtitle: {
        text: '',
        align: 'left'
    },
    labels: series.emails.dates,
    xaxis: {
        type: 'string'
    },
    yaxis: {
        opposite: true
    },
    legend: {
        horizontalAlign: 'left'
    }
};

var chart = new ApexCharts(
    document.querySelector("#chart-apex-area"),
    options
);

$(document).ready(() => {
    setTimeout(function () {
        chart.render();
    }, 500);
});