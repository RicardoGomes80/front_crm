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
<title>Resultados de recursos e da Prova Objetiva</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Resultados de recursos e da Prova Objetiva</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Resultados de recursos e da Prova Objetiva</h4>
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
			<div><b>Concurso Público de Ingresso - Professor de Educação Infantil e Ensino Fundamental I</b></div><div><b><br></b></div><div><b>Resultados de recursos e da Prova Objetiva</b></div><div><br></div><div>O Suplemento do Diário Oficial da Cidade, de 26/08/2014, à página 1, publicou o resultado dos <span style="line-height: 1.2;">recursos e o resultado preliminar da prova objetiva.</span></div><div><br></div><div>A questão da prova objetiva, de nº 06, após análise dos recursos, teve sua alternativa <span style="line-height: 1.2;">correta alterada de D para E, e somente foi atribuída a respectiva pontuação aos candidatos</span></div><div><br></div><div>presentes às provas, que acertaram a alternativa correta. As demais questões não foram <span style="line-height: 1.2;">anuladas ou alteradas.</span></div><div><br></div><div>A partir da pág. 1 até a pág. 6, encontram-se os resultados dos recursos interpostos e, a partir da <span style="line-height: 1.2;">pág. 6 até a pág. 64, está publicada a relação dos candidatos, em ordem alfabética e os </span><span style="line-height: 1.2;">resultados da prova objetiva.</span></div><div><br></div><div><b>Ao final da listagem, na página 64, estão contidas as seguintes informações :</b></div><div><br></div><div><ul><li><span style="line-height: 1.2;">O espelho da Folha de Resposta será disponibilizado no site do <a href="www.ibfc.org.br"><b>IBFC</b></a> , no prazo de 0h00 de 27/08/2014 às 23h59 de 28/08/2014, de acordo com o item 8.26, do Capítulo 8, do Edital de Abertura de Inscrições e Instruções Especiais.</span></li></ul></div><div><ul><li><span style="line-height: 1.2;">Conforme o Edital de Abertura de Inscrições e Instruções Especiais, caberá recurso das notas da Prova Objetiva, dirigido ao Secretário Municipal de Planejamento, Orçamento e Gestão, devidamente fundamentado, no prazo de 2 (dois) dias úteis, ou seja, 27 e 28/08/2014.</span></li></ul></div><div><ul><li><span style="line-height: 1.2;">Os recursos deverão ser interpostos através do site do<b> <a href="www.ibfc.org.br">IBFC</a></b> , no período de 0h00 de 27/08/2014 às 23h59 de 28/08/2014.</span></li></ul></div><div><ul><li><span style="line-height: 1.2;">O recurso deverá ser interposto em conformidade com o disposto no Capítulo 14 - dos Recursos do Edital de Abertura de Inscrições e Instruções Especiais.</span></li></ul></div><div><ul><li><span style="line-height: 1.2;">O recurso interposto em desacordo com as especificações constantes do Edital de Abertura de Inscrições não será avaliado.<br></span></li></ul></div>
		</div>
	</div>
</div>
@endsection