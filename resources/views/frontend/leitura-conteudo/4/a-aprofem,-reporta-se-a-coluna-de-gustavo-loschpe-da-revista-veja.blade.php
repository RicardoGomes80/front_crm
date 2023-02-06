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
<title>A APROFEM, reporta-se à coluna de Gustavo Loschpe da Revista Veja</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">A APROFEM, reporta-se à coluna de Gustavo Loschpe da Revista Veja</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>A APROFEM, reporta-se à coluna de Gustavo Loschpe da Revista Veja</h4>
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
			<div><b>Sr. Colunista</b></div><div> </div><div>Uma foto - pinçada propositalmente e um texto duro e crítico - pondo abaixo um Sistema de Ensino considerado, ao longo dos tempos, o melhor do Brasil, que vem sendo destruído ideologicamente, inclusive com o apoio da imprensa e de educadores que deveriam, ao invés de ajudar quem não tem interesse numa educação de qualidade, auxiliar que se demonstre as preocupações futuras dos Profissionais de Educação da Prefeitura, fez com que, muitos filiados da APROFEM procurassem a entidade no sentido de que uma resposta precisaria ser dada.</div><div> </div><div>O seu texto, publicado na revista VEJA edição 2373, ano 47, nº 20, de 14 de maio de 2014, trouxe-nos, embora no mesmo conste algumas verdades, uma tristeza muito grande, principalmente por conhecermos o seu trabalho, inclusive em escolas da Prefeitura do Município de São Paulo, ao colocar o professor como único responsável pela situação em que se encontra o ensino no País.</div><div> </div><div>Tivesse procurado mais detalhes, teria visto que, em nenhum momento, falou-se em "vitimização de professores", de "coitados, estropiados e maltratados", termos que não condizem com os profissionais que, embora ao longo dos tempos tenham sido aviltados, não só pelas sucessivas administrações, agora também o são por quem poderia defendê-los.</div><div> </div><div>Se nem nesse momento, de extrema dificuldade pela qual passa a classe, conseguem, de quem deveria, obter respeito e consideração, como recebê-los de uma sociedade que, aos poucos, foi levada a maltratá-los e desconsiderá-los como profissionais necessários ao desenvolvimento de um país de qualidade, não se sabendo a que título e pretensão?</div><div> </div><div>O texto apresentado está ideologicamente eivado de situações que não condizem com a verdade do que realmente acontece na Rede Municipal de Ensino e vem transferindo para São Paulo o que foi visto e verificado em outros locais do Brasil, segundo suas próprias pesquisas. O ideal é que se fizessem denúncias precisas, relatadas com dados e fatos objetivos e não um texto para leitura discursiva, sem qualquer definição da realidade atual.</div><div> </div><div>Os educadores municipais de São Paulo, dos quais mais de 53.000 fazem parte desta entidade, não aceitam a pecha que lhes é impingida e aguardam que, embora o senhor diga que fez a "última tentativa de falar aos nossos mestres", venha novamente tratar do assunto, com dados verídicos, evitando-se "firulas" que nada trazem em proveito da Educação e de um Ensino de Qualidade, como sempre foi desenvolvido pela Prefeitura do Município de São Paulo, considerado, ao longo dos tempos, como o melhor do Brasil. Que tal resgatá-lo com a ajuda de pessoas que podem fazê-lo, como é o seu caso, promovendo o que existe de mais positivo, ao invés de jogar tudo o que foi construído, ao longo de quase cinco décadas, em uma vala profunda?</div>
		</div>
	</div>
</div>
@endsection