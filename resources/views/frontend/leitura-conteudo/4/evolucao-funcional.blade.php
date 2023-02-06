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
<title>Evolução Funcional</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Evolução Funcional</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Evolução Funcional</h4>
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
			<div>Desde 30/07/2014, quando foi publicado o Decreto nº 55.348, de 20/07/2014, ficou claro que haveria complementação da Tabela de Títulos integrante da Portaria SME nº 5.362/2014, alterada pela Portaria SME nº 4.802/2013. A SME, dentro de suas atribuições e sem consultar previamente a APROFEM e/ou apresentar o assunto em Mesa de Negociação, efetuou alterações na citada tabela de títulos. Por este motivo já sugerimos, em reunião realizada em 16/12/2014 na DOT/SME, que seja adotada uma flexibilização dos novos critérios ou estabelecida uma fase de transição para não prejudicar os professores e gestores educacionais que se organizaram para evoluir de acordo as regras vigentes até a publicação da Portaria SME nº 6.783, em 13/12/2014.</div><div>As alterações provocadas pela Portaria SME nº 6.783/2014 são:</div><div>1 - O valor total admitido para cursos de pós-graduação/especialização (que era de 9,0 pontos) foi reduzido para 3,0 pontos. O valor unitário permanece o mesmo (3,0 pontos).</div><div>2 - Além dos dois cursos de extensão universitária com carga horária de 30 a 99 horas (valendo 0,5 cada um e no total 1,0 ponto) poderão ser considerados, também, dois cursos de extensão com 100 horas ou mais, valendo 1,5 ponto cada.</div><div>3 - Os cursos oferecidos diretamente pela SME (presenciais ou a distância) valendo 1,0 ponto cada, tiveram o valor total aumentado para 6,0 pontos.</div><div>4 - Os cursos presenciais ou a distância oferecidos pela rede de parcerias (sindicatos e outras instituições) tiveram o valor total reduzido para 3,0 pontos (e não mais o total de 2,0 pontos para cursos a distância e 3,0 pontos para cursos presenciais). Assim sendo, podem ser pontuados até 6 cursos nesse item.</div><div>5 - A pontuação pela participação em eventos (congressos, seminários, simpósios, etc), realizados e concluídos até 31/12/2014, foi mantida.</div><div>6 - Cursos de aperfeiçoamento com, no mínimo, 180 horas de duração e oferecidos exclusivamente pela UAB, passam a ser pontuados. O valor unitário é de 2,0 pontos e o valor total corresponde a 4,0 pontos.</div><div>7 - foram incluídos na tabela os seguintes itens:</div><div>a) mérito por docência para professores participantes do PNAIC, valendo 2,2 pontos cada e, no total 6,6 pontos.</div><div>b) mérito por regência de turmas do Projeto de Apoio Pedagógico Complementar e de projetos de ampliação de jornada do educando, valendo 1,0 ou 2,0 pontos, dependendo da carga horária, e com o valor total de 6,0 pontos.</div><div>c) mérito por atividade como professor supervisor do PIBID, valendo 0,5 cada e , no total, 1,0 ponto.</div><div>d) participação no Programa Inovações Pedagógicas e de Gestão da Rede, valendo 2,0 pontos cada e, no total, 6,0 pontos.</div><div>8 - A portaria ficou omissa quanto ao valor unitário e total de cada evento concluído após 31/12/2014.</div><div>Essas alterações não se aplicam às duas referências criadas pela Lei nº 15.963, de 15/01/2014. Com o intuito de facilitar a compreensão das regras atuais da Evolução Funcional foi montada a seguinte tabela,</div>
		</div>
	</div>
</div>
@endsection