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
<title>Escolha de Unidade de lotação em caráter definitivo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Escolha de Unidade de lotação em caráter definitivo</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="0"><div class="widget-content-right pb-3 mb-3"><a href="" target="_blank"><img src="{{asset('storage//uploads/00000088/014000000880001_0.jpg')}}" alt="" data-description=""></a></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Escolha de Unidade de lotação em caráter definitivo</h4>
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
			<div><b>1) </b> O DOC de 06/12/2014 publicou, na página 54, a remoção (de/para) dos Profissionais de Educação, nomeados por acesso ou ingresso, com início de exercício em 2014 e que se encontravam em vagas precárias.</div><div><br></div><div><ul><li><span style="line-height: 1.2;">A escolha surtirá efeito a partir de 01/01/2015.</span><br></li></ul></div><div><br></div><div><b>2) </b>O DOC de 06/12/2014 publicou, na página 58, a classificação dos Profissionais de Educação que não fixaram a lotação através do sistema informatizado, convocando-os para a escolha de vagas em CONAE - 2, Av. Angélica nº 2.606, conforme cronograma divulgado na página 60 do mesmo DOC.</div><div><br></div><div><div>Se o número de vagas definitivas, conforme divulgadas na página 60 do DOC de 06/12/2014 não foi suficiente, serão, também, oferecidas vagas a título precário. Nesse caso, os profissionais serão inscritos de ofício no concurso de remoção/2015, classificados com os demais inscritos, sem prioridade de escolha.</div><div><br></div><div><ul><li><span style="line-height: 1.2;">A escolha surtirá efeitos a partir de 01/01/2015.</span><br></li></ul><div><br></div></div></div><div>Leia na integra a Publicação do DOC no site <b><a href="http://diariooficial.imprensaoficial.com.br/nav_cidade/index.asp?c=1&e=20141206&p=1&clipID=71GJLVBKK8GMAe206OBR8JVAMO5" target="blank">Imprensa Oficial</a></b>.<br></div><div><br></div><div><br></div>
		</div>
	</div>
</div>
@endsection