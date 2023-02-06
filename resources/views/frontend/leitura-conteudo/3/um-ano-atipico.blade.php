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
<title>Um ano atípico</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Um ano atípico</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Um ano atípico</h4>
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
			<div>A somatória de inúmeros fatores, dentre os quais destacam-se o calendário de eleições majoritárias (presidente, governadores, senadores e deputados) e a adequação dos calendários às restrições legais no que se refere à concessão de revisões salariais mais amplas durante a maior parte do ano eleitoral, sinaliza para a atipicidade deste ano e a necessidade de buscar estratégias que se afigurem eficazes para a conquista dos benefícios reivindicados pelos servidores municipais, através das suas entidades representativas.</div><div><br></div><div>Para obter a atenção do Governo Municipal, o Fórum de Entidades Sindicais deliberou apresentar uma lista unificada, enxuta e factível (se houver vontade política) de reivindicações visando, emergencialmente, a recomposição salarial do funcionalismo municipal, com efeitos já na data-base que se aproxima. A mobilização do dia 18 de março contou com a participação do conjunto das entidades comprometidas com o bem-estar e a valorização do servidor público municipal.</div><div><br></div><div>Para o Ensino Municipal, o ano começou sob a égide de uma Lei que conseguiu desagradar a todos, excluindo os professores aposentados e os pensionistas e dificultando o enquadramento dos profissionais ativos interessados nas duas referências criadas nas Tabelas de Vencimentos do Quadro do Magistério Municipal. A manifestação conjunta do dia 20 de março, protestando com o propósito de aperfeiçoar o texto legal, fazendo justiça aos dedicados professores aposentados (muitos deles heróicos fundadores do Ensino Municipal), foi mais um passo nessa luta pela preservação dos direitos dos servidores.</div><div><br></div><div>A APROFEM reitera o seu compromisso de luta em defesa das conquistas dos seus representados, fiel aos princípios de independência e apartidarismo da Entidade. A atuação conjunta com as demais Entidades dar-se-á baseada no respeito à autonomia de cada uma, com a devida reciprocidade.</div>
		</div>
	</div>
</div>
@endsection