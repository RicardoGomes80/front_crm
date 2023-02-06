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
<title>Conferência Nacional de Educação (CONAE) - Etapa Nacional</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Conferência Nacional de Educação (CONAE) - Etapa Nacional</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Conferência Nacional de Educação (CONAE) - Etapa Nacional</h4>
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
			<div>A segunda edição da CONAE será realizada de 19 a 23 de novembro de 2014, em Brasília, e terá como tema central, conforme prevê o Documento-Referência: "O PNE na Articulação do Sistema Nacional de Educação": Participação Popular, Cooperação Federativa e Regime de Colaboração. A <b>APROFEM</b> far-se-á representar.</div><div><br></div><div>A CONAE/2014 possui caráter deliberativo e apresentará um conjunto de propostas que subsidiará a implementação do Plano Nacional de Educação (PNE), indicando responsabilidades, corresponsabilidades, atribuições concorrentes, complementares e colaborativas entre os entes federados e os sistemas de ensino. </div><div><br></div><div>O Plano Nacional de Educação (PNE), que define os rumos da educação brasileira de 2014 a 2024, foi sancionado através da Lei nº 13.005, de 25 de junho de 2014.</div><div><br></div><div>A CONAE/2014 foi precedida por etapas preparatórias, compreendidas em conferências livres e conferências ordinárias municipais e/ou intermunicipais, estaduais e do Distrito Federal, sendo todas estas atividades realizadas até o final de 2013.</div><div><br></div><div><div><br></div><div>Para saber mais, acesse o site: <a href="http://conae2014.mec.gov.br/" target="blank"><b>CONAE 2014</b></a></div></div>
		</div>
	</div>
</div>
@endsection