@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}">
<!-- <link rel="stylesheet" href="{{asset('./vendors/select2/dist/css/select2.min.css')}}"> -->
<link rel="stylesheet" type="text/css" href="{{asset('./css/custom_select2.css') }}" />
<link rel="stylesheet" href="{{asset('./vendors/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">
@endpush
@section('content')
<div class="container-fluid">
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-10">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><b>Fale Conosco</b></h5>
							<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
							<div class="progress-bar progress-bar-xs bg-primary indicador-progress-bar"></div>						
						</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="card-body">
							<input type="hidden" id="hidden_lotacao">
							<form method="POST" action="{{ route('frontend.fale-conosco-enviar') }}">
								@csrf
								<input type="hidden" id="cliente_id" name="cliente_id">
								<input type="hidden" id="ce_codigo" name="ce_codigo">
								<input type="hidden" id="dre_codigo" name="dre_codigo">
								<input type="hidden" id="tipo_de_cliente" name="tipo_de_cliente" value="1">
								<input type="hidden" id="categoria_chamado_id" name="categoria_chamado_id" value="1">
								<input type="hidden" id="status_chamado_id" name="status_chamado_id" value="1">
								<input type="hidden" id="tipo_chamado_id" name="tipo_chamado_id" value="1">
								<div class="form-row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="txtRF" class="col-sm-3">É filiado à APROFEM?</label>
											<div class="col-sm-4">
												<label class="radio-inline control-label">
													<input type="radio" checked id="cbxSim" value="1" name="tipo_de_cliente">
													SIM
												</label>
												<label class="radio-inline control-label">
													<input type="radio" id="cbxNao" value="0" name="tipo_de_cliente">
													NÃO
												</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-3">
										<div class="position-relative form-group">
											<label for="txtRF" class="col-form-label">{{ __('Registro Funcional') }}</label>
											<input id="txtRF" type="text" class="form-control @error('txtRF') is-invalid @enderror" name="txtRF" autocomplete="off" required>
											@error('txtRF')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-9">
										<div class="position-relative form-group">
											<label for="txtNome" class="col-form-label">{{ __('Registro Nome') }}</label>
											<input id="txtNome" type="text" class="form-control @error('txtNome') is-invalid @enderror" placeholder="Seu nome" maxlength="100" name="txtNome" autocomplete="off" required>
											@error('txtNome')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-12">
										<div class="position-relative form-group">
											<label for="txtEmail" class="col-form-label">{{ __('E-mail') }}</label>
											<input id="txtEmail" type="email" class="form-control @error('txtEmail') is-invalid @enderror" placeholder="Seu e-mail" maxlength="100" name="txtEmail" autocomplete="off" required>
											@error('txtEmail')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-2">
										<div class="position-relative form-group">
											<label for="txtCPF" class="col-form-label">{{ __('CPF') }}</label>
											<input id="txtCPF" type="text" class="form-control @error('txtCPF') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '999.999.999-99'" name="txtCPF" autocomplete="off" placeholder="CPF" data-mask="cpf" maxlength="14" required>
											@error('txtCPF')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-1">
										<div class="position-relative form-group">
											<label for="txtDDDTelCelular" class="col-form-label">{{ __('DDD Cel.') }}</label>
											<input id="txtDDDTelCelular" type="text" class="form-control @error('txtDDDTelCelular') is-invalid @enderror"  maxlength="2" name="txtDDDTelCelular" autocomplete="off" required>
											@error('txtDDDTelCelular')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-2">
										<div class="position-relative form-group">
											<label for="txtTelCelular" class="col-form-label">{{ __('Telefone Celular') }}</label>
											<input id="txtTelCelular" type="text" class="form-control @error('txtTelCelular') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '99999-9999'" maxlength="12" name="txtTelCelular" autocomplete="off" required>
											@error('txtTelCelular')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-1">
										<div class="position-relative form-group">
											<label for="txtDDDTelResidencia" class="col-form-label">{{ __('DDD Res.') }}</label>
											<input id="txtDDDTelResidencia" type="text" class="form-control @error('txtDDDTelResidencia') is-invalid @enderror"  maxlength="2" name="txtDDDTelResidencia" autocomplete="off" required>
											@error('txtTelResidencial')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-2">
										<div class="position-relative form-group">
											<label for="txtTelResidencial" class="col-form-label">{{ __('Telefone Residencial') }}</label>
											<input id="txtTelResidencial" type="text" class="form-control @error('txtTelResidencial') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '9999-9999'"  maxlength="12" name="txtTelResidencial" autocomplete="off" required>
											@error('txtTelResidencial')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-2">
										<div class="position-relative form-group">
											<label for="txtMelhorHorarioContatoDe" class="col-form-label">{{ __('Melhor horário de contato') }}</label>
											<input id="txtMelhorHorarioContatoDe" type="text" class="input-time form-control @error('txtMelhorHorarioContatoDe') is-invalid @enderror" placeholder="00:00" maxlength="12" name="txtMelhorHorarioContatoDe" autocomplete="off" required>
											@error('txtMelhorHorarioContatoDe')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-2">
										<div class="position-relative form-group">
											<label for="txtMelhorHorarioContatoAte" class="col-form-label">{{ __('Melhor horário de contato') }}</label>
											<input id="txtMelhorHorarioContatoAte" type="text" class="input-time form-control @error('txtMelhorHorarioContatoAte') is-invalid @enderror" placeholder="00:00" maxlength="12" name="txtMelhorHorarioContatoAte" autocomplete="off" required>
											@error('txtMelhorHorarioContatoAte')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-3">
										<div class="position-relative form-group">
											<label for="ddlDRE" class="col-form-label">{{ __('DRE') }}</label>											
											<select id="ddlDRE" class="form-control set-select2">
												<option value="">Selecione...</option>
												@foreach($dres as $dre)
												<option value="{{$dre['codigo']}}" unidade_codigo="" ce_codigo="{{$dre['ce_codigo']}}" ce_descricao="{{$dre['ce_descricao']}}" dre_codigo="{{$dre['codigo']}}" dre_descricao="{{$dre['descricao']}}" data-rota="{{route('frontend.unidades.dres.ajax',[$dre['ce_codigo'],$dre['codigo']])}}">{{$dre['ce_codigo']}}.{{$dre['codigo']}}-{{$dre['descricao']}}</option>
												@endforeach
											</select>
											@error('ddlDRE')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-4">
										<div class="position-relative form-group">
											<label for="txtLotacao" class="col-form-label">{{ __('Lotação') }}</label>
											<select id="txtLotacao" name="unidade_codigo" class="set-select2 form-control @error('txtLotacao') is-invalid @enderror">
												<option value="">Selecione...</option>
											</select>
											@error('txtLotacao')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-5">
										<div class="position-relative form-group">
											<label for="txtCargos" class="col-form-label">{{ __('Cargo') }}</label>
											<select id="txtCargos" name="cargo_codigo" class="set-select2 form-control @error('txtCargos') is-invalid @enderror" required>
												<option value="">Selecione...</option>
												@foreach($cargosFuncionais as $cargos)
												<option value="{{$cargos['codigo']}}">{{$cargos['descricao']}}</option>
												@endforeach
											</select>

											@error('txtCargos')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-12">
										<div class="position-relative form-group">
											<label for="txtAssunto" class="col-form-label">{{ __('Assunto') }}</label>
											<input id="txtAssunto" type="text" class="form-control @error('txtAssunto') is-invalid @enderror" placeholder="Assunto" maxlength="120" name="txtAssunto" autocomplete="off" required>
											@error('txtAssunto')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-12">
										<div class="position-relative form-group">
											<label for="txtMsg" class="col-form-label">{{ __('Mensagem') }}</label>
											<textarea placeholder="Mensagem" class="form-control @error('txtAssunto') is-invalid @enderror" id="txtMsg"  rows="4" cols="50"  name="txtMsg" required style=" height: 100px !important;"></textarea>
											@error('txtMsg')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-12">
										<div class="position-relative form-group">
											<label class="col-form-label" for="textAceiteContato">Termos de uso e privacidade</label>
											<div class="col-sm-9">
												<input type="checkbox" id="textAceiteContato" name="textAceiteContato" class="@error('textAceiteContato') is-invalid @enderror" required>
												<small>Ao informar os meus dados, declaro ter ciência e concordar com o <a target="_blank" href="./leitura-conteudo/00005759">Termo de Uso e Política de Privacidade</a> da APROFEM</small>
												<span class="message-error text-danger d-none">
													<br>
													<small>Aceite obgrigatório</small>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="divider"></div>
								<div class="form-row">
									<div class="col-12">
										<button type="submit" class="btn btn-primary btn-shadow btn-hover-shine">
											{{ __('SALVAR') }}
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('more-scripts')
<script type="text/javascript" src="{{asset('./vendors/select2/dist/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{asset('./vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('./vendors/@chenfengyuan/datepicker/i18n/datepicker.pt-BR.js') }}"></script>
<script type="text/javascript" src="{{ asset('./vendors/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/inputmask/dist/jquery.inputmask.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$('.set-select2').select2({
			placeholder: "Escolha uma opção",
			containerCssClass : "form-control",
			width: '100%',
			theme: "bootstrap4",
			matcher: function(params, data) {
				var itensData = params.term
				searchData = data.text.toLowerCase()
				if ($.trim(itensData) === '') {
					return data;
				}
				if (typeof searchData === 'undefined') {
					return null;
				}
				itensData = itensData.toLowerCase()
				if (searchData.indexOf(itensData) > -1) {
					var modifiedData = $.extend({}, data, true);
					modifiedData.text;
					return modifiedData;
				}
				return null;
			}
		});
		$(".input-mask-trigger").inputmask();
		$('.input-time').bootstrapMaterialDatePicker({
			date: false,
			format: 'HH:mm',
			showHeader: false,
			cancelText: 'FECHAR',
			okText: 'PRÓXIMO',
			switchOnClick: true,
			showButtons: true,
			clearButton: true,
		})
	});

	$(document).on('change','#ddlDRE',function () {
		if ($(this).children("option:selected").val() == ''){
			$('#txtLotacao').val('').change();
			$('#txtCargos').val('').change();
			return false;
		}else{
			ce_codigo = $(this).children("option:selected").attr('ce_codigo');
			dre_codigo = $(this).children("option:selected").attr('dre_codigo');
			data_rota = $(this).children("option:selected").attr('data-rota'); 
			hidden_lotacao = $('#hidden_lotacao').val();
			$('#ce_codigo').val(ce_codigo);
			$('#dre_codigo').val(dre_codigo);
			$('#txtLotacao').html('<option>Selecione</option>');
			$.ajax({
				url: data_rota,
				context: document.body
			}).done(function (response) {
				if (response.data.length > 0) {
					$('#txtLotacao').html('<option>Selecione</option>');
					for (var prop in response.data) {
						values = response.data[prop];
						textSelecionado = $("#unidade").val();
						if(hidden_lotacao == values.codigo){
							$('#unidade_codigo').val(values.codigo)
							$('#txtLotacao').append('<option value="' + values.codigo + '" selected>' + values.codigo + ' - ' + values.descricao + '</option>');
						}else{
							$('#txtLotacao').append('<option value="' + values.codigo + '" >' + values.codigo + ' - ' + values.descricao + '</option>');
						}
					}
				} else {
					return toastr.error('Esta DRE não possuí unidades', 'ATENÇÃO');
				}
			});
		}
	});	

	$(document).on('change','#txtRF',function () {
		$('input').removeClass('border-danger');
		$('select').removeClass('border-danger');
		$('input').removeClass('is-invalid');
		rota = "{{ route('frontend.buscar.identificador.ajax')}}";
		identificador = $('#txtRF').val();
		$.ajax({
			url: rota,
			data: {identificador: identificador},
			method: 'post'
		}).done(function (response) {
			if(response.nome == null){
				$('#cliente_id').val('');
				$('#txtNome').val('');
				$('#txtCPF').val('');
				$('#txtEmail').val('');
				$('#hidden_lotacao').val('');
				$('#txtDDDTelCelular').val('');
				$('#txtTelCelular').val('');
				$('#txtTelResidencial').val('');
				$('#txtMelhorHorarioContatoDe').val('');
				$('#txtMelhorHorarioContatoAte').val('');
				$('select#ddlDRE').val('').change();
				return false;
			}else{
				$('#cliente_id').val(response.id);
				$('#txtNome').val(response.nome);
				$('#txtCPF').val(response.cpf);
				$('#txtEmail').val(response.email);
				$('#hidden_lotacao').val(response.unidade_codigo);
				$('#txtDDDTelCelular').val(response.celular_ddd);
				$('#txtTelCelular').val(response.celular_telefone);
				$('#txtDDDTelResidencia').val(response.residencial_ddd);
				$('#txtTelResidencial').val(response.residencial_telefone);
				$('#dre_codigo').val(response.dre_codigo)
				$('#ce_codigo').val(response.ce_codigo)
				$('#txtMelhorHorarioContatoDe').val(response.residencial_melhor_horario_inicio);
				$('#txtMelhorHorarioContatoAte').val(response.residencial_melhor_horario_fim);
				$('select#ddlDRE').find('option').each(function() {
					if ( ($(this).attr('dre_codigo') ==  response.dre_codigo) && ($(this).attr('ce_codigo') ==  response.ce_codigo))
					{
						$(this).attr("selected","selected").change();
					}
				});
				$('#txtCargos').val(response.cargo_codigo);
			}
		}).fail(function (error) {
			return false;
		});
	});
</script>
@endsection