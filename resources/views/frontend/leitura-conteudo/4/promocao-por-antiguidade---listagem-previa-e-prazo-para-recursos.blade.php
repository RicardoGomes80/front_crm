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
<title>Promoção por Antiguidade - Listagem prévia e prazo para recursos</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Promoção por Antiguidade - Listagem prévia e prazo para recursos</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Promoção por Antiguidade - Listagem prévia e prazo para recursos</h4>
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
			<div>Publicada a listagem  prévia  dos funcionários concorrentes à promoção por antiguidade, <span style="line-height: 1.2;">no doc de 17/04/2014, da página 31 até a página 120 </span></div><div><span style="line-height: 1.2;"><br></span></div><div><span style="line-height: 1.2;"><b>Prazo para recursos:</b> de 22/04 a 01/05/2014, das 10h às 16h.</span></div><div><span style="line-height: 1.2;"><br></span></div><div><span style="line-height: 1.2;">O</span><span style="line-height: 1.2;">s locais para interpor recursos estão listados nesse mesmo doc, página 31.</span></div><div><span style="line-height: 1.2;"><br></span></div><div><b>Observações:</b> os recursos, cujos formulários estarão nos locais,  deverão ser devidamente fundamentados e dirigidos à diretora do departamento de desenvolvimento profissional/ddep. na impossibilidade de comparecimento, o servidor poderá se fazer representar por procurador legalmente constituído.os recursos recebidos fora do prazo não serão considerados.</div><div><br></div><div>Lembramos que a publicação da listagem prévia não significa, necessariamente, a efetiva promoção do servidor. trata-se da posição indicativa, sendo que, dos que estão em condições de serem promovidos, apenas 16% o serão, sendo obedecido, rigorosamente, o critério de maior tempo no grau atual <span style="line-height: 1.2;">a promoção por antiguidade ocorre  no mês de junho, e  a promoção por merecimento no mês de dezembro!</span></div>
		</div>
	</div>
</div>
@endsection