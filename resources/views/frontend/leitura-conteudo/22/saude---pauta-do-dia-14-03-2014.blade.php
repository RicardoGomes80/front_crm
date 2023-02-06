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
<title>Saúde - Pauta do dia 14/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 14/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 14/03/2014</h4>
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
			<div>Assim sendo, solicitou a marcação de  uma Reunião Extraordinária para o dia 20 de março, quinta-feira, às 14h e 30min, com a finalidade de trazer a proposta de unificação das carreiras da Saúde e ter uma tabela única para ser debatida e, daí em diante,  pode-se pensar em uma Lei salarial de unificação e recomposição das perdas.</div><div><br></div><div>Assegurou, ainda, que, se as negociações ultrapassarem a data base, o compromisso é de que haverá efeito retroativo. Os participantes da reunião fizeram vários questionamentos sobre a proposta, algumas das quais o Governo explicou, mas sempre pedindo para aguardar a proposta, cuja minuta ainda não será divulgada nem no dia 20 de março.                           </div><div><br></div><div>O representante do Governo voltou a falar sobre a necessidade de redução ou readequação dos investimentos a serem feitos, em razão da arrecadação menor, como consequência da não aprovação da correção dos impostos, como havia sido proposto, reiterando, contudo, que não haverá impacto sobre as àreas de Saúde e Educação.</div><div><br></div><div>Ficou mantida a previsão de, até final de março/14, trazer para debate o Plano de Reestruturação da Carreira da Saúde.</div><div><br></div><div>A respeito dos Contratos de Gestão, conforme Edital publicado no DOC de 17/01, na página 48, enfatizou que se trata de um novo modelo de contrato para a Região de Saúde de Parelheiros, com vigência de 60 meses.</div><div><br></div><div>Ao final da Reunião, foi reiterado o Calendário proposta para as próximas Reuniões da Mesa da Saúde.</div>
		</div>
	</div>
</div>
@endsection