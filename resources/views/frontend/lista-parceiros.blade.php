@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@section('content')


<div class="container-fluid">
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-10">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><b>{{ $dadosDaUrl->titulo_categoria }} / {{ $dadosDaUrl->titulo }}</b></h5>
							<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
								<div class="progress-bar progress-bar-xs bg-warning indicador-progress-bar"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">

						<div class="main-card mb-3 mt-5 card">
							<div class="card-header">
								<h4>{{ $dadosDaUrl->titulo }}</h4>
							</div>
							<div class="card-body">
								<div class="col-12 mb-xs-2">
									<span class="font-9">{!! $result['descricao'] !!} </span>
								</div>
								<div class="col-12 mb-xs-2 mt-0 mb-5">
									<label for="CMS_ID_COR" class="col-form-label">{{ __('Selecione:') }}<span class="text-danger tooltip-inner-danger" data-toggle="tooltip" data-placement="top" title="Campo requerido" data-original-title="Campo requerido">*</span></label>
									<select id="CMS_ID_COR" class="col-6 set-select2 form-control @error('cor') border-danger @enderror" name="CMS_ID_COR">
										<option value="">Selecione</option>
										@foreach($result['conveniosSelect'] as $conteudo)
										<option value="{{ $conteudo }}">{{ $conteudo }}</option>
										@endforeach
									</select>
									@error('cor')
									<div class="border-danger">
										<small>
											<strong>{{$message}}</strong>
										</small>
									</div>
									@enderror
								</div>
								<div class="col-12 mb-xs-2 mt-0 ">
									@foreach($result['convenios'] as $conteudo)
									<div class="main-card mb-3 card">
										<div class="card-header">
											<i class="header-icon lnr-gift icon-gradient bg-grow-early"></i>
											<b>{{ $conteudo->nome_fantasia }}</b>
										</div>
										<div class="card-body">
											<div class="col-12 mb-xs-2 bg-light pb-2">
												<div class="row pl-0 ml-0 pr-0 mr-0">
													@if(!empty($conteudo->logo))
													<div class="col-2 pl-0 ml-0 pr-0 mr-0 mt-4 mb-4">
														<img src="data:image/png;base64,{{ $conteudo->logo }}"  width="260px" height="160px">
													</div>
													@endif
													<div class="col-10 pl-4 mt-5 mb-5">
														<div class="row ml-4 mt-1 mb-1">
															<b>Endereço: </b>&nbsp; <span class="font-9">{{ $conteudo->endereco }} , {{ $conteudo->numero }} - {{ $conteudo->complemento }}  - {{ $conteudo->cep }} {{ $conteudo->bairro }} - {{ $conteudo->cidade }} {{ $conteudo->regiao }}</span>
														</div>
														<div class="row ml-4 mt-1 mb-1">
															<b>Central de Atendimento: </b>&nbsp;
															@foreach($conteudo->telefones as $telefone)
															<span class="font-9">
																({{ $telefone->ddd }}) - {{ Helper::formataTelefoneView($telefone->telefone) }}
															</span>
															@endforeach
														</div>
														<div class="row ml-4 mt-1 mb-1">
															<b>Site: </b>&nbsp; <span class="font-9"> @if(!empty($conteudo->site)) <a target="_blank" href="{{ $conteudo->site }}">{{ $conteudo->site }}</a>
															@endif</span>
														</div>
														<div class="row ml-4 mt-1 mb-1">
															<b>Email: </b>&nbsp; <span class="font-9">{{ $conteudo->email ?? '' }}</span>
														</div>
													</div>
												</div>
												@foreach($conteudo->produtos as $index => $produtos)
												<div class="main-card card m-0 mb-3">
													<div class="card-header">
														<i class="header-icon lnr-gift icon-gradient bg-grow-early"></i>
														<b>Serviço Oferecido: </b> &nbsp; <span class="font-9"> {{ $produtos->titulo }}</span>
														<div class="btn-actions-pane-right">
															<div class="nav">
																<a data-toggle="tab" href="#tab-eg4-{{$index}}-0" class="border-0 btn-transition active btn btn-outline-primary">Descrição</a>
																<a data-toggle="tab" href="#tab-eg4-{{$index}}-1" class="mr-1 ml-1 border-0 btn-transition  btn btn-outline-primary">Termos E Condições</a>
																@if($produtos->inscricao == 1) <a data-toggle="tab" href="#tab-eg4-{{$index}}-2" class="mr-1 ml-1 border-0 btn-transition  btn btn-outline-primary">inscrições</a>@endif
															</div>
														</div>
													</div>
													<div class="card-body">
														<div class="tab-content">
															<div class="tab-pane active" id="tab-eg4-{{$index}}-0" role="tabpanel">
																@if( (!empty($produtos->percentual_desconto)) && ($produtos->percentual_desconto > 0) )
																<p><b>Desconto: </b> &nbsp; <span class="font-9">{{ $produtos->percentual_desconto}}%</span></p>
																@endif	
																<b>Descrição: </b> &nbsp;<span class="font-9">{{ $produtos->descricao }}</span>
															</div>
															<div class="tab-pane" id="tab-eg4-{{$index}}-1" role="tabpanel">
																<p><span class="font-9">{{ $produtos->termos_condicoes }}</span></p>
															</div>
															<div class="tab-pane" id="tab-eg4-{{$index}}-2" role="tabpanel">
																<p>Mock inscrições</p>
															</div>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection