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
<title>Orquestra GPA emociona filiados</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Orquestra GPA emociona filiados</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/014000002560001_0.png')}}" alt="Orquestra GPA emociona filiados" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000256/014000002560001_0.png')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Orquestra GPA emociona filiados</h4>
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
			<div>A Orquestra GPA, que tem como Diretora Artística e Professora a Dra. Renata Jaffé e como regente o Dr. Daniel Misiuk, foi aplaudida de pé aqui no XVII Congresso <b>APROFEM!</b> Os jovens fizeram uma apresentação linda!</div><div><br></div><div>A Orquestra tem 15 anos de existência, já recebeu diversos prêmios no Brasil e faz apresentações inclusive no exterior.</div><div><br></div><div>O método Jaffé de Ensino Coletivo de Cordas, criado pelo Maestro Alberto Jaffé, o único no mundo que ensina violinos, violas, violoncelos e contrabaixos sempre juntos, desde a primeira nota, sem aulas individuais.</div><div><br></div><div>Além de aprender a tocar, o objetivo é trazer valores do ensino coletivo para os jovens, como: responsabilidade com horário, com os instrumentos, trabalho em equipe, hierarquia. Cada um sabendo a sua missão na orquestra e seguindo a direção, o resultado final é maravilhoso.</div><div><br></div><div>E os congressistas conferiram este resultado ao vivo, em que todos se emocionaram.</div><div><br></div><div>Ao final, as palavras da filiada Clarice Leonel Guerra em nome de todos os participantes: "vou expressar o pensamento de todos que estamos aqui. Nossas almas estão pulando de alegria. Pulando, pulando, pulando! Dizendo "eu acredito no futuro!".</div><div><br></div><div><b>Com algo tão sublime assim, todos nós acreditamos!</b></div><div><br></div>
		</div>
	</div>
</div>
@endsection