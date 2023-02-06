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
<title>Comunicado Importante</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Comunicado Importante</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Comunicado Importante</h4>
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
			<div>A <b>APROFEM</b>  comunica que, no rodapé da primeira página do recém - editado Jornal <b>APROFEM</b> nº 174 foi inserida uma Nota, repercutindo a publicação, no DOC de 26/03/2014, - pág. 112, do Projeto de Lei (PL) 01-00100/2014 do Executivo, encaminhado à Câmara pelo Sr. Prefeito com o Ofício ATL 04/2014.</div><div><br></div><div>Contudo, o DOC de 27/03/2014 (pág. 88) publicou uma retificação da Secretaria de Registro Parlamentar e Revisão - SGP.4, dando conta de que o referido PL 01-00100/2014 foi encaminhado à Câmara Municipal pelo Tribunal de Contas do Município de São Paulo, através do Ofício SG/GAB nº 04/2014.</div><div><br></div><div>Com a edição nº 174 do Jornal <b>APROFEM</b> já impressa e encaminhada aos Correios, não houve tempo hábil para alteração da Nota mencionada no 1º parágrafo deste Comunicado, o que ora é feito, em nome da seriedade e da transparência que a Entidade imprime à sua atuação.</div><div><br></div><div>A <b>APROFEM</b> esclarece que o teor deste Comunicado não altera a posição e o sentimento da Entidade em relação ao assunto, expressos na já mencionada Nota do Jornal <b>APROFEM.</b></div>
		</div>
	</div>
</div>
@endsection