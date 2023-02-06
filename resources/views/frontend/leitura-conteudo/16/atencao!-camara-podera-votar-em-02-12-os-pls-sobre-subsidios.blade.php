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
<title>Atenção! Câmara poderá votar em 02/12 os PLs sobre subsídios</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Atenção! Câmara poderá votar em 02/12 os PLs sobre subsídios</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Atenção! Câmara poderá votar em 02/12 os PLs sobre subsídios</h4>
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
			<div>A pauta da 160ª Sessão Extraordinária da Câmara Municipal de São Paulo, publicada no DOC de 02/12/2014, página 101, prevê a discussão para aprovação, em 1ª votação (são necessárias duas votações), dos seguintes Projetos de Lei, de autoria do Executivo,  que afetam diretamente os servidores públicos municipais, pela introdução do regime de remuneração por subsídio:</div><div><br></div><div><ul><li><span style="line-height: 1.2;">Item 4 - PL 507  para os Profissionais da Saúde,criando remuneração por subsídio;</span><br></li><li><span style="line-height: 1.2;">Item 8 - PLO 03 altera a Lei Orgânica do Município para introduzir a remuneração por subsídio e altera quinquênios e sexta-parte</span><br></li><li><span style="line-height: 1.2;">Item 10 - PL 311 cria duas novas carreiras, remuneradas por subsídio;</span><br></li><li><span style="line-height: 1.2;">Item 12 - PL 312 para os Profissionais do Nível Superior, criando remuneração por subsídio</span><br></li></ul></div><div><br></div><div>As Sessões Extraordinárias ocorrem após o encerramento da Sessão Ordinária, que tem início às 15 horas. Entretanto, como a galeria,  de onde o público pode assistir às sessões, tem um número pequeno de lugares, é necessário chegar bem antes, para conseguir um assento.Na sequência estão, também, convocadas mais outras três Sessões Extraordinárias que mantêm a mesma pauta da 160ª. Isto significa que é impossível determinar a hora do encerramento dos trabalho.</div><div><br></div><div>Para aprovação do PLO 03 ( Projeto de Emenda à Lei Orgânica do Município), item 8 da pauta, são necessários os votos favoráveis de dois terços dos Vereadores, mas para os PLs (Projetos de Lei), a aprovação se dá com a metade mais um (dos Vereadores).</div><div><br></div><div>A APROFEM conclama a todos para comparecerem à Câmara, usando, preferencialmente, uma camiseta preta, símbolo da rejeição dos servidores municipais à remuneração por subsídio.</div><div><br></div><div>Somente a presença maciça dos interessados poderá fazer a diferença para convencer os Vereadores de que os projetos do Governo não contam com a aprovação dos servidores.</div>
		</div>
	</div>
</div>
@endsection