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
<title>RPPS - Regime Próprio de Previdência Social - IPREM</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">RPPS - Regime Próprio de Previdência Social - IPREM</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>RPPS - Regime Próprio de Previdência Social - IPREM</h4>
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
			<p><em><sup>Publicado no Jornal APROFEM - Julho/Agosto 2009</sup></em></p><div><ul><li><span rel="line-height: 1.2;">Decreto n.º 50.729, de 07/07/2009 - DOC de 08/07/2009, pág. 01</span></li><li><span rel="line-height: 1.2;">Portaria 074/SMG.G/2009 - Republicada no DOC de 09/07/2009, págs. 4 a 7</span></li></ul></div><div><br></div><p class="text-justify">Todo servidor detentor de um cargo na PMSP é por ele remunerado. O seu pagamento é formado pelo padrão de vencimentos mais os benefícios adquiridos funcionalmente, como: promoção, evolução funcional, adicionais, sexta-parte etc. Sobre esses valores incidem, compulsoriamente, os 11% para o RPPS - Regime Próprio da Previdência Social (IPREM). Assim, o servidor terá direito aos mesmos no cálculo de seus proventos, por ocasião da aposentadoria/pensão.</p><p class="text-justify">Entretanto, existem outras parcelas remuneratórias que demandam a manifestação do servidor para excluí-las ou incluí-las na base de contribuição previdenciária do RPPS (Consulte a Portaria 074/SMG.G/2009). Nesses casos, o servidor deverá optar nos termos da legislação acima citada. As que podem ser excluídas são aquelas que aparecem automaticamente no pagamento do servidor, exceto as de caráter compulsório, como explicado anteriormente.</p><p class="text-justify">Saiba quais são as parcelas remuneratórias da base de contribuição do RPPS consultando, para inclusão, os Anexos II e IV. Para exclusão, consulte os Anexos I e III, ambos da Portaria 074/SMG.G/2009.</p><p class="text-justify">As Unidades deverão convocar os servidores para formalizarem a(s) opção(ões) e os orientarão sobre as mesmas.</p><div class="text-justify"><b>Opinião da APROFEM</b></div><div class="text-justify"><br></div><p>A APROFEM sempre orientou seus filiados para que recolhessem ao RPPS tudo o que fosse possível, garantindo-se o direito a todos os benefícios na aposentadoria. Entretanto, a partir do governo da Prefeita Marta Suplicy foram criadas as mais diversas gratificações, no nosso entendimento com a finalidade de não se estender o benefício aos aposentados, que ficaram, para que fosse cumpridos a Constituição, com míseros reajustes de até 0,01%.</p><p>Para o recebimento das gratificações são utilizados, muitas vezes, critérios cruéis, como foi o caso da GDE (Educação), e esperamos não o sejam no caso do PDE, respeitando-se, nesse caso, os dispositivos contidos no Art. 64 da Lei n.º 8.989, de 29/10/1979, para o seu recebimento.</p><p class="text-justify">Também continuaremos reivindicando, no caso dos professores, que possam cumprir, sem qualquer restrição, a jornada de opção (JEIF), assim bem como realizar JEX, TEX e HTE. Se já houvesse sido regulamentada a Previdência Privada, poderíamos sugerir que o recolhimento fosse para a mesma, pois haveria, em tese, a garantia do recebimento no futuro.</p><div class="text-justify">Esperamos que a Administração Municipal venha, de forma <b>transparente</b>, explicar aos servidores municipais como pretende proceder em relação aos servidores que recolherem sobre as parcelas remuneratórias, no momento em que se aposentarem com paridade. A orientação e compromisso oficial poderão servir para que os mesmos tomem a decisão acertada, e que esse recolhimento não seja motivo de grande frustração, como ocorre com os aposentados, atualmente.</div>
		</div>
	</div>
</div>
@endsection