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
<title>Funcionamento dos CEIs em janeiro/2015</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Funcionamento dos CEIs em janeiro/2015</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Funcionamento dos CEIs em janeiro/2015</h4>
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
			<div>Sem ter realizado previamente nenhuma Reunião da Mesa Setorial de Negociação - Educação, conforme dispõe o convênio SINP, e desconhecendo apelo feito pela<b> APROFEM</b> nesse sentido, a Secretaria Municipal de Educação, através da Portaria SME nº 6.501, de 14 de novembro de 2014, estabeleceu critérios para atendimento às crianças matriculadas nos CEIs da rede direta, indireta e particular conveniada durante o período de férias escolares de janeiro de 2015, invocando os termos da Lei nº 15.625, de 19/09/12 (exatamente aquela que garante o período de férias de trinta dias em janeiro).</div><div><br></div><div>Pela citada Portaria, haverá atendimento às crianças matriculadas nos Centros de Educação Infantil da rede direta, indireta e particular conveniada durante o período de Férias Escolares, compreendido entre 02/01/15 a 31/01/15, desde que os pais/responsáveis manifestem comprovadamente a necessidade do atendimento nesse período, mediante cadastro.</div><div><br></div><div>As Unidades Educacionais deverão elaborar relatório circunstanciado das ausências das crianças inscritas a fim de orientar ações e/ou medidas posteriores visando à garantia do atendimento, assim como a necessária responsabilização das famílias.</div><div><br></div><div>Os Centros de Educação Infantil/Creches da Rede Direta, Indireta e Conveniada deverão adequar, de acordo com a demanda, os seus serviços com estrutura física, material e de recursos humanos a fim de assegurar o atendimento das crianças neles matriculadas mediante inscrição formalizada pelos pais/responsáveis, admitida a formação de agrupamentos com crianças de diferentes faixas etárias.</div><div><br></div><div>O funcionamento dos CEIs deverá ocorrer no período de 05 a 30/01/15, com integrantes das Equipes Gestora e de Apoio, e o atendimento às crianças será realizado por Professores inscritos para ministrar atividades na sua Unidade de lotação.</div><div><br></div><div>A inscrição dos docentes interessados será realizada na Unidade Educacional de lotação/exercício, até o dia 26/11/14, para atendimento às crianças por período de 15(quinze) ou 30(trinta) dias.</div><div>Será feita a classificação, independentemente da categoria funcional em ordem decrescente, de acordo com os pontos da coluna 2 da "<b>Ficha de Pontuação do Servidor</b>".</div><div><b><br></b></div><div><b>ATENÇÃO</b>: Caso o número de Professores inscritos seja insuficiente para atendimento às crianças, caberá ao Diretor de Escola convocar e reprogramar as férias de janeiro dos Professores de Educação Infantil da própria Unidade, em razão de absoluta necessidade de serviço, observada, se necessário:</div><div><br></div><div><ul><li><span style="line-height: 1.2;"> a escala de pontuação;</span><br></li><li><span style="line-height: 1.2;"> a ordem de convocação na sequência de categorias diversas, a saber:</span><br></li></ul></div><div><b>a)</b> Professor de Educação Infantil admitido não estável;</div><div><b>b)</b> Professor de Educação Infantil admitido estável;</div><div><b>c)</b> Professor de Educação Infantil efetivo.</div><div><br></div><div><span style="line-height: 1.2;">O Diretor de Escola poderá, ainda, estabelecer outros critérios para reprogramar as férias dos Professores de Educação Infantil, desde que realizada em comum acordo com os envolvidos.</span></div><div>Haverá pontuação, para fins de Ev. Funcional, para os envolvidos, conforme segue:</div><div><br></div><div><ul><li><span style="line-height: 1.2;"> 0,5 ponto para cada 50 horas de efetivo exercício para os PEIs/ADIs;</span><br></li><li><span style="line-height: 1.2;"> 0,5 ponto para cada 80 horas de efetivo exercício para os profissionais das Equipes Gestora e de Apoio.</span><br></li></ul></div><div>Os Professores de Educação Infantil dos CEIs da Rede Direta cumprirão jornada de 5(cinco) horas diárias em atividade programada com as crianças.</div><div>As férias não gozadas pelos Professores de Educação Infantil deverão ser programadas pela chefia imediata e serão usufruídas no exercício de 2015, mediante escala específica.</div><div><br></div><div>A <b>APROFEM</b>  já oficiou a SME, buscando  providências que restabeleçam o direito dos Profissionais de Educação Infantil às Férias Coletivas, em janeiro.</div><div><br></div><div><b>Maiores detalhes serão divulgados na Reunião de Representantes Sindicais da APROFEM, no próximo dia 25 de novembro</b>.</div>
		</div>
	</div>
</div>
@endsection