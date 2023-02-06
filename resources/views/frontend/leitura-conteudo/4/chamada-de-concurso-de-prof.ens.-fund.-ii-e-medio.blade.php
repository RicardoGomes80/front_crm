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
<title>Chamada de Concurso de Prof.Ens. Fund. II e Médio</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Chamada de Concurso de Prof.Ens. Fund. II e Médio</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Chamada de Concurso de Prof.Ens. Fund. II e Médio</h4>
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
			<div>Foi publicada no Diário Oficial do Município no dia 15/05/2014 a convocação para escolha de vaga e retirada de guia para exame médico admissional de Professores de Ensino Fundamental II e Médio nas disciplinas: Biologia (1º e 2º), Educação Física (68º a 266º), Espanhol (1º a 4º), Filosofia (9º), Física (4º e 5º), História (329º a 432º), Português (115º a 248º), Química (2º e 3º) e Sociologia Educacional (6º a 9º).</div><div><br></div><div>Os candidatos convocados deverão comparecer em CONAE 2, Av. Angélica, 2606 – Consolação, de acordo com o seguinte cronograma:</div><div> </div><div><b>04/06/2014</b></div><div><b>PROF.ENS.FUND.II E MED.-ED.FISICA</b></div><div>09h às 10h -  68 a 107</div><div>10h às 11h - 108 a 147</div><div>11h às 12h - 148 a 188</div><div>13h às 14h - 189 a 229</div><div>14h às 15h -  230 a 266</div><div>15h às 15h 30m - Retardatários do dia</div><div>15h e 30min às 16h e 30min</div><div><br></div><div><b>CARGO CLASS</b></div><div>PROF.ENS.FUND.II E MED.-FISICA - 4 a 5</div><div>PROF.ENS.FUND.II E MED.-QUIMICA - 2 a 3</div><div>PROF.ENS.FUND.II E MED.-SOC.EDUC - 6 a 9.</div><div>PROF.ENS.FUND.II E MED.-FILOSOFIA -  9</div><div>PROF.ENS.FUND.II E MED.-ESPANHOL - 1 a 4</div><div>PROF.ENS.FUND.II E MED.-BIOL.PROG.SAUDE -1 a 2</div><div>16h e 5min às 16h e 30min - Retardatários do dia</div><div><br></div><div><br></div><div><b>05/06/2014</b></div><div><b>PROF.ENS.FUND.II E MED.-HISTORIA</b></div><div>09h às 10h - 329 a 369</div><div>10h às 11h - 370 a 410</div><div>11h às 11h e 30min - 411 a 432</div><div>11h e 30min às 12h - Retardatários do dia</div><div><br></div><div><b>PROF.ENS.FUND.II E MED.-PORTUGUES</b></div><div>13h às 14h - 115 a 154</div><div>14h às 15h - 155 a 194</div><div>15h às 16h - 195 a 235</div><div>16h às 16h e 30min - 236 a 248</div><div>16h e 30min às 17h - Retardatários do dia</div><div><br></div><div><b>OBSERVAÇÕES:</b></div><div><ul><li><span style="line-height: 1.2;">Os interessados ou seus procuradores habilitados para </span><span style="line-height: 1.2;">tal deverão comparecer no local e horário acima indicado, munidos </span><span style="line-height: 1.2;">dos seguintes documentos:</span><br></li><li><span style="line-height: 1.2;">cédula de identidade</span><br></li><li><span style="line-height: 1.2;">demonstrativo de pagamento (quando for servidor municipal)</span><br></li><li><span style="line-height: 1.2;">Os procuradores deverão estar munidos de cópia dos </span><span style="line-height: 1.2;">documentos de seus representantes e dos respectivos documentos </span><span style="line-height: 1.2;">de procuração.</span></li><li><span style="line-height: 1.2;">No final de cada sessão serão chamados os retardatários </span><span style="line-height: 1.2;">do horário, obedecendo à ordem de classificação.</span></li><li><span style="line-height: 1.2;">No final do processo de escolha serão chamados os </span><span style="line-height: 1.2;">retardatários da escolha, obedecendo à ordem de classificação </span><span style="line-height: 1.2;">nos moldes do cronograma supra.</span></li><li><span style="line-height: 1.2;">O não comparecimento dos candidatos convocados </span><span style="line-height: 1.2;">às sessões de escolha, acarretará a imediata disponibilização </span><span style="line-height: 1.2;">das vagas para chamadas subsequentes de outros candidatos </span><span style="line-height: 1.2;">aprovados.</span></li></ul></div>
		</div>
	</div>
</div>
@endsection