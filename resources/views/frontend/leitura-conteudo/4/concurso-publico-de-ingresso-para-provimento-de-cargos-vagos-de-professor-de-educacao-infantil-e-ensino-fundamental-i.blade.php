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
<title>Concurso Público de Ingresso para Provimento de Cargos Vagos de Professor de Educação Infantil e Ensino Fundamental I</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Concurso Público de Ingresso para Provimento de Cargos Vagos de Professor de Educação Infantil e Ensino Fundamental I</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Concurso Público de Ingresso para Provimento de Cargos Vagos de Professor de Educação Infantil e Ensino Fundamental I</h4>
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
			<div>O Diário Oficial da Cidade, na edição de 14/10/2014, publicou o Resultado Final da Prova Dissertativa e da Pontuação dos Títulos e a Classificação Prévia, conforme segue:</div><div><br></div><div><ul><li><b style="line-height: 1.2;">Pág. 46 - Despacho:</b><span style="line-height: 1.2;"> recursos quanto às provas dissertativas, deferidos; notas alteradas.</span><br></li><li><b style="line-height: 1.2;">Pág. 50 - Despacho:</b><span style="line-height: 1.2;"> recursos quanto às provas dissertativas, indeferidos; notas inalteradas.</span><br></li><li><b style="line-height: 1.2;">Pág. 53 - Despacho:</b><span style="line-height: 1.2;"> recursos dos títulos, deferidos; pontuações alteradas.</span><br></li><li><b style="line-height: 1.2;">Pág. 54 - Despacho:</b><span style="line-height: 1.2;"> recursos dos títulos, indeferidos.</span><br></li><li><b style="line-height: 1.2;">Pág. 55 - Despacho:</b><span style="line-height: 1.2;"> recursos de pontuação, indeferidos; pontuações inalteradas.</span><br></li><li><b style="line-height: 1.2;">Pág. 55 - </b><span style="line-height: 1.2;">Listagem específica (Lei nº 13.398/2002).</span><br></li><li><b style="line-height: 1.2;">Pág. 56 - </b><span style="line-height: 1.2;">Listagem específica (Lei nº 15.939/2013).</span><br></li><li><b style="line-height: 1.2;">Pág. 60 à pág. 152 </b><span style="line-height: 1.2;">- Listagem geral.</span><br></li></ul></div><div> </div><div><b>Demais Comunicados:</b></div><div><b><br></b></div><div><ul><li><span style="line-height: 1.2;">Conforme o Edital de Abertura de Inscrições e Instruções Especiais, caberá recurso da Classificação Prévia, dirigido ao Secretário Municipal de Planejamento, Orçamento e Gestão, devidamente fundamentado, no prazo de 2 (dois) dias úteis, 15 e 16/10/2014.</span><br></li><li><span style="line-height: 1.2;">Os recursos deverão ser interpostos através do site do -> <a href="www.ibfc.org.br" target="blank"><b>IBFC</b></a> , no período de 0h00 de 15/10/2014 às 23h59 de 16/10/2014.</span><br></li><li><span style="line-height: 1.2;">O recurso deverá ser interposto em conformidade com o disposto no Capítulo 14 - Dos Recursos do Edital de Abertura de Inscrições e Instruções Especiais.</span><br></li><li><span style="line-height: 1.2;">O recurso interposto em desacordo com as especificações constantes do Edital de Abertura de Inscrições não será avaliado.</span><br></li></ul></div>
		</div>
	</div>
</div>
@endsection