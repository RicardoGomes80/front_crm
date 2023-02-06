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
<title>Ação Judicial Coletiva</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Ação Judicial Coletiva</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Ação Judicial Coletiva</h4>
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
			<div><b>APOSENTADOS DO ENSINO MUNICIPAL - INCLUSÃO NAS DUAS REFERÊNCIAS</b></div><div><br></div><div>Atendendo aos apelos dos seus filiados, a <b>APROFEM</b> ingressará, em breve,  com uma Ação Coletiva visando conseguir o enquadramento dos seus filiados do Quadro do Magistério (docentes e gestores educacionais), aposentados e pensionistas nas últimas referências, nas referências acrescidas pela Lei nº 15.963, de 15/01/2014.</div><div><br></div><div>Por se tratar de Ação Coletiva, os filiados interessados não arcarão com qualquer custo, estando inclusive desobrigados de pagamento de eventual sucumbência. Havendo necessidade de apresentação de itens de documentação ou qualquer outra providência, a <b>APROFEM</b> utilizará os seus meios de comunicação para cientificar os interessados, em tempo hábil.</div><div><br></div><div>É importante registrar que a Prefeitura sempre procura fazer (quando a Justiça já não o faz) com que os efeitos da ação vitoriosa só beneficiem àqueles que comprovarem a filiação à Entidade, anterior ao ingresso da ação. Por essa razão, a<b> APROFEM</b> conclama seus filiados a explicar tal situação a outros docentes e/ou gestores educacionais municipais aposentados não filiados à Entidade para que, havendo interesse, essa filiação seja providenciada em tempo hábil e da forma possível que se revelar mais cômoda para os interessados (informações sobre a filiação: tel: 3292-5500, com as professoras Elaine ou Débora).</div>
		</div>
	</div>
</div>
@endsection