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
<title>Concursos de Remoção/2014 - Publicação de Resultados</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Concursos de Remoção/2014 - Publicação de Resultados</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Concursos de Remoção/2014 - Publicação de Resultados</h4>
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
			<div>Por meio do <b>Comunicado nº 1.651, de 14 de novembro de 2014</b>, o Secretário Municipal da Educação, fez publicar, na página 48 da edição do Diário Oficial da Cidade. a decisão dos recursos interpostos quanto à apuração de títulos e tempo de serviço dos candidatos inscritos nos Concursos 01, 02, 03, 05, 06, 07 e 74.</div><div>No mesmo DOC e na mesma página há, também, a<b> Convocação nº 27, de 14 de novembro 2014</b>, para escolha de lotação definitiva - Fase Suplementar - Concursos de Remoção 2014, dirigida a servidores  inscritos de ofício, que não conseguiram se remover.</div><div>Os servidores mencionados deverão comparecer em CONAE 2, à Av. Angélica 2606, Consolação, no dia 18/11/2014, para providências de escolha de vagas , na seguinte conformidade:</div><div><br></div><div><b>Cargo</b>                                                           <b>Horário</b></div><div>Agente Escolar                                            9:00 às 9:15</div><div>Auxiliar Técnico de Educação                     9:15 às 9:30</div><div>Prof. Ens. Fund. II e Médio - Ciências        9:30 às 09:45</div><div>Prof. Ens. Fund. II e Médio - História          9:45 às 10:00</div><div>Prof. Ens. Fund.II e Médio - Matemática    10:0 às 10:15</div><div>Prof. Ens. Fund. II e Médio - Português     10:15 às 11:00</div><div><br></div><div><div><b>Observações importantes:</b></div><div><b><br></b></div><div><ul><li><span style="line-height: 1.2;">O não comparecimento implicará na atribuição compulsória de uma lotação definitiva.</span><br></li><li><span style="line-height: 1.2;">A escolha surtirá efeitos a partir de 01/01/2015.</span><br></li></ul></div><div><br></div><div>Nas páginas seguintes da mesma edição do DOC, a partir da página 49 e até a página 164, encontra-se o Comunicado nº.1652, de 14 de novembro de 2014, contendo os resultados dos Concursos de Remoção, indicando as Unidades de onde e para onde foram removidos.</div><div><br></div><div><b>Consulte as publicações!</b></div></div><div><br></div>
		</div>
	</div>
</div>
@endsection