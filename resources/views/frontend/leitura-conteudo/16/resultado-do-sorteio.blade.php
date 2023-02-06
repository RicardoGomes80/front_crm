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
<title>Resultado do Sorteio</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Resultado do Sorteio</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Resultado do Sorteio</h4>
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
			<div><br></div><div> Sr(a). Representante Sindical</div><div>Conforme anunciado na Reunião de Representantes Sindicais do último dia 06/03, seguem os nomes dos sorteados que foram contemplados com os prêmios oferecidos pela EG CRED.</div><div>Observação: O sorteio ocorreu na Sede da <b>APROFEM</b>, no dia 07/03</div><div><b>Premio</b>: Grill George Foreman</div><div><b>Ganhadores:</b></div><div><ul><li>Denise RF 673.830.3</li><li>Claudia RF 607.488.0</li></ul></div><div><b>Premio</b>: Camisetas alusivas à Copa do Mundo</div><div><br></div><div><b> Ganhadores:</b></div><div><ul><li>Sirlaine RF<b> </b>728.514.1</li><li>Willian RF 752.150.2</li><li>Ana RF 677.736.8</li><li>Mirian RF 597.554.9</li><li>Diva RF 728.929.4</li><li>Vilma RF 622.331.1</li></ul></div><div>A APROFEM solicita aos contemplados que entrem em contato com a profÂª. Regina, do Setor de Convênios, para as providências de recebimento do prêmio.</div>
		</div>
	</div>
</div>
@endsection