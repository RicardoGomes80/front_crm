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
<title>Resultado do Concurso de Auxiliar Técnico de Educação</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Resultado do Concurso de Auxiliar Técnico de Educação</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Resultado do Concurso de Auxiliar Técnico de Educação</h4>
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
			<div>Suplemento do DOC de 01/03/2014 publicou o resultado provisório das provas objetivas e de redação,em lista especial e geral, em ordem alfabética.</div><div><br></div><div>Na mesma publicação encontra-se a retificação do gabarito das provas objetivas, atribuindo o ponto referente à questão nº 23 a todos os candidatos presentes à prova e, relativamente à questão de nº 33, alterando de E para C a alternativa correta, atribuindo o respectivo ponto aos candidatos presentes à prova que assinalaram a alternativa C.</div><div><br></div><div>Na sequência, foram publicados os resultados dos recursos referentes à realização das provas, aplicadas em 26/01/2014.</div><div><br></div><div>Da página 3 à página 48 encontram-se as listas do resultado provisório das provas objetivas e dissertativas, em duas listas: geral e específica, ambas em ordem alfabética.</div><div> </div><div>Ao final da publicação consta a convocação para a entrega de títulos, nos termos do Edital do concurso, via correio, no prazo de 05 a 14/03/2014.</div>
		</div>
	</div>
</div>
@endsection