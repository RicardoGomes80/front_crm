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
<title>Por Favor, Sr. Prefeito...</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Por Favor, Sr. Prefeito...</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Por Favor, Sr. Prefeito...</h4>
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
			<p><em><sup>Publicado no Jornal APROFEM - Setembro/Outubro 2013</sup></em></p><div class="text-justify">Iniciamos o nosso comentário, retratando a clara e incisiva conclusão do editorial <i><b>"As ameaças de Haddad"</b></i>, publicado no Estadão (21/07/2013, A3):</div><div class="text-justify"><br></div><blockquote class="text-justify"><div class="text-justify"><i><b>"O que torna indefensável a posição do prefeito, que deseja dessa maneira colocar o governo federal e o STF contra a parede, é que ele sabia perfeitamente, quando se candidatou a prefeito, de todos esses problemas e da situação difícil que eles criam para a cidade. Foi eleito para resolvê-los e não para adotar a posição cômoda de jogá-los no colo dos outros. Resolvê-los significa buscar soluções de compromisso. Isso exige paciência, determinação e disposição para negociar (g.n.). E, sobretudo, coragem para enfrentar a adversidade.</b></i></div><div class="text-justify"><i><b><br></b></i></div><div class="text-justify"><i><b>É o oposto de entregar os pontos quando o jogo mal começou, como o prefeito Fernando Haddad parece estar fazendo."</b></i></div></blockquote><div class="text-justify"><br></div><p class="text-justify">O assunto vem a propósito das declarações do Prefeito sobre as medidas que, a seu ver, são indispensáveis para evitar que a cidade se torne ingovernável. Ressalte-se que as principais medidas reivindicadas pelo alcaide dependem de decisões de outros poderes e instâncias (Judiciário, Executivo e Legislativo federais), e que os fatos ensejadores dessas medidas já eram de conhecimento de todos os candidatos que concorreram ao posto, no ano passado.</p><p class="text-justify">A mais importante refere-se ao pagamento dos precatórios municipais, grande parte deles tendo como credores prioritários os próprios servidores da Capital e seus beneficiários (posto que muitos já morreram, sem receber o que era seu, por direito). O desejo do Prefeito de que o Supremo Tribunal Federal (STF) estabeleça um teto de 3% do orçamento para o pagamento dos precatórios, se acatado, postergaria o pagamento aos credores, para o decurso de um período indefinido de anos.</p><p class="text-justify">Outro problema grave apontado, a dívida da Capital com a União, é ridículo e advém de regras escorchantes: <i><b>" ...era de R$ 11 bilhões, já pagamos R$ 20 bilhões e ainda devemos R$ 54 bilhões..."</b></i>. A solução está nas mãos da presidenta e dos ministros, até recentemente colegas de trabalho do atual Prefeito.</p><p class="text-justify">Para obter recursos para melhorar o transporte público, propôs a municipalização de um tributo federal que incide sobre os combustíveis - missão literalmente impossível no Brasil real.</p><p class="text-justify">Como se não bastasse, alardeou-se a notícia de que <i><b>"o Prefeito deseja revisar os salários de todos os servidores municipais até o fim deste ano... que não foi revelado como será o processo de levantamento de eventuais irregularidades nos salários... e que contratou a Fundação Getúlio Vargas (FGV) para fazer uma auditoria completa na folha de pagamento do governo municipal ..."</b></i> Sem entrarmos no mérito dos custos desse convênio com a FGV (e de tantos outros, relacionados com contratação de pessoal), um trabalho transparente só deverá confirmar a defasagem existente entre o valor profissional dos nossos servidores e os salários e reajustes praticados ao longo dos anos.</p><p class="text-justify">De tudo isso, depreendemos quão pertinente é a conclusão do articulista do Estadão e bradamos: Senhor Prefeito, vamos negociar com a seriedade esperada entre as partes, sem tripudiar sobre o discernimento do funcionalismo municipal.</p>
		</div>
	</div>
</div>
@endsection