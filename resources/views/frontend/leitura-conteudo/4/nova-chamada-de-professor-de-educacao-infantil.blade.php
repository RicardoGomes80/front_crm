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
<title>Nova chamada de Professor de Educação Infantil</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nova chamada de Professor de Educação Infantil</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nova chamada de Professor de Educação Infantil</h4>
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
			<div>Na edição do Diário Oficial da Cidade de 27/06/2014, à página 34, foi publicada a convocação dos aprovados no concurso público de ingresso para Professor de Educação Infantil, classificados do nº 4634º ao 4833º para escolha de vagas e retirada de guia médica.</div><div>A escolha está prevista para o dia 21de julho de 2014, em CONAE 2, à Av. Angélica, nº 2606, conforme especificado na publicação:</div><div><br></div><div><b>Professor de Educação Infantil</b></div><div><b>Data: 21/07/2014</b></div><div><b><br></b></div><div><b>Horário <span style="line-height: 1.2;">       Classificação</span></b></div><div>09h às 10h - 4634 a 4673</div><div>10h às 11h - 4674 a 4713</div><div>11h às 12h - 4714 a 4753</div><div>13h às 14h - 4754 a 4793</div><div>14h às 15h - 4794 a 4833</div><div>15h às 15h30 - Retardatários do dia</div><div><span style="line-height: 1.2;"> </span><br></div><div><b>Atente para as orientações abaixo:</b></div><div><span style="line-height: 1.2;"><br></span></div><div><span style="line-height: 1.2;">Os interessados ou seus procuradores habilitados para tal deverão comparecer no local e horários acima indicados, munidos dos seguintes documentos:<br></span><br></div><div><ul><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li><li><span style="line-height: 1.2;">Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</span><br></li><li><span style="line-height: 1.2;">No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</span><br></li><li><span style="line-height: 1.2;">No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</span><br></li><li><span style="line-height: 1.2;">O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</span><br></li></ul></div>
		</div>
	</div>
</div>
@endsection