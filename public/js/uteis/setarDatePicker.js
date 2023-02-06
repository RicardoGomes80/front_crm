/*
 * jQueryElement - Exemplo $('.datepicker')
*  isLoadPage - true ou false
*  showTime - true ou false
* Instanciar após os plugins:
*  - /js/moment-with-locales.js
*  - /vendors/datetimepicker/build/jquery.datetimepicker.full.min.js
*/

function setDatePickerOnElement(jQueryElement, isLoadPage = true, hasClock = false, inputFormat = 'd/m/Y', momentFormat = 'DD/MM/YYYY', stepTime = 5, minDate = false) {
	
    if (jQueryElement) {
        jQueryElement.each(function( index ) {
            inputVal = $(this).val();

            if (inputVal && isLoadPage) {

                newInputVal = moment(inputVal)
                if (newInputVal._isValid) {
                    inputVal = newInputVal.format(momentFormat);
                    $(this).val(inputVal)
                }
            }
        });
    
        $.datetimepicker.setLocale('pt');
        jQueryElement.datetimepicker({
            format: inputFormat,
            mask: true,
            timepicker: hasClock,
            step: stepTime,
            minDate: minDate,
            allowBlank: true,
        });
    }
    var forms = document.getElementsByTagName('form');
    for (let i = 0; i < forms.length; i++) {
        forms[i].addEventListener("submit", function(e) {
            
            jQueryElement.each(function( index, element) {
                let dateValue = $(this).val();

                if (dateValue.includes('_/_')) {
                    $(this).val('')
                }
                
            });
        }, false);
    }
    }