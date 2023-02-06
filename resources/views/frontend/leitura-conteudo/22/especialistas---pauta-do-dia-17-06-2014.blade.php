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
<title>Especialistas - Pauta do dia 17/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas - Pauta do dia 17/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas - Pauta do dia 17/06/2014</h4>
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
			<div>As informações mais recentes dão conta de que o PL foi, sim, protocolado, mas não foi ainda lido em plenário e, em razão disto, não teve nenhum andamento, ainda, dentro da Câmara Municipal. A justificativa apresentada foi a de que os parlamentares suspenderam a sessão prevista para o dia 10/06, em resposta à disponibilização de apenas dezoito ingressos, destinados aos Srs. Vereadores, para a abertura da Copa do Mundo. Assim sendo, o PL ainda aguarda a realização de uma sessão, para receber um número e poder tramitar pelo Legislativo, agora sem perspectiva de entrar nas duas votações, antes do recesso parlamentar de julho.</div><div><br></div><div>Na sequência, passou-se à discussão de alguns aspectos pontuais da proposta do Governo, em especial:</div><div>atribuições específicas de cada disciplina;</div><div><br></div><div><ul><li><b>reabertura de prazo para opção de jornada</b><span rel="line-height: 1.2;"><b> - J20 para J40;</b></span></li><li><b>regulamentação de plantões (CEUs, Defesa Civil e Parques);</b></li><li><b>regras para datas de corte na migração de uma para outra carreira;</b></li><li><b>oferta de cursos gratuitos para os integrantes da carreira;</b></li><li><b>regras para a promoção dos não optantes pela nova carreira;</b></li><li><b>regras para pagamento de GDA para os não optantes;</b></li><li><b>enquadramento para admitidos na categoria Q10.</b></li></ul></div><div><br></div><div>À exceção do enquadramento dos admitidos na categoria Q10, que o governo afirmou categoricamente não aceitar, as demais questões tiveram respostas vagas e inconclusivas, apontando apenas para a possibilidade de serem objeto de discussão em encontros futuros.</div><div><br></div><div>As Entidades presentes posicionaram-se no sentido de que há necessidade de se qualificar melhor o processo de negociação, exigindo que a equipe do governo estruture-se adequadamente, para elaborar com regularidade todas as atas das reuniões e organizar a inscrição para os participantes durante a reunião. Mostraram, também, um posicionamento firme no sentido de que é preciso definir os prazos para o encerramento das negociações, além do embasamento técnico, jurídico, administrativo ou mesmo político para o posicionamento do Governo, contrário às reivindicações dos representantes dos servidores.</div><div><br></div><div>Ficaram acertadas duas novas reuniões, para discutir a questão dos admitidos (dia 24/06) e das atribuições das disciplinas (dia 26/06).</div>
		</div>
	</div>
</div>
@endsection