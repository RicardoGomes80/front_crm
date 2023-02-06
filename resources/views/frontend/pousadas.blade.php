@extends('frontend.layouts.app_frontend')
@section('title', __('Listagem de pousadas'))
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/datetimepicker/build/jquery.datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{asset('./css/slippry.css')}}">
<link rel="stylesheet" href="{{asset('./vendors/select2/dist/css/select2.css')}}">
<link rel="stylesheet" href="{{asset('./css/frontend/custom_select2.css')}}">
@endpush
@section('content')
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="card shadow-sm  border mb-5 mt-3">
			<div class="d-flex justify-content-center">
				<div class="col-11 mb-2 mt-2 mb-4 ">
					<form class="" action="" autocomplete="off">
						<div class="form-row">
							<div class="position-relative mt-2 col-md-3 col-sm-6 col-12 text-center">
								{!! Form::label('pousada', __('Colônia/Pousada'), ['class' => 'text-center']) !!}
								<div class="col-12 mt-1">
									{!! Form::select('pousada', $pousadasPluck ?? [], request()->pousada ?? ($pousadaAtual->id ?? null) , ['class' => ['form-control set-select2'], 'placeholder' => __('Selecione'), 'required' => true]) !!}
								</div>
							</div>		
							<div class="position-relative mt-2 col-md-2 col-sm-5 col-12 text-center">
								{!! Form::label('pacote-periodo', __('Reservar por'), ['class' => '']) !!}
								<div class="col-12 mt-1">
									{!! Form::select('pacote_periodo', $tiposReserva ?? [], request()->pacote_periodo, ['class' => ['set-select2 form-control'], 'id' => 'pacote-periodo', 'placeholder' => __('Selecione'), 'required' => true]) !!}
								</div>
							</div>		
							<div class="position-relative mt-2 col-md-3 col-12 text-center">
								{!! Form::label('checkin-date', __('Data'), ['class' => '']) !!}
								<div class="form-row ml-2 mr-2">
									<div class="col-sm-6 col-12 mt-1">
										<input type="text" placeholder="Check-in" class="form-control datepicker text-muted font-9" id="checkin-date" name="checkin" autocomplete="off" value="{{ request()->query('checkin','')}}" required autocomplete="off">
									</div>
									<div class="col-sm-6 col-12 mt-1">
										<input type="text" placeholder="Check-out" class="form-control datepicker text-muted font-9" id="checkout-date" name="checkout" autocomplete="off" value="{{ request()->query('checkout','')}}" required autocomplete="off">
									</div>
								</div>
							</div>
							<div class="position-relative mt-2 col-md-2 col-sm-6 col-12 text-center">
								{!! Form::label('total-hospedes', __('Hóspedes'), ['class' => '']) !!}
								<div class="col-12 mt-1">
									{!! Form::select('hospedes', $rangeHospedes, request()->hospedes, ['class' => ['set-select2 form-control'], 'id' => 'total-hospedes', 'placeholder' => __('Selecione'), 'required' => true]) !!}
								</div>
							</div>
							<div class="mt-2 col-md-1 col-sm-1 col-1">
								<label>&nbsp;</label>
								<div class="col-8 mt-1">
									@if($logged_in_user != null)
									<button class="btn btn-primary-2 btn-hover-shine ">
										<span class="font-12 pt-1 pb-1">{{__('Buscar')}}</span>
									</button>
									@else
									<div type="button" class="btn btn-primary-2 btn-hover-shine openLoginModal" data-target="#myModal">
										<span class="font-12 pt-1 pb-1">{{__('Entrar')}}</span>
									</div>
									@endif
								</div>
							</div>
						</div>
						@if(!empty($msgError))
						<div class="form-row">
							<div class="position-relative mt-2  col-12 text-center">
								<span class="text-danger">{!! $msgError !!}</span>
							</div>
						</div>
						@endif
					</form>
				</div>
			</div>			
			<div class="row p-2 m-2">
				@if (!empty($quartos) && $quartos->error == false) 
				<div class="col-12 p-0">
					<div class="card-s mt-3 border-bottom d-none d-md-block">
						<div class="row text-sm-left text-center text-dark">
							<div class="col-md-4 mt-3 mb-3">
								<strong>
									{{__('Quartos')}}
								</strong>
							</div>
							<div class="col-md-3 mt-3 mb-3">
								<strong>
									{{__('Capacidade')}}
								</strong>
							</div>
							<div class="col-md-3 mt-3 mb-3">
								<strong>
									{{__('Status')}}
								</strong>
							</div>
							<div class="col-md-2 mt-3 mb-3">
								<strong>#</strong>
							</div>
						</div>
					</div>
					@foreach ($quartos as $key => $quarto)
					<div @class(['card-s border-bottom mt-2 mb-2 ', 'odd-s' => intval($key) % 2 == 0, 'even-s' => intval($key) % 2 !== 0]) data-quarto="{{$quarto->id}}">
						<div class="row text-sm-left text-center">
							<div class="col-md-4 col-12 mt-3 mb-3 ">
								<span class="d-inline-block d-md-none ml-2 ml-md-0">{{__('Quarto')}}: </span>
								{{$quarto->nome }}
							</div>
							<div class="col-md-3 col-12 mt-3 mb-3">
								<span class="d-inline-block d-md-none ml-2 ml-md-0">{{__('Capacidade')}}: </span>
								{{__('Até')}} {{$quarto->total_hospedes }} 	{{__('hóspedes')}}					
							</div>
							<div class="col-md-3 col-12 mt-3 mb-3">
								<span class="d-inline-block d-md-none ml-2 ml-md-0">{{__('Status')}}: </span>
								<span @class([ 'alert p-2', 'alert-success ' => !empty($quarto->disponivel), 'alert-danger' => !empty($quarto->pago), 'alert-warning'  	=> !empty($quarto->ocupado), ])>
									{{Str::upper($quarto->status) }}
								</span>
							</div>
							<div class="col-md-2 col-12 mt-3 mb-3">
								@if ($quarto->status == 'disponível')
								@if (!empty(request()->pacote_periodo) && request()->pacote_periodo == 'pacote' && !empty($quarto->pacote[0])  && !empty($quarto->pacote[0]->id))
								<a href="{{route('frontend.user.pousadas.quartos.index', [$pousadaAtual->id, $quarto->id, request()->getQueryString() . "&pacote_id={$quarto->pacote[0]->id}"])}}" type="button" class="ml-2 ml-md-0 btn btn-hover-shine btn-primary-2">
									{{__('Detalhes')}}
								</a>
								@else
								<a href="{{route('frontend.user.pousadas.quartos.index', [$pousadaAtual->id, $quarto->id, request()->getQueryString()])}}" type="button" class="ml-2 ml-md-0 btn btn-hover-shine btn-primary-2">
									{{__('Detalhes')}}
								</a>
								@endif
								@else
								@endif
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@else
				@if($logged_in_user != null)
				<div class="col-12 text-center mt-2 text-dark">
					<h4>{{ $quartos->message ?? 'Sem dados para exibir' }}</h4>
				</div>
				@endif
				@endif
			</div>
		</div>
		<div class="justify-content-center" style="margin-left: 7%;" id="recebe_info"></div>
		<div class="row">
			<div class="col-12">
				<div class="card shadow-none bg-transparent">
					<div class="card-body pl-0 pr-0">
						<div class="row justify-content-center">
							<div class="col-11 mb-5 mt-2 justify-content-center">
								<div class="row text-center">
									@foreach ($pousadas as $key => $pousada)
									<div class="col-md-6 col-12 mb-5 p-1 custom-card-box rounded">
										<div>
											<a href="#" class="text-dark font-12 btn-pousada" data-id="{{$pousada->id}}" title="{{__('Mais detalhes')}}">
												@if(!empty($pousada->images))
												@php
												$images = explode(',',$pousada->images);
												@endphp
												<img src="{{$images[0]}}" title="{{__('Imagem pousada/colônia')}}" class="img-fluid rounded w-100" style="min-height:300px;max-height:300px;width:676px;max-width:676px">
												@else
												<img src="{{asset('images/banners/default-empty-pousada.png')}}" title="{{__('Imagem padrão pousada/colônia')}}" class="img-fluid rounded w-100" style="min-height:300px;max-height:300px;width:676px;max-width:676px">
												@endif
											</a>
										</div>
										<div class="col-12">
											<a href="{{route('frontend.user.pousadas.detalhes', [$pousada->id])}}" class="text-dark font-12" title="{{__('Mais detalhes')}}">
												<strong>
													{{ $pousada->nome }}
												</strong>
											</a>
										</div>
									</div>
									<div class="justify-content-center d-none" id="matrix_{{$pousada->id}}">
										<div class="col-12 text-center">
											<h2 class="text-dark">
												<strong>{{ $pousada->nome }}</strong>
											</h2>
										</div>
										<div class="row mt-2">
											<div class="col-6">
												<div class="col-12 ">
													<div class="sy-box thumbnails">
														<ul id="thumbnails_{{$pousada->id}}">
															@foreach ($images as $key => $setImg)
															<li><a href="#slide{{$key+1}}"><img src="{{$setImg}}" alt="{{$pousada->nome}}"></a></li>
															@endforeach
														</ul>
													</div>
													<div class="thumb-box">
														<ul class="thumbs">
															@foreach ($images as $key => $setImg)
															<li>
																<a href="#{{$key+1}}" data-slide="{{$key+1}}">
																	<img src="{{$setImg}}" width="355px" height="166px" alt="{{$pousada->nome}}" style="height: 166px;">
																</a>
															</li>
															@endforeach
														</ul>
													</div>
												</div>
											</div>
											<div class="col-5">
												<div class="col-12">
													<h4 class="text-dark">
														<strong>{{ $pousada->nome }}</strong>
													</h4>
												</div>
												<div class="col-12 mb-2">
													{!! $pousada->descricao !!}
												</div>
												<div class="col-12 mt-2">
													<i class="text-primary fa fa-map-marker-alt"></i>
													<span class="ml-2">
														{{ $pousada->endereco }}
														{{ $pousada->numero }}
														{{ $pousada->bairro }}
													</span>
													<br>
													<span class="ml-4">
														{{ $pousada->cidade }} ({{ $pousada->estado_sigla }})
													</span>
													<br>
													<span class="ml-4">
														{{__('CEP')}} {{ $pousada->cep }}
													</span>
												</div>
												@if (!empty($textHospedes))
												<div class="col-12 mt-2">
													<i class="text-primary fa fa-users"></i>
													<span class="text-dark font-10">{{$textHospedes }}</span>
												</div>
												@endif
												<div class="col-12">
													{!! $pousada->complemento!!}
												</div>
												@if (!empty($pousada->informacoes_gerais))
												<div class="col-12 mt-5 mb-3 text-center">
													<h4 class="text-dark">{{ __('Informações gerais') }} </h4>
												</div>
												<div class="col-12">
													{!! $pousada->informacoes_gerais !!}	
												</div>
												@endif
												@if(!empty($pousada->detalhes))
												<div class="col-12 mt-5 mb-3">
													<h4 class="text-dark">{{ __('Opcionais') }} </h4>
												</div>
												<div class="col-12 mb-3">
													<div class="row justify-content-sm-between">
														@foreach($pousada->detalhes as $opcional)
														<div class="col-12  d-block d-md-none">
															<div class="col-12">
																<i class="text-primary fa-2x {{$opcional->classe_icone}}"></i>
																<span class="font-8">{{$opcional->item}}</span>
															</div>
														</div>
														<div class="col-2 card text-center shadow-sm ml-2 mr-2 mt-1 mb-1 d-none d-md-block">
															<div class="col-12">
																<i class="text-primary fa-2x {{$opcional->classe_icone}}"></i>
															</div>
															<div class="col-12">
																<span class="font-8">{{$opcional->item}}</span>
															</div>
														</div>
														@endforeach
													</div>
												</div>
												@endif
												@if (!empty($pousada->regimento))
												<div class="col-12 mt-5 mb-3 text-center">
													<h4 class="text-dark">{{ __('Regimento') }} </h4>
												</div>
												<div class="col-12">
													{!! $pousada->regimento !!}	
												</div>
												@endif
												@if (!empty($pousada->orientacao))
												<div class="col-12 mt-5 mb-3">
													<h4 class="text-dark">{{ __('Orientações') }} </h4>
												</div>
												<div class="col-12 ml-4">
													{!! $pousada->orientacao !!}	
												</div>
												@endif
												@if (!empty($pousada->observacao))
												<div class="col-12 mt-5 mb-3">
													<h4 class="text-dark">{{ __('Observações') }} </h4>
												</div>
												<div class="col-12 ml-4">
													{!! $pousada->observacao !!}
												</div>
												@endif
											</div>
										</div>										
										<div class="divider"></div>
										<div class="col-12 text-center mt-2 text-dark pt-4 pb-4">
											<h4>{{ __('Confira Outras Pousadas') }}</h4>
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
</div>
@endsection
@push('after-scripts')
<script type="text/javascript" src="{{asset('./vendors/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/datetimepicker/build/jquery.datetimepicker.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./vendors/slippry/dist/slippry.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.set-select2').select2({
			placeholder: $(this).attr('placeholder'),
			containerCssClass : "form-control text-left",
			selectionCssClass : "text-left",
			width: '100%',
			theme: "bootstrap4",
		})
		var thumbs = jQuery('#thumbnails').slippry({
			slippryWrapper: '<div class="slippry_box thumbnails" />',
			transition: 'horizontal',
			pager: false,
			auto: false,
			onSlideBefore: function (el, index_old, index_new) {
				jQuery('.thumbs a img').removeClass('active');
				jQuery('img', jQuery('.thumbs a')[index_new]).addClass('active');
			}
		});
		$('.datepicker').datetimepicker({
			language: 'pt-BR',
			zIndex: 99999,
			autoHide: true,
			step: 1,
			format:'d/m/Y',
			timepicker:false,
			minDate: '{{date('d/m/Y')}}',
		});
		$.datetimepicker.setLocale('pt');
		$(document).on('click','.btn-pousada',  function (e) {
			$("#recebe_info").html('');
			var id  = $(this).attr('data-id');
			matrix = $("#matrix_"+id).html();
			$("#recebe_info").html(matrix);
			thumbs = jQuery('#thumbnails_'+id).slippry({
				slippryWrapper: '<div class="slippry_box thumbnails" />',
				transition: 'horizontal',
				pager: false,
				auto: true,
				autoplay: true,
				autoplaySpeed: 2000,
				onSlideBefore: function (el, index_old, index_new) {
					jQuery('.thumbs a img').removeClass('active');
					jQuery('img', jQuery('.thumbs a')[index_new]).addClass('active');
				}
			});
		});
		$(document).on('click','.thumbs li a',  function (e) {
			jQuery('#thumbnails_1').slippry().goToSlide(2)
			thumbs.goToSlide($(this).data('slide'));
			return false;
		});
	})
</script>
@endpush