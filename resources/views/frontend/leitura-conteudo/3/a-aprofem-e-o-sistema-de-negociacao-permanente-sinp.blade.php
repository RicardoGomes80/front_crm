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
<title>A APROFEM e o Sistema de Negociação Permanente (SINP)</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">A APROFEM e o Sistema de Negociação Permanente (SINP)</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>A APROFEM e o Sistema de Negociação Permanente (SINP)</h4>
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
			<p><em><sup>Notícia publicada em 26/03/2013</sup></em><br></p><p class="text-justify">A Presidência da APROFEM participou da solenidade de reinstalação do SINP, juntamente com outras lideranças sindicais, em solenidade ocorrida no dia 25 de março.</p><p class="text-justify">Este histórico evento marca a retomada formal das negociações entre Governo Municipal e Entidades Representativas, que efetivar-se-á com a instalação da Mesa Central e das Mesas Setoriais de Negociação. A APROFEM posicionou-se pela aceleração dos trabalhos, dada a proximidade da data-base dos servidores municipais (1º de maio) e a necessidade de assegurarmos o recomeço de um processo negocial sério, centrado no Fórum de Entidades Sindicais, para se chegar a resultados animadores para o universo de servidores da Capital. Maiores detalhes dos nossos propósitos nesse processo podem ser encontrados na primeira página da última edição (março/abril) do Jornal APROFEM, cuja edição eletrônica encontra-se disponível neste Portal.</p><p class="text-justify">A relevância do SINP para o Governo Municipal pode ser aquilatada pelo teor da mensagem postada no Portal da Prefeitura, no dia seguinte à realização do evento, de onde destacamos os seguintes trechos: <br></p><div class="text-justify"><i><b>"Haddad reabre SINP e cria canal de diálogo com servidores municipais, Prefeito reforçou compromisso com a transparência nas negociações com o funcionalismo."</b></i></div><p class="text-justify"><br>O prefeito de São Paulo comprometeu-se, nesta segunda-feira (25), a manter um diálogo contínuo com os servidores municipais e reforçou compromissos com a categoria. <i><b>"O primeiro é que palavra dada é palavra honrada. Em segundo lugar: transparência. As contas da prefeitura serão abertas nos limites das nossas possibilidades"</b></i>, disse.</p><p class="text-justify">Haddad participou da reunião de reabertura do SINP - Sistema de Negociação Permanente, realizada no Edifício Martinelli, no Centro. Por meio do órgão, a Prefeitura irá discutir com os servidores maneiras de valorizar a carreira e o funcionalismo público municipal. <br></p><div class="text-justify"><i><b>"Nossa disposição é abrir as contas para que nós possamos navegar em águas transparentes. Podem ser águas revoltas, mas serão transparentes, para que seja possível formar um juízo a respeito das nossas possibilidades"</b>, afirmou. <b>"Nós queremos um serviço público de qualidade, com autoestima"</b></i>, disse.</div><p class="text-justify"><i><b><br>"A gente tem que respeitar os servidores, e é com esse espírito que estamos reinstalando o SINP"</b></i>, afirmou a secretária de Planejamento, <i><b>"Serviço público sem o servidor não existe. Nós precisamos melhorar a gestão para que possamos permitir que, de fato, haja este envolvimento dos servidores"</b></i>, disse o secretário de Saúde.</p><p class="text-justify">O SINP é composto por uma Mesa Central de Negociação, Mesas Setoriais, instaladas nas secretarias municipais, e Mesas Locais ou Regionais, instaladas em unidades prestadoras de serviços da Prefeitura.</p>
		</div>
	</div>
</div>
@endsection