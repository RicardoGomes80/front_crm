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
<title>Sistema de Gestão Pedagógica</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Sistema de Gestão Pedagógica</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Sistema de Gestão Pedagógica</h4>
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
			<div>Sem qualquer discussão a respeito na Mesa Setorial de Negociação da Educação, a Secretaria Municipal de Educação editou a Portaria SME nº 1.224, de 10 de fevereiro de 2014, publicada no Diário Oficial de 11/02/2014, página 13, que institui o Sistema de Gestão Pedagógica - SGP, no âmbito da Rede Municipal de Ensino, integrado ao EOL.</div><div><br></div><div>O objetivo apontado no documento legal é o de organizar e potencializar o acompanhamento pedagógico dos estudantes pelos pais/responsáveis, professores, gestores das Unidades Educacionais - UEs, Diretorias Regionais de Educação - DREs e pela própria SME. </div><div><br></div><div><b>Através do SGP se propõe registrar e disponibilizar:</b></div><div><br></div><div><ul><li><span style="line-height: 1.2;">aos Professores e Equipe Gestora das Unidades Educacionais, Supervisores Escolares, Gestores das Diretorias Regionais de Educação e da Secretaria Municipal de Educação, informações sobre: dados de caráter pedagógico e administrativo; síntese dos resultados e atas dos Conselhos de Classes; Pautas das Reuniões de Pais ou Responsáveis; Pautas das Reuniões Pedagógicas; Planos de Trabalho anuais, bimestrais e Diários de Classe dos Componentes Curriculares de todas as etapas e modalidades de ensino da Educação Básica.<br></span><br></li><li><span style="line-height: 1.2;">à comunidade escolar em geral,  informações sobre o Calendário de Atividades Anual e os Boletins e/ou Relatórios de Acompanhamento Pedagógico para os educandos e pais ou responsáveis, de forma on-line e/ou impressa.</span><br></li></ul></div><div>Em cada Unidade de Ensino Fundamental haverá distribuição de responsabilidades quanto ao regular funcionamento do sistema, disponibilizando-se, para tanto, todos os "tablets" e computadores, de uso administrativo ou pedagógico da UE.</div><div>O uso do SGP substituirá o uso do Diário de Classe impresso a partir de sua implantação e a versão eletrônica terá caráter de documento oficial. </div><div><br></div><div><b>Excepcionalmente, para o ano de 2014, serão considerados bimestres para fins de registros no SGP:  <br><br></b></div><div><ul><li><span style="line-height: 1.2;"><b>primeiro bimestre:</b> período de 05 de fevereiro a 08 de abril de 2014; </span></li><li><span style="line-height: 1.2;"><b>segundo bimestre:</b> período de 09 de abril a 11 de junho de 2014; </span></li><li><span style="line-height: 1.2;"><b>terceiro bimestre:</b> período de 07 de julho a 30 de setembro de 2014; </span></li><li><span style="line-height: 1.2;"><b>quarto bimestre:</b> período de 1º de outubro a 23 de dezembro de 2014.</span><br></li></ul></div><div><br></div><div>A<b> APROFEM</b> acompanhará criticamente a implementação do Sistema de Gestão Pedagógica, buscando identificar e propor medidas para eliminar os eventuais  gargalos que poderão afetar, desfavoravelmente, os Profissionais de Educação.</div>
		</div>
	</div>
</div>
@endsection