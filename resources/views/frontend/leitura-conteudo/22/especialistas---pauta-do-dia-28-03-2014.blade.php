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
<title>Especialistas - Pauta do dia 28/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas - Pauta do dia 28/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas - Pauta do dia 28/03/2014</h4>
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
			<div>Novamente, as Entidades questionaram a falta de respostas aos questionamentos feitos ao Governo e, mais uma vez, a resposta dada foi em termos de justificar a ausência de respostas, em função do excesso de trabalho da equipe e da falta de tempo.</div><div><br></div><div>Alguns dos pontos nevrálgicos que são apontados pelas Entidades são:</div><div><br></div><div><ul><li><span rel="line-height: 1.2;">rejeição à remuneração por subsídio;</span></li><li><span rel="line-height: 1.2;">rejeição aos critérios de migração para as novas referências, que não levam em conta o tempo de carreira dos atuais integrantes desses cargos;</span></li><li><span rel="line-height: 1.2;">desrespeito aos ganhos de ações judiciais;</span></li><li><span rel="line-height: 1.2;">desconsideração de adicionais, sexta parte e demais vantagens pessoais;</span></li><li><span rel="line-height: 1.2;">ausência de critério para reajustes salariais futuros.</span></li></ul></div><div><br></div><div>O representante do Governo afirmou que a intransigência não é apenas da Administração, o que caracteriza um impasse nas negociações. Entretanto, na sequencia, afirmou que ainda será possível a apresentação de nova minuta para esse Projeto de Lei, incorporando algumas das sugestões das entidades (sem especificar quais).</div><div><br></div><div>Ao final da Reunião, não houve a determinação da data para a próxima, que dependerá das agendas dos representantes do Governo, com o compromisso de enviar correspondência eletrônica às Entidades, avisando sobre a data que será definida.</div>
		</div>
	</div>
</div>
@endsection