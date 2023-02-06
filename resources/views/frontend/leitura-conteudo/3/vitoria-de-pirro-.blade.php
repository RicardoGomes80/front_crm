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
<title>Vitória de Pirro *</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Vitória de Pirro *</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Vitória de Pirro *</h4>
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
			<p><em><sup>Publicado em 09/11/2011</sup></em></p><p class="text-justify">(*) O rei Pirro tornou-se famoso pela expressão <b><i>"Vitória de Pirro"</i></b>, quando da vitória na Batalha de Ásculo. Quando lhe deram os parabéns pela vitória conseguida a custo, diz-se que respondeu com estas palavras: <b><i>"Mais uma vitória como esta, e estou perdido"</i></b>.</p><p class="text-justify">No dia 08 de novembro os vereadores paulistanos aprovaram, por unanimidade, o Projeto de Lei 332/2011, na forma de Substitutivo enviado pelo Prefeito que propunha o reajuste dos valores do Abono Complementar (Piso) concedido aos Profissionais de Educação Docentes e instituía Pisos para os Gestores Educacionais e para o Quadro de Apoio à Educação, além da criação de 500 cargos de Professor de Educação Infantil (para exercício exclusivo nos CEIs).</p><p class="text-justify">No dia seguinte, os jornais estamparam os claudicantes argumentos ufanistas ditados por interlocutores do Governo Municipal e pelas diligentes Assessorias de Imprensa de outros, arvorados em dóceis e subservientes porta-vozes não institucionais desse mesmo Governo. Afinal, a afirmação de que "o reajuste" abrangerá a totalidade dos docentes ativos e aposentados, além dos demais funcionários (administrativos e operacionais), é rigorosamente imprecisa e burlesca.</p><p class="text-justify">Tratar o acontecido como <b><i>"vitória da categoria"</i></b> e <b><i>"avanço nas conquistas"</i></b>, por ser o piso aqui estabelecido <b><i>"quase o dobro do piso nacional de 40 horas"</i></b>, faz parte da óbvia estratégia para desmobilizar a categoria e arrefecer o potencial de resistência do conjunto dos servidores públicos municipais.</p><p class="text-justify">Não nos iludamos: boa parte dos que se considerarem favorecidos por receber alguns reais retroativos a maio passado, perderão essa condição a partir de maio de 2012. O grande contingente de Profissionais ativos com mais tempo de serviço público e a quase totalidade dos aposentados, não receberão qualquer benefício imediato - existe apenas a previsão de um reajuste para maio/2014, destinado a restabelecer o equilíbrio nas Tabelas de Vencimentos do QPE. Até lá, se nada conseguirmos mudar, conviveremos com distorções, devido ao desestimulante nivelamento por baixo, que poderá arrefecer a busca pela progressão funcional do servidor, comprometendo até mesmo a sua capacitação.</p><p class="text-justify">A APROFEM propôs alternativas para inclusão nos substitutivos, tolhidas pelo rolo compressor do Governo Municipal. Continuará lutando para assegurar que as reposições salariais, previstas na legislação para o QPE, para os meses de maio/2013 e maio/2014, sejam antecipadas para 2012 - ano final do atual Governo Municipal. Além da necessidade de antecipação dessas reposições, pesará o argumento de que não adianta <b><i>"fazer média com o bolso alheio"</i></b>, deixando para outros governantes dívidas aqui concebidas e, o que é pior, com dinheiro de sobra em caixa!</p><p class="text-justify">A cruel realidade é a seguinte: neste ano, até agora, o Governo Municipal não concedeu um centavo sequer que beneficie o conjunto dos servidores municipais. A Entidade atuará para assegurar aos servidores municipais, ainda este ano, pelo menos a reposição inflacionária do período anterior, repudiando a habitual, formal e humilhante concessão de 0,01% ou 0,1%, destinada a "cumprir" determinação da legislação federal. Fará intervenções para assegurar, no Orçamento para 2012, o provisionamento de recursos para reajustes salariais decentes.</p><p class="text-justify">É a hora da verdade: de se sensibilizar e esclarecer a população usuária dos equipamentos municipais, para que não dêem crédito total à propaganda da Prefeitura; cobrar das lideranças sindicais a aglutinação em torno dessa mobilização por nós apregoada e de permanecer mobilizado, fortalecendo a atuação da APROFEM, realizada com transparência e independência incondicionais.</p>
		</div>
	</div>
</div>
@endsection