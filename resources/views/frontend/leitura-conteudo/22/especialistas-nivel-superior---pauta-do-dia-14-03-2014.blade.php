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
<title>Especialistas (Nível Superior) - Pauta do dia 14/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas (Nível Superior) - Pauta do dia 14/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas (Nível Superior) - Pauta do dia 14/03/2014</h4>
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
			<div>Em 14 de março de 2014 ocorreu a segunda Reunião da Mesa Setorial dos Especialistas, que teve como pauta única, a continuação das discussões sobre o PL que reestrutura a carreira dos Profissionais de nível universitário.<br></div><div><br></div><div>Por deliberação dos presentes, optou-se por uma rodada de posicionamento das Entidades a respeito da proposta, durante a qual restou clara e inequívoca a rejeição, por parte de todas as Entidades, à remuneração por subsídio. O que diferenciou os posicionamentos refere-se apenas à disposição de discutir, ou não, os diversos conteúdos do PL.</div><div><br></div><div>Em resposta às Entidades, o representante do governo disse que a remuneração por subsídio não será obrigatória, ou seja, será opcional, mas é decisão do Governo implantá-la, informando, adicionalmente, que, para os futuros concursados, ela será obrigatória.</div><div><br></div><div>A representante da APROFEM manifestou-se de forma a deixar claro que a alegada opção é, no mínimo, falaciosa, uma vez que, aqueles que não optarem pela nova carreira, permanecerão nas mesmas categorias ora ocupadas, sem nenhuma possibilidade de progressão funcional e, muito provavelmente, submetidos aos pseudo reajustes de 0,01%, anualmente. Isto, na prática, é o mesmo que impor a "opção" pela nova forma de remuneração, pois a alternativa é o engessamento da carreira e o congelamento dos salários.</div><div><br></div><div>Na sequência, foram feitos vários comentários sobre a forma de migração de uma carreira para a outra, com as representações sindicais apontando para os prejuízos que serão impostos aos que já avançaram significativamente na carreira.</div><div><br></div><div>Quanto às respostas aos questionamentos que as Entidades colocaram para o Governo, o representante informou que as enviará por meio eletrônico, no próximo dia 17.</div><div><br></div><div>Os representantes dos servidores solicitaram ao Governo que, para a próxima Reunião, que deverá ocorrer no dia 21/03, sejam definidos os pontos sobre os quais poderá haver efetiva negociação e os que estão fora do processo negocial.</div>
		</div>
	</div>
</div>
@endsection