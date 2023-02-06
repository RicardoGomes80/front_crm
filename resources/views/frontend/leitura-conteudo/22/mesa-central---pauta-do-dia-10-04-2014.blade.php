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
<title>Mesa Central - Pauta do dia 10/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mesa Central - Pauta do dia 10/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mesa Central - Pauta do dia 10/04/2014</h4>
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
			<div>Oportuno lembrar que, no dia 04/04/2014,em frente ao Gabinete do Prefeito, foi realizado um Ato Unificado das Entidades Representativas dos Servidores Municipais, subscritoras do Convênio SINP, com o objetivo de demonstrar coesão em torno da Pauta Unificada para a data-base (maio de 2014), que se aproxima.</div><div><br></div><div>Os representantes das Entidades foram recebidos por membros do Governo, durante o citado Ato, (embora houvessem solicitado uma audiência com o Prefeito) e deles ouviram que não dariam respostas naquele dia, uma vez que havia uma reunião de Mesa Central agendada para o dia 10/04, e que já estavam apresentando propostas nas Mesas Setoriais (Educação, Saúde, Especialistas, GCM, Agentes Vistores) e que dos resultados dessas negociações dependeriam as propostas para a Mesa Central. Disseram, ainda, que a pressão dos servidores em manifestação de rua era legítima, mas que só negociariam nas Mesas instaladas.</div><div><br></div><div>Na data agendada, as Entidades compareceram à reunião, no aguardo de respostas à Pauta Unificada, protocolada em fevereiro. O Governo, porém, não apresentou nenhuma proposta, limitando-se a reproduzir os encaminhamentos das diversas Mesas Setoriais de Negociação e propondo nova Reunião da Mesa Central de Negociação para o final do mês de abril, sem data definida.</div><div><br></div><div>A representante da APROFEM registrou o sentimento de indignação que essa atitude, certamente, causará junto aos servidores municipais, abalando sua confiança no próprio Sistema de Negociação Permanente.</div><div><br></div><div>Haverá reunião do Fórum de Entidades no dia 11/04/2014, para deliberações a respeito dos encaminhamentos comuns, para continuidade da Campanha Salarial Unificada - 2014.</div>
		</div>
	</div>
</div>
@endsection