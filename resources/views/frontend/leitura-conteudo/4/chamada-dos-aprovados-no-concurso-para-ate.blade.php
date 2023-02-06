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
<title>Chamada dos aprovados no Concurso para ATE</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Chamada dos aprovados no Concurso para ATE</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Chamada dos aprovados no Concurso para ATE</h4>
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
			<div>A escolha está prevista para os dias 17 e 18 de julho de 2014, em CONAE 2, à Av. Angélica, nº 2606, conforme especificado na publicação:</div><div><br></div><div><b>Auxiliar Técnico de Educação</b></div><div><b>Data: 17/07/2014</b></div><div><br></div><div><b>Horário     Classificação</b></div><div>09h às 10h - 1 a 39</div><div>10h às 11h - 40 a 79</div><div>11h às 12h - 80 a 119</div><div>13h às 14 h - 120 a 159</div><div>14h às 15h - 160 a 199</div><div>15h às 16h - 200 a 239</div><div>16h às 17h - 240 a 279</div><div>17 às 17h30 - Retardatários do dia</div><div><br></div><div><b>Data: 18/07/2014</b></div><div><b>Horário      Classificação</b></div><div>09h às 10h - 280 a 319</div><div>10h às 11h - 320 a 359</div><div>11h às 12h - 360 a 399</div><div>13h às 14h - 400 a 439</div><div>14h às 14h30 - 440 a 457</div><div>14h30 às 15h - 1 a 13 Lei 13.398/07</div><div>15 às 15h30 - Retardatários da escolha</div><div> </div><div><b>Atente para as orientações abaixo:</b></div><div><b><br></b></div><div>Os interessados ou seus procuradores habilitados para tal, deverão comparecer no local e horários acima indicados, munidos dos seguintes documentos:</div><div><ul><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li><li><span style="line-height: 1.2;">Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</span><br></li><li><span style="line-height: 1.2;">No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</span><br></li><li><span style="line-height: 1.2;">No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</span><br></li><li><span style="line-height: 1.2;">O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</span><br></li></ul></div>
		</div>
	</div>
</div>
@endsection