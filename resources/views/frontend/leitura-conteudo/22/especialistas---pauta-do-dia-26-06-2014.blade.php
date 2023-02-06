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
<title>Especialistas - Pauta do dia 26/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas - Pauta do dia 26/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas - Pauta do dia 26/06/2014</h4>
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
			<div>Reenquadra cargos e funções do Quadro de Pessoal de Nível Superior e institui o regime de remuneração por subsídio, respondeu a alguns questionamentos apresentados pelas Entidades, em especial no que se refere a situações em que, no enquadramento na nova carreira, observadas datas limite para contagem de tempo, muitos servidores, que já ficaram prejudicados no passado, poderão ter novamente prejuízos na nova situação.</div><div><br></div><div><span rel="line-height: 1.2;">As respostas dadas, entretanto, foram pouco conclusivas, restando apenas o compromisso de fazer levantamentos para apurar a veracidade dessas situações.</span><br></div><div><br></div><div><span rel="line-height: 1.2;">Outros questionamentos como a distribuição dos cargos por disciplina foram respondidos em termos de uma definição em função das necessidades da administração.</span><br></div><div><br></div><div><span rel="line-height: 1.2;">No que se refere a atribuições específicas de cada disciplina, foram apontados vários problemas, como a de superposição de atribuições em disciplinas diferentes.</span><br></div><div><br></div><div><span rel="line-height: 1.2;">Como encaminhamento, as entidades propuseram fazer um estudo das atribuições das diferentes disciplinas até o dia 04/07, e apresentá-lo ao governo até o dia 07/07, após o que, nova Reunião deverá ser agendada para finalizar a discussão.</span><br></div><div><br></div>
		</div>
	</div>
</div>
@endsection