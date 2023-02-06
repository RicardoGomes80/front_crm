$(document).ready(function() {
	
});  
function limparForm(campos){
	$.each(campos, function( index, value ) {
		$(value).val('');
		$(value).find('option:selected').remove();
		$(".multiselect-dropdown").val(null).trigger("change");
	});
}

$(document).on( "click", ".btn-ativar-inativar", function(e) {
	e.preventDefault();
	url = $(this).attr('data-route')
	id = $(this).attr('id')
	$('.tooltip').fadeOut();
	if($(this).attr('status') == 1){
		status = 0;
	}else{
		status = 1;
	}
	let data = {'id':id , 'status': status,'url':url }
	let type = "POST";
	pedeConfirmacao(url,data,type,'inativaResult');
})

function pedeConfirmacao(url,data,type,funcao) {
	if(data.status == 0){
		text = "Deseja inativar esse registro?"
	}else{
		text = "Deseja ativar esse registro?"
	}
	Swal.fire({
		title: "ATENÇÃO",
		text: text,
		icon: "question",
		iconColor: "#ff6f6f",
		showCancelButton : true,
		confirmButtonText: 'SIM',
		cancelButtonText : 'CANCELAR',
		cancelButtonColor: '#bbb',
		focusCancel :true
	}).then(function(actions) {
		if(actions.isConfirmed) {
			sendAjax(url,data,type,funcao)
		}
	});
}

function sendAjax(url,data,type,funcao) {
	$.ajax({
		'processing': true, 
		'serverSide': false,
		type: type,
		data: data,
		url: url,
		success: function(res) {
			if(funcao == 'inativaResult'){
				inativaResult(res,data);
			}
			if(funcao == 'removeResult'){
				removeResult(res,data);
			}
			if(funcao == 'updateResult'){
				updateResult(res,data);
			}
		},
		error: function(res) {	
			if(funcao == 'inativaResult'){
				inativaResult(false,data);	
			}
			if(funcao == 'removeResult'){
				removeResult(false,data);	
			}
			if(funcao == 'updateResult'){
				updateResult(false,data);	
			}
		}
	});
}

function removeResult(res,data) {
	var rowCount = $('.append_lines tr').length;
	if(rowCount == 1){
		$('.remove_linha_'+data.id).fadeOut(400,function(){
			$('.remove_linha_'+data.id).remove();
			html = '<tr class="remove_linha_"><td colspan="3" align="center"><b>Sem resultados</b></td></tr>';	
			$('.append_lines').append(html);
		})			
	}else{
		$('.remove_linha_'+data.id).fadeOut(400,function(){
			$('.remove_linha_'+data.id).remove();
		})
	}
}

function inativaResult(res,data) {
	$('#status_'+data.id).fadeOut(400,function(){
		if(data.status == 1){
			html = '<a href="#" id="'+data.id+'" data-route="'+data.url+'" type="button"';
			html += ' class="pl-0 pr-0 mr-2 btn-icon btn-icon-only btn btn-ativar-inativar btn-sm btn-shadow btn-hover-shine" ';
			html += 'data-toggle="tooltip" data-placement="top" title="Ativar" data-original-title="Ativar"'; 
			html += 'status="'+data.status+'"><span class="badge badge-success">ATIVO</span></a>';
		}else{
			html = '<a href="#" id="'+data.id+'" data-route="'+data.url+'" type="button"';
			html += 'class="pl-0 pr-0 mr-2 btn-icon btn-icon-only btn btn-ativar-inativar btn-sm btn-shadow btn-hover-shine" ';
			html += 'data-toggle="tooltip" data-placement="top" title="inativar" data-original-title="inativar"'; 
			html += 'status="'+data.status+'"><span class="badge badge-danger">INATIVO</span></a>';
		}
		$('#status_'+data.id).html(html)
	})
	$('#status_'+data.id).fadeIn(400)
	$('#trash_'+data.id).fadeOut(400,function(){
		if(data.status == 1){
			html_trash = '<a href="#" id="'+data.id+'" data-route="'+data.url+'" type="button"';
			html_trash += ' class="pl-0 pr-0 mr-2 btn-icon btn-icon-only btn btn-ativar-inativar btn-sm btn-shadow btn-hover-shine"';
			html_trash += 'status="'+data.status+'"><i class="pe-7s-trash btn-icon-wrapper text-danger font-size-xlg"></i></a>';
		}else{
			html_trash = ' <a href="#" id="'+data.id+'" data-route="'+data.url+'" type="button"';
			html_trash += ' class="pl-0 pr-0 mr-2 btn-icon btn-icon-only btn btn-ativar-inativar btn-sm btn-shadow btn-hover-shine"';
			html_trash += ' status="'+data.status+'"><i class="pe-7s-back btn-icon-wrapper text-success font-size-xlg"></i></a>';
		}
		$('#trash_'+data.id).html(html_trash)
	})
	$('#trash_'+data.id).fadeIn(400)
}