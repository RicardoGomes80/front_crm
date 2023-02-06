$(document).ready(function() {
    
    if (setToAstr) {
        toastr[alertType](alertMessage, alertTitle)
    }
    
    $('.daterange-periodo').daterangepicker({
        timePicker: false,
        autoUpdateInput: true,
        buttonClasses: "btn btn-success",
        cancelClass: "btn-link bg-transparent rm-border text-danger",
        opens: "center",
        drops: "up",
        locale: {
            format: "DD/MM/YYYY",
            separator: " - ",
            applyLabel: "Aplicar",
            cancelLabel: "Cancelar",
            fromLabel: "De",
            toLabel: "até",
            customRangeLabel: "Custom",
            daysOfWeek: [
                "Dom",
                "Seg",
                "Ter",
                "Qua",
                "Qui",
                "Sex",
                "Sáb"
            ],
            monthNames: [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ],
            firstDay: 0,
        },
        isInvalidDate: function(date) {
            if (typeof blockedWeekDays != 'undefined' && blockedWeekDays.includes(date.day())) {
                return true
            }
            return false
        },
        minDate: moment().startOf('day')
    });

    $('.set-select2-multi').multiSelect({
        selectableOptgroup: true,
        afterInit: function(ms){
            var that = this
            that.$container.each(function(key, item){
                var leftContainer   = $(item).find('.ms-selectable').find('.ms-elem-selectable')
                
                leftContainer.each(function(key, item){
                    setIcon(item)
                })
                var rightContainer  = $(item).find('.ms-selection').find('.ms-elem-selection');
                
                rightContainer.each(function(key, item){
                    setIcon(item)
                })
            })
        }
    });

    function setIcon(item) {
        var setIcon  = $(item).attr('data-icon')
        setText  = $(item).find('span').text();
        if (setIcon != undefined) {
            setIcon  = '&#x' +setIcon
            return $(item).find('span').prepend('<i class="fa fa-fw">'+ setIcon +'</i>');
        }
        return $(item).find('span').text(setText);
    }
    
    
    $('.datepicker').datetimepicker({
        language: 'pt-BR',
        zIndex: 99999,
        autoHide: true,
        step: 1,
        mask:true,
        format:'d/m/Y H:i',
    });
    $.datetimepicker.setLocale('pt');

    CKEDITOR.replace('descricao');
    CKEDITOR.replace('observacao');
    
    setUploadable('pousadas-pacotes-datas');
    
    function clearFormErrorsPousada() {
        $('.error-input').addClass('d-none').text('');
        $('.span_descricao, span_observacao').removeClass('pl-0');
        $('.form-validate-item').removeClass('is-invalid');
        $('#cke_descricao').removeClass('border-danger');
        $('#cke_observacao').removeClass('border-danger');
    }

    for (instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].on('required', function(e) {
            $(this.container.$).addClass('border-danger');
            toastr.clear();
            toastr.error('Informe os campos em marcados em vermelho.', 'ATENÇÃO');
            e.cancel();
        });

        CKEDITOR.instances[instance].on('focus', function(e){
            $(this.container.$).removeClass('border-danger');
            clearFormErrorsPousada()
        });
    }

    $(".hospede-valor").maskMoney({
        thousands :"",
        decimal : ",",
        allowEmpty: true, 
        allowZero : true
    });
});