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
<title>Convocação para escolha de vagas</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Convocação para escolha de vagas</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Convocação para escolha de vagas</h4>
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
			<div style="text-align: justify;"><div style="text-align: left;"><span style="line-height: 1.2;">O DOC de 20/12/2014, à pág. 49, convoca os candidatos aprovados no concurso para provimento de cargos vagos de Prof. Ed. Infantil e Ens. Fund I, para escolha de vagas e retirada de guia para exames pré-admissionais. </span><br></div><div style="text-align: left;"><br></div><div><b>OBSERVAÇÕES:</b></div><div><b>1</b> - Os interessados ou seus procuradores habilitados para tal deverão comparecer no local e horário acima indicado, munidos dos seguintes documentos:</div><div>- cédula de identidade</div><div>- demonstrativo de pagamento (quando for servidor municipal)</div><div><b>1.1.</b> Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</div><div style="text-align: left;"><b>2 -</b> Os retardatários do dia serão chamados conforme cronograma acima citado, obedecendo à ordem de classificação.</div><div style="text-align: left;"><b>3 -</b> No final do processo serão chamados os retardatários da escolha, obedecendo à ordem de classificação nos moldes do cronograma supra.</div><div style="text-align: left;"><b>4 -</b> O não comparecimento dos candidatos convocados às sessões de escolha acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</div><div style="text-align: left;"><br></div><div style="text-align: left;"><b style="line-height: 14.3999996185303px;">Veja o Cronograma em anexo</b><br></div></div>
		</div>
	</div>
</div>
@endsection