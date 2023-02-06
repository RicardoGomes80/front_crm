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
<title>Audiência Pública sobre o HSPM</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Audiência Pública sobre o HSPM</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Audiência Pública sobre o HSPM</h4>
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
			<div><b>Sua presença é imprescindível para discutir sobre novos rumos da Autarquia</b>.</div><div><br></div><div>Sobre os possíveis rumos a serem tomados em relação ao HSPM, a <b>APROFEM</b> tem se pronunciado em conformidade com o que sempre defendeu, seja no Conselho Gestor da Autarquia, seja nas Audiências Públicas já realizadas sobre o HSPM. Na mais recente Audiência, realizada em 20 de agosto de 2014, foi reapresentado à Comissão Técnica de Saúde cópia de trabalho realizado por nossa Entidade, em 2005, intitulado "Utilização do Hospital do Servidor Público Municipal (HSPM) pelos servidores públicos municipais de São Paulo: um diagnóstico preocupante". Pesquisa de Opinião(*) cujos resultados foram obtidos a partir de respostas dadas a perguntas constantes de questionário distribuído a servidores públicos municipais, filiados ou não à <b>APROFEM</b>. Dos questionários distribuídos, oito mil foram devolvidos para a realização desse trabalho.</div><div><br></div><div>Em que pese o fato de se tratar de uma pesquisa realizada há quase dez anos, numa época em que cada servidor e/ou pensionista compulsoriamente contribuía ao Hospital com base no padrão de vencimentos/proventos, a natureza dos problemas e possíveis soluções apontadas pela <b>APROFEM</b> fazem-se, ainda hoje, presentes.</div><div><br></div><div><b>Servidor, é hora de participar. </b></div><div><b>Faça-se presente! </b></div><div><b>Importantes decisões que lhe dizem respeito poderão ser tomadas em seu nome!</b></div><div><br></div><div><div style="font-weight: bold;">COMISSÃO DE SAÚDE, PROMOÇÃO SOCIAL, TRABALHO E MULHER</div><div style="font-weight: bold;"><br></div><div><b>Tema: "</b>Aspectos de interesse sobre situação atual do Hospital do Servidor Público Municipal".</div><div><span style="font-weight: bold;">Data: </span>10/09/2014.</div><div><span style="font-weight: bold;">Hora: </span><b>13 h.</b></div><div><span style="font-weight: bold;">Local: </span>Salão Nobre Presidente João Brasil Vita - 8º andar</div><div><span style="font-weight: bold;">Endereço: </span>Viaduto Jacareí, nº 100 - Bela Vista - CÂMARA MUNICIPAL DE SÃO PAULO - PALÁCIO ANCHIETA.</div></div><div><br></div><div><b style="line-height: 14.3999996185303px;">Veja em anexo o teor do documento representado.</b></div>
		</div>
	</div>
</div>
@endsection