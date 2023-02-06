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
<title>Legislação infeliz</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Legislação infeliz</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Legislação infeliz</h4>
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
			<p><em><sup>Publicado no Jornal APROFEM - Maio/Junho 2009</sup></em></p><div class="text-justify">Caro(a) Colega Servidor(a) Público(a) Municipal</div><div class="text-justify"><br></div><p>O Sr. Prefeito de São Paulo fez publicar decreto em que trata de situações passíveis de ocorrer nas Unidades Municipais, envolvendo servidores inassíduos ou sob efeito de drogas psicoativas.</p><p>Ao não nos procurar, quando poderia ter se aproveitado da nossa experiência e vivência junto aos servidores municipais que labutam, muitas vezes à custa de sua integridade física ou emocional, o Governo Municipal (a nosso juízo) cometeu alguns equívocos:</p><div class="text-justify"><br></div><div class="text-justify"><ul class="text-justify"><li class="text-justify"><span rel="line-height: 1.2;">prejuízo ao serviço em decorrência de ausências reiteradas e injustificadas - determina que a chefia "informe o servidor sobre a possibilidade de vir a requerer a sua exoneração e/ou dispensa do cargo, de modo a evitar o exercício da pretensão punitiva por parte da Administração", caso as ausências não ocorram por "problemas de saúde" confessados a essa mesma chefia.</span></li></ul></div><p><span rel="line-height: 1.2;">No mundo real, quem exerce(eu) cargo de chefia sabe que boa parte dos servidores, se indagados sobre a sua saúde física ou psicológica, negam possuir qualquer problema. E, nesse caso, a Prefeitura determina que a chefia sugira a "exoneração a pedido", medida que legitimará, em termos práticos, a coerção.</span></p><p><span rel="line-height: 1.2;"></span>Onde a sugestão da chefia for atendida, poderá ocorrer um dano irreversível para um ser humano fragilizado, situação que o citado decreto impossibilita ser detectada pelos experientes Profissionais de PROCED.</p><p>Onde a sugestão da chefia não for atendida, a chefia deverá proceder de acordo com as suas atribuições, injustificando as faltas, punindo disciplinarmente e representando junto ao PROCED.</p><p>Na opinião da APROFEM, foram algumas determinações equivocadas e outras, desnecessárias, posto que as chefias já têm o dever de efetuá-las previsto no Estatuto dos Funcionários e legislação complementar. <br></p><div class="text-justify"><ul class="text-justify"><li class="text-justify"><span rel="line-height: 1.2;">comparecimento ao trabalho sob o efeito de substâncias psicoativas (álcool, drogas, automedicação etc.) - determina que a chefia impeça o servidor de trabalhar, atribuindo-lhe falta injustificada. Na primeira reincidência, o servidor será encaminhado para avaliação médica, após receber mais uma falta injustificada e uma repreensão!</span></li></ul></div><div class="text-justify"><span rel="line-height: 1.2;">Ou seja, primeiro pune-se o servidor, para depois verificar se ele está com problemas de saúde (física ou mental), o que ocorre em muitos casos face às condições de trabalho. Nesse ínterim, muitas desavenças e até agressões físicas poderão ocorrer entre o servidor (doente, muitas vezes) e a chefia, obrigada a punir e lesada no exercício do seu poder discricionário. <br><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"></span></span></span></span></div><div class="text-justify"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><br></span></span></span></span></div><div class="text-justify"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;">Junto à Equipe de Servidores, uns tomarão as dores do colega enquanto outros sinalizarão solidariedade à chefia. E a harmonia no trabalho da Equipe e as injustiças cometidas? Ora, isso parece ser menos importante do que parecer rigoroso com os servidores junto à população. </span></span></span></span></div><div class="text-justify"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><br></span></span></span></span></div><div class="text-justify"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;"><span rel="line-height: 1.2;">Ainda há tempo, com humildade e dignidade, de se rever o teor desse indigitado Decreto (Decreto nº 50.573, de 15/04/2009 - DOC 16/04/2009, pág. 1).</span></span></span></span></div>
		</div>
	</div>
</div>
@endsection