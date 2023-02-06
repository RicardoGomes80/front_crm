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
<title>Nova Chamada de Coordenadores Pedagógicos</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Nova Chamada de Coordenadores Pedagógicos</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Nova Chamada de Coordenadores Pedagógicos</h4>
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
			<div>Na edição do Diário Oficial da Cidade de 28/11/2014, à página 74, foi publicada a Convocação de nº 30, de 27/11/2014, de aprovados no concurso público de acesso para Coordenador Pedagógico (8 candidatos).</div><div>As escolhas estão previstas para o dia 18/12/2014, em CONAE 2, à Av. Angélica nº 2606, conforme especificado na publicação:</div><div><br></div><div><div><b>Coordenador Pedagogico</b></div><div><b>18/12/2014</b></div><div><b>Horário             Classificação</b></div><div>13h às 13h30 -  632º a 639º</div><div>13h30 às 14h -  retardatários do dia</div></div><div><br></div><div><div>Na edição do Diário Oficial da Cidade de 14/10/2014, à página  153, foi publicada a Convocação de nº 25, de 13/10/2014  de aprovados no concurso público de acesso para Coordenador Pedagógico (77 candidatos).</div><div>As escolhas estão previstas para o dia 30 de outubro de 2014, em CONAE 2, à Av. Angélica nº 2606, conforme especificado na publicação:</div><div><br></div><div><b>Coordenador Pedagogico</b></div><div><b>30/10/2014</b></div><div><b>Horário   </b>    <b>Classificação</b></div><div>9h   às 10h  - 555 a 592</div><div>10h às 11h -  593 a 631</div><div>11h às 11h30  -  Retardatários do dia</div></div><div><br></div><div><div><b>Atente para as orientações abaixo:</b></div><div> </div><div><b>1 -</b> Os interessados ou seus procuradores habilitados para tal deverão comparecer no local e horário acima indicado, munidos dos seguintes documentos:</div><div><ul><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li></ul></div><div><b>1.1. </b>Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</div><div><b>2 -</b> No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</div><div><b>3 -</b> No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</div><div><b>4 -</b> O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</div></div>
		</div>
	</div>
</div>
@endsection