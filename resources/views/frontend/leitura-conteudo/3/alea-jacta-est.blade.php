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
<title>Alea Jacta Est*</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Alea Jacta Est*</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Alea Jacta Est*</h4>
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
			<div><em><sup>Editorial Jornal APROFEM - Novembro/Dezembro 2010</sup></em></div><p class="text-justify"><br></p><p class="text-justify">O processo eleitoral deste ano resultou na eleição da Sra. Dilma Rousseff para presidir a Nação Brasileira pelo próximo quadriênio, bem como do Sr. Geraldo Alckmin para governar o Estado de São Paulo. Também foram eleitos senadores, deputados federais e estaduais dos Estados brasileiros.</p><p class="text-justify">Dos personagens folclóricos e/ou polêmicos, alguns foram eleitos e a maioria (felizmente!) foi rejeitada nas urnas. Ainda assim, em decorrência das regras eleitorais vigentes (discutíveis, no mínimo), muitos candidatos foram eleitos por votos não destinados originalmente a eles, mas decorrentes de coeficientes eleitorais.</p><p class="text-justify">Como afirmado nesta coluna, na edição anterior, agora "<i><b>... só nos resta desejar que Deus os ilumine ... e nos ajude!</b></i>".</p><p class="text-justify">Conforme amplamente divulgado, o prefeito da Capital intenciona outros vôos políticos e já se mobiliza para trocar de partido. Isso parece dizer respeito exclusivamente a ele; entretanto, passa a nos interessar na medida em que essa atitude pode atingir os anseios dos servidores públicos municipais. Para o ano que vem, as receitas municipais previstas são expressivamente maiores que as deste ano (para exemplificar, os recursos destinados à Educação serão de R$ 7,1 bilhões, contra os R$ 4,2 bilhões atuais).</p><p class="text-justify">A APROFEM, coerente com o seu compromisso de defender os interesses dos seus representados, continuará envidando todos os seus esforços para assegurar que o Governo Municipal cumpra as suas promessas eleitorais e obrigações institucionais, valorizando salarialmente o servidor municipal, assegurando-lhe condições dignas de trabalho e capacitação permanente.</p><p class="text-justify">Para isso, necessário se faz que os servidores municipais da ativa, os aposentados e os pensionistas cerrem fileiras conosco, filiando-se à Entidade e conferindo à sua atuação a legitimidade decorrente de um Quadro de Filiados quantitativa e qualitativamente expressivo. Contamos com o seu apoio para isso!</p><p class="text-justify">(*) A sorte está lançada.</p>
		</div>
	</div>
</div>
@endsection