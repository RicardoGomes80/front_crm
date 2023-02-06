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
<title>Audiência Pública sobre a PEC 555</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Audiência Pública sobre a PEC 555</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Audiência Pública sobre a PEC 555</h4>
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
			<div>Realizou-se no dia 13 de maio de 2014, no Auditório Teotônio Vilela, da Assembleia Legislativa do Estado de São Paulo, Audiência Pública pela aprovação da Proposta de Emenda à Constituição - PEC 555/06, que revoga o artigo 4º da Emenda Constitucional 41/2003, extinguindo gradativamente a cobrança de contribuição previdenciária dos servidores públicos aposentados e pensionistas.</div><div><br></div><div>De iniciativa do Deputado Estadual Prof. Carlos Giannazi e da Frente Nacional São Paulo pela PEC, o evento contou com a presença do Deputado Estadual Olímpio Gomes, que hipotecou total apoio à causa dos servidores públicos (ativos e aposentados) e pensionistas, do Deputado Federal Arnaldo Faria de Sá, que fez um candente e contundente pronunciamento relativo às circunstâncias que envolvem a PEC 555/06, além de depoimentos de representantes de movimentos e de entidades sindicais de outros estados brasileiros.</div><div><br></div><div>Foram instaladas, sequencialmente, quatro mesas de expositores, registrando-se a participação da APROFEM na quarta mesa, representada pelo Prof. Arnaldo Ribeiro dos Santos, que destacou alguns aspectos políticos e jurídicos da questão.</div><div><br></div><div>Antes a perspectiva de o Governo Federal investir pesadamente contra a PEC 555/06 ao propor medidas referentes ao reajuste fiscal para 2015, audiências públicas estão sendo realizadas em diversos Estados da Federação, com o objetivo de mostrar aos parlamentares de Brasília que votar contra a PEC 555/06 é apoiar o governo em um ato de cruel injustiça e juridicamente absurdo.</div><div><br></div><div>Objetivamente, a PEC 555/06 propõe o fim da cobrança de contribuição previdenciária de quem já está aposentado ou já enquadrado como pensionista.</div><div><br></div><div>Por razões óbvias, é imprescindível o incondicional apoio de todos os servidores públicos ativos e aposentados, bem como de pensionistas, a todos os eventos que visem fortalecer esta corrente pró PEC 555/56.</div><div><br></div><div><b>Próximos eventos</b></div><div><b><br></b></div><div><b>Manifestação:</b></div><div>Dia 26 de maio de 2014 , às 09 horas, na sede do Centro do Professorado Paulista, na Avenida</div><div>Liberdade, 928 - Estação São Joaquim do Metrô.</div><div> </div><div><b>Encontro de Aposentados e Pensionistas no Congresso Nacional:</b></div><div>Dia 29 de maio de 2014, às 09 horas, no Auditório Nereu Ramos - Brasília-DF.</div>
		</div>
	</div>
</div>
@endsection