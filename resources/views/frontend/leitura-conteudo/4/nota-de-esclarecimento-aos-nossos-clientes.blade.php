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
<title>Nota de Esclarecimento aos Nossos Clientes</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nota de Esclarecimento aos Nossos Clientes</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nota de Esclarecimento aos Nossos Clientes</h4>
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
			<div>A Moura e Estevam Advogados Associados esclarece a seus clientes e ao público em geral que não possui qualquer elo, vínculo ou parceria com a empresa Moura Advogados Associados, empresa com sede no Rio de Janeiro.  </div><div> </div><div>Informamos, ainda, que não enviamos  qualquer e-mail ou correspondência com a finalidade de cobrança através de boleto bancário aos nossos clientes. Portanto, aqueles que porventura receberem tal cobrança por e-mail deverão, por prudência e segurança, verificar se não se trata de vírus.</div><div> </div><div>Em caso de dúvidas em relação ao ora noticiado, estamos à disposição para esclarecimentos.</div><div> </div><div><b>Atenciosamente</b>,</div><div> </div><div><b>Moura e Estevam Advogados Associados</b></div><div>Av. Brigadeiro Luís Antonio, 290, conj. 105</div><div>Bela Vista  - São Paulo.</div>
		</div>
	</div>
</div>
@endsection