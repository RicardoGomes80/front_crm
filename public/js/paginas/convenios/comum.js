$(".ddd").focus(function (evt) {
	$(".erro_ddd").fadeOut(400);
});
$(".telefone").focus(function (evt) {
	$(".erro_telefone").fadeOut(400);
});
$(".descricao").focus(function (evt) {
	$(".erro_descricao").fadeOut(400);
});

$(document).ready(function () {
	String.prototype.allReplace = function (obj) {
		var retStr = '';
		retStr = this;
		for (var x in obj) {
			retStr = retStr.replace(new RegExp(x, 'g'), obj[x]);
		}
		return retStr;
	};
});

$(".btn-novo-telefone").click(function (evt) {
	$("#telefones_ddd").val('');
	$("#telefones_telefone").val('');
	$("#telefones_descricao").val('');
	$("#telefones_visivel_site").prop("checked", false);
});


$('#modalTelefone').on('hide.bs.modal', function () {
	$('#telefones_ddd').attr('disabled', 'disabled');
	$('#telefones_telefone').attr('disabled', 'disabled');
	$('#tipo').val('')
})
