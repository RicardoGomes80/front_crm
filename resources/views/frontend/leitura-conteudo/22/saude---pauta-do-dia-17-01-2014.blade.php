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
<title>Saúde - Pauta do dia 17/01/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 17/01/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 17/01/2014</h4>
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
			<div>A respeito dos Contratos de Gestão, conforme Edital publicado no DOC de 17/01, na página 48, enfatizou que se trata de um novo modelo de contrato para a Região de Saúde de Parelheiros, com vigência de 60 meses.</div><div><br></div><div>O representante do HSPM fez um breve relato sobre evasão de muitos médicos, comprometendo os atendimentos. informou, ainda, que os pacientes não deixaram de ser atendidos e que já estão contratando outros médicos. </div><div> </div><div>Ao final da Reunião foi proposto um Calendário das próximas Reuniões da Mesa da Saúde, conforme segue:</div><div> </div><div><ul><li><span style="line-height: 1.2;">Fevereiro 14        </span><br></li><li><span style="line-height: 1.2;">Março 14        </span><br></li><li><span style="line-height: 1.2;">Abril 11        </span><br></li><li><span style="line-height: 1.2;">Maio 08        </span><br></li><li><span style="line-height: 1.2;">Junho 13        </span><br></li><li><span style="line-height: 1.2;">Agosto 08</span><br></li><li><span style="line-height: 1.2;">Setembro 12</span><br></li><li><span style="line-height: 1.2;">Outubro 17</span><br></li><li><span style="line-height: 1.2;">Novembro 14</span><br></li><li><span style="line-height: 1.2;">Dezembro 12</span><br></li></ul></div>
		</div>
	</div>
</div>
@endsection