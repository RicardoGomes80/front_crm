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
<title>Programação para o sorteio das Colônias de Férias / Pousada para os meses de Junho / Julho - 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Programação para o sorteio das Colônias de Férias / Pousada para os meses de Junho / Julho - 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Programação para o sorteio das Colônias de Férias / Pousada para os meses de Junho / Julho - 2014</h4>
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
			<div><b>Boiçucanga, Peruíbe, Praia Grande, São Roque e Campos do Jordão</b></div><div><b><br></b></div><div><ul><li>A Inscrição será ON LINE no período de 14 de abril a 05 de maio de 2014 (até às 18 horas).</li><li>A Inscrição deverá conter APENAS uma opção de escolha de Período/Colônia/Pousada.</li><li>O filiado sorteado terá direito a 1 período / 1 apartamento. Não será permitida a permuta de período/Colônia/Pousada sorteados (o número de pessoas por apartamento será confirmado no ato da pré-reserva, ON LINE, dependendo da disponibilidade das acomodações).</li><li>No dia 07 de maio de 2014, quarta-feira, via ON LINE, serão sorteados os filiados titulares e suplentes para as vagas, de todos os períodos e de todas as Colônias / Pousada. As listas dos filiados sorteados serão divulgadas às 12 horas no <b>PORTAL APROFEM.</b></li><li>Os Filiados titulares sorteados receberão e-mail com um link para efetivação da pré-reserva - ON LINE - no período de 12 à 20 de maio de 2014.</li><li>O documento comprobatório do pagamento deverá ser enviado por e-mail (convenios@aprofem.com.br), para concretização da reserva, até 20 de maio de 2014, impreterivelmente.</li><li>Aguardar o recebimento da guia de hospedagem por e-mail, confirmando a reserva. (a entrada não será permitida sem a Guia de Hospedagem enviada por e-mail).</li><li>A não confirmação da reserva caracterizará, automaticamente, a desistência da vaga.</li><li>Em caso de desistência, não haverá devolução dos valores pagos .</li><li>A partir de 26 de maio de 2014, as vagas remanescentes serão oferecidas aos filiados suplentes sorteados, constantes da lista do <b>PORTAL</b> <b>APROFEM</b>, por contato telefônico, os quais deverão comparecer à sede da <b>APROFEM</b> no Setor de Convênios, para confirmação e pagamento da sua reserva. </li></ul></div><div><b>Períodos para junho / julho - 2014</b><br></div><div><br></div>
		</div>
	</div>
</div>
@endsection