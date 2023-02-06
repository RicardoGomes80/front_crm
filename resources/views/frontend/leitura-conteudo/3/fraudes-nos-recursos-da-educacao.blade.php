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
<title>Fraudes nos recursos da educação</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Fraudes nos recursos da educação</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Fraudes nos recursos da educação</h4>
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
			<p class="text-justify">Recente matéria publicada na revista Época desvela constatações gravíssimas e que não se constituem em surpresa para o cidadão razoavelmente informado: de cada R$ 4 enviados pelo governo federal, R$ 1 (ou 25%) não chegou às escolas - ou foi gasto de forma irregular que não permite a verificação de sua aplicação.</p><p class="text-justify">O levantamento, feito por amostragem em 59 prefeituras de cidades brasileiras, revela os principais "ralos" por onde esses recursos desaparecem:<br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify"><span rel="line-height: 1.2;">fraude e fuga de licitação (é a prática que mais drenou recursos);</span></li><li class="text-justify"><span rel="line-height: 1.2;">falta de prestação de contas;</span></li><li class="text-justify"><span rel="line-height: 1.2;">serviço pago e não executado;</span></li><li class="text-justify"><span rel="line-height: 1.2;">superfaturamento;</span></li><li class="text-justify"><span rel="line-height: 1.2;">desvios para outras áreas.</span></li></ul></div><div class="text-justify"><span rel="line-height: 1.2;">Tal constatação só reforça e justifica ainda mais a posição histórica da APROFEM em exigir, no âmbito da Prefeitura da Capital:</span><br></div><div class="text-justify"><br></div><div class="text-justify"><ul class="text-justify"><li class="text-justify"><span rel="line-height: 1.2;">aparelhamento e adoção de regulamentação que assegure o pleno e eficaz funcionamento de Conselhos Fiscalizadores e assemelhados: do FUNDEB, do HSPM, da Alimentação Escolar, dos serviços de Saúde, da Assistência Social etc.;</span></li><li class="text-justify"><span rel="line-height: 1.2;">reversão da terceirização na alimentação escolar, nos serviços de limpeza e vigilância, e nos serviços de saúde;</span></li><li class="text-justify"><span rel="line-height: 1.2;">revisão da Lei Orgânica, acabando com a destinação de recursos da Educação para fins assistencialistas e estranhos à própria Educação;</span></li><li class="text-justify"><span rel="line-height: 1.2;">maior transparência nas licitações - realização on-line, para dificultar o direcionamento de contratos; anúncio de todas as compras da Prefeitura em pregão eletrônico, favorecendo a participação de todos os interessados.</span></li></ul></div><div class="text-justify"><span rel="line-height: 1.2;">Afinal, são bilhões de reais destinados aos serviços essenciais da população e que, pela amostragem e pelo noticiário recente, têm sua aplicação posta em dúvida.</span><br></div>
		</div>
	</div>
</div>
@endsection