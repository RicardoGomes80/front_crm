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
<title>Educação - Pauta do dia 07/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 07/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 07/04/2014</h4>
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
			<div><b>I - Publicação da Tabela de Vencimentos</b> dos Profissionais de Educação, reajustada em 13,43%.<br></div><div>Posição da APROFEM: Trata-se, apenas, de cumprimento do disposto no artigo 4º da Lei nº 15.490/2011, a título de incorporação dos valores pagos sob a forma de abono complementar, estendendo-se esse índice para os Profissionais de Educação aposentados e pensionistas com paridade, e para os ativos desse Quadro, que não recebiam o abono complementar. É uma questão de correção das Tabelas de Vencimentos, que estavam distorcidas desde 2011, decorrente da política de concessão de abonos, em substituição à revisão geral anual.</div><div><br></div><div><b>II - Nova proposta para o piso dos Profissionais de Educação,</b> desta vez prevendo a extensão para os integrantes do Quadro de Apoio à Educação e para o Quadro do Magistério:</div><p><br></p><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr class="active"><th><strong>Cargo</strong></th><th class="text-center"><strong>Categoria</strong></th><th class="text-center"><strong>Jornada</strong></th><th class="text-center"><strong>Novo Piso</strong></th></tr></thead><tbody><tr><td><strong>Agente Escolar</strong></td><td class="text-center"> -</td><td class="text-center"> J40h</td><td class="text-right"> R$ 1.097,24</td></tr><tr><td><strong>Aux. Téc. Ed.</strong></td><td class="text-center"> -</td><td class="text-center"> J40h</td><td class="text-right"> R$ 1.244,45</td></tr><tr><td><strong>Aux.Ad. Ens.</strong></td><td class="text-center"> -</td><td class="text-center"> J40h</td><td class="text-right"> R$ 1.244.45</td></tr><tr><td><strong>Aux. Secret.</strong></td><td class="text-center"> -</td><td class="text-center"> J40h</td><td class="text-right"> R$ 1.244,45</td></tr><tr><td><strong>Insp. Alun.</strong></td><td class="text-center"> -</td><td class="text-center"> J40h</td><td class="text-right"> R$ 1.244,45</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 1</td><td class="text-center"> JB</td><td class="text-right"> R$ 1.220,63</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 2</td><td class="text-center"> JB</td><td class="text-right"> R$ 1.384,48</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 3</td><td class="text-center"> JB</td><td class="text-right"> R$ 1.474,59</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 1</td><td class="text-center"> JBD</td><td class="text-right"> R$ 1.831,02</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 2</td><td class="text-center"> JBD</td><td class="text-right"> R$ 2.076,85</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 3</td><td class="text-center"> JBD</td><td class="text-right"> R$ 2.211,89</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 1</td><td class="text-center"> JEIF e PEI</td><td class="text-right"> R$ 2.441,32</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 2</td><td class="text-center"> JEIF e PEI</td><td class="text-right"> R$ 2.769,05</td></tr><tr><td><strong>Professor</strong></td><td class="text-center"> Cat 3</td><td class="text-center"> JEIF e PEI</td><td class="text-right"> R$ 2.949,18</td></tr><tr><td><strong>Coord. Ped.</strong></td><td class="text-center"> -</td><td class="text-center"> JB 40h</td><td class="text-right"> R$ 4.188,63</td></tr><tr><td><strong>Dir. Esc.</strong></td><td class="text-center"> -</td><td class="text-center"> JB 40h</td><td class="text-right"> R$ 4.750,69</td></tr><tr><td><strong>Sup. Esc.</strong></td><td class="text-center"> -</td><td class="text-center"> JB 40h</td><td class="text-right"> R$ 5.059,43</td></tr></tbody></table></div><div><br></div><div><p>Complementando a proposta, o Governo comprometeu-se a debater a incorporação desses valores, em 2015.<br></p><div>Posição da APROFEM: A extensão, em forma de abono complementar (piso), dos 13,43%, a todos os Quadros dos Profissionais de Educação, embora tenha um reconhecido mérito, é objeto das seguintes ponderações:</div><div><br></div><div><ul><li>Para o Quadro de Apoio à Educação não representa nenhum ganho, uma vez que, desde maio de 2013, já vigoram valores superiores para o Nível Básico (R$ 1.132,50) e para o Nível Médio (R$ 1.380,00). Haverá, apenas, uma variação nos valores do abono complementar e do abono suplementar, resultando no mesmo valor hoje vigente.</li><li>Para o Quadro do Magistério (docentes e gestores) a proposta só é vantajosa para os que estão em início de carreira, voltando a distorcer a relação entre a progressão funcional e a correspondente melhoria dos vencimentos.</li><li>A simples menção ao "compromisso de debater a incorporação desses valores em 2015" não é o suficiente para aceitarmos a proposta. Exigimos a definição de critérios claros e precisos sobre a forma de incorporação desses pisos, o que garantirá a isonomia de tratamento entre todos os Profissionais de Educação.</li></ul></div><div><b>III - Sistema de Gestão Pedagógica: </b>dilatação do prazo para a digitação dos dados sobre o planejamento de atividades do professor.</div><div>Posição da APROFEM: O simples adiamento do prazo para inserção, no sistema de dados sobre as atividades do Professor, não garante as condições estruturais necessárias para a efetiva implementação do Sistema de Gestão Pedagógica, incluindo a quantidade mínima de tablets, a qualidade e velocidade de internet necessárias para essa tarefa. A preocupação maior fica por conta da utilização das horas adicionais da JEIF e das horas atividades das outras jornadas para a digitação de dados, em detrimento das discussões de cunho pedagógico, que devem ser priorizadas nesses horários.</div><div><b>IV - Concursos: </b>Foram passadas as seguintes informações:</div><div><br></div><div><ul><li>Para Professor de Ed. Infantil e Fund. I: encontra-se em fase de escolha da Entidade que realizará o concurso.</li><li>Para A.T.E. : até o final de abril deverá sair a homologação dos resultados.</li><li>Para Diretor de Escola e Supervisor Escolar: já foi encaminhado o pedido de autorização para a realização dos concursos.</li></ul></div><div><br></div><div>Posição da APROFEM: Não há nenhuma concessão do Governo nessa questão. É apenas a sequência de trâmites legais para a reposição de Profissionais de Educação, nos termos da legislação vigente.</div><div><b>V - Prêmio de Desempenho Educacional:</b> A minuta do novo decreto, com as novas regras, já anunciadas na Reunião anterior, ainda está em discussão e não foi apresentada às Entidades.</div><div>Posição da APROFEM: Houve melhora nos critérios, em reconhecimento à inadequação dos critérios que vigoraram em 2013. Entretanto, não há qualquer perspectiva de aumento do valor do prêmio, que é o mesmo desde 2007. Além disto, a adoção do Índice de Ocupação Escolar se mantém, embora inadequada, tendo em vista que a Unidade Educacional não tem qualquer controle sobre as matrículas, que são feitas por sistema informatizado.</div><div>Além destes, existem inúmeros outros pontos, em nossa pauta de reivindicações, que necessitam ser tratados, fato apontado pela APROFEM de forma incisiva e que mereceu, por parte do Governo, o reconhecimento de que será necessário estabelecer um calendário para a discussão de todos os temas ainda não tratados.</div><div>Assim sendo, nova reunião ficou agendada para o dia 14/04/2014, às 15 h, para a finalização do processo de negociação sobre a data base da categoria, tendo como pauta:</div><div><br></div><div><ol><li>Discussão sobre a incorporação dos novos pisos propostos;</li><li>Discussão sobre o decreto de regulamentação da Lei 15.693/2014 ( duas referências);</li><li>Primeira parcela do PDE;</li><li>Calendário para discussão de outros pontos das pautas de reivindicações, nas Reuniões Ordinárias da Mesa setorial da Educação.</li></ol></div></div>
		</div>
	</div>
</div>
@endsection