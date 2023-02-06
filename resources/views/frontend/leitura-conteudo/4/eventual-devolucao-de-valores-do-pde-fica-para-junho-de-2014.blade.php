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
<title>Eventual devolução de valores do PDE fica para junho de 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Eventual devolução de valores do PDE fica para junho de 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Eventual devolução de valores do PDE fica para junho de 2014</h4>
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
			<div>Decreto do Prefeito, de nº 54.762, de 10/01/2014, publicado no Diário Oficial de 11/01/2014, na página 1, dispôs sobre a restituição, pelos servidores que específica, de eventuais débitos resultantes do pagamento do Prêmio de Desempenho Educacional, instituído pela Lei nº 14.938, de 30 de junho de 2009, do exercício de 2013, verificados após o cálculo para a apuração dos valores totais individuais do prêmio.</div><div><br></div><div>Caso os servidores apresentem, no cálculo do valor final do PDE a que fazem jus individualmente, quantia inferior à paga em junho de 2013, como 1ª parcela, a diferença deverá ser restituída integralmente, por ocasião do pagamento da 1ª parcela de 2014, prevista para junho deste ano, mediante compensação de valores.</div><div><br></div><div>Essa determinação trará, certamente, uma sensação de alívio para os servidores que se enquadram nessa situação, uma vez que, sabidamente, o mês de janeiro é, tradicionalmente, um dos mais difíceis para todos, mercê das despesas pesadas que ocorrem no início de cada ano. Entretanto, a posição da <b>APROFEM</b> sempre foi a de se considerar a primeira parcela como definitiva, não cabendo qualquer desconto no que já foi pago, o que, infelizmente, não coincide com a decisão do Prefeito.</div>
		</div>
	</div>
</div>
@endsection