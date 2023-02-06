@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}">    
@endpush
@section('content')
<div class="container-fluid">
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><img class="img-icon" src="{{asset('./images/cms/cursos.png')}}" width="54px" height="45px"> <b>Cursos Aprofem</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="container pt-3 mt-3">
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Meus Cursos Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><img class="img-icon" src="{{asset('./images/cms/3285300_launch_rocket_space_spacecraft_spaceship_icon.png')}}" width="54px" height="45px"> <b>Viagens</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="container pt-3 mt-3">
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><img class="img-icon" src="{{asset('./images/cms/416403_forecast_sock_weather_wind_icon.png')}}" width="54px" height="45px"> <b>Cursos Aprofem</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="container pt-3 mt-3">
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Meus Cursos Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><img class="img-icon" src="{{asset('./images/cms/3285300_launch_rocket_space_spacecraft_spaceship_icon.png')}}" width="54px" height="45px"> <b>Viagens</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="container pt-3 mt-3">
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-5 mb-5">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="col-12 ">
							<h5><img class="img-icon" src="{{asset('./images/cms/Desktop01.png')}}"> <b>Cursos Aprofem</b></h5>
							<div class="progress-bar-xs progress h2px">
								<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-navbar-menu-2 mt-5 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
						<div class="container pt-3 mt-3">
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Meus Cursos Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm pb-4 pt-4 mb-4 mt-4 pb-2 widget-chart btn-icon-vertical btn-transition-text btn-transition btn-transition-alt fs-6 card" style="border-radius: 15px">
									<div class="row">
										<div class="col-sm text-warning  mb-2 pt-3 font-15 text-left">
											<span>Viagens Mock</span><br>
										</div>
										<div class="col-sm  mb-2 pt-3 font-15 text-left">
											<a href="{{env('APP_URL')}}/" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
		<div class="col-4">
			<div class="row mr-auto ml-auto d-flex justify-content-center">
				<div class="col-navbar-menu-2 mt-0 mb-10">
					<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
						<div class="container pt-0 mt-0 mb-3">
							<div class="col-sm card mb-0 mt-0 pt-5 pb-5" style="border-top-left-radius: 15px !important; border-top-right-radius: 15px;  background:#e64980">
								<div class="row">
									<div class="col-sm text-warning mb-5 pt-5 font-15 text-center">
										<img class="img-icon" src="{{asset('./images/cms/icons.png')}}">
									</div>
								</div>
								<div class="row">
									<div class="col-sm text-white mb-2 pt-0 font-18 text-center">
										{!! __('Comunicados <br> Imortantes')!!}
									</div>
								</div>
							</div>
							<div class="col-sm card p-0 m-0 mb-5" style="border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px;  background:#fff">
								<div class="row">
									<div class="col-sm mb-2 mt-4 pt-4 text-center pl-5 pr-5 font-14">
										{{__('Confira aqui  todos os comunicados importantes e úteis para você')}}
									</div>
								</div>
								<div class="row text-center">
									<div class="col-sm  mt-3 mb-3 pt-3 pb-3">
										<a href="{{env('APP_URL')}}/" type="button" class="pull-center text-muted btn btn-pill btn-sm btn-orange pl-5 pr-5 font-15">
											{{__('Ver Mais')}}
										</a>
									</div>
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