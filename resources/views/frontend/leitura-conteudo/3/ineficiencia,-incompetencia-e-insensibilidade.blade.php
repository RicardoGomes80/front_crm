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
<title>Ineficiência, incompetência e insensibilidade</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Ineficiência, incompetência e insensibilidade</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Ineficiência, incompetência e insensibilidade</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Setembro/Outubro 2012</sup></em></p><blockquote><div><i><b>"Kassab ainda tem R$ 8,7 bi em caixa"</b></i> - Estadão, 28/08/2012, C3</div></blockquote><div><br></div><p class="text-justify">A matéria do importante jornal é inconteste: faltando 126 dias para o término da atual gestão municipal da Capital, se descontados os compromissos com fornecedores e créditos a serem pagos a terceiros, há em caixa um superávit de R$ 5,5 bi (R$ 5.542.978.133,96, para ser mais exato).</p><p class="text-justify">Tantos recursos em caixa jogam por terra os argumentos que o Prefeito utiliza para humilhar a massa de servidores públicos municipais, ao propor reajustes lineares de ridículos 0,01% (um centésimo por cento) para os anos de 2011 e 2012. Também tornam inexplicável a sua resistência em antecipar incorporações de benefícios para os Profissionais da Educação e também de outras secretarias, já previstas em lei para ocorrer no médio prazo e não incorporadas de imediato sob alegação de falta de recursos.</p><p class="text-justify">A análise de um professor da FGV, presente na matéria do jornal, é cirúrgica:<b><i> "O art. 42 da Lei de Responsabilidade Fiscal proíbe gastos nos dois últimos quadrimestres do mandato apenas quando não existam recursos disponíveis para honrá-los. A situação da Prefeitura, portanto, permite volume de gastos para este ano eleitoral"</i></b>... <i><b>"Uma montanha de recursos no caixa é criticável, pois revela ou a ausência de metas em sintonia com o interesse da população ou, se elas existem, uma enorme incapacidade em executá-las. A ineficiência, não importa a hipótese, é a principal conclusão dos dados"</b></i>.</p><p class="text-justify">De tudo aqui exposto, revela-se mais que oportuna a Representação contra o Prefeito oferecida pela APROFEM e FASP ao Ministério Público Estadual, com o escopo de sensibilizar os promotores a representarem contra o alcaide no Judiciário, visando assegurar, por determinação da Justiça, a reposição das perdas salariais do Funcionalismo Municipal da Capital e, quiçá, acompanharmos o enquadramento por improbidade administrativa, com proibição do exercício de função pública, de quem demonstra ser, conforme dito, ineficiente.</p>
		</div>
	</div>
</div>
@endsection