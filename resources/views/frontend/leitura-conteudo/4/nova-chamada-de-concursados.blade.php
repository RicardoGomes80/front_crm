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
<title>Nova chamada de concursados</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nova chamada de concursados</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nova chamada de concursados</h4>
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
			<div><b>O Diário Oficial da Cidade de 03/02/2015, às páginas 40 e 41, publicou as convocações dos aprovados nos Concursos Públicos:</b></div><div><br></div><div>De Ingresso para Professor de Educação Infantil e Ensino Fundamental I, classificados do nº 2.921º ao 3.206º  e de 902º a 971º (listagem específica); De Ingresso para Professor de Ensino Fundamental II e Médio ? Educação Física, classificados de 405º a 430º e História, classificados de 504º a 512º; De Acesso para Coordenador Pedagógico, classificados de 640º a 654º; Os candidatos acima deverão comparecer em CONAE 2, à Av. Angélica, nº 2606 para escolha de vagas e retirada de guia médica, conforme cronograma abaixo:<br></div><div><b> </b></div><div><b>Professor de Educação Infantil e Ensino Fundamental I</b></div><div><b>Data: 25/02/2015</b></div><div><br></div><div><b>Horário                 Classificação</b></div><div>8h às 9h                2921 a  2962</div><div>9h às 10h              2963 a  3004</div><div>10h às 11h            3005 a  3046</div><div>11h às 12h            3047 a  3088</div><div>13h às 14h            3089 a  3130</div><div>14h às 15h            3131 a  3172</div><div>15h às 15h30       3173 a 3206</div><div>15h30 às 16h       903 a   940</div><div>16h às 17h            941 a   971</div><div>17h às 17h30       Retardatários do dia</div><div> </div><div><b>Professor de Ensino Fundamental II e Médio - Educação Física e História:</b></div><div><b>Data: 26/02/2015</b></div><div><br></div><div><b>Horário                     Classificação</b></div><div>9h às 10h                  405 a 430</div><div>10h às 10h30h         504 a 512</div><div>10h30 às 10h35       Retardatários do dia</div><div> </div><div><br></div><div><b>Coordenador Pedagógico:</b></div><div><b>Data 26/02/2015 </b></div><div><br></div><div><b>Horário                      Classificação</b></div><div>9h às 10h                  640 a 654</div><div>10h às 10h15           Retardatários do dia</div><div> </div><div><b>Atente para as orientações abaixo:</b></div><div><span style="line-height: 1.2;"><br></span></div><div><span style="line-height: 1.2;"><b>1) </b>Os interessados, ou seus procuradores habilitados para tal, deverão comparecer no local e horários acima indicados, munidos dos seguintes documentos:</span></div><div><br></div><div><ul><li><span style="line-height: 1.2;">Cédula de identidade</span></li><li><span style="line-height: 1.2;">Demonstrativo de pagamento (quando for servidor municipal)</span><br></li></ul></div><div><br></div><div><b>1.1) </b>Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</div><div><br></div><div><b>2)</b> No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</div><div><br></div><div><b>3)</b> No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</div><div><br></div><div><b>4)</b> O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</div><div><br></div><div> </div><div><b>(*) Nova data  que consta em republicação no D.O.C. de 04/02/2015, página 51.</b></div>
		</div>
	</div>
</div>
@endsection