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
<title>O nosso direito de ir e vir (ou "Quem vai colocar o guizo no gato?")</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">O nosso direito de ir e vir (ou "Quem vai colocar o guizo no gato?")</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>O nosso direito de ir e vir (ou "Quem vai colocar o guizo no gato?")</h4>
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
			<p><em><sup>Publicado em 09/08/2011</sup></em></p><p class="text-justify"><br>Anunciou-se recentemente o propósito da Prefeitura de acolher as crianças e jovens, viciados em crack e outras drogas, que pululam em nossas ruas e praças, alijados do convívio familiar e abandonados pelo Poder Público.</p><p class="text-justify">Ato contínuo, surgiram os pretensos paladinos, defensores dos direitos desse pessoal, com as surradas alegações de "política higienista", inexistência de um planejamento completo para acolhimento, tratamento e reinclusão social dos menores abordados etc..</p><p class="text-justify">Alternativas factíveis sugeridas? Nenhuma... ou melhor, deixar tudo como está, acatando a naturalmente inconsciente e esperada manifestação de cada um, preferindo permanecer naquela situação sub-humana a sujeitar-se a qualquer modalidade de acolhimento e tratamento. Situação semelhante ocorre com os demais "moradores de rua", viciados ou não, abandonados à própria sorte em nome do alegado respeito à sua vontade.</p><p class="text-justify">Enquanto isso, e em razão disso, milhões de cidadãos paulistanos permanecem inibidos no seu direito pleno de ir e vir, por medo ou asco decorrente da imundície e cenas inapropriadas com que podem se deparar em deslocamentos para atividades de trabalho ou lazer.</p><p class="text-justify">Essa situação hipócrita precisa ser revertida, ainda que às custas de mudanças na legislação: <br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify">esses cidadãos abandonados necessitam de atenção e atendimento que lhes proporcionem dignidade, saúde e resgate da auto-estima;</li><li class="text-justify">como cidadãos paulistanos, ordeiros e trabalhadores, merecemos o direito de transitar com segurança e tranquilidade pelos passeios públicos, para trabalhar ou passear com os nossos filhos e netos;</li><li class="text-justify">nossa Capital, em especial para seus Centros Velho e Expandido, tem propostas de revitalização e conta com inúmeros monumentos históricos que podem ser explorados turisticamente, mas hoje rigorosamente prejudicados.</li></ul></div><p class="text-justify">Medidas urgentes precisam ser tomadas no âmbito do Executivo e do Legislativo, com o beneplácito do Judiciário, sem cinismo ou demagogia.</p>
		</div>
	</div>
</div>
@endsection