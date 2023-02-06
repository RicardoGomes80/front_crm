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
<title>Precatórios Judiciais</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Precatórios Judiciais</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Precatórios Judiciais</h4>
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
			<div><b>ADI 4357 - Ação Direta De Inconstitucionalidade  - Precatórios</b></div><div><b><br></b></div><div>O  julgamento da ADI 4357 foi adiado, dado o volume da pauta do STF ,  sem data prevista para ser retomado.</div><div><br></div><div>A mudança nas regras de precatórios deve  diminuir o prazo para pagamento  e determinar a  nova forma de quitação das dívidas determinadas por sentenças judiciais, pronunciando-se quanto à validade dos acordos já firmados pelos servidores públicos.</div><div><br></div><div>A nova forma de pagamento de precatórios deve estabelecer um prazo intermediário entre a regra antiga (15 anos) e a proposta do relator do processo, ministro Luiz Fux, de cinco anos.</div><div><br></div><div><b>A PMSP Convoca Novamente Credores De Precatórios, Para Acordos</b></div><div><b><br></b></div><div>A PMSP está convocando os credores de precatórios (Edital 01/2014 - DOC 01/03/2014) para realizar proposta de acordo, no período de 10/03 a 11/04, mediante deságio de 50%  a ser aplicado sobre o valor devido atualizado do crédito, cujo cálculo seja definitivo.</div><div><br></div><div>Poderão fazer o acordo aqueles que já possuem número de precatório e que não apresentaram proposta nos anos anteriores.</div><div><br></div><div>Os credores cujo andamento processual comporte o acordo receberão, nos próximos dias, correspondência para comparecer na nossa Assessoria Jurídica, até o dia 04/04/14, para maiores esclarecimentos, munidos de cópia do RG, na Av. Brigadeiro Luis Antonio, 290 conj. 105, Bela Vista,  São Paulo, Tels. 3214-6505, 3214-6449, 3105-7377, 3102-2774, 3105-7547, 3105-7666, no horário das 09 às 17, horas sem necessidade de agendamento prévio.</div>
		</div>
	</div>
</div>
@endsection