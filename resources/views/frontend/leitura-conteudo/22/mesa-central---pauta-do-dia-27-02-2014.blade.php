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
<title>Mesa Central - Pauta do dia 27/02/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mesa Central - Pauta do dia 27/02/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mesa Central - Pauta do dia 27/02/2014</h4>
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
			<div><ol><li><span style="line-height: 1.2;">Discussão do PL do PCCS-NS</span><br></li><li><span style="line-height: 1.2;">Calendário</span><br></li><li><span style="line-height: 1.2;">Informes</span><br></li></ol></div><div><br></div><div>A bancada Sindical protocolou formalmente sua Pauta Unificada de reivindicações para a Campanha Salarial de 2014, composta de:</div><div><br></div><div><ol><li><span style="line-height: 1.2;">Alteração da lei salarial atual (Lei nº 13.303/2002);</span><br></li><li><span style="line-height: 1.2;">Reposição das perdas salariais acumuladas pelo funcionalismo;</span><br></li><li><span style="line-height: 1.2;">Revisão Geral Anual não inferior à inflação apurada no período;</span><br></li><li><span style="line-height: 1.2;">Aumento dos valores dos pisos remuneratórios e incorporação, aos padrões de vencimentos, de abonos complementares e  suplementares, previstos no § 1º do Art. 5º da Lei nº 15.774, de 29/05/2013;</span><br></li><li><span style="line-height: 1.2;">Isonomia entre ativos e aposentados;</span><br></li><li><span style="line-height: 1.2;">Fim das terceirizações de serviços públicos.</span><br></li></ol></div><div><br></div><div>A Coordenadora do Fórum de Entidades ressaltou ainda que, no documento entregue, há  menção à deliberação de se aguardar resposta do Governo sobre a pauta acima, até o dia 18/03/2014, para que o Fórum possa avaliar as propostas do governo e ter um posicionamento de consenso até a próxima Reunião da Mesa Central, prevista para o dia 27/03 do corrente ano.</div><div><br></div><div>O Governo alegou que só terá condições de fechar propostas até o dia 25/03 e que enviará a todas as Entidades, por meio eletrônico, as respostas à nossa pauta .</div><div><br></div><div>Na sequência, invertendo a pauta, o Governo propôs um calendário de discussões nas Mesas Setoriais que deverão ocorrer, excepcionalmente neste mês de março, uma vez por semana, até o dia 27/03 e, a partir de então, também em caráter excepcional, para a discussão da data base, a realização de reuniões semanais da Mesa Central, buscando fechar o acordo com as Entidades.</div><div><br></div><div>Como segundo item de pauta, o Governo apresentou sua proposta de Minuta de Projeto de Lei para a reestruturação das carreiras de Nível Superior, com previsão de remuneração por subsídio. Questionado sobre a possibilidade de negociação a respeito de supressão da proposta de subsídio, o representante do Governo deixou claro que esse ponto não está em discussão, pois essa é uma questão fechada para o Governo.</div><div><br></div><div>A reunião encerrou-se com o compromisso do Governo em mandar, pelo meio eletrônico o arquivo ali apresentado, para que as Entidades possam analisar e trazer suas contrapropostas para análise.</div>
		</div>
	</div>
</div>
@endsection