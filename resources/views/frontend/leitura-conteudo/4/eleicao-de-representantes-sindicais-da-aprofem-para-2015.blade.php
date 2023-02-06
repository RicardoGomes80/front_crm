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
<title>Eleição de Representantes Sindicais da APROFEM para 2015</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Eleição de Representantes Sindicais da APROFEM para 2015</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Eleição de Representantes Sindicais da APROFEM para 2015</h4>
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
			<div style="text-align: justify;">Cientes de que o início dos trabalhos de um novo período letivo agrega uma imensa gama de atividades, com a necessária programação, reiteramos nossa expectativa de que a Eleição dos 2 (dois) Representantes Sindicais da <b>APROFEM</b> para este ano (bem como de seus suplentes) ocorra em tempo hábil para o comparecimento dos eleitos à nossa <b>primeira Reunião de Representantes, que ocorrerá no próximo dia 10 de março (terça-feira)</b>. </div><div style="text-align: justify;"><br></div><div style="text-align: justify;">Reiteramos que todas as orientações sobre esse processo, bem como a íntegra da Portaria SME nº 6.842 (Dispensa de Ponto) encontram-se na última edição do Jornal <b>APROFEM</b>, que será enviado nos próximos dias para todos os filiados da Entidade e para as U.E.s e outras Unidades da SME. O modelo de Ata da Eleição dos Representantes Sindicais já está disponível para impressão, no Portal <b>APROFEM</b> (clique aqui para acessar), e também será entregue nas Unidades Educacionais, como correspondência registrada, pelos Correios.</div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><b>Alertamos que o Representante Sindical deverá possuir endereço eletrônico (e-mail) ativo, como requisito essencial para seu desempenho.</b></div><div style="text-align: justify;"><b>COMUNICAMOS, AINDA,  QUE AS REUNIÕES DE 2015 SERÃO REALIZADAS NA RUA SÃO JOAQUIM, 460 – ESPAÇO DE EVENTOS HAKKA (a 50m da Sociedade Brasileira de Cultura Japonesa), em dois períodos, para livre escolha dos interessados: manhã, a partir das 8 horas e tarde, a partir das 13 horas.</b></div><div style="text-align: justify;"><b><br></b></div><div style="text-align: justify;"><b>Atenção</b></div><div style="text-align: justify;"><b><br></b></div><div style="text-align: justify;">Para fazer jus à expedição do comprovante da participação na Reunião de Representantes Sindicais do dia 10 de março de 2015, para fins de dispensa de ponto, é essencial que a Ata de Eleição da Unidade esteja em poder da APROFEM até a véspera do evento ou que a mesma seja entregue no próprio dia da Reunião, para os encarregados pelo credenciamento dos Representantes Sindicais – 2015, no saguão do Espaço Hakka.<br></div><div style="text-align: justify;"><br></div><div style="text-align: justify;"><b>Atenciosamente APROFEM</b></div>
		</div>
	</div>
</div>
@endsection