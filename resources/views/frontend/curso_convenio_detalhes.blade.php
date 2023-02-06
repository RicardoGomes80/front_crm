@extends('frontend.layouts.app_frontend')
@section('title', !empty($curso->nome) ? __('Detalhes do curso: ') . $curso->nome : __('Detalhes do curso'))
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./css/pulse-button.css')}}">
<link rel="stylesheet" href="{{asset('/vendors/linearicons-master/dist/web-font/style.css')}}">
<link rel="stylesheet" href="{{ asset('./vendors/sweetalert2/dist/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{asset('./vendors/datetimepicker/build/jquery.datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{asset('./vendors/select2/dist/css/select2.css')}}">
<link rel="stylesheet" href="{{asset('./css/frontend/custom_select2.css')}}">
<link rel="stylesheet" href="{{ asset('./vendors/@chenfengyuan/datepicker/dist/datepicker.min.css') }}">
@endpush
@section('content')
<div class="p-0 m-0 imagem_principal_full cursor-pointer">
	@if (empty($data->imagem))
	<img src="{{asset('storage/uploads/images/sem-imagem.jpg')}}" class="img-fluid" width="100%" height="850px">
	@else
	<img src="{{Helper::viewS3($data->imagem)}}" class="img-fluid" width="100%" height="850px">
	@endif
</div>
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-12 mt-4 mb-4">
			<div class="row">
				<div class="col-12">
					<div class="app-page-title">
						<div class="page-title-wrapper">
							<div class="page-title-actions scroll-top-button">
								<div class="d-inline-block">
									@if(Route::currentRouteName() == 'frontend.cursos.show.detalhes.home')
									<a href="{{route('frontend.cursos.buscar.home')}}" class="btn btn-lg  btn-primary btn-shadow btn-hover-shine" type="button">
										{{__('VOLTAR')}}
									</a>
									@else
									<a href="{{route('open_route.cursos.buscar')}}" class="btn btn-lg  btn-primary btn-shadow btn-hover-shine" type="button">
										{{__('VOLTAR')}}
									</a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-3">
					@include('layouts/sidebar_cursos_esquerda', compact('categorias', 'cursos'))
				</div>
				<div class="col-9">
					@if($data == null)
					<div class="col-8 text-center">
						<h5><strong>{{ mb_strtoupper('Convênio não encontrado') }}</strong></h5>
					</div>
					@else
					<div class="page-title-heading">
						<h5><strong>{{ mb_strtoupper($data->titulo) }}</strong></h5>
					</div>
					<div class="col-12 mt-5">
						<div class="main-card card m-0 mb-3">
							<div class="card-header">
								<div class="btn-actions-pane-left">
									<div class="nav">
										<a data-toggle="tab" href="#tab-eg4-0" class="border-0 btn-transition active btn btn-outline-primary">Descrição</a>
										<a data-toggle="tab" href="#tab-eg4-2" class="mr-1 ml-1 border-0 btn-transition  btn btn-outline-primary">Turmas</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content">
									<div class="tab-pane active" id="tab-eg4-0" role="tabpanel">
										{!! $data->descricao !!}
									</div>
									<div class="tab-pane" id="tab-eg4-2" role="tabpanel">
										@if( $cliente)
											@if($cliente['limitCursoGratuito'] > 2) 
											<div class="row pl-0 pr-0 mb-3" >
												<div class="col-12 bg-light p-2">
													<strong><span class="text-danger">Limite de cursos gratuitos atingido.</span></strong>
												</div>
											</div>
											@endif
										@endif
										<div class="col-12 mt-2 mb-3 text-left">
											@foreach($data->subProdutos as $subProdutos)
											<div class="row">
												<div class="col-4">
													{{$subProdutos->titulo}}
												</div>
												<div class="col-4">
													{{Helper::getPeriodo($subProdutos->periodo)}}
												</div>
												<div class="col-4">
													@guest
													<button class="btn btn-success btn-shadow btn-hover-shine btn-modal-login openLoginModal" >{{__('ENTRE PARA SE INSCREVER')}}</button>
													@else
													<button class="btn btn-success btn-shadow btn-hover-shine btn-modal-login"  data-titulo-sub-produto="{{$subProdutos->titulo}}" data-id-convenio-grupo="{{$data->id_convenio_grupo}}" data-id-convenio="{{$data->id_convenio}}" data-id-produto="{{$data->id}}" data-id-sub-produto="{{$subProdutos->id}}" data-toggle="modal" data-target=".bd-example-modal-lg" data-aceita-dependente="{{$subProdutos->aceita_dependente}}" @if($cliente['limitCursoGratuito'] > 2) disabled    @endif  @if($subProdutos->inscricao == 0) disabled @endif >{{__('INSCREVER-SE')}}</button>
													<button class="btn btn-primary btn-show-incritos" data-incritos="{{ $subProdutos->inscritos }}" data-toggle="modal" data-target=".bd-modal-inscritos" title="{{__('INSCRITOS')}}">{{__('INSCRITOS')}}</button>
													@endguest
												</div>
											</div>
											<div class="divider"></div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('set-modal')
@guest
@else
@if($data != '')
<div class="modal fade bd-modal-inscritos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="subProdutoModalTitulo">{{ __('Incritos') }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row" id="recebeInscritos">					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light btn-shadow btn-hover-shine" data-dismiss="modal">FECHAR</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<form method="POST" action="">
			@csrf
			<input type="hidden" name="convenio_id" id="convenio_id">
			<input type="hidden" name="convenio_grupo_id" id="convenio_grupo_id">
			<input type="hidden" name="convenio_produto_id" id="convenio_produto_id">
			<input type="hidden" name="convenio_sub_produto_id" id="convenio_sub_produto_id">
			<input type="hidden" name="data_entrada" id="data_entrada" value="{{  now() }}">
			<input type="hidden" name="data_expiracao" id="data_expiracao" value="{{$data->data_expiracao}}">
			<input type="hidden" name="convenio_produto" id="convenio_produto_selecionado">
			<input type="hidden" id="titular" value="1">
			<input type="hidden" name="cliente_id" id="cliente_id" value="{{auth()->user()->getClienteIdByIdentificador(auth()->user()->identificador)}}">
			<input type="text" id="rotaAdicionarConvenio" value="{{ route('frontend.gravar.cliente.convenio.produto', auth()->user()->getClienteIdByIdentificador(auth()->user()->identificador)  ) }}">
			<input type="text" id="rotaAdicionarDependente" value="{{ route('frontend.cliente.add.dependente', auth()->user()->getClienteIdByIdentificador(auth()->user()->identificador) ) }}">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="subProdutoModalTitulo">...</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row" id="disponivelFiliado">
						<div class="col-12">
							<div class="position-relative form-group form-nome">
								<label for="url_amigavel" class="col-form-label">{{ __('Disponivel epenas para o filiado titular') }}</label>								
							</div>
						</div>
					</div>
					<div class="row" id="disponivelFiliadoDependente">
						<div class="col-12">
							<div class="position-relative form-group form-nome">
								<label for="url_amigavel" class="col-form-label">{{ __('Titular ou Dependente ?') }}</label>
								<div class="input-group">
									<input type="checkbox" id="checkbox_cliente_dependente" class="" name="tipo_url" data-toggle="toggle" data-offstyle="success" data-off="Titular" data-on="Dependente" data-width="300"> 
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="titularDiv">
						<div class="col-6">
							{{$cliente['nome']}}
						</div>
					</div>
					<div class="row d-none" id="dependentesDiv">
						<div class="col-11 pr-0 mr-0">
							<select name="dependente_id" id="dependente_id" class="form-control select">
								<option value="">{{ __('Selecione')}}</option>
								@foreach($dependentes as $key => $item)
								<option value="{{ $item->id }}">{{ $item->nome }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-1 p-0 m-0">
							<button type="button" class="btn btn-primary btn-shadow btn-hover-shine" data-toggle="collapse" href="#collapse_depentente">+</button>
						</div>
					</div>
					<div class="col-12 pl-0 pr-0 mt-4 pt-4 pb-4 bg-light collapse text-left" id="collapse_depentente">
						<div class="col-12 pr-0 pt-0 pb-2">
							{{ __('Adicionar novo dependente') }}
						</div>
						<div class="col-12">
							<div class="position-relative form-group">
								<label for="dep-nome" class="col-form-label">{{ __('Nome do dependente') }}
									<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
								</label>
								<input id="dep-nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome') ?? ''}}" required>
								@error('nome')
								<span class="text-danger" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="col-12">
							<div class="form-row">
								<div class="col-3">
									<div class="position-relative form-group">
										<label for="tipo_dependente_id" class="col-form-label">{{ __('Tipo') }}
											<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
										</label>
										<select id="tipo_dependente_id" class="select form-control @error('tipo_dependente_id') border-danger @enderror" name="tipo_dependente_id" required>
											<option value="2">FILHO(A)</option>
											<option value="1">CÔNJUGE</option>
										</select>
										@error('tipo_dependente_id')
										<div class="text-danger">
											<small>
												<strong>{{$message}}</strong>
											</small>
										</div>
										@enderror
									</div>
								</div>
								<div class="col-9">
									<div class="position-relative form-group">
										<label for="dep-email" class="col-form-label">{{ __('Email') }}</label>
										<input id="dep-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
										@error('email')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-row">
								<div class="col-md-4 col-lg-4 col-sm-4 col-4">
									<div class="position-relative form-group">
										<label for="dep-data-nascimento" class="col-form-label">{{ __('Dt Nascimento') }}
											<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
										</label>
										<input id="dep-data-nascimento" type="text" class="datepicker form-control @error('data_nascimento') is-invalid @enderror input-mask-trigger" name="data_nascimento" value="{{old('data_nascimento')}}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" im-insert="false" required>
										@error('data_nascimento')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-sm-4 col-4">
									<div class="position-relative form-group">
										<label for="dep-cpf" class="col-form-label">{{ __('CPF') }}
											<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
										</label>
										<input id="dep-cpf" type="text" class="form-control @error('cpf') is-invalid @enderror cpf" name="cpf" value="{{old('cpf')}}">
										@error('cpf')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-sm-4 col-4">
									<div class="position-relative form-group">
										<label for="dep-rg" class="col-form-label">{{ __('RG') }}
											<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
										</label>
										<input id="dep-rg" type="text" class="form-control @error('rg') is-invalid @enderror rg" name="rg" value="{{old('rg')}}" required>
										@error('rg')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
						</div>						
						<div class="col-12">
							<div class="form-row">
								<div class="col-md-2 col-lg-2 col-sm-2 col-2">
									<div class="position-relative form-group">
										<label for="dep-ddd_celular" class="col-form-label">{{ __('DDD') }}</label>
										<input id="dep-ddd_celular" type="text" class="form-control @error('ddd_celular') is-invalid @enderror input-mask-trigger" min="2" value="" minlength="2" maxlength="2" data-inputmask="'mask': '99'" name="ddd_celular" value="{{old('ddd_celular')}}">
										@error('ddd_celular')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-sm-4 col-10">
									<div class="position-relative form-group">
										<label for="dep-celular" class="col-form-label">{{ __('Celular') }}</label>
										<input id="dep-celular" type="text" class="form-control @error('celular') is-invalid @enderror input-mask-trigger" min="2" value="" minlength="12" maxlength="15" data-inputmask="'mask': '99999-9999'" name="celular" value="{{old('celular')}}">
										@error('celular')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-md-2 col-lg-2 col-sm-2 col-2">
									<div class="position-relative form-group">
										<label for="dep-ddd_telefone" class="col-form-label">{{ __('DDD') }}</label>
										<input id="dep-ddd_telefone" type="text" class="form-control @error('ddd_telefone') is-invalid @enderror  input-mask-trigger" min="2" value="" minlength="2" maxlength="2" data-inputmask="'mask': '99'" name="ddd_telefone" value="{{old('ddd_telefone')}}">
										@error('ddd_telefone')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="col-md-4 col-lg-4 col-sm-4 col-10">
									<div class="position-relative form-group">
										<label for="dep-telefone" class="col-form-label">{{ __('Telefone') }}</label>
										<input id="dep-telefone" type="text" class="form-control @error('telefone') is-invalid @enderror input-mask-trigger" min="2" value="" minlength="12" maxlength="15" data-inputmask="'mask': '9999-9999'" name="telefone" value="{{old('telefone')}}">
										@error('telefone')
										<span class="text-danger" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<button type="button" class="btn btn-success btn-shadow btn-hover-shine btn-add-dependente">Adicionar dependente</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-shadow btn-hover-shine btn-add-convenio">{{ __('SALVAR') }}</button>
					<button type="button" class="btn btn-light btn-shadow btn-hover-shine" data-dismiss="modal">FECHAR</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endif
@endguest
@endsection

@push('js-scripts')
<script type="text/javascript" src="{{asset('./vendors/select2/dist/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/@chenfengyuan/datepicker/i18n/datepicker.pt-BR.js') }}"></script>
<script type="text/javascript" src="{{asset('./vendors/inputmask/dist/jquery.inputmask.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {	
		$('#dep-celular').inputmask("mask", { "mask": '99999-9999' });
		$('#dep-ddd_celular').inputmask("mask", { "mask": '99' });	
		$('#dep-telefone').inputmask("mask", { "mask": '9999-9999' });
		$('#dep-ddd_telefone').inputmask("mask", { "mask": '99' });	
		cliente_titular = "{{$cliente['nome'] ?? ''}}";
		$(document).on("click", ".btn-show-incritos", function () {
			data_incritos = $(this).attr('data-incritos');
			html = '';
			if(data_incritos != ""){
				data_incritos =  JSON.parse(data_incritos)
				$.each(data_incritos, function( index, value ) {
					if(value.titular == 0){
						html += '<div class="col-12"><div class="position-relative form-group form-nome"><label for="url_amigavel" class="col-form-label">Dependente:'+value.dependente+'</label></div></div>'
					}else{
						html += '<div class="col-12"><div class="position-relative form-group form-nome"><label for="url_amigavel" class="col-form-label">Titular: '+cliente_titular+'</label></div></div>'
					}
				})
				$('#recebeInscritos').html(html)
			}
		})

		$(".select").select2({
			theme: "bootstrap4",
			inheritClass: true,
			matcher: function(params, data) {
				return matchStart(params, data);
			},
		});

		$('.datepicker').datepicker({
			format: 'dd/mm/yyyy',
			language: 'pt-BR',
		});

		$(document).on("change", "#checkbox_cliente_dependente", function () {
			checked = $(this).prop('checked')
			$('#titularDiv').addClass('d-none')
			$('#dependentesDiv').addClass('d-none')
			$("#dependente_id").val('').change();
			$('#collapse_depentente').collapse('hide');
			if(checked == true){
				$('#dependentesDiv').removeClass('d-none')
				$("#titular").val(0);				
			}
			else{
				$('#titularDiv').removeClass('d-none')
				$("#titular").val(1);
			}
		})

		$(document).on("click", ".btn-modal-login", function () {
			$("#disponivelFiliado").addClass('d-none')
			$("#disponivelFiliadoDependente").addClass('d-none')
			aceita_dependente = $(this).attr('data-aceita-dependente');
			if(aceita_dependente == 1){
				$("#disponivelFiliadoDependente").removeClass('d-none')
			}else{
				$("#disponivelFiliado").removeClass('d-none')
			}
			convenio_id =  $(this).attr('data-id-convenio')
			convenio_produto_id =  $(this).attr('data-id-produto')
			convenio_grupo_id =  $(this).attr('data-id-convenio-grupo')
			convenio_sub_produto_id =  $(this).attr('data-id-sub-produto')
			convenio_sub_produto_titulo =  $(this).attr('data-titulo-sub-produto')
			$("#convenio_id").val(convenio_id);
			$("#convenio_grupo_id").val(convenio_grupo_id);
			$("#convenio_produto_id").val(convenio_produto_id);
			$("#convenio_sub_produto_id").val(convenio_sub_produto_id);
			$("#subProdutoModalTitulo").text(convenio_sub_produto_titulo);
		})

		$(document).on("click", ".btn-add-convenio", function () {
			rotaAdicionarConvenio = $("#rotaAdicionarConvenio").val();
			cliente_id	= $("#cliente_id").val();
			convenio_id = $("#convenio_id").val();
			convenio_grupo_id = $("#convenio_grupo_id").val();
			convenio_produto_id = 	$("#convenio_produto_id").val();
			convenio_sub_produto_id = 	$("#convenio_sub_produto_id").val();
			titular	 = $("#titular").val();
			dependente_id  =	$("#dependente_id").val();
			data_entrada =	$("#data_entrada").val();
			data_expiracao =	$("#data_expiracao").val();

			if((titular == 0) || (dependente_id = '')) {
				toastr.clear();
				toastr.error('Selecione um dependente','ATENÇÃO');
			}
			$.ajax({
				url: rotaAdicionarConvenio,
				data: {"_token": $('meta[name="csrf-token"]').attr('content'),"cliente_id":cliente_id,"convenio_id":convenio_id,"convenio_grupo_id":convenio_grupo_id,"convenio_produto_id":convenio_produto_id,"convenio_sub_produto_id":convenio_sub_produto_id,"titular":titular,"dependente_id":dependente_id,"data_entrada":data_entrada,"data_expiracao":data_expiracao},
				method: 'post',
				type: 'post',
				success: function(result){
					if(result.id != ''){
						toastr.clear();
						toastr.success('Convênio adicionaDO','SUCESSO');
					}
				},
				fail: function(response){
					toastr.clear();
					toastr.error('Erro ao adicionar Convênio ','ATENÇÃO');
				},
				error: function(response){
					toastr.clear();
					toastr.error('Erro ao adicionar Convênio ','ATENÇÃO');
				}
			});
		});

		$(document).on("click", ".btn-add-dependente", function () {
			cpf						=	$('#dep-cpf').val();
			rg						=	$('#dep-rg').val();
			data_nascimento			=	$('#dep-data-nascimento').val();
			email 					=	$('#dep-email').val();
			tipo_dependente_id		=	$('#tipo_dependente_id').val();
			nome 					=	$('#dep-nome').val();
			ddd_celular				=	$('#dep-ddd_celular').val();
			celular 				=	$('#dep-celular').val();
			ddd_telefone			=	$('#dep-ddd_telefone').val();
			telefone 				=	$('#dep-telefone').val();
			rotaAdicionarDependente = 	$('#rotaAdicionarDependente').val();
			$.ajax({
				url: rotaAdicionarDependente,
				data: {"_token": $('meta[name="csrf-token"]').attr('content'),"cpf":cpf,"rg":rg,"data_nascimento":data_nascimento,"email":email,"tipo_dependente_id":tipo_dependente_id,"nome":nome,"ddd_celular":ddd_celular,"celular":celular,"ddd_telefone":ddd_telefone,"telefone":telefone},
				method: 'put',
				type: 'put',
				success: function(result){
					if(result.id != ''){
						$('#dependente_id').append('<option value="'+result.id+'" selected>'+result.nome+'</option>').change();
						$('#collapse_depentente').collapse('hide');
						toastr.clear();
						toastr.success("Dependente Adicionado",'SUCESSO');
					}
				},
				fail: function(response){
					msg = 'Dados Invalidos';
					var responseJson = response.responseJSON;
					if (responseJson && responseJson.msg) {
						msg = responseJson.msg || msg;
					}
					toastr.clear();
					toastr.error(msg,'ATENÇÃO');
				},
				error: function(response){
					msg = 'Dados Invalidos';
					var responseJson = response.responseJSON;
					if (responseJson && responseJson.msg) {
						msg = responseJson.msg || msg;
					}
					toastr.clear();
					toastr.error(msg,'ATENÇÃO');
				}
			});
		});
	});
</script>
@endpush