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
<title>Chamada de Prof.s Concursados de Ens. Fund. II e Médio</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Chamada de Prof.s Concursados de Ens. Fund. II e Médio</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Chamada de Prof.s Concursados de Ens. Fund. II e Médio</h4>
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
			<div>Foi publicada no Diário Oficial da Cidade do dia 28/11/2014, página 75,  a convocação para escolha de vaga e retirada de guia para exames médicos admissionais, de Professores de Ensino Fundamental II e Médio nas disciplinas: Ed. Física (372º a 404º), História (479º a 503º), Português (312º a 328º) e Sociologia (10º).</div><div>Os candidatos convocados deverão comparecer em CONAE 2, Av. Angélica, 2606 – Consolação, de acordo com o seguinte cronograma:</div><div><br></div><div><b style="line-height: 14.3999996185303px;">18/12/2014</b><br></div><div><br></div><div><b>PROF. ENS. FUND. II E MED. - ED. FÍSICA</b></div><div><br></div><div>14h30h às 15h -  372º a 404º</div><div>15h às 15h10h -  retardatários do dia</div><div><br></div><div><b>PROF. ENS. FUND. II E MED. - PORTUGUÊS</b></div><div><b><br></b></div><div>15h10 às 15h40 - 312º a 328º</div><div>15h40 às 15h50 retardatários do dia</div><div><br></div><div><b>PROF. ENS. FUND. II E MED. - HISTÓRIA</b></div><div><b><br></b></div><div>15h50 às 16h20 - 479º a 503º</div><div>16h20 às 16h30 -  retardatários do dia</div><div><br></div><div><b>PROF. ENS. FUND II E MED. - SOCIOLOGIA EDUC.</b></div><div>16h40 às 16h50 -  10º</div><div><br></div><div><div>Foi publicada no Diário Oficial da Cidade do dia 17/10/2014 a convocação para escolha de vaga e retirada de guia para exames médicos admissionais,  de Professores de Ensino Fundamental II e Médio nas disciplinas: Ed. Física (310º a 371º), História (450º a 458º) e Português (276º a 311º).</div><div>Os candidatos convocados deverão comparecer em CONAE 2, Av. Angélica, 2606 – Consolação, de acordo com o seguinte cronograma:</div><div><br></div><div><b>03/11/2014</b></div><div><b>PROF. ENS. FUND. II E MED. - ED. FÍSICA</b></div><div><b><br></b></div><div><span style="line-height: 1.2;">09h às 10h - 310 a 339</span><br></div><div>10h às 11h - 340 a 371</div><div><b><br></b></div><div><b>PROF. ENS. FUND. II E MED. - PORTUGUÊS</b></div><div>11h às 12h - 276 a 311</div><div><br></div><div><b>PROF. ENS. FUND. II E MED. - HISTÓRIA</b></div><div>13h às 14h - 450 a 478</div><div>14h às 14h 30min - Retardatários do dia</div></div><div><br></div><div><div><b>Atente para as orientações abaixo:</b></div><div><b><br></b></div><div><b>1 -</b> Os interessados ou seus procuradores habilitados para tal, deverão comparecer no local e horários acima indicados, munidos dos seguintes documentos:</div><div><ul><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li></ul></div><div><b>1.1.</b> Os procuradores deverão estar munidos de cópia dos documentos de seus representantes e dos respectivos documentos de procuração.</div><div><b>2 - </b>No final de cada sessão serão chamados os retardatários do horário, obedecendo à ordem de classificação.</div><div><b>3 - </b>No final do processo de escolha serão chamados os retardatários das escolhas, obedecendo à ordem de classificação nos moldes do cronograma supra.</div><div><b>4 -</b> O não comparecimento dos candidatos convocados às sessões de escolha, acarretará a imediata disponibilização das vagas para chamadas subsequentes de outros candidatos aprovados.</div></div>
		</div>
	</div>
</div>
@endsection