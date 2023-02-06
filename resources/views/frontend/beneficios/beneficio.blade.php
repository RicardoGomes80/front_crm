@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
@endpush
@section('content')
<div class="p-0 m-0 imagem_principal_full">
	<img src="{{asset('storage/uploads/cms/header-')}}{{$page}}.png" width="100%">
</div>
<div class="container-fluid pl-0 ml-0 ">
	<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 p-0 m-0 mt-4 pt-4 pb-4">
			<h5><b>Convênios e Benefícios</b></h5>
			<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
				<div class="progress-bar progress-bar-xs bg-warning indicador-progress-bar"></div>
			</div>
		</div>
		<div class="col-11 p-0 m-0 mt-4 pt-4 pb-4">
			<h2><b>{{__($page)}}</b></h2>
		</div>
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4">
			<div class="col-12 bg-light border rounded mr-2 pr-2 ml-2 pl-2">				
				<div class="row p-0 m-0 pl-4">
					<div class="col-12 p-0 m-0 mt-4 pt-4 pb-4">
						<h2 class="font-16"><b>EXCLUSIVO PARA FILIADOS</b></h2>
						<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
							<div class="progress-bar progress-bar-xs bg-warning indicador-progress-bar"></div>
						</div>
					</div>					
					<div class="col-12 p-0 m-0 pb-4">
						<h2 class="font-14">Para obter mais informações sobrer este benefício ligue: (11) 3292-5500.</h2>
					</div>
					<div class="col-12 p-0 m-0 pb-4 pl-4">
						<div class="float-left pb-2"><button class="mr-2 btn-pill btn-transition btn btn-primary">DESEJO SER FILIADO(A)</button></div>
					</div>
				</div>
			</div>				
		</div>			
	</div>
</div>
@include("frontend.beneficios.inc-$page")
<div class="row pl-0 pt-4 mr-auto ml-auto d-flex justify-content-center">
	<h2 class="font-16"><b>APROVEITE ESTE BENEFÍCIO!</b></h2>
</div>
<div class="row pl-0 pt-4 mr-auto ml-auto d-flex justify-content-center">
	<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4">
		<div class="col-11 mr-2 pr-2 ml-2 pl-2">
			<div class="col-12 mb-7">
				<h2 class="font-16"><b>Observações</b></h2>
			</div>
			<div class="col-12 mb-7">
				<img src="{{asset('storage/uploads/cms/agendamento.png')}}">
				<span>Agendamento sujeito à disponibilidade de vagas e regras de utilização;</span>
			</div>
			<div class="col-12 mt-3 mb-7">
				<img src="{{asset('storage/uploads/cms/atendimento.png')}}">
				<span>O atendimento segue todos os Protocolos de Segurança e Recomendações da OMS 
				(Organização Mundial de Saúde), evitando-se riscos de contaminação por COVID-19.</span>
			</div>
		</div>
	</div>
</div>
<div class="row pl-0  mr-auto ml-auto d-flex justify-content-center">
	<div class="col-11 pl-4 pt-4">
		<hr>
		<p class="text-justify pt-2">
			<em>A APROFEM é extremamente criteriosa na seleção de seus parceiros, visando à qualidade das parcerias. Entretanto, a responsabilidade pela qualidade, valores, cobranças, coordenação, validação de diplomas, certi&shy;ficados é exclusiva do prestador, cuja contratação é direta com o filiado interessado.</em>
		</p>
	</div>
</div>
@include('frontend.layouts.partials.localizacoes')
@endsection