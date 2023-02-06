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
<title>Especialistas - Pauta do dia 21/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas - Pauta do dia 21/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas - Pauta do dia 21/03/2014</h4>
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
			<div><span style="line-height: 1.2;">Mais uma vez, a justificativa resvalou para a falta de tempo e excesso de compromissos dos representantes do Governo.</span><br></div><div><br></div><div>Questionada sobre a realização de concurso público para preenchimento dos cargos vagos de especialistas, que já passa dos 10%, a Administração diz estar, ainda, elaborando estudos orçamentários para, depois, definir uma posição.</div><div><br></div><div>No que se refere a questões fundamentais para os servidores, como a rejeição ao pagamento por subsídio, bem como garantia de uma migração que respeite o tempo de efetivo exercício dos atuais especialistas para migração para a nova carreira,o Governo insiste em dizer que não há chances de alterar a proposta inicial.</div><div><br></div><div>Assim sendo, fica claro que, o que poderá ser alvo de negociação são os pontos de ajuste da proposta, como, por exemplo, a redução de regulamentação por decreto, através de inclusão de regras já no corpo da lei, ou a própria tabela de lotação, distribuição dos cargos etc.</div><div><br></div><div>A representante da APROFEM observou que esse tipo de postura não representa uma real negociação, pois o Governo não cede nas questões mais importantes para os servidores e, desta forma, impõe sua vontade, embora buscando dar uma impressão de que está negociando com as entidades.</div><div><br></div><div>Finalizando, a representação do Governo comprometeu-se (novamente) a enviar respostas, por meio eletrônico, às Entidades que fizeram questionamentos, desta vez sem precisar a data.</div><div><br></div><div>Nova reunião está marcada para o dia 26/03/2014.</div>
		</div>
	</div>
</div>
@endsection