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
<title>Fim da Greve dos Profissionais de Educação</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Fim da Greve dos Profissionais de Educação</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Fim da Greve dos Profissionais de Educação</h4>
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
			<div>Graças à atuação séria e persistente da <b>APROFEM</b>, juntamente com o SINPEEM, na busca constante pela melhoria no Ensino Municipal, o governo rendeu-se a algumas das reivindicações da classe, que prima por conquistas não apenas de ordem salarial, mas em especial, pela qualidade do ensino e melhores condições de trabalho e segurança.</div><div><br></div><div>A <b>APROFEM</b>  agradece e parabeniza a atuação unificada e comprometida de seus filiados.</div><div><br></div><div>Continuemos unidos ! </div><div> </div><div><b>Fim da Greve no Ensino Municipal - Protocolo de Negociação Firmando em 03/06/2014</b></div><div><b><br></b></div><div>Leia, a seguir, a íntegra do Protocolo de Negociação aprovado pela maioria dos participantes da Assembleia do dia 03 de junho e assinado pelas partes.</div>
		</div>
	</div>
</div>
@endsection