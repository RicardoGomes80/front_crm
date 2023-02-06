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
<title>Educação - Pauta do dia 13/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 13/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 13/03/2014</h4>
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
			<div><span style="line-height: 1.2;"><b>1 - Pautada em minuta apresentada </b>pelo Governo, a discussão sobre a regulamentação da lei deve considerar as alterações propostas pelas entidades, uma vez que não acena para a possibilidade real de qualquer benefício aos profissionais de educação da ativa, além de excluir os inativos.</span><br></div><div> </div><div>A  APROFEM defende:</div><div><br></div><div><ul><li><span style="line-height: 1.2;">inclusão dos inativos;</span><br></li><li><span style="line-height: 1.2;">enquadramento automático das referências para os profissionais da ativa que já detenham as condições previstas;</span><br></li><li><span style="line-height: 1.2;">garantia de opção entre as três tabelas para enquadramento;</span><br></li><li><span style="line-height: 1.2;">consideração, para as duas últimas referências, do tempo convertido em título e dos critérios contidos na tabela da legislação vigente para fins de enquadramento; </span><br></li></ul></div><div><br></div><div><b>2 - Sobre os concursos</b>, o Governo informou que estão em andamento as etapas de recebimento e análise de titulos e classificação do concurso para ATE, e que, ainda neste ano, realizará concurso público para provimento de cargos de Professor de  Educação Infantil e Fundamental I, e que também está em andamento a proposta de realização de concurso para bibliotecários para os CEUs. Para os demais cargos, não há previsão.</div><div><br></div><div>Outros assuntos foram propostos para debate, pela APROFEM, cobrando posicionamento da Bancada do Governo, a saber: PDE, acomodação dos profissionais de educação, falta de professores, contagem de tempo para estágio probatório, inclusão, uso de tablets nas UEs (SGP), recesso e férias coletivas na Educação Infantil, urgente autorização de concurso público para provimento de cargo de gestores, DESS: licenças médicas/perícia.</div><div><br></div><div>O Governo reiterou o pagamento da última parcela da incorporação da gratificação, no percentual de 13,43%, a partir de 1º de maio, cumprindo a Lei da gestão anterior.</div>
		</div>
	</div>
</div>
@endsection