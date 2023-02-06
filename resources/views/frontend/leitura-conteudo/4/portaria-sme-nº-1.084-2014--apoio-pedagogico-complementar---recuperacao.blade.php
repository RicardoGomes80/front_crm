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
<title>Portaria SME nº 1.084/2014- Apoio Pedagógico Complementar - Recuperação</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Portaria SME nº 1.084/2014- Apoio Pedagógico Complementar - Recuperação</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Portaria SME nº 1.084/2014- Apoio Pedagógico Complementar - Recuperação</h4>
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
			<div>A Portaria SME nº 1.084, de 31/01/2014, foi publicada no Diário Oficial da Cidade na edição do dia 01/02/2014, página 18, e institui o projeto denominado "Apoio Pedagógico Complementar - Recuperação", voltado a todas as UEs de Ensino Fundamental e Médio, visando ampliar as oportunidades de aprendizagem, articuladas em formas e metodologias diferenciadas, com estratégias que conduzam ao maior envolvimento da família e da comunidade no processo de aprendizagem dos alunos dos três Ciclos de Aprendizagem do Ensino Fundamental, que ainda não atingiram o desenvolvimento cognitivo ou o domínio dos conceitos que garanta os direitos e expectativas de aprendizagem para o respectivo ano, observados os resultados obtidos nas avaliações do acompanhamento das aprendizagens..</div><div><br></div><div>O projeto prevê  a recuperação contínua, pelo próprio regente da classe e a paralela, organizada em turmas com dez a vinte  alunos, e seguindo critérios para a atribuição dessas aulas, fora do horário regular dos alunos.</div>
		</div>
	</div>
</div>
@endsection