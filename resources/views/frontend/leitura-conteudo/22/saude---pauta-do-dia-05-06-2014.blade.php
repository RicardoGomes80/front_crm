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
<title>Saúde - Pauta do dia 05/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 05/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 05/06/2014</h4>
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
			<div>Para as entidades que compõem a Bancada Sindical ainda há questões pendentes, como a transposição ou migração das Autarquias e HSPM, o enquadramento dos ATS para TS, pois não há um cadastro confiável (segundo o Governo) sobre quem possui os cursos para o cargo, além de outros questionamentos.</div><div><br></div><div>Quanto ao Protocolo proposto, salientaram que nele é preciso constar as tabelas salariais, e que esta versão não contempla o que foi negociado. A resposta do governo foi a de que na próxima reunião trarão essas tabelas.</div><div><br></div><div>Frente ao questionamento de como ficarão os que não optarem pelos subsídios, o Governo afirma que não pode definir de imediato, e que só terá condições de fazê-lo após o final da migração.</div><div><br></div><div>Apesar de ter sido solicitada uma cópia da minuta, o representante do Governo afirmou não poder ceder no momento, mas comprometeu-se a enviar para as entidades, após correções.</div><div><br></div><div>Após acirrada discussão, foi marcada nova reunião para sexta-feira, 13/06.</div>
		</div>
	</div>
</div>
@endsection