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
<title>Especialistas - Pauta do dia 10/06/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas - Pauta do dia 10/06/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas - Pauta do dia 10/06/2014</h4>
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
			<div><span rel="line-height: 1.2;">A título de esclarecimento foi dito aos representantes das Entidades Sindicais, participantes da Negociação, que o referido projeto de Lei seria protocolado, na mesma data, na Câmara Municipal de São Paulo, onde seria lido, receberia um número para tramitação no Legislativo, ficando em condições de ser analisado na próxima Reunião da Comissão de Constituição, Justiça e Legislação Participativa da casa, a ocorrer em 11/06/2014 e, se aprovado, apto para ser analisado pelas demais Comissões de mérito (Administração Pública e Finanças) para, finalmente, poder chegar a Plenário para ser votado antes do recesso parlamentar, no final do mês de junho.</span><br></div><div><br></div><div>Também foi mencionado o fato de que, em havendo necessidade de alterações no projeto para atender a possíveis avanços na negociação com os Sindicatos, o Governo enviará um Substitutivo ao PL, em tempo hábil para ser apreciado pelos Srs. Vereadores.</div><div><br></div><div>Ficou muito claro, entretanto, que há questões envolvidas e que não serão mais discutidas pelo Governo, tais como: a implantação da remuneração por subsídio, as regras para a migração de uma carreira para outra, o enquadramento dos aposentados e pensionistas e a definição das consequências que poderão advir da não migração para as novas carreiras.</div><div><br></div><div>A APROFEM, mais uma vez reiterou seu posicionamento contrário à proposta apresentada, considerando que a disposição de não alterar as questões acima que são, em última análise, as fundamentais, caracteriza-se como uma postura de imposição e não de negociação.</div><div><br></div><div>Ainda assim, dispusemo-nos a examinar atentamente a minuta apresentada para enviar eventuais sugestões de alterações que visem a aperfeiçoar o PL e, assim, minimizar os efeitos negativos para os servidores.</div>
		</div>
	</div>
</div>
@endsection