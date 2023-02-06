//limpa os dados pre selecionados/preenchidos de um formulario
//formId deve ser algo como $('#form')
function clearFormInputs(form) {
	form.find('input[type=number], input:text, input:password, input:file, textarea').val('');
	form.find('select option:selected').removeAttr('selected').prop("selected", false).trigger("change");
	form.find('select').find(':selected').removeAttr('selected').prop("selected", false).trigger("change")
	form.find('input:checkbox, input:radio').removeAttr('checked').prop("checked", false);
	$(document).find('form').find('input[type=number], input:text, input:password, input:file, textarea').val('');
	$(document).find('form').find('select option:selected').removeAttr('selected').prop("selected", false).trigger("change");
	$(document).find('form').find('select').find(':selected').removeAttr('selected').prop("selected", false).trigger("change")
	$(document).find('form').find('input:checkbox, input:radio').removeAttr('checked').prop("checked", false);
};

$(document).ready(() => {
	$('input').attr('autocomplete', 'off');
	$('form').attr('autocomplete', 'off');
	toastr.options = {
		closeButton :  true,
		preventDuplicates: true,
		timeOut: 6000,
		showDuration: 4000,
		progressBar: true,
	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	document.addEventListener('invalid', (function () {
		return function (e) {
			if (e.target.tagName.toUpperCase() == 'SELECT') {
				$(e.target).next().find('span.select2-selection').addClass('border-danger');
				$(e.target).addClass('border-danger');
				if($(e.target).hasClass('bootstrap-multiselect')) {
					if($(e.target).parent('span').hasClass('multiselect-native-select')) {
						setElement = $(e.target).parent('.multiselect-native-select');
						setElement.find('.btn-group').find('button.multiselect').addClass('border-danger');
					}
				}
			}else if (e.target.type == 'checkbox') {
				$(e.target).previous().find('span.message-error').removeClass('d-none');
				$('.message-error').removeClass('d-none');
			} else {
				$(e.target).addClass('is-invalid');
			};
			toastr.clear();
			toastr.error('Informe os campos marcados em vermelho.', 'ATENÇÃO');
			e.preventDefault();
		}
	})(), true);	
	if (typeof CKEDITOR !== 'undefined') {
		CKEDITOR.config.autoParagraph = false;		
		for ( instance in CKEDITOR.instances ) {			
			CKEDITOR.instances[instance].on('required', function(e) {
				$(this.container.$).addClass('border-danger');
				$(CKEDITOR.instances[instance].container.$).addClass('border-danger');
				toastr.clear();
				toastr.error('Informe os campos marcados em vermelho.', 'ATENÇÃO');
				e.cancel();
			} );
			CKEDITOR.instances[instance].on('focus', function(e){
				$(this.container.$).removeClass('border-danger');
			});
		}
	}
	$('input, select, span.select2-container, span.select2-selection__rendered, span.select2-selection__placeholder,span.select2-selection, span.selection, button.multiselect')
	.on('click focus',function(e){
		if (e.target.tagName.toUpperCase() == 'SELECT') {
			$(e.target).removeClass('border-danger');
			$(e.target).next('.btn-group').find('button.multiselect').removeClass('border-danger');
			$('select').removeClass('border-danger');
			$('span.select2-selection').removeClass('border-danger');
		} else if (e.target.tagName.toUpperCase() == 'SPAN') {
			if ($(e.target).parentsUntil('span.select2')) {
				$('span').removeClass('border-danger');
				$(this).removeClass('border-danger');

			}
		} else if (e.target.tagName.toUpperCase() == 'BUTTON') {
			if ($(e.target).hasClass('multiselect')) {
				$(this).removeClass('border-danger');
				$(e.target).removeClass('border-danger');
			}
		} else {
			$(this).removeClass('is-invalid');
			$(this).removeClass('text-danger');
			$(this).removeClass('border-danger');
			$(this).next('.invalid-feedback').remove();
			$(this).next('.text-danger').remove();
			$(this).next().next('.invalid-feedback').remove();
			$(this).next().next('.text-danger').remove();
		}
	});
	
	function clearValidationErrors() {
		$('.form-control').each(function(i,v){
			$(this).removeClass('is-invalid border-danger');
			$(this).next('.invalid-feedback').remove();
			$(this).next('.text-danger').remove();
			$(this).next().next('.invalid-feedback').remove();
			$(this).next().next('.text-danger').remove();
		});
		$('select').removeClass('border-danger');
		$('span.select2-selection').removeClass('border-danger');
	}

	$(".btn-open-options").on('click',function () {
		$(".ui-theme-settings").toggleClass("settings-open");

		if ($(".ui-theme-settings").hasClass("settings-open")) {
			$(this).removeClass('btn-dark').addClass('btn-danger');
			$(this).html('<i class="fa fa-times fa-w-4 fa-2x"></i>');
		} else {
			$(this).html('<i class="fa fa-cog fa-w-4 fa-2x fa-spin"></i>');
			$(this).removeClass('btn-danger').addClass('btn-dark');
		}
	});

	//barra lateral direita
	$(document).on('keydown', function(event) {
		if (event.key == "Escape") {
			if ($(".ui-theme-settings").hasClass("settings-open")) {
				$(".ui-theme-settings").removeClass("settings-open");
			}
		}
	});

	//grava algumas preferencias/configuracoes do painel de navegacao em sessao
	function setPreferences(dataStore) {
		$.ajax({
			url : routeSetPref,
			data : dataStore,
			method : 'POST'
		})
	}

	$(".close-sidebar-btn").on('click',function () {
		var classToSwitch = $(this).attr("data-class");		
		var containerElement = "#main-container";
		$(containerElement).toggleClass(classToSwitch);
		var closeBtn = $(this);
		if (closeBtn.hasClass("is-active")) {
			closeBtn.removeClass("is-active");
		} else {
			closeBtn.addClass("is-active");
		}
		dataStore = { "button_close_sidebar" : closeBtn.attr('class'), "main_container" : $(containerElement).attr('class')};
		setPreferences(dataStore);
	});
	
	if ((typeof(buttonClosedSidebar) !== undefined && buttonClosedSidebar !== null) && (typeof(mainContainer) !== undefined && mainContainer !== null)) {
		$('#button-close-sidebar').attr('class',buttonClosedSidebar);
		$('#main-container').attr('class', mainContainer);
	} else {
		//exibir ocultar barra lateral esquerda
		$('#button-close-sidebar').attr('class','hamburger close-sidebar-btn hamburger--elastic');
		$('#main-container').attr('class', 'app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar');
	}

	//ordenação das colunas
	$('th.sort-column-custom').on('click',function(el){
		var loadHref = $(this).attr('data-href');
		if (loadHref != undefined) {
			window.location.href = loadHref;
		}
	});

	$(document).on("change","input[type='number']",function(event) {
		if(!!this.max == true){
			valor = parseInt(this.value)
			max = parseInt(this.max)
			if (valor > max) {
				this.value = this.max;
				toastr.clear();
				toastr.error('O Valor Informado é maior que o suportado para este campo.', 'ATENÇÃO');
			}
			min = parseInt(this.min)
			if (valor < min) {
				this.value = this.min;
				toastr.clear();
				toastr.error('O Valor Informado é menor que o suportado para este campo.', 'ATENÇÃO');
			}
		}
	});

	$(document).on("input","input[type='number']",function(event) {
		this.value = this.value.replace(/[^0-9]/g,'');
		if(!!this.max == true){
			if(this.maxLength > 1){
				if (this.value.length > this.maxLength) {
					this.value = this.value.slice(0, this.maxLength);
				}
			}
		}		
	});
});