@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('./vendors/select2/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('./css/frontend/custom_select2.css')}}">
<link rel="stylesheet" href="{{ asset('./vendors/@chenfengyuan/datepicker/dist/datepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('./css/frontend/forms_wizard.css') }}" />
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
							<h5><b>Filie-se</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="card-body">
							<form method="POST" id="filie-se-form" action="{{ route('frontend.filie-se-enviar') }}">
								@csrf
								<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="main-card mb-3 card">
												<div class="card-body">
													<div id="smartwizard" style="min-height: 360px;">
														<ul class="forms-wizard">
															<li>
																<a href="#step-1" id="link-step-1">
																	<em>1</em>
																	<span>Informações Pessoais</span>
																</a>
															</li>
															<li>
																<a href="#step-2" id="link-step-2">
																	<em>2</em>
																	<span>Seu Endereço</span>
																</a>
															</li>
															<li>
																<a href="#step-3" id="link-step-3">
																	<em>3</em>
																	<span>Dados Funcionais</span>
																</a>
															</li>
															<li>
																<a href="#step-4" id="link-step-4">
																	<em>4</em>
																	<span>Finalizar</span>
																</a>
															</li>
														</ul>
														<div class="form-wizard-content">
															<div id="step-1">
																<div class="form-row">
																	<div class="col-3">
																		<div class="position-relative form-group">
																			<label for="rf" class="col-form-label">{{ __('Registro Funcional') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
																			<input id="identificador" type="text" class="form-control @error('identificador') is-invalid @enderror" name="identificador" autocomplete="off" required>
																			@error('identificador')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-9">
																		<div class="position-relative form-group">
																			<label for="txtNome" class="col-form-label">{{ __('Registro Nome') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
																			<input id="txtNome" type="text" class="form-control @error('nome') is-invalid @enderror" value="{{old('nome')}}" placeholder="Seu nome" maxlength="100" name="nome" autocomplete="off" required>
																			@error('nome')
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
																			<label for="rg" class="col-form-label">{{ __('RG') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{old('rg')}}"  minlength="3" maxlength="15" required>
																			@error('rg')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-2">
																		<div class="position-relative form-group">
																			<label for="txtCPF" class="col-form-label">{{ __('CPF') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
																			<input id="txtCPF" type="text" class="form-control @error('cpf') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '999.999.999-99'" name="cpf" autocomplete="off" placeholder="CPF" data-mask="cpf" maxlength="14" value="{{old('cpf')}}" required>
																			@error('cpf')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-4">
																		<div class="position-relative form-group">
																			<label for="txtEmail" class="col-form-label">{{ __('E-mail') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
																			<input id="txtEmail" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Seu e-mail" maxlength="100" name="email" autocomplete="off" required>
																			@error('email')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-2">
																		<div class="position-relative form-group">
																			<label for="password" class="col-form-label">
																				{{ __('Senha') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido" id="msg_senha">*</span>
																			</label>												
																			<input id="password" type="password" class="bg-white form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" maxlength="12" required readonly onfocus="this.removeAttribute('readonly');">
																			@error('password')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-2">
																		<div class="position-relative form-group">
																			<label for="password-confirm" class="col-form-label">{{ __('Confirmação de senha') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido" id="msg_confirma_senha">*</span>
																			</label>
																			<input id="password-confirm" type="password" maxlength="12" class="bg-white form-control" name="password_confirmation" autocomplete="off" required readonly onfocus="this.removeAttribute('readonly');">
																			@error('password_confirmation')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>																	
																</div>
																<div class="form-row">
																	<div class="col-1">
																		<div class="position-relative form-group">
																			<label for="txtDDDTelCelular" class="col-form-label">{{ __('DDD Cel.') }}</label>
																			<input id="txtDDDTelCelular" type="text" class="form-control @error('txtDDDTelCelular') is-invalid @enderror"  maxlength="2" name="txtDDDTelCelular" autocomplete="off" value="{{old('txtDDDTelCelular')}}" required>
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
																			<input id="txtTelCelular" type="text" class="form-control @error('txtTelCelular') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '99999-9999'" maxlength="12" name="txtTelCelular" value="{{old('txtTelCelular')}}" autocomplete="off" required>
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
																			<input id="txtDDDTelResidencia" type="text" class="form-control @error('txtDDDTelResidencia') is-invalid @enderror"  maxlength="2" name="txtDDDTelResidencia" autocomplete="off" value="{{old('txtDDDTelResidencia')}}" required>
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
																			<input id="txtTelResidencial" type="text" class="form-control @error('txtTelResidencial') is-invalid @enderror input-mask-trigger" data-inputmask="'mask': '9999-9999'" value="{{old('txtTelResidencial')}}" maxlength="12" name="txtTelResidencial" autocomplete="off" required>
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
																			<input id="txtMelhorHorarioContatoDe" type="text" class="input-time form-control @error('txtMelhorHorarioContatoDe') is-invalid @enderror" placeholder="00:00" maxlength="12" name="txtMelhorHorarioContatoDe" value="{{old('txtMelhorHorarioContatoDe')}}" autocomplete="off" required>
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
																			<input id="txtMelhorHorarioContatoAte" type="text" class="input-time form-control @error('txtMelhorHorarioContatoAte') is-invalid @enderror" placeholder="00:00" maxlength="12" name="txtMelhorHorarioContatoAte" value="{{old('txtMelhorHorarioContatoAte')}}" autocomplete="off" required>
																			@error('txtMelhorHorarioContatoAte')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																</div>
																<div class="form-row">
																	<input type="hidden" name="situacao_id" value="10">
																	<div class="col-4 pl-0 pr-0 ">
																		<div class="position-relative form-group">
																			<label for="user-sexo" class="col-form-label">{{ __('Sexo') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<select id="user-sexo" class="set-select2 form-control @error('sexo') border-danger @enderror" name="sexo" required>
																				<option value="" selected disabled>Escolha uma opção</option>
																				@foreach ($tiposSexo as $keySexo => $tipoSexo)
																				<option value="{{$keySexo}}" {{ old('sexo') == $keySexo ? 'selected' : ''}}>
																					{{ $tipoSexo }}
																				</option>
																				@endforeach
																			</select>
																			@error('sexo')
																			<div class="text-danger">
																				<small>
																					<strong>{{$message}}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>

																	<div class="col-4">
																		<div class="position-relative form-group">
																			<label for="estado-civil-id" class="col-form-label">{{ __('Estado civil') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<select id="estado-civil-id" class="set-select2 form-control @error('estado_civil_id') border-danger @enderror" name="estado_civil_id" required>
																				<option></option>
																				@foreach ($tipoEstadoCivil as $estadoCivil)
																				<option value="{{$estadoCivil['id']}}" {{ old('estado_civil_id') == $estadoCivil['id'] ? 'selected' : ''}}>
																					{{ $estadoCivil['nome'] }}
																				</option>
																				@endforeach
																			</select>
																			@error('estado_civil_id')
																			<div class="text-danger">
																				<small>
																					<strong>{{$message}}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>
																	<div class="col-4">
																		<div class="position-relative form-group">
																			<label for="nascimento" class="col-form-label">{{ __('Nascimento') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input id="nascimento" type="text" class="form-control  @error('nascimento') is-invalid @enderror" name="nascimento" value="{{ old('nascimento') }}"  placeholder="dd/mm/yyyy" autocomplete="off" required>
																			@error('nascimento')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																</div>															
															</div>
															<div id="step-2" rel="step-2" class="hidden-tabs d-none">
																<div class="form-row">
																	<div class="col-md-1 col-sm-1 pl-0 pr-3">
																		<div class="position-relative form-group">
																			<label for="cep" class="col-form-label">{{ __('CEP') }} <span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="cep" name="cep" class="form-control input-mask-trigger" required value="{{old('cep')}}" data-inputmask="'mask': '99999-999'">
																			@error('cep')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>

																	<div class="col-md-2 col-sm-2 pl-3 pr-0">
																		<div class="position-relative form-group">
																			<label for="cep" class="col-form-label">{{ __('Não sabe seu CEP ?') }}
																			</label>
																			<a href="http://www.buscacep.correios.com.br/" target="_blank" class="btn btn-link btn-primary">Procure seu CEP</a>
																		</div>
																	</div>
																	<div class="col-md-6 pl-0 pr-0">
																		<div class="position-relative form-group">
																			<label for="endereco" class="col-form-label">{{ __('ENDEREÇO') }} <span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="endereco" name="endereco" class="form-control @error('endereco') is-invalid @enderror" required value="{{old('endereco')}}">
																			@error('endereco')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-1">
																		<div class="position-relative form-group">
																			<label for="numero" class="col-form-label">{{ __('NÚMERO') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="numero" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{old('numero')}}" required>
																			@error('numero')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-2">
																		<div class="position-relative form-group">
																			<label for="complemento" class="col-form-label">{{ __('COMPLEMENTO') }}</label>
																			<input type="text" id="complemento" name="complemento" class="form-control" value="{{old('complemento') ?? ''}}">
																			@error('complemento')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																</div>
																<div class="form-row">
																	<div class="col-md-4">
																		<div class="position-relative form-group">
																			<label for="bairro" class="col-form-label">{{ __('BAIRRO') }} <span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="bairro" name="bairro" class="form-control" required value="{{old('bairro')}}">
																			@error('bairro')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="position-relative form-group">
																			<label for="cidade" class="col-form-label">{{ __('CIDADE') }} <span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="cidade" name="cidade" class="form-control" required value="{{old('cidade')}}">
																			@error('cidade')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-2">
																		<div class="position-relative form-group">
																			<label for="estado" class="col-form-label">{{ __('ESTADO') }} <span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input type="text" id="estado" name="estado" class="form-control" required value="{{old('estado')}}">
																			@error('estado')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<input type="hidden" id="pais" name="pais" class="form-control" required value="Brasil">
																	<input type="hidden" id="dre_codigo" name="dre_codigo">
																	<input type="hidden" id="ce_codigo" name="ce_codigo">
																</div>


																
															</div>
															<div id="step-3" rel="step-3" class="hidden-tabs d-none">
																<div class="form-row">
																	<div class="col-1">
																		<div class="position-relative form-group">
																			<label for="vinculo" class="col-form-label">
																				{{ __('Vínculo') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<input id="vinculoEditar" class="form-control @error('vinculo') is-invalid @enderror input-mask-trigger limpaAll" name="vinculo" value="{{ old('vinculo') }}" data-inputmask="'mask':'9'" maxlength="2" required></input>
																			@error('vinculo')
																			<span class="invalid-feedback" role="alert">
																				<small>
																					<strong>{{ $message }}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-2">
																		<div class="position-relative form-group">
																			<label for="situacao-funcional" class="col-form-label">{{ __('Situação funcional') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<select id="situacao-funcionalEditar" class="set-select2-desc  limpaAll form-control @error('situacao_funcional') border-danger @enderror situacao_funcional_selecionada" name="situacao_funcional" required>
																				@foreach ($categoriasFuncionais as $catFunc)
																				<option value="{{$catFunc['id']}}" {{old('situacao_funcional') == $catFunc['id'] ? 'selected' : ''}}>{{$catFunc['descricao']}}</option>
																				@endforeach
																			</select>
																			<input type="hidden" name="situacao_funcional_selecionada" id="situacao_funcional_selecionada">
																			@error('situacao_funcional')
																			<span class="invalid-feedback" role="alert">
																				<small>
																					<strong>{{$message}}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-2">
																		<div class="position-relative form-group mb-0 pb-0">
																			<label for="jornada" class="col-form-label">{{ __('Jornada') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<select id="jornadaEditar" class="set-select2-desc form-control limpaAll @error('tipo_jornada_id') border-danger @enderror" name="tipo_jornada_id" required>
																				<option></option>
																				@foreach ($tiposJornada as $jornada)
																				<option value="{{$jornada['id']}}" {{old('tipo_jornada_id') == $jornada['id'] ? 'selected' : ''}}> {{ $jornada['descricao'] }} </option>
																				@endforeach
																			</select>
																			@error('tipo_jornada_id')
																			<span class="invalid-feedback" role="alert">
																				<small>
																					<strong>{{$message}}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>
																	<div class="col-md-2">
																		<div class="position-relative form-group mb-0 pb-0">
																			<label for="padrao" class="col-form-label">{{ __('Padrão') }}
																				<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span>
																			</label>
																			<select name="codigo_vencimento_id" id="padraoEditar" class="set-select2-desc limpaAll form-control @error('codigo_vencimento_id') border-danger @enderror" required>
																				<option></option>
																				@foreach($tiposVencimento as $tipo)
																				<option value="{{ $tipo['id'] }}" {{ old('codigo_vencimento_id') == $tipo['id'] ? 'selected' : ''}}> {{ $tipo['descricao'] }} </option>
																				@endforeach
																			</select>
																			@error('codigo_vencimento_id')
																			<span class="invalid-feedback" role="alert">
																				<small>
																					<strong>{{$message}}</strong>
																				</small>
																			</div>
																			@enderror
																		</div>
																	</div>
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
																			<label for="txtCargos" class="col-form-label">{{ __('Cargo') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
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
															</div>

															<div id="step-4" rel="step-4" class="hidden-tabs d-none">
																<div class="no-results">
																	
																	<div class="col-12 text-center">
																		<div class="position-relative form-group">
																			<label class="col-form-label" for="textAceiteContato">Termos de uso e privacidade</label>
																			<div class="col-sm-12">
																				<input data-toggle="toggle" data-onstyle="success" type="checkbox" id="textAceiteContato" name="textAceiteContato" data-onstyle="success" data-offstyle="danger" data-on="{{ __('Aceito') }}" data-off="{{ __('Não Aceito') }} " data-size="xs" data-width="130px" {{ old('textAceiteContato') ? 'checked' : 'checked' }}" required>


																				<small>Ao informar os meus dados, declaro ter ciência e concordar com o <a target="_blank" href="./leitura-conteudo/00005759">Termo de Uso e Política de Privacidade</a> da APROFEM</small>


																				


																			</div>

																			@error('textAceiteContato')
																			<span class="invalid-feedback" role="alert">
																				<strong>{{ $message }}</strong>
																			</span>
																			@enderror
																		</div>
																	</div>
																	<div class="mt-3 mb-3"></div>
																	<div class="text-center">
																		<button id="btn-filie-se" type="submit" class="btn-shadow btn-wide btn btn-success btn-lg btn-hover-shine" data-toggle="tooltip" data-placement="top" title="{{ __('Cadastrar') }}" data-original-title="{{ __('Cadastrar') }}"> {{ __('Cadastrar') }} </button>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="divider"></div>
													<div class="clearfix">
														<button type="button" id="reset-btn" class="d-none"></button>
														<button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Próximo</button>
														<button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Anterior</button>
													</div>
												</div>
											</div>
										</div>
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
<script type="text/javascript" src="{{asset('./vendors/@chenfengyuan/datepicker/i18n/datepicker.pt-BR.js') }}"></script>
<script type="text/javascript" src="{{asset('./vendors/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/inputmask/dist/jquery.inputmask.min.js') }}"></script>
<script type="text/javascript" src="{{asset('./js/frontend/jquery.smartWizard.js') }}"></script>
<script type="text/javascript" src="{{asset('./js/frontend/form-wizard-filie-se.js') }}"></script>
<script type="text/javascript" src="{{asset('./js/cep.js') }}"></script>


<script>


	$( "#filie-se-form" ).submit(function( event ) {
 // alert( "Handler for .submit() called." );
  //event.preventDefault();
	});



	$(document).on('submit','#filie-se-form',function () {
		console.log('filie-se-form')
	//if ($("input").is(":invalid")) {
    //  alert('invalid!');
    //};
	});

	$(document).on('blur','#rf',function () {
		identificador =  $('#rf').val();

		if(identificador.length == 0){
			$('#rf').removeClass('bg-danger')
			$('#rf').removeClass('bg-success')
			$('#rf').removeClass('border-success')
			$('#rf').removeClass('border-danger')
		}
		else{
			data_rota="{{route('frontend.verificaIdentificador')}}";
			token = "{{ csrf_token() }}";
			$.ajax({
				url: data_rota,
				data: {
					token: token,
					identificador: identificador
				},
				method: 'post'
			}).done(function (response) {
				if(response.error != null){
					toastr.clear();
					$('#rf').removeClass('bg-success')
					$('#rf').removeClass('border-success')
					$('#rf').addClass('bg-danger')
					toastr.error(response.error, 'ATENÇÃO');
				}
				else if(response.success != null){ 
					toastr.clear();
					$('#rf').removeClass('bg-danger')
					$('#rf').removeClass('border-danger')
					$('#rf').addClass('bg-success')
					$('#rf').addClass('border-success')
				}else{
					$('#rf').removeClass('bg-danger')
					$('#rf').removeClass('bg-success')
					$('#rf').removeClass('border-success')
				}
			});
		}
	});

	$(document).on('blur','#txtCPF',function () {
		cpf =  $('#txtCPF').val();
		data_rota =  "{{ route('frontend.verificar.cpf','%s')}}";
		data_rota = data_rota.replace('%s',cpf)

		token = "{{ csrf_token() }}";
		$.ajax({
			url: data_rota,
			data: {
				token: token,
				cpf: cpf
			},
			method: 'get'
		}).done(function (response) {
			$(this).addClass('is-valid');
		}).fail(function(response) {
			msg = response.responseJSON.msg ?? 'O cpf informado é inválido';
			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
			$(this).addClass('is-invalid');
		});
	});

	$(document).on('blur','#rg',function () {
		rg =  $('#rg').val();
		data_rota =  "{{ route('frontend.verificar.rg','%s')}}";
		data_rota = data_rota.replace('%s',rg)
		token = "{{ csrf_token() }}";
		$.ajax({
			url: data_rota,
			data: {
				token: token,
				rg: rg
			},
			method: 'get'
		}).done(function (response) {
			$(this).addClass('is-valid');
		}).fail(function(response) {
			msg = response.responseJSON.msg;
			toastr.clear();
			toastr.error(msg, 'ATENÇÃO');
			$(this).addClass('is-invalid');
		});
	});

	$(document).ready(function() {
		$('#nascimento').datepicker({
			language :'pt-BR',
			zIndex: 99999,
			autoHide: true
		});

		nascimento_data_inputmask ="'mask\': \'99/99/9999'";
		$("#nascimento").attr('data-inputmask',nascimento_data_inputmask);
		$("#nascimento").inputmask();
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
</script>
@endsection