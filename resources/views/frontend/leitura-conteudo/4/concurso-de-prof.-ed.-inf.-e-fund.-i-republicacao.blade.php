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
<title>Concurso de Prof. Ed. Inf. e Fund. I Republicação</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Concurso de Prof. Ed. Inf. e Fund. I Republicação</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Concurso de Prof. Ed. Inf. e Fund. I Republicação</h4>
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
			<div>No Diário Oficial da Cidade, de 04/11/2014, a partir da pág. 50 e até a pág. 56, o Departamento de Gestão de Carreiras, da Coordenadoria de Gestão de Pessoas de SEMPLA republicou:</div><div><br></div><div><b>Listas Específicas para:</b></div><div><b><br></b></div><div><ul><li><span style="line-height: 1.2;">candidatos omitidos,</span></li></ul><ul><li><span style="line-height: 1.2;">inscrições indeferidas e deferidas;</span></li></ul><ul><li><span style="line-height: 1.2;">resultado preliminar da prova objetiva;</span></li></ul><ul><li><span style="line-height: 1.2;">resultado final da prova objetiva;</span></li></ul><ul><li><span style="line-height: 1.2;">resultado preliminar da prova dissertativa;</span></li></ul><ul><li><span style="line-height: 1.2;">resultado preliminar da pontuação dos títulos;</span></li></ul><ul><li><span style="line-height: 1.2;">resultado final da prova dissertativa;</span></li></ul><ul><li><span style="line-height: 1.2;">pontuação dos títulos ;</span></li></ul><ul><li><span style="line-height: 1.2;">a inclusão dos candidatos omitidos na classificação prévia, publicadas nas edições do DOC de 4/7/2014, 26/8/2014, 11/9/2014, 17/9/2014 e 14/10/2014.</span></li></ul><div><div style="text-align: center;"><b>Recurso</b></div><div style="text-align: left;"><b><br></b></div><div style="text-align: left;">Caberá recurso das inscrições indeferidas e deferidas, do resultado preliminar da prova objetiva, do resultado final da prova objetiva, do resultado preliminar da prova dissertativa e do resultado preliminar da pontuação dos títulos, do resultado final da prova dissertativa e da pontuação dos títulos e da classificação prévia, dirigido ao Secretário Municipal de Planejamento, Orçamento e Gestão, devidamente fundamentado, no prazo de 3 (três) dias úteis, 05, 06 e 07/11/2014, através do site do<a href="www.ibfc.org.br"> </a><b><a href="http://www.ibfc.org.br/" target="blank">IBFC</a></b>, no período de 0h00 de 05/11/2014 às 23h59 de 07/11/2014.</div><div>O recurso deverá ser interposto em conformidade com o disposto no Capítulo 14 - Dos Recursos do Edital de Abertura de Inscrições e Instruções Especiais.</div><div>O recurso interposto em desacordo com as especificações constantes do Edital de Abertura de Inscrições não será avaliado.</div><div><br></div><div><b>OBS</b>: As Listas Gerais (ampla concorrência) já publicadas nas edições do DOC de 4/7/2014, 26/8/2014, 11/9/2014, 17/9/2014 e 14/10/2014 permanecem inalteradas.</div><div><br></div><div><b>Consulte a publicação !</b></div></div></div>
		</div>
	</div>
</div>
@endsection