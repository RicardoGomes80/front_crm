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
<title>Decreto nº 41.986, de 14 de maio de 2002</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Decreto nº 41.986, de 14 de maio de 2002</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Decreto nº 41.986, de 14 de maio de 2002</h4>
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
			<div><span rel="line-height: 1.2;">MARTA SUPLICY, Prefeita do Município de São Paulo, no uso de suas atribuições que lhe são conferidas por lei, </span></div><div class="text-justify"><span rel="line-height: 1.2;"><br></span></div><div class="text-justify"><span rel="line-height: 1.2;"><strong>D E C R E T A:</strong></span><br></div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 1º - </b>A Lei nº 13.304, de 21 de janeiro de 2002, que reconhece, no âmbito do Município de São Paulo, a Língua Brasileira de Sinais - LIBRAS como língua de instrução, meio de comunicação objetiva e de uso corrente da comunidade surda, fica regulamentada na conformidade das disposições previstas neste decreto.</div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 2º </b>- Competirá à Secretaria Municipal de Educação, por intermédio da Diretoria de Orientação Técnica - Educação Especial, orientar as ações de formação dos servidores que atuam direta ou indiretamente com alunos surdos, a serem desenvolvidas nos Núcleos de Ação Educativa - NAEs.</div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 3º - </b>Aos Núcleos de Ação Educativa - NAEs, da Secretaria Municipal de Educação, caberá realizar levantamento anual da demanda de alunos surdos atendidos na rede municipal de ensino.</div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 4º -</b> Procedido o levantamento previsto no artigo anterior, os Núcleos de Ação Educativa - NAEs adotarão as medidas pertinentes, visando à formação dos servidores que atuam direta ou indiretamente com alunos surdos.</div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 5º -</b> As despesas decorrentes da execução deste decreto correrão por conta das dotações orçamentárias próprias, suplementadas se necessário.</div><div class="text-justify"><br></div><div class="text-justify"><b>Art. 6º - </b>Este decreto entrará em vigor na data de sua publicação, revogadas as disposições em contrário.</div><div class="text-justify"><br></div><div class="text-justify"><p class="text-justify">MARTA SUPLICY, PREFEITA</p><p class="text-justify">ANNA EMILIA CORDELLI ALVES, Secretária dos Negócios Jurídicos</p><p class="text-justify">JOÃO SAYAD, Secretário de Finanças e Desenvolvimento Econômico</p><p class="text-justify">ENY MARISA MAIA , Secretária Municipal de Educação</p><p class="text-justify">Publicado na Secretaria do Governo Municipal, em 14 de maio de 2002.</p><p class="text-justify">RUI GOETHE DA COSTA FALCÃO, Secretário do Governo Municipal</p></div>
		</div>
	</div>
</div>
@endsection