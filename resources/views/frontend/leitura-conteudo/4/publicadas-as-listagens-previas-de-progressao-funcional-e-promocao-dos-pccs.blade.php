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
<title>Publicadas as listagens prévias de Progressão Funcional e Promoção dos PCCs</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Publicadas as listagens prévias de Progressão Funcional e Promoção dos PCCs</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Publicadas as listagens prévias de Progressão Funcional e Promoção dos PCCs</h4>
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
			<p><strong>Confira a retificação da publicação abaixo, no Diário Oficial de 05/05/2015, página 24.</strong></p><p>Na edição do Diário Oficial de 01/05/2015, foram publicadas as Listagens Prévias para a Progressão Funcional e para a Promoção dos Servidores Municipais pertencentes aos PCCSs dos Níveis: Básico, Médio, Médio da Saúde, Superior e Superior da Saúde, na seguinte conformidade:<br></p><div><b>Listagem Prévia</b></div><div><b>Página 44</b></div><div>Progressão Funcional dos integrantes dos PCCSs do Nível Básico<br></div><div><b>Página 54</b><br></div><div>Progressão Funcional dos integrantes dos PCCSs do Nível Médio<br></div><div><b>Página 65</b><br></div><div>Progressão Funcional dos integrantes dos PCCSs do Nível Médio - Saúde<br></div><div><b>Página 67 </b><br></div><div>Progressão Funcional dos integrantes dos PCCSs do Nível Superior<br></div><div><b>Página 68</b></div><div>Progressão Funcional dos integrantes dos PCCSs do Nível Superior - Saúde<br></div><div><b>Página 70</b></div><div>Promoção dos integrantes do Nível Básico<br></div><div><b>Página 80</b></div><div>Promoção dos integrantes dos PCCSs do Nível Médio<br></div><div><b>Página 81</b></div><div>Promoção dos integrantes dos PCCs do Nível Superior<br></div><div><b>Página 82</b></div><div>Promoção dos integrantes dos PCCSs do Nível Médio - Saúde<br></div><div><b>Página 82</b></div><div>Promoção dos integrantes dos PCCSs do Nível Superior - Saúde<br></div><div><b><br></b></div><div><p>Prazo para recurso: 05 a 14/05/2015</p><div>Consulte as publicações e, caso seja necessário, não perca o prazo de recurso!</div></div><div><br></div>
		</div>
	</div>
</div>
@endsection