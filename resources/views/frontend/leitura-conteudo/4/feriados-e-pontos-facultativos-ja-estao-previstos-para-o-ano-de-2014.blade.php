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
<title>Feriados e Pontos Facultativos já estão previstos para o ano de 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Feriados e Pontos Facultativos já estão previstos para o ano de 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Feriados e Pontos Facultativos já estão previstos para o ano de 2014</h4>
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
			<div>O Decreto nº 54.877, de 25/02/2014, publicado no Diário Oficial da Cidade de 26/02/2014, página 1, que dispõe sobre o funcionamento das repartições públicas municipais da Administração Direta, Autárquica e Fundacional, já determina os dias de feriados e pontos facultativos do ano de 2014, na seguinte conformidade:</div><div> </div><div><b>Pontos facultativos:</b> 3 e 4 de março (carnaval)*, 31 de outubro (Dia do Servidor Público) , 24 de dezembro(véspera de Natal) e 31 de dezembro (véspera de Ano Novo).</div><div>05 de março, quarta feira de cinzas - expediente a partir das 12 horas</div><div> </div><div><b>Feriados:</b> 18 de abril (Paixão de Cristo), 21 de abril (Tiradentes), 1º de maio (Dia do Trabalho), 19 de junho (Corpus Christi), 9 de julho (Data Magna do Estado de São Paulo), 7 de setembro (Independência do Brasil),12 de outubro (Nossa Senhora Aparecida), 2 de novembro (Finados), 20 de novembro (Dia da Consciência Negra) e 25 de dezembro (Natal).</div><div> </div><div>Além desses dias, há, ainda, a previsão do recesso compensado, na semana que antecede o Natal e na semana que antecede o Ano Novo, a exemplo do que ocorreu no final de 2013.</div><div><br></div><div>À exceção desses recessos compensados de final de ano, não há, nesse decreto, nenhuma menção à compensação dos dias previstos como de suspensão de expediente.</div><div><br></div><div>No que se refere aos dias letivos, entretanto, vale lembrar que a Portaria SME nº 6.448, de 14/11/2013, que dispõe sobre as diretrizes para a elaboração do Calendário de Atividades de 2014, para as Unidades Educacionais do Município, em seu artigo 10, parágrafo único, estabelece a necessidade de adequação dos respectivos calendários, sempre que houver suspensão do efetivo trabalho escolar, submetendo-os, inclusive, à aprovação do Conselho de Escola/CEI/CIEJA.</div>
		</div>
	</div>
</div>
@endsection