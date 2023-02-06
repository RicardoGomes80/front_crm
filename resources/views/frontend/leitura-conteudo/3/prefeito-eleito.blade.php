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
<title>Prefeito eleito</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Prefeito eleito</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Prefeito eleito</h4>
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
			<p><em><sup>Editorial Jornal APROFEM - Novembro/Dezembro 2012 </sup></em></p><p class="text-justify"><br>Fernando Haddad (PT), 49 anos, é o prefeito eleito da Capital para a gestão 2013/2016.</p><p class="text-justify">Na sua visita à APROFEM, ocorrida no dia 15 de agosto passado, o então candidato ouviu as principais reivindicações da Entidade, recebeu formalmente o documento <i><b>"Pauta de Reivindicações da APROFEM"</b></i> e discorreu sobre pontos de seu Programa de Governo.</p><p class="text-justify">Professor universitário com formação em Direito, mestrado em Economia e doutorado em Filosofia, ex-ministro da Educação, Haddad demonstrou segurança e convicção ao assegurar sua disposição para o permanente diálogo com as Entidades Representativas, prestigiando as Mesas de Negociação - Central e Setoriais.</p><p class="text-justify">Dos pontos abordados pelo agora prefeito eleito, destacamos: <br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify"><b>Servidor Público</b> - Pretende valorizar os servidores públicos municipais, por meio da democratização das relações de trabalho, da reformulação de planos de cargos e salários vigentes, da instituição de uma política de gestão de pessoas, da criação da política integrada de saúde do servidor público municipal e da requalificação do HSPM, bem como pela criação de mecanismos para a formação contínua do funcionalismo.</li><li class="text-justify"><b>Política Habitacional</b> - Avançar significativamente na produção de moradias, seja por empreiteiras, seja através da autogestão, em parceiras com entidades, associações e sindicatos, priorizando a população com renda de até três salários mínimos (o que poderá beneficiar parcela significativa do funcionalismo público municipal).</li><li class="text-justify"><b>Educação de Qualidade e Formação Cidadã<br></b></li><ul class="text-justify"><li class="text-justify">Profissionais de Educação - elaborar política municipal de formação e valorização dos profissionais da educação articulando carreira, jornada e piso salarial, buscando fortalecer o trabalho em equipe, a formação permanente no contexto da escola articulada às práticas pedagógicas e inovar os espaços educacionais.</li><li class="text-justify">Criar 31 polos da Universidade Aberta do Brasil (um em cada subprefeitura), visando a formação dos servidores municipais (especialização, pós etc.); construir mais 20 CEUs.</li><li class="text-justify">Garantir o atendimento integral à criança com base na Pedagogia da Infância; expandir a oferta de vagas em creches, preferencialmente pela construção de novas UEs; conseguir terrenos para construir 172 creches com recursos federais; garantir a indissociabilidade entre o cuidar e o educar.</li><li class="text-justify">Garantir a alfabetização e o aumento de escolarização de jovens e adultos.</li><li class="text-justify">Retomar e fortalecer os Conselhos de Escola / CEI e as APMs; fomentar a participação dos pais e responsáveis e da comunidade; propiciar condições para o diálogo entre a equipe escolar, os estudantes, as famílias e os representantes da comunidade.</li><li class="text-justify">Violência e Indisciplina - superação desses problemas de maneira articulada com as escolas, Conselhos Tutelares e rede de entidades capacitadas para apoiar e auxiliar as UEs em seus problemas cotidianos.</li><li class="text-justify">Promover a melhoria da qualidade por meio da implantação da Educação Integral, com implementação de ações integradas de educação, assistência social, saúde, esporte e cultura.</li><li class="text-justify">Inovar em projetos voltados à superação de dificuldades de aprendizado.</li><li class="text-justify">Inclusão - Promover a inclusão de fato de pessoas com deficiência, assegurando formação adequada aos educadores envolvidos e material pedagógico adequado; desenvolver programas para alunos com alta habilidade e alto rendimento escolar, com o objetivo de incentivar as potencialidades desses alunos em programas que contribuirão para transformação de São Paulo num centro de tecnologia de ponta.</li></ul></ul></div><div class="text-justify"><ul class="text-justify"><li class="text-justify"><b>Saúde </b>- Retomar a direção política e gerencial dos serviços públicos municipais, garantindo: concursos e seleção pública, salários iguais para trabalho igual, transparência nas contratações, licitações e na constituição de parcerias com entidades privadas; construção urgente de três hospitais e de cinco pronto - socorros.</li></ul></div><div class="text-justify"><br></div><p class="text-justify">A expectativa da Entidade, no período pós-posse de janeiro próximo, é que se concretizem os compromissos verbalizados e a APROFEM passe a negociar com os interlocutores do novo Governo Municipal, apresentando a sua Pauta de Reivindicações 2013 e destacando os compromissos da Entidade com a <b>recomposição salarial do funcionalismo municipal</b>; com a isonomia incondicional de tratamento entre servidores ativos e aposentados; com a reversão do oneroso processo de terceirização/privatização dos serviços públicos essenciais, retomando os concursos públicos de ingresso para os servidores públicos municipais; com o fim da prática de assistencialismo afeito a outras áreas, utilizando-se os recursos legalmente destinados à Educação.</p><p class="text-justify">Aos seus filiados, a APROFEM assegura que permanece em estado de permanente mobilização, zelando pela manutenção das conquistas da categoria.</p>
		</div>
	</div>
</div>
@endsection