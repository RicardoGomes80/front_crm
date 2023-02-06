
$(document).ready(function () {
	buscaCursos()
})
function buscaCursos() {
	$('#table-cursos')
		.DataTable({
			processing: true,
			serverSide: true,
			paging: true,
			orderable: true,
			searching: true,
			iDisplayLength: 10,
			retrieve: true,
			dom: 'lfBrtip<"links">',
			order: [
				[2, 'desc']
			],
			buttons: [{
				extend: 'csv',
				exportOptions: {
					columns: [0, 1]
				}
			},
			{
				extend: 'pdf',
				exportOptions: {
					columns: [0, 1]
				}
			},
				'colvis'
			],
			ajax: {
				"url": rotaCursos,
				error: function (xhr, error, code) {
					buscaCursos()
				}
			},
			columns: [{
				data: 'curso',
				name: 'curso',
			},
			{
				data: 'data_inscricao',
				name: 'data_inscricao',
				className: "text-center",
			},
			{
				data: 'concluido',
				name: 'concluido',
				className: "text-center",
			},
			{
				data: 'nota_media_final',
				name: 'nota_media_final',
				className: "text-center",
			},
			{
				data: 'acoes',
				name: 'acoes',
				className: "text-center",
			}
			],
			createdRow: function (row, data, dataIndex) {
				$(row).attr('data-entry-id', data.id);
			},
			language: languageDataTables
		}).draw();
}