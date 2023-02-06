$('th.sort-column-custom').on('click', function (el) {
	var loadHref = $(this).attr('data-href');
	if (loadHref != undefined) {
		window.location.href = loadHref;
	}
});
