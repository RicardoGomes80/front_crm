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
<title>Educação - Pauta do dia 22/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 22/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 22/04/2014</h4>
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
			<div>Na referida minuta de protocolo, além dos "considerandos" de praxe, figuram três cláusulas:</div><div><br></div><div><b>Cláusula 1 - Sobre alteração dos critérios para o cálculo do valor do Prêmio de Desempenho Educacional (PDE), para 2014:</b></div><div><br></div><div>Posição da APROFEM: Faltou mencionar o valor total do prêmio; a aplicação dos critérios a partir da data de publicação do respectivo Decreto; a previsão do pagamento da 1ª parcela e seu respectivo valor; a possibilidade de opção, por parte do Profissional de Educação, de manifestar sua vontade de receber, ou não, a antecipação de parcela do Prêmio.</div><div><br></div><div><b>Cláusula 2 - Sobre o Sistema de Gestão Pedagógica (SGP):</b></div><div><br></div><div>Posição da APROFEM: A simples menção de ampliação dos prazos (30/04 para a inserção de notas, conceitos e faltas e 31/05 para os registros das atividades do professor) não resolvem os problemas da implantação do sistema, frente às inúmeras dificuldades que estão postas, relativamente a equipamentos, disponibilidade de internet e horário para a inserção dos dados, sem prejuízo da principal razão dos horários coletivos, que é o planejamento pedagógico.</div><div><br></div><div><b>Cláusula 3 - Sobre o Abono Complementar de 13,43% a ser concedido para os Profissionais de Educação (Quadro de Apoio, Docentes e Gestores), como piso mínimo:</b></div><div><br></div><div>Posição da APROFEM: Além de ser a reedição do Abono Complementar, que somente beneficia Docentes e Gestores em início de carreira (Quadro de Apoio continuará recebendo os mesmos R$ 1.132,50 - Nível Básico e R$ 1.380,00 - Nível Médio), há apenas menção, no parágrafo único dessa cláusula, de compromisso do Governo de discutir a incorporação desses valores aos padrões de vencimentos ( o que beneficiará a todos os Profissionais de Educação, indistintamente) na data - base de 2015.</div><div><br></div><div>A APROFEM registrou sua firme posição de não aceitar que a previsão de incorporação fique fora da futura Lei que instituirá esse novo Abono Complementar, por entender que isto é necessário, inclusive, para que, na peça orçamentária para 2015, a ser enviada em breve à Câmara Municipal, já haja a respectiva provisão de recursos para essa incorporação.</div><div><br></div><div>Além das ponderações acima, a APROFEM mencionou que faltam muitos outros itens para serem acrescentados como negociação, que fazem parte de nossa Pauta de Reivindicações e que necessitam ser tratados com urgência, a exemplo da regulamentação da Lei nº 15.930/2014, que acrescentou as duas referências às Tabelas de Vencimentos dos Docentes e Gestores.</div><div><br></div><div>Os representantes do Governo comprometeram-se a reexaminar toda a minuta de protocolo, buscando incorporar as observações dos sindicatos, bem como a extrair das diferentes Pautas de Reivindicações apresentadas, todos os itens que não impliquem em impacto financeiro para possível atendimento.</div><div><br></div><div>Para este trabalho foi estabelecido um prazo até o dia 24/04, devendo a nova minuta de protocolo ser enviada aos sindicatos, por meio eletrônico, para então ser marcada nova Reunião Extraordinária para finalização do processo.</div>
		</div>
	</div>
</div>
@endsection