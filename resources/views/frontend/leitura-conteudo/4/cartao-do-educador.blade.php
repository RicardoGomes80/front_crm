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
<title>Cartão do Educador</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Cartão do Educador</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Cartão do Educador</h4>
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
			<div>A Secretaria Municipal de Educação concluiu as negociações com a Associação Nacional de Livrarias (ANL) e com a Câmara Brasileira do Livro (CBL) e estenderá o benefício do Cartão do Educador aos Professores Aposentados e à Rede Conveniada da Capital.</div><div><br></div><div>Os cartões dos aposentados já estão sendo confeccionados, e a Secretaria aguarda das entidades parceiras a relação completa dos professores que atuam nas unidades conveniadas. Além dos 78 mil servidores da ativa que ganharão o cartão, serão mais 27.719 aposentados e 28.213 professores da rede conveniada.</div><div><br></div><div><b>Para todos</b> - O benefício é resultado de uma parceria entre a Secretaria Municipal de Educação, a Câmara Brasileira do Livro e a Associação Nacional de Livrarias e prevê desconto de 20% na compra de livros em 95 pontos de venda na cidade de São Paulo, identificados com o selo do programa.</div><div><br></div><div>Os Profissionais da Educação que fizerem seu cadastro no Portal, acesse o site -><b> <a href="http://portal.sme.prefeitura.sp.gov.br/Cartao-do-Educador" target="blank">Portal da Secretária Municipal de Educação</a></b> , ficarão sabendo de promoções das livrarias credenciadas e poderão garantir descontos de até 50%.</div>
		</div>
	</div>
</div>
@endsection