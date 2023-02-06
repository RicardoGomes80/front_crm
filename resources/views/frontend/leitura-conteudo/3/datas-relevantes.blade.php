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
<title>Datas Relevantes</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Datas Relevantes</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Datas Relevantes</h4>
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
			<div>No mês de novembro, comemoramos datas muito importantes e significativas; dentre elas, o "Dia da Bandeira" e o "Dia Nacional da Consciência Negra". Ambas concorrem para a agregação de valores sociais voltados ao fortalecimento das instituições democráticas e melhoria das relações sociais.</div><div><br></div><div>Com este espírito, a APROFEM lhe faz esta lembrança, na expectativa de que elas sejam divulgadas e trabalhadas nas escolas.</div><div><br></div><div><b>Dia 19 de novembro: "Dia da Bandeira"</b></div><div><br></div><div>A atual Bandeira Nacional foi adotada pelo Decreto nº 4, de 18 de novembro de 1889, quatro dias após a Proclamação da República, 15 de novembro de 1889. A História registra como seus criadores: Raimundo Teixeira Mendes (positivista), Miguel Lemos (diretor do Apostolado Positivista do Brasil), Manuel Pereira Reis (astrônomo) e Décio Vilares (pintor).</div><div><br></div><div>As cores que a compõem têm significado próprio e as estrelas que dela constam representam cada Estado brasileiro e o Distrito Federal. O dístico "Ordem e Progresso" reporta-se à influência positivista de Augusto Comte, filósofo francês. Ao longo de sua história, o Brasil teve outras bandeiras, até a versão hoje existente.</div><div><br></div><div>A Bandeira Nacional é um dos símbolos mais importantes do país. Há normas determinando quando, como e onde deve ser hasteada e arriada. A bandeira não pode ficar exposta durante a noite, a não ser que seja bastante iluminada.</div><div><br></div><div><b>Dia 20 de novembro: "Dia Nacional da Consciência Negra"</b></div><div><br></div><div>Foi escolhida esta data porque foi nesse dia, no ano de 1695, que morreu Zumbi, líder do Quilombo dos Palmares, quando em combate, defendendo seu povo e sua comunidade.</div><div><br></div><div>Para nós, brasileiros, a criação desta data se apresenta como muito importante, pois nos possibilita não somente a reflexão sobre a importância da cultura e do povo africano na formação da cultura nacional, como também a conscientização sobre os valores multiculturais que a compõem.</div>
		</div>
	</div>
</div>
@endsection