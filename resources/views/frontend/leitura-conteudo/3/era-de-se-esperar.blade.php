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
<title>Era de se esperar</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Era de se esperar</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Era de se esperar</h4>
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
			<blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><div><b><i>"Tudo bem que São Paulo está em situação financeira difícil, com pouca capacidade de investir. Mas governar a maior cidade do país nunca foi fácil. Os paulistanos querem alguém à altura desse desafio."</i> </b>(Jornal Agora, 01/07/2014, A3). </div></blockquote><div><br></div><div>O prefeito da Capital completa um ano e meio de mandato, sendo mal avaliado pelos paulistanos. Segundo pesquisa* recentemente divulgada, 47% dos entrevistados acham que ele vem fazendo um governo ruim ou péssimo, 37% acham regular e 15% consideram bom ou ótimo; e, numa escala de zero a dez, recebeu nota média 4,1.</div><div><br></div><div>A dívida impagável da cidade e as receitas provenientes da arrecadação do IPTU, não majoradas na proporção desejada pela Administração, são brandidas como as principais razões inibidoras do cumprimento das metas acenadas, enquanto candidato, pelo prefeito ora em exercício.</div><div><br></div><div>É revoltante presumir-se que o projeto de renegociação da dívida (reconheça-se, defendido pelo prefeito) está parado no Senado, por interesse e determinação do Governo Federal, que não pretende abrir mão dos repasses estaduais e municipais oriundos de dívidas com a União. Se aprovado, beneficiaria não só a cidade de São Paulo, mas também o Estado; em ano eleitoral, não há previsão de colocar o tema em pauta. Dessa forma, a dívida da Capital (que cresceu 15% somente nesta gestão e tem um valor atual aproximado de R$ 67 bilhões) representa quase 190% das receitas correntes líquidas e fará com que o prefeito, em quem muitos votaram, inclusive pela sua presumível facilidade de trânsito e contatos no Governo Federal (onde fora Ministro da Educação), empenhe-se apenas na manutenção da cidade, sem capacidade de investimento e usando o argumento para desobrigar-se de valorizar o funcionalismo municipal, inclusive naquilo que a legislação prevê.</div><div><br></div><div>Os servidores municipais já sentiram os efeitos dessa conjuntura desfavorável: suas justas reivindicações, encaminhadas através das Entidades Representativas, têm sido recebidas com reticência e pouco avançou-se nas negociações até agora. </div><div><br></div><div>No Ensino Municipal, as conquistas sinalizadas foram fruto do recente movimento grevista, que poderia ter sido evitado pela Administração, desgastou os envolvidos e consumiu tempo e disposição preciosos em outras frentes. </div><div><br></div><div>Para contribuir com a eventual reversão dessa incômoda avaliação, todos esperamos do Governo Municipal mais disposição para o diálogo e para a negociação, na sua concepção plena; o confronto não deve interessar aos bem-intencionados.</div><div><br></div><div>(*) Pesquisa Datafolha realizada nos dias 15 e 16 de julho, ouvindo 1.047 pessoas. Margem de erro: três pontos percentuais, para mais ou para menos.</div>
		</div>
	</div>
</div>
@endsection