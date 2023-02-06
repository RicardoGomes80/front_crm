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
<title>O fim da greve no ensino municipal</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">O fim da greve no ensino municipal</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>O fim da greve no ensino municipal</h4>
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
			<div>A greve dos Profissionais da Educação municipais, liderada pelas maiores e principais entidades representativas (APROFEM e SINPEEM), foi encerrada por deliberação dos participantes, em assembleia realizada no dia 03 de junho p.p. (42º dia da paralisação).</div><div><br></div><div>A participação da APROFEM no movimento grevista decorreu da deliberação dos filiados representantes, e a sua relevância para o desfecho vitorioso desse movimento tem sido atestada por inúmeros depoimentos.</div><div><br></div><div>Os educadores municipais, mais uma vez, demonstraram sua disposição de perseverar na luta pela conquista do que lhes é de direito: salários dignos e condições de trabalho para buscar a plena educação de qualidade, por todos almejada. Se não alcançamos, ainda, tudo o que reivindicamos, deixamos uma exemplar aula de cidadania através de manifestações ordeiras e focadas exclusivamente na pauta de reivindicações.</div><div><br></div><div>Desta feita, perdeu o Governo Municipal a oportunidade de atender de pronto o reivindicado, evitando a paralisação recorde. Depois do evidente e natural desgaste, adotou tardiamente a decisão política de propor atendimento às reivindicações, consignadas em Protocolo aceito na assembleia pelos grevistas presentes e assinado pelos presidentes das duas entidades. Perdeu também o Governo ao procurar incitar a população contra os educadores, insinuando injusta e inexistente motivação política para a continuidade da greve, por parte dos líderes sindicais, além de referências ao movimento para justificar a não distribuição de material escolar, uniforme e...alimentação aos alunos!</div><div><br></div><div>A maior demonstração de quanto desgaste poderia ter sido evitado foi a ágil aprovação e promulgação da Lei nº 16.068, de 05 de junho de 2014 (DOC 06/06/14, pág. 1), que estabelece os pisos salariais para os Profissionais de Educação e reajusta as respectivas Tabelas de Vencimentos em 15,38%, em 3 vezes, a partir de maio de 2015.</div><div><br></div><div>Agora é hora de cada um cumprir a sua parte, retomando (sem ressentimentos) as negociações pactuadas e procurando assegurar aos alunos o atendimento de excelência a que os mesmos têm direito.</div>
		</div>
	</div>
</div>
@endsection