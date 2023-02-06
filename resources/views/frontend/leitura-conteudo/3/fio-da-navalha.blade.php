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
<title>Fio da navalha</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Fio da navalha</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Fio da navalha</h4>
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
			<p class="text-justify"><em><sup>Publicado no Jornal APROFEM - Maio/Junho 2010</sup></em></p><p class="text-justify">No dia 14/05, toda a imprensa noticiou a morte de um bebê de sete meses no interior de um CEI (creche) da rede municipal de ensino.</p><p class="text-justify">O enredo se repete: o sensacionalismo da mídia; a compreensível dor dos pais, responsabilizando a prefeitura e clamando por justiça; a indefectível nota oficial, anunciando a apuração dos fatos.</p><p class="text-justify">Por imperativo legal, inclusive, é natural que se apure as circunstâncias em que ocorreu a fatalidade e eventuais responsabilidades.</p><p class="text-justify">De outro lado, a ótica sob a qual abordaremos o fato recorrente, é aquela presente no dia a dia da Entidade enquanto defensora dos direitos de seus representados e da preservação da sua integridade e imagem profissional:<br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify">os educadores municipais convivem, diariamente, com milhares de crianças e jovens. Desempenham suas atividades com denodo e dedicação, não obstante as adversidades com que se deparam, constantemente.</li><li class="text-justify">as classes, turmas e grupos, normalmente superdimensionados apesar dos protestos e argumentos dos educadores e da APROFEM, não fazem com que o ânimo desses dedicados servidores municipais se arrefeça.</li><li class="text-justify">o reconhecimento desse trabalho inexiste, quer por parte das autoridades, quer por parte de parcela significativa da população.</li><li class="text-justify">por sinal, alguns personagens que se autoproclamam defensores dos interesses do povo e, a esse pretexto, desenvolvem insidiosa campanha de estigmatização negativa dos servidores, em especial dos professores do ensino público.</li></ul></div><div class="text-justify">Para o bem desse universo de crianças e jovens, bem como de seus dedicados educadores, urge que se proceda a um movimento visando a reversão dessa tendência, envolvendo autoridades e a população, para que os servidores públicos sejam respeitados e preservados na sua atuação e as famílias cumpram o papel constitucional previsto na formação de seus filhos.<br></div>
		</div>
	</div>
</div>
@endsection