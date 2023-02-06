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
<title>Senhores Representantes Sindicais</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Senhores Representantes Sindicais</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Senhores Representantes Sindicais</h4>
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
			<b>Referência:</b><div><br><div><ul><li><span style="line-height: 1.2;">Análise da oportunidade e conveniência de ingresso com Ação Judicial assecuratória da manutenção do direito às férias coletivas (janeiro) para os Profissionais ameaçados de não usufruí-las.;</span><br></li></ul></div><div><br></div><div>Com referência a este assunto, levantado durante a Reunião do dia 25 de novembro, a APROFEM consultou a sua Assessoria Jurídica e o Ministério Público, obtendo pareceres semelhantes dando conta, no presente momento, da sua inconsistência jurídica e ineficácia, face à já existência de Ação Coletiva de autoria da Defensoria Pública, julgada procedente em 2ª instância (TJ – SP) com definições contrárias aos interesses dos educadores municipais, e com recursos interpostos pela Procuradoria do Município e também pela APROFEM, que aguardam decisão sobre a admissibilidade para o processamento em última instância.</div></div>
		</div>
	</div>
</div>
@endsection