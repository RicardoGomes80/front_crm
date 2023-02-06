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
<title>Alterada a Portaria de dispensa de ponto para eventos da APROFEM</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Alterada a Portaria de dispensa de ponto para eventos da APROFEM</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Alterada a Portaria de dispensa de ponto para eventos da APROFEM</h4>
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
			<div><b>Reunião de Representantes Sindicais da APROFEM: Agora serão três por Unidade Educacional.</b></div><div>Por solicitação da <b>APROFEM,</b> a Portaria SME nº 7.287, de 30 de dezembro de 2013, que dispõe sobre a dispensa de ponto aos afiliados para participação em eventos programados por este Sindicato, para o ano de 2014, foi republicada no Diário Oficial da Cidade de 22 de fevereiro de 2014, página 14, para garantir a participação, nas Reuniões de Representantes Sindicais da <b>APROFEM</b>, de três representantes, sendo dois do Quadro do Magistério Municipal e um do Quadro de Apoio à Educação, ou do Quadro de Nível Básico,ou do Quadro de Nível Médio ou do Quadro de Profissionais da Administração, por Unidade de Trabalho.</div><div><br></div><div>Por esta razão, informamos que a eleição para os representantes sindicais deverá ser modificada, para atender aos novos dispositivos da Portaria.</div><div><br></div><div>A <b>APROFEM</b> já está providenciando as necessárias alterações na ata de eleição de representantes, que estará disponível em nosso Portal nos próximos dias.</div>
		</div>
	</div>
</div>
@endsection