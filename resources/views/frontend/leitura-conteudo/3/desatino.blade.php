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
<title>Desatino*</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Desatino*</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Desatino*</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Julho/Agosto 2012</sup></em></p><blockquote><div><i><b>"Ela desatinou, viu chegar quarta-feira</b></i></div></blockquote><blockquote><div><i><b>Acabar brincadeira, bandeiras se desmanchando</b></i></div><div><i><b>E ela inda está sambando</b></i></div><div><i><b> ...</b></i></div><div><i><b> ...</b></i></div><div><i><b> ...</b></i></div><div><i><b>Ela não vê que toda gente, já está sofrendo normalmente</b></i></div><div><i><b>Toda a cidade anda esquecida, da falsa vida, da avenida</b></i>"</div><div><br></div><div><b>Ela desatinou</b> - Chico Buarque de Hollanda</div></blockquote><div><br></div><p class="text-justify">Quase às vésperas das eleições municipais, o nosso prefeito demonstra desatino em relação às demandas dos servidores públicos da Capital. A imprensa noticia, diariamente, o empenho do alcaide em consolidar as alianças políticas envolvendo o seu novo partido, quer em São Paulo, quer fora daqui. Instado a avaliar a sua gestão, de todos debochou atribuindo-se a nota máxima (dez).</p><p class="text-justify">Enquanto isso, o funcionalismo municipal da Capital é obrigado a assistir o envio, para a Câmara Municipal, de mais um Projeto de Lei, afrontoso ao propor reajustes anuais de 0,01% (um centésimo por cento!) para 2011 e 2012. A APROFEM mobilizou-se, acionou seus filiados, manteve-se em permanente vigília junto à Câmara Municipal e, provavelmente por tudo isso, o fatídico projeto não foi aprovado até os vereadores entrarem em recesso.</p><p class="text-justify">Não há qualquer garantia de que a Entidade consiga sensibilizar o Executivo e o Legislativo para que se conceda um reajuste emergencial de 15% (pelo menos) até o fim dessa melancólica gestão. Tampouco espera-se a concretização da prometida instalação de um Grupo de Trabalho, em tempo hábil para analisar e propor alterações na legislação salarial municipal, capazes de proporcionar alguma esperança e alento aos indignados servidores.</p><p class="text-justify">Por tudo isso, os Representantes Sindicais da APROFEM autorizaram o protocolo de uma representação junto ao Ministério Público contra o atual prefeito e que poderá reportar-se às gestões anteriores que, sucessivamente, afrontaram as Constituições Federal e Municipal (Lei Orgânica) ao propor e aprovar reajustes de 0,1% e 0,01%, desde 2003. Algumas outras entidades representativas demonstraram interesse em juntar-se à APROFEM nesse desafio que, para além de um questionamento por improbidade administrativa, pretende sensibilizar o Ministério Público e obter na Justiça, para os servidores municipais, aquilo que lhes é de direito e que o citado desatino até aqui impediu que nos fosse concedido institucionalmente.</p><p class="text-justify"><b>(*) Desatino</b> - Falta de tino, insensatez - Dicionário Escolar da Língua Portuguesa - Academia Brasileira de Letras</p>
		</div>
	</div>
</div>
@endsection