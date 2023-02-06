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
<title>Novas filiações à APROFEM</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Novas filiações à APROFEM</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Novas filiações à APROFEM</h4>
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
			<div> A APROFEM está promovendo uma breve campanha para angariar novos filiados e solicita a sua participação: cada indicação de nova filiação assegurar-lhe-á um desconto de 5% nas estadias das Colônias de Férias e Pousada da APROFEM, extensiva aos acompanhantes.</div><div><br></div><div><b> Duração da Campanha de Filiação:</b> até o final de dezembro de 2014</div><div><b style="line-height: 1.2;"> Prazo  para utilização do desconto obtido: </b><span style="line-height: 1.2;">até junho de 2015</span></div><div><span style="line-height: 1.2;"><br></span></div><div><b>Observações:</b></div><div><b><br></b></div><div><ol><li><span style="line-height: 1.2;">O desconto é cumulativo (uma indicação , 5%; duas indicações ,</span><span style="line-height: 1.2;"> 10%; e assim por diante) e será assegurado com a concretização da filiação do(a) servidor(a) indicado (a);<br></span><br></li><li><span style="line-height: 1.2;"> A utilização do desconto está condicionada à obtenção da reserva nas Colônias/Pousada, em qualquer período, inclusive pacotes (dentro do prazo acima estabelecido), pelas regras usuais estabelecidas pelo Setor de Convênios da APROFEM e amplamente divulgadas no Portal APROFEM e Jornal APROFEM;<br></span><br></li><li><span style="line-height: 1.2;">As indicações podem abranger os servidores municipais da Capital (ativos, aposentados e pensionistas), da Administração Direta (quaisquer Secretarias) e do IPREM;<br><br></span></li><li><span style="line-height: 1.2;"><span style="line-height: 1.2;">A solicitação de Fichas de Filiação pode ser feita diretamente à Equipe de Assessoria da APROFEM que visita a sua Unidade ou, pelo telefone 3292-5500, com as professoras Elaine ou Débora, que fornecerão informações complementares, se necessárias.</span><br></span></li></ol></div><div><br></div><div><br></div>
		</div>
	</div>
</div>
@endsection