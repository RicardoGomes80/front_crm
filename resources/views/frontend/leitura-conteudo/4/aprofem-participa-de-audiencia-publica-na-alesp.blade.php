@extends('frontend.layouts.app_frontend')
@section('content')
<link rel="stylesheet" href="{{asset('/vendors/pgwslideshow/pgwslideshow.min.css')}}"/>
@push('js-scripts')
<script type="text/javascript" src="{{asset('/vendors/pgwslideshow/pgwslideshow.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		if($('#useSlider').val() ==1){
			$('.pgwSlideshow').pgwSlideshow(
			{
				transitionEffect : 'fading',
				adaptiveDuration : 400,
				autoSlide: 1,
			});
		}
	});
</script>
@endpush
<title>APROFEM participa de Audiência Pública na ALESP</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">APROFEM participa de Audiência Pública na ALESP</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>APROFEM participa de Audiência Pública na ALESP</h4>
		</div>
		<div class="col-sm">
			<!-- TEXTO_PUPLICADO_POR -->
		</div>
		<div class="col-sm">
			<!-- TEXTO_DATA_PUPLICACAO -->
		</div>
	</div>
</div>
<div class="container pb-5 mb-5">
	<div class="row">
		<div class="col-sm">
			<div>Atendendo ao convite do Deputado Estadual Carlos Giannazi, em 05.06.2014 a<b> APROFEM</b> se fez representar na Audiência Pública realizada na Assembleia Legislativa do Estado de São Paulo, Sala Tiradentes, ocasião em que diversas abordagens foram feitas pelos presentes em relação ao Projeto de Lei Complementar nº 1, de 2013, que "Garante aos professores Readaptados o direito à aposentadoria especial de magistério".</div><div><br></div><div>Na oportunidade, o representante da <b>APROFEM</b> apresentou um breve relato das ações, discussões acumuladas e conquistas relativas à aposentadoria especial de magistério aos professores readaptados no âmbito municipal.</div><div><br></div><div>Da Audiência Pública participaram professores da região metropolitana da Grande São Paulo e de algumas cidades do interior paulista, os quais, com relatos próprios, contribuíram para a qualificação do evento.</div><div><br></div><div>Também presentes à Audiência entidades representativas do ensino público estadual.</div>
		</div>
	</div>
</div>
@endsection