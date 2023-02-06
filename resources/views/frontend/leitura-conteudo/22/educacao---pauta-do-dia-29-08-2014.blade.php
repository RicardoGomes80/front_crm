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
<title>Educação - Pauta do dia 29/08/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Educação - Pauta do dia 29/08/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Educação - Pauta do dia 29/08/2014</h4>
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
			<div><b>- Sistema de Gestão Pedagógica (SGP)</b></div><div><span style="line-height: 1.2;">Apresentação da concepção e passos  da implantação do Sistema, feita por representante da DOT/Tecnologias para a Educação.</span><br></div><div><br></div><div>A APROFEM relatou o clima de ansiedade, tensão e indignação presente em inúmeras UEs, decorrente da desinformação e da pressão  a que muitos professores municipais vêm sendo submetidos. Denunciou a insuficiência e precariedade dos equipamentos disponíveis; a insegurança decorrente da operação off-line e expectativa de conexão posterior; a necessidade de capacitação/treinamento preliminar, e sistemático acompanhamento/atualização para os profissionais envolvidos; a ampliação de prazos para a implantação do SGP e a flexibilização de datas-limite para a digitação de dados, respeitando as dificuldades enumeradas pela APROFEM; protesto nosso em relação à orientação de utilizar o período de aulas para a digitação, comprometendo a atenção e o atendimento aos alunos, bem como a disciplina; a necessidade de preservar o horário coletivo e de  horas-atividade; a dificuldade de cumprimento das tarefas pelos professores que detém número elevado de turmas e/ou acúmulo de cargos. Apelou para que a SME assegure a chegada de orientações claras, coerentes e uniformes às Unidades envolvidas, inclusive através das DREs.</div><div><br></div><div>A representante da DOT/SME reiterou o caráter de implantação do SGP, sujeito a revisões e aperfeiçoamentos, e admitiu discutir o fluxo de orientações envolvendo as DREs, inclusive para solucionar as denúncias dos casos de cobranças inadiáveis e ameaças a que muitos profissionais são submetidos. Também anunciou a intenção de adquirir tablets para todos os professores, através de licitação por etapas e sem estabelecer prazos, e a extensão gradativa do SGP à Educação Infantil (currículo integrador), EJA, EMEBs e Ensino Médio.</div><div><br></div><div><b>- Evolução Funcional do Quadro do Magistério<br></b>Operacionalização da "Lei das duas referências" para os profissionais em final de carreira.</div><div><br></div><div>O Governo Municipal pretende enviar Memorando Circular às DREs, esclarecendo qual o público-alvo a que se destina </div><div>o Programa "Inovações Pedagógicas e de Gestão na Rede", instituído pela Portaria SME nº 4.292/2014.</div><div><br></div><div>A APROFEM somou-se às manifestações para que tal Programa seja estendido, pela sua relevância, a todos os docentes e gestores interessados, independentemente da referência salarial em que se encontrarem e de sua Unidade de Exercício.</div><div><br></div><div><b>- Intervalo de 15 minutos nos CEIs</b></div><div>O  Governo Municipal apresentou uma minuta de Portaria com a seguinte previsão: "Nos CEIs deverá ser assegurado o atendimento às crianças, sempre que os profissionais responsáveis pela classe/agrupamentos se ausentarem para atender às suas necessidades de qualquer natureza, na própria Unidade".</div><div><br></div><div>A APROFEM e o SINPEEM manifestaram-se pelo cumprimento da Cláusula Quinta do Protocolo de Negociação, firmado entre a Prefeitura e as duas Entidades Representativas em junho passado, que prevê a produção de uma Portaria sobre o tema até o fim de agosto/2014. Argumentaram que a minuta apresentada não contempla a reivindicação histórica da categoria, ao não  assegurar os 15 minutos negociados e condicionar "as ausências dos profissionais" ao atendimento ininterrupto às crianças, sem sinalizar aos gestores de que forma isso ocorreria.</div><div><br></div><div>Diante da unanimidade da rejeição ao teor da citada minuta, os interlocutores do Governo Municipal solicitaram às Entidades a apresentação de uma proposta de redação alternativa, no que foram prontamente atendidos com a apresentação de uma proposta de consenso entre as Entidades presentes à Reunião. Sob o compromisso de submeter o novo texto às instâncias decisórias e com a advertência da APROFEM e do SINPEEM sobre o descumprimento do prazo pactuado para o assunto, foram encerrados os trabalhos, com a expectativa da devolutiva do Governo Municipal em relação à proposta apresentada.</div>
		</div>
	</div>
</div>
@endsection