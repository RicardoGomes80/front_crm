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
<title>Decreto nº 50.698, de 30 de Junho de 2009</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Decreto nº 50.698, de 30 de Junho de 2009</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Decreto nº 50.698, de 30 de Junho de 2009</h4>
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
			<div>Suspende o expediente nas repartições públicas municipais no dia 10 de julho de 2009 e determina a compensação das horas não trabalhadas, na forma que especifica.</div><div>Gilberto Kassab, Prefeito do Município de São Paulo, no uso das atribuições que lhe são conferidas por lei, Decreta:</div><div><br></div><div><b>Art. 1º.</b> Fica suspenso o expediente na Administração Pública Municipal Direta, Autárquica e Fundacional no dia 10 de julho de 2009.</div><div><b>Art. 2º</b>. Em decorrência do disposto no artigo 1º, deverão os servidores compensar as horas não trabalhadas, na proporção de 1 (uma) hora/dia, a partir do dia 6 de julho de 2009, sem prejuízo do cumprimento da jornada de trabalho a que estiverem sujeitos.</div><div><br></div><div><ul><li><span style="line-height: 1.2;"> 1º. A compensação de que trata o ?caput? deste artigo, a critério da chefia imediata, deverá ser feita no início ou final do expediente.</span><br></li><li><span style="line-height: 1.2;"> 2º. Os servidores que se encontrarem afastados no período da compensação deverão efetivá-la a partir do dia em que reassumirem suas funções.</span><br></li><li><span style="line-height: 1.2;"> 3º. A não compensação, total ou parcial, das horas de trabalho acarretará os descontos pertinentes e, se total, também o apontamento de falta ao serviço no dia 10 de julho de 2009.</span><br></li></ul></div><div><b>Art. 3º</b>. Excetuam-se do disposto deste decreto as unidades municipais cujas atividades não possam sofrer solução de continuidade, as quais deverão funcionar  normalmente no dia 10 de julho de 2009.</div><div><b>Parágrafo único.</b> Nas demais unidades, a critério dos respectivos titulares, poderá ser instituído plantão nos casos julgados necessários.</div><div><b>Art. 4º</b>. Caberá às autoridades competentes de cada órgão fiscalizar o cumprimento das disposições deste decreto, vedada a concessão de abono no dia 10 de julho de 2009.</div><div><b>Art. 5º.</b> Os dirigentes das Empresas Públicas e Sociedades de Economia Mista poderão dispor internamente, a seu critério, sobre a matéria de que trata este decreto.</div><div><b>Art. 6º.</b> Este decreto entrará em vigor na data de sua publicação.</div><div><br></div><div><div>Prefeitura Do Município De São Paulo, Aos 30 De Junho De 2009, 456º Da Fundação De São Paulo.</div><div>Gilberto Kassab, Prefeito.</div><div>Publicado Na Secretaria Do Governo Municipal, Em 30 De Junho De 2009.</div><div>Clovis De Barros Carvalho, Secretário Do Governo Municipal.</div></div>
		</div>
	</div>
</div>
@endsection