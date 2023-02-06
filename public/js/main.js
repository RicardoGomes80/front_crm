$(document).ready(function () {
	function SimpleDatatabeRemove() {
		$('.SimpleDataTable ').parent().find('.dt-buttons').remove();
		clearTimeout(SimpleDatatabeRemoveVar);
	}

	var pathname = window.location.pathname;
	origin = window.location.origin
	
	if(pathname.indexOf("public") > 2) {
		origin = window.location.origin
		const myArray = pathname.split("public");
		urlLangDatatables = origin+myArray[0]+"/public/vendors/datatables/i18n/Brazilian.json";	
	}else{
		urlLangDatatables = origin+"/vendors/datatables/i18n/Brazilian.json";
	}

	var handleCheckboxes = function (html, rowIndex, colIndex, cellNode) {
		var $cellNode = $(cellNode);
		var $check = $cellNode.find(':checked');
		return ($check.length) ? ($check.val() == 1 ? 'Yes' : 'No') : $cellNode.text();
	};

	var activeSub = $(document).find('.active-sub');
	if (activeSub.length > 0) {
		activeSub.parent().show();
		activeSub.parent().parent().find('.arrow').addClass('open');
		activeSub.parent().parent().addClass('open');
	}

	$(document).on('click','.dataTable input[type=checkbox]',function () {
		$(this).parents('tr').toggleClass('selected');
	})

	//teste = $('#table').find('tbody tr:first-child td').length;

	textHeaderPDF = '';
	window.dtDefaultOptions = {
		etrieve: true,
		dom: 'lfBrtip<"actions">',
		columnDefs: [],
		"iDisplayLength": 10,
		"aaSorting": [],
		language:{
			url : urlLangDatatables,
		},
		buttons: [
		{
			extend: 'excel',
			messageTop: ' ',
			title: 'APROFEM',
			exportOptions: {
				columns: ':not(:last-child)',
			},
			customize : function(xlsx){
			}
		},
		{
			extend: 'pdf',
			pageSize: 'A4', 
			alignment: "center", 
			text: 'Pdf',
			orientation: 'landscape',
			pageSize: 'A4',
			exportOptions: {
				columns: ':not(:last-child)',
			},
			customize : function(doc){
				doc.content[0].text = textHeaderPDF;
				doc.pageMargins = [40,20,20,20];
				doc.defaultStyle.fontSize = 9; 
				doc.styles.tableHeader.fontSize = 9;
				doc.styles.title.fontSize = 13;
				doc.styles.tableHeader.alignment = 'left';
				doc.content[1].table.widths = ["10%","20%","20%","10%","20%","20%"];
				doc['header']=(function(page, pages) {
					return {
						columns: [
						{
							alignment: 'right',
							text: ['Página ', { text: page.toString() },  ' de ', { text: pages.toString() }]
						}
						],
						margin: [0, 0, 0,0],
					}
				}),
				doc['footer']=(function(page, pages) {
					return {
						columns: [
						'',
						{
							alignment: 'right',
							text: ['Página ', { text: page.toString() },  ' de ', { text: pages.toString() }]
						}
						],
						margin: [0, 0, 0, 0],
					}
				})
				doc.content.splice(1, 0,
				{
					margin: [0, 0, 0, 12],
					alignment: 'left',
					image: 'data:image/png;base64,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',
					fit: [100, 100],
					width: 100,
					height: 100,
				}
				);
}	
},
{
	extend: 'print',
	text: 'Imprimir',
	pageSize: 'A4', 
	orientation: 'landscape',
	title: '',
	exportOptions: {
		columns: ':not(:last-child)',
		
	},
	customize: function ( win ) {
		$(win.document.body)
		.css( 'font-size', '10pt' )
		.prepend(
			'<img src="data:image/png;base64,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" style="position:relative; top:0; left:0;" />'
			);

$(win.document.body).find( 'table' )
.addClass( 'compact' )
.css( 'font-size', 'inherit' );
}


},
'colvis'
]
};

window.dtSimpleDefaultOptions = {
	retrieve: false,
	dom: 'lfBrtip<"actions">',
	columnDefs: [],
	"iDisplayLength": 10,
	"aaSorting": [],
	language:{
		url : urlLangDatatables,
	},
	"bFilter": false,
	"bLengthChange": false,
	buttons: ['']
};

$('.datatable, .dataTable').each(function () {
	if ($(this).hasClass('dt-select')) {
		window.dtDefaultOptions.select = {
			style: 'multi',
			selector: 'td:first-child'
		};
		window.dtDefaultOptions.columnDefs.push({
			orderable: false,
			className: 'select-checkbox',
			targets: 0
		});
	}
	$(this).dataTable(window.dtDefaultOptions);
});

$('.SimpleDataTable').each(function () {
	if ($(this).hasClass('dt-select')) {
		window.dtSimpleDefaultOptions.select = {
			style: 'multi',
			selector: 'td:first-child'
		};
		window.dtSimpleDefaultOptions.columnDefs.push({
			orderable: false,
			className: 'select-checkbox',
			targets: 0
		});
	}
	$(this).dataTable(window.dtSimpleDefaultOptions);
	SimpleDatatabeRemoveVar = setTimeout(SimpleDatatabeRemove, 500);
});


if (typeof window.route_mass_crud_entries_destroy != 'undefined') {
		//console.log($('.datatable, .ajaxTable, .dataTable').siblings('.actions'))
	}
	$(document).on('click', '.js-delete-selected', function (e) {
		if (confirm('Are you sure?')) {
			e.preventDefault();
			var ids = [];
			$(this).closest('.actions').siblings('.datatable,.dataTable, .ajaxTable').find('tbody tr.selected').each(function () {
				ids.push($(this).data('entry-id'));
			});
			$.ajax({
				method: 'POST',
				url: $(this).attr('href'),
				data: {
					_token: _token,
					ids: ids
				}
			}).done(function () {
				location.reload();
			});
		}
		return false;
	});
	$(document).on('click', '#select-all', function () {
		var selected = $(this).is(':checked');
		$(this).closest('table.datatable, table.dataTable, table.ajaxTable').find('td:first-child').each(function () {
			if (selected != $(this).closest('tr').hasClass('selected')) {
				$(this).click();
			}
		});
	});

	$('.mass').click(function () {
		if ($(this).is(":checked")) {
			$('.single').each(function () {
				if ($(this).is(":checked") == false) {
					$(this).click();
				}
			});
		} else {
			$('.single').each(function () {
				if ($(this).is(":checked") == true) {
					$(this).click();
				}
			});
		}
	});
	$('.page-sidebar').on('click', 'li > a', function (e) {

		if ($('body').hasClass('page-sidebar-closed') && $(this).parent('li').parent('.page-sidebar-menu').size() === 1) {
			return;
		}
		var hasSubMenu = $(this).next().hasClass('sub-menu');
		if ($(this).next().hasClass('sub-menu always-open')) {
			return;
		}
		var parent = $(this).parent().parent();
		var the = $(this);
		var menu = $('.page-sidebar-menu');
		var sub = $(this).next();
		var autoScroll = menu.data("auto-scroll");
		var slideSpeed = parseInt(menu.data("slide-speed"));
		var keepExpand = menu.data("keep-expanded");
		if (keepExpand !== true) {
			parent.children('li.open').children('a').children('.arrow').removeClass('open');
			parent.children('li.open').children('.sub-menu:not(.always-open)').slideUp(slideSpeed);
			parent.children('li.open').removeClass('open');
		}
		var slideOffeset = -200;
		if (sub.is(":visible")) {
			$('.arrow', $(this)).removeClass("open");
			$(this).parent().removeClass("open");
			sub.slideUp(slideSpeed, function () {
				if (autoScroll === true && $('body').hasClass('page-sidebar-closed') === false) {
					if ($('body').hasClass('page-sidebar-fixed')) {
						menu.slimScroll({
							'scrollTo': (the.position()).top
						});
					}
				}
			});
		} else if (hasSubMenu) {
			$('.arrow', $(this)).addClass("open");
			$(this).parent().addClass("open");
			sub.slideDown(slideSpeed, function () {
				if (autoScroll === true && $('body').hasClass('page-sidebar-closed') === false) {
					if ($('body').hasClass('page-sidebar-fixed')) {
						menu.slimScroll({
							'scrollTo': (the.position()).top
						});
					}
				}
			});
		}
		if (hasSubMenu == true || $(this).attr('href') == '#') {
			e.preventDefault();
		}
	});

});

function processAjaxTables() {
	$('.ajaxTable').each(function () {
		window.dtDefaultOptions.processing = true;
		window.dtDefaultOptions.serverSide = true;
		if ($(this).hasClass('dt-select')) {
			window.dtDefaultOptions.select = {
				style: 'multi',
				selector: 'td:first-child'
			};

			window.dtDefaultOptions.columnDefs.push({
				orderable: false,
				className: 'select-checkbox',
				targets: 0
			});
		}
		$(this).DataTable(window.dtDefaultOptions);
		if (typeof window.route_mass_crud_entries_destroy != 'undefined') {
			$(this).siblings('.actions').html('<a href="' + window.route_mass_crud_entries_destroy + '" class="btn btn-xs btn-danger js-delete-selected" style="margin-top:0.755em;margin-left: 20px;">Delete selected</a>');
		}
	});
}


