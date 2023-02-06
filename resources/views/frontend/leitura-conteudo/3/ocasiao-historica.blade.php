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
<title>Ocasião histórica</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Ocasião histórica</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Ocasião histórica</h4>
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
			<p><em><sup>Publicado em 30/01/2012</sup></em></p><div><br></div><p class="text-justify">A APROFEM estampou, na primeira página da edição jan/fev de 2012 do seu Jornal, a matéria abaixo reproduzida, que atesta o compromisso de sua Diretoria em assegurar as modalidades modernas e eficazes de comunicação e interação com os seus filiados.</p><p class="text-justify">A expectativa é de que os usuários interessados compreendam o nosso propósito de corresponder ao interesse daqueles que nos acessarem, em busca de informações e esclarecimentos.</p><p class="text-justify">Para tanto, mister se faz preservar a ferramenta eletrônica, assegurando que os contatos (nos dois sentidos) ocorram de forma clara, ética e respeitosa.</p><p class="text-justify">Por oportuno, a APROFEM tem a honra de anunciar que a posse de sua Diretoria e Conselho Fiscal, para um mandato trienal, ocorrerá no próximo dia 1º de março. Os compromissos, os princípios e as estratégias de atuação da Entidade, reconhecidos e respeitados pelos servidores municipais, serão preservados e, quando oportuno, aperfeiçoados.</p><p class="text-justify"><b>APROFEM estreia nas redes sociais! </b></p><p class="text-justify">A APROFEM sempre busca estar presente na vida de seus filiados de forma prática, funcional e dinâmica. Atualmente, os internautas brasileiros lideram o acesso mundial às redes sociais. Cerca de 86% dos usuários ativos no País utilizam essas redes, segundo uma recente pesquisa.</p><p class="text-justify">Pensando nisso, em fevereiro, faremos nossa estreia nas redes sociais com a criação de fanpage no Facebook, perfil oficial no Twitter e abertura de canal no Youtube.</p><p class="text-justify">Será mais um meio de relacionamento para que nossos filiados possam receber, com agilidade, informações de conteúdo confiável sobre a categoria, tirar suas dúvidas, conhecer os serviços e benefícios exclusivos que a APROFEM oferece e compartilhar notícias com seus pares e amigos.</p><p class="text-justify">Em breve, divulgaremos os links dos endereços oficiais para que todos os interessados possam participar e interagir com a APROFEM.</p>
		</div>
	</div>
</div>
@endsection