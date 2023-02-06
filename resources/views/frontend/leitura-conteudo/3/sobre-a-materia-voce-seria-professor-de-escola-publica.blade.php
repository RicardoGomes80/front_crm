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
<title>Sobre a matéria "Você seria professor de escola pública?"</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Sobre a matéria "Você seria professor de escola pública?"</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Sobre a matéria "Você seria professor de escola pública?"</h4>
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
			<p class="text-justify">Na matéria "Você seria professor de escola pública?" (Folha de S. Paulo, 31/05/2009, C18), o colunista Gilberto Dimenstein enumera os obstáculos que desestimulam a maior procura pelo trabalho na escola pública. Registra que a baixa remuneração constitui-se em gigantesco obstáculo, mas não o pior.</p><p class="text-justify">No entanto, aparentemente negligenciando o poder de irradiação das suas informações no imaginário da população, omite o necessário registro de que o atual professor da rede pública, via de regra, detém boa formação para o exercício da docência e sua qualificação só não se amplia pela resistência das autoridades governamentais em regulamentar a sua participação em cursos de especialização e pós-graduação.</p><p class="text-justify">E o mais grave, no seu indefectível P.S., investe gratuitamente contra os professores municipais da Capital e suas entidades representativas, insinuando (equivocadamente) que os mesmos "...ganharam aumentos salariais..." e que "a nota dos alunos das 5<sup>a</sup> e 8<sup>a</sup> séries não acompanhou o movimento".</p><p class="text-justify">Esclarecimentos ao sr. Dimenstein e à população:</p><p class="text-justify">Os professores municipais como, destarte, todo o funcionalismo municipal, não tiveram aumentos salariais. Aos valorosos Profissionais de Educação da Cidade de São Paulo foi assegurada, após acirrada negociação, a incorporação parcial aos salários de gratificações instituídas em 2006, para escamotear a não concessão das reposições salariais anuais legalmente previstas para os servidores ativos e aposentados.</p><p class="text-justify">Com essa assertiva, o colunista desconstrói o pretenso mérito da sua matéria, ao não destacar (contraditoriamente) que é o conjunto de obstáculos apontados que prejudica a melhoria qualitativa do ensino, inclusive na Rede Municipal de Ensino.</p><p class="text-justify">PS- A sistemática defesa de interesses do 3<sup>o</sup> setor, pelo mencionado colunista, é criticamente acompanhada por nós, e talvez explique a avidez com que investe contra a organização dos Profissionais de Educação em carreiras.</p><p class="text-justify">Abalar (subliminarmente) essa organização, visando a ampliação da terceirização dos serviços públicos essenciais, com a sua entrega às OSs, ONGs,... pode ser um dos objetivos da matéria. A APROFEM continuará na luta em defesa dos interesses dos Profissionais de Educação, em todas as instâncias possíveis.</p>
		</div>
	</div>
</div>
@endsection