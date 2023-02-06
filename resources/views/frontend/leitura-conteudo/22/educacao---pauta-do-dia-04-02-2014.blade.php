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
<title>Educação - Pauta do dia 04/02/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 04/02/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 04/02/2014</h4>
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
			<div><span rel="line-height: 1.2;"><b>1 - Lei nº 15.963, de 15/01/2014, </b>que acrescentou duas referências às Tabelas de Vencimentos do Quadro do Magistério, do Quadro dos Profissionais de Educação, na opinião da APROFEM precisa de uma discussão não apenas sobre sua regulamentação, mas de urgente alteração na própria lei, visando, dentre outras, a inclusão dos aposentados e pensionistas nas novas referências, o enquadramento automático para os da ativa que já detenham as condições previstas, a garantia das três tabelas de opção, hoje vigentes.</span><br></div><div><br></div><div>O governo apenas garantiu a disposição de regulamentar em breve as disposições, tais como se encontram na Lei.</div><div><br></div><div><b>2 - O governo informou </b>que cerca de 38 mil Profissionais de Educação sofrerão descontos na 1ª parcela do PDE deste ano, a ser paga em junho, em função dos cálculos do valor do PDE do ano anterior.</div><div><br></div><div>A APROFEM rebateu as críticas dizendo que foram os critérios adotados que levaram a essa absurda situação e não o desempenho dos Profissionais de Educação. Há, portanto, necessidade de correção das distorções contidas nos critérios adotados. Apontou, também, que é inaceitável que o valor total do prêmio permaneça inalterado após tantos anos.</div><div><br></div><div><b>3 - A decisão do Tribunal</b> de Contas do Município sobre as despesas com os inativos da Educação foi o que motivou a adoção de medidas que transferem, gradativamente as despesas com inativos da educação para os 6% destinados à educação inclusiva. Para a APROFEM, essa decisão traz sérios riscos aos inativos, haja vista que estes já não foram contemplados com o enquadramento nas duas novas referências (o que reforça a ideia de descaso do governo para com a garantia constitucional da paridade aos aposentados).</div><div><br></div><div>Nova Reunião da Mesa Setorial de Negociação da Educação está prevista para o dia 13/03/2014.</div>
		</div>
	</div>
</div>
@endsection