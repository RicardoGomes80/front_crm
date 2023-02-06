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
<title>Publicado o Decreto que regulamenta a Evolução Funcional nas duas novas referências</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Publicado o Decreto que regulamenta a Evolução Funcional nas duas novas referências</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Publicado o Decreto que regulamenta a Evolução Funcional nas duas novas referências</h4>
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
			<div><span style="line-height: 1.2;"> No Diário Oficial da Cidade do dia 19/07/2014, à página 14, foi publicado o Decreto nº 53.310, de 18 de julho de 2014, que regulamenta a Evolução Funcional nas duas novas referências, criadas pela Lei nº. 15.963, de 15 de janeiro de 2014, na carreira do Magistério Municipal.</span><br></div><div><span style="line-height: 1.2;"><br></span></div><div>Diferentemente das regras para os enquadramentos anteriores, para estas duas novas referências será necessário combinar critérios de tempo (de efetivo exercício na carreira do Magistério Municipal) e de títulos (obtidos durante a permanência do Profissional de Educação na referência imediatamente anterior, exceto para os títulos universitários ali especificados).</div><div><br></div><div>Os novos enquadramentos produzirão efeitos somente a partir da vigência da Lei nº 15.963/2014 e da obtenção dos critérios mencionados.</div><div><br></div><div>O Anexo Único do Decreto nº 53.310/2014 traz a tabela de tempo e de títulos exigidos para os novos enquadramentos, para cada cargo e categoria, mantendo, em todos os casos, o mínimo de 23 anos para a penúltima e de 24 para a última referência, além de 4,0 pontos de títulos para todos.</div><div><br></div><div>Uma Portaria da Secretaria Municipal de Educação será publicada em breve, contendo o valor de cada título a ser considerado para os enquadramentos por Evolução Funcional nas novas referências.  </div>
		</div>
	</div>
</div>
@endsection