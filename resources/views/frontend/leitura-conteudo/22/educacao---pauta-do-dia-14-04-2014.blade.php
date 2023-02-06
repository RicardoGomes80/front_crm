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
<title>Educação - Pauta do dia 14/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 14/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 14/04/2014</h4>
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
			<div><b>1 - </b>Revisão dos critérios do PDE: critérios válidos a partir da data de publicação do Decreto, com eventual proposta de parcelamento dos débitos oriundos do PDE 2013. O Governo não pretende reajustar o valor do Prêmio, que deverá permanecer nos mesmos  R$ 2.400,00. A 1ª parcela fica mantida para pagamento no mês de junho, sem definição, ainda, do percentual a ser pago.</div><div><br></div><div>Posição da APROFEM: as alterações nos critérios para cálculo do valor do prêmio eram necessárias, uma vez que os critérios estabelecidos pelo Decreto anterior mostraram-se inadequados, visto terem provocado a devolução de valores da 1ª parcela para cerca de 38 mil Profissionais de Educação. Além disso, o valor total do prêmio permanece inalterado desde 2007, indicando, claramente, que, a cada ano, torna-se mais desvalorizado, frente à inflação.</div><div><br></div><div><b>2 -</b> Sistema de Gestão Pedagógica: não houve qualquer avanço na negociação, permanecendo a dilatação dos prazos, já anunciada.</div><div><br></div><div>Posição da APROFEM: continuamos a denunciar as dificuldades que os Professores encontram para alimentar o sistema, pela falta de equipamentos e pela dificuldade de conexão com a Internet. Destacamos, ainda, a preocupação com o gasto de tempo para essa tarefa, em detrimento das atividades de planejamento pedagógico nos horários individuais e coletivos.</div><div><br></div><div><b>3 - </b>Piso Salarial: não houve, por parte do Governo, nenhuma proposta de prazo para a incorporação do piso, remetendo para futuras discussões, nas Mesas Setoriais de Educação, sem datas definidas.</div><div><br></div><div>Posição da APROFEM: O único avanço que houve foi no sentido de que o governo se propôs a discutir a incorporação na data base de 2015. Entretanto, permanecemos insistindo que é necessário garantir, na própria lei que instituirá os pisos, o prazo e as condições para essa incorporação. Não aceitamos deixar para discutir isso no próximo ano. Lembramos, ainda, que, com o abono suplementar instituído no ano passado para o nível básico (R$ 1.132,50) e para o nível médio (R$ 1.380,00), não haverá nenhum ganho imediato para os Agentes Escolares, nem para os Agentes de Apoio e nem para os ATEs, Inspetores de Alunos, Auxiliares Administrativos de Ensino, Auxiliares de Secretaria e AGPPs. Para os gestores, só haverá ganhos para os que estão nas referências iniciais dos respectivos cargos.</div><div><br></div><div><b>4 - </b>Recesso de inverno: O Governo comprometeu-se a marcar reunião específica para este assunto, ainda sem data definida, para discutir a minuta de Portaria com os Sindicatos, de acordo com as sugestões enviadas pelos mesmos.</div><div><br></div><div>Posição da APROFEM: já propusemos que o recesso seja único para toda a R.M.E. e assegurado para todos os professores dos CEIs, com o atendimento das crianças a cargo de profissionais contratados para este fim e, excepcionalmente, por professores da Rede voluntários, com remuneração adicional proporcional.</div><div><br></div><div>Nova Reunião foi agendada para o dia 22/04/2014.</div>
		</div>
	</div>
</div>
@endsection