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
<title>Mesa Central - Pauta do dia 13/02/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mesa Central - Pauta do dia 13/02/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mesa Central - Pauta do dia 13/02/2014</h4>
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
			<div>Entretanto, em Reunião do Fórum de Entidades, deliberou-se pela proposta de outra pauta, para buscar uma agilização no processo de negociação da data base de 2014, composta de:</div><div><br></div><div><ol><li><span style="line-height: 1.2;">cumprimento do Protocolo de 2013;</span><br></li><li><span style="line-height: 1.2;">reestruturação das carreiras: Nível Superior, GCM, Agente Vistor e Saúde;</span><br></li><li><span style="line-height: 1.2;">alteração da Lei Salarial;</span><br></li><li><span style="line-height: 1.2;">revisão geral anual não inferior à inflação;</span><br></li><li><span style="line-height: 1.2;">reposição de perdas retroativas a 2003;</span><br></li><li><span style="line-height: 1.2;">fim das terceirizações e parcerias;</span><br></li><li><span style="line-height: 1.2;">realização de concursos públicos, com a participação das   Entidades Representativas nas comissões dos concursos.</span><br></li></ol></div><div><br></div><div>A bancada do Governo, porém, não aceitou nossa proposta de pauta, alegando que a reunião Extraordinária só estava acontecendo, justamente, para discutir as questões formais do SINP e que, portanto, não caberia alterar a proposta anterior.</div><div><br></div><div>Assim sendo, foram tratados os seguintes assuntos:</div><div><br></div><div>1- atas das Reuniões da Mesa Central de nºs 3, 4, 5 e 6 - aprovadas, feitas as alterações propostas pelas Entidades;</div><div><br></div><div>2- regimento do SINP - as observações do governo, a respeito das propostas feitas pelas Entidades, serão encaminhadas por meio eletrônico;</div><div><br></div><div>3- Calendário de Reuniões das Mesas Central e Setoriais: será elaborado com periodicidade bimestral, para evitar alterações frequentes em decorrência de situações não previstas;</div><div><span style="line-height: 1.2;"><br></span></div><div><span style="line-height: 1.2;">4-  Projetos de Lei: o governo enviará, em breve, à Câmara Municipal:</span><br></div><div><span style="line-height: 1.2;"><br></span></div><div><ul><li><span style="line-height: 1.2;">PL  instituindo a carreira de Auditor Municipal de Controle Interno;</span><br></li><li><span style="line-height: 1.2;">PL instituindo a carreira de Analista de Políticas Públicas de Gestão Governamental;</span><br></li><li><span style="line-height: 1.2;">PL de Emenda à Lei Orgânica do Município para prever a remuneração de servidores  através de subsídio;</span><br></li><li><span style="line-height: 1.2;">PL reestruturando as carreiras de Especialistas - Nível Superior.</span><br></li></ul></div><div><br></div><div>Por solicitação da bancada sindical, o governo comprometeu-se a enviar as minutas dos Pls para que as Entidades possam analisá-las previamente, e discuti-las nas Mesas de Negociação.</div>
		</div>
	</div>
</div>
@endsection