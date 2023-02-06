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
<title>Saiu a regulamentação do PDE 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saiu a regulamentação do PDE 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saiu a regulamentação do PDE 2014</h4>
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
			<div><b>Decreto nº 55.106/2014 regulamenta PDE deste Ano</b></div><div><span style="line-height: 1.2;"> </span></div><div>O Decreto nº 55.106, de 13 de maio de 2014 , para o exercício de 2014, traz alterações na forma de apuração e cálculo dos valores individuais do Prêmio de Desempenho Educacional, prevista no Decreto nº 53.946, de 28 de maio de 2013, com as modificações operadas pelo Decreto nº 54.040, de 26 de junho de 2013, e  fixa o valor total do Prêmio de Desempenho Educacional relativo ao exercício de 2014.</div><div><br></div><div>Havia necessidade de alteração deste decreto, em função da impossibilidade de adoção dos índices do IDEB e também da inadequação apresentada, tendo a vista a quantidade exagerada de Profissionais de Educação que deverão devolver valores recebidos na primeira parcela, em junho de 2013.</div><div><br></div><div>Apesar das insistentes reivindicações da<b> APROFEM</b>, no sentido de aumentar o valor total do Prêmio a ser pago, o Prefeito manteve os mesmos R$ 2.400,00, praticados desde 2007.</div><div><br></div><div>As alterações estão na definição de utilização do índice de ocupação escolar e não mais do IDEB, além da redução do peso das ausências por licença médica para tratamento da saúde do próprio servidor e do peso que as ausências, de modo geral, terão, para apuração do chamado "exercício real".</div><div><br></div><div>Há, também, referência a disposições do Art. 2º do Decreto nº 53.946, de 2013 inciso II, sobre o período de apuração da frequência individual.</div><div><br></div><div>Confrontando com o citado documento, verifica-se que:</div><div><br></div><div>"Art. 4º O valor do Prêmio de Desempenho Educacional será calculado e individualmente pago, considerando-se: ...</div><div><ul><li><span style="line-height: 1.2;">o tempo de exercício real do profissional no cargo ou função, aferido no período compreendido entre 1º de fevereiro e 31 de dezembro do ano a que se referir o prêmio.".</span><br></li></ul></div><div>Ou seja, as novas regras para apuração do tempo de exercício real já serão consideradas desde 1º de fevereiro de 2014 e, não, a partir da edição deste decreto.</div><div><br></div><div>As demais alterações referem-se às tabelas contidas nos Anexos</div><div><br></div><div><ul><li><span style="line-height: 1.2;">Pontuação das ausências por tipo de evento;</span></li><li><span style="line-height: 1.2;">Percentual de desconto pelos pontos atribuídos às ausências; </span></li><li><span style="line-height: 1.2;">Percentual atribuído ao Índice de Ocupação Escolar.</span><br></li></ul></div><div> </div><div>Oportuno lembrar que tais alterações ocorreram através da pressão exercida pela<b> APROFEM</b> e demais Entidades participantes da Mesa Setorial de Negociação da Educação, visando atenuar os efeitos devastadores do Decreto 53.946/2013, que provocaram a necessidade de estorno de valores pagos no ano passado, a título de primeira parcela do PDE. Registre-se, ainda, que restaram desatendidas nossas reivindicações  de voltar a calcular o valor dos descontos apenas sobre a segunda parcela e não sobre o valor total do prêmio, como era feito até 2012.</div>
		</div>
	</div>
</div>
@endsection