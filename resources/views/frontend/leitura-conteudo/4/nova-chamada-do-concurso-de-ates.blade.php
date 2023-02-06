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
<title>Nova chamada do Concurso de ATEs</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nova chamada do Concurso de ATEs</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nova chamada do Concurso de ATEs</h4>
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
			<div>O Diário Oficial da Cidade de 28/11/2014, à página 75, publicou a Convocação nº 33 de 27/11/2014, para os aprovados no concurso público de ingresso para Auxiliar Técnico de Educação, classificados do 1312º ao 1.472º .</div><div>A escolha está prevista para os dias 18 de dezembro de 2014, em CONAE 2, à Av. Angélica, nº 2606, conforme especificado na publicação:</div><div><br></div><div><b>Auxiliar Técnico de Educação</b></div><div><b>18/12/2014</b></div><div>08h às 09h - 1.312º a 1.350º</div><div>09h às 10h - 1.351º a 1.390º</div><div>10h às 11h - 1.391º a 1.430º</div><div>11h às 12h - 1.431º a 1.472º</div><div>12h às 12h30 -  retardatários do dia</div><div><br></div><div><div>O Diário Oficial da Cidade de 09/10/2014, às página 55 e 56,  publicou a Convocação nº 07, de 08/10/2014, para os aprovados no concurso público de ingresso para Auxiliar Técnico de Educação, classificados do  552º ao 1.311º .</div><div>A escolha está prevista para os dias 27, 28 e 29 de outubro de 2014, em CONAE 2, à Av. Angélica, nº 2606, conforme especificado na publicação:</div><div> </div><div><b>Auxiliar Técnico de Educação</b></div><div><b>27/10/2014</b></div><div>09h às 10h - 552 a 596</div><div>10h às 11h - 597 a 641</div><div>11h às 12h - 642 a 686</div><div>13h às 14h - 687 a 731</div><div>14h às 15h - 732 a 776</div><div>15h às 16h - 777 a 821</div><div>16h às 16h30 - Retardatários do dia</div><div> </div><div><b>28/10/2014</b></div><div>09h às 10h - 822 a 866</div><div>10h às 11h - 867 a 911</div><div>11h às 12h - 912 a 956</div><div>13h às 14h - 957 a 1001</div><div>14h às 15h - 1002 a 1046</div><div>15h às 16h - 1047 a 1091</div><div>16h às 16h:30 - Retardatários do dia</div><div> </div><div><b>29/10/2014</b></div><div>09h às 10h - 1092 a 1136</div><div>10h às 11h - 1137 a 1181</div><div>11h às 12h - 1182 a 1226</div><div>13h às 14h - 1227 a 1271</div><div>14h às 15h - 1272 a 1311</div><div>15h às 15h30 - Retardatários do dia</div></div><div><br></div><div><div><b>Atente para as orientações abaixo:</b></div><div><b>1 -</b> Os interessados ou seus procuradores habilitados para tal, deverão comparecer no local e horários acima indicados, munidos dos seguintes documentos:</div><div><ul><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li></ul></div><div><b>1.1.</b> Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</div><div><b>2 - </b>No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</div><div><b>3 -</b> No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</div><div><b>4 - </b>O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</div></div>
		</div>
	</div>
</div>
@endsection