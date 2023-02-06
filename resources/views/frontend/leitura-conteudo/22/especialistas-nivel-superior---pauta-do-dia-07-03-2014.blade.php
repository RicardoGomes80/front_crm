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
<title>Especialistas (Nível Superior) - Pauta do dia 07/03/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Especialistas (Nível Superior) - Pauta do dia 07/03/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Especialistas (Nível Superior) - Pauta do dia 07/03/2014</h4>
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
			<div>A primeira Reunião da Mesa Setorial dos Profissionais de Nível Superior ocorreu em 07/03/2014, tendo como pauta única a discussão sobre a minuta de PL que "Dispõe sobre a criação do Quadro de Analistas da Administração Pública Municipal - QAPM, Plano de carreiras, reenquadra cargos e funções do Quadro de Pessoal de Nível Superior, instituído pela Lei 14.591, de 13 de novembro de 2007, e cria o respectivo regime de remuneração por subsídio".<br></div><div><br></div><div>As Entidades Representativas dos Profissionais envolvidos apresentaram dúvidas, questionamentos e discordâncias com as propostas contidas na minuta de PL apresentada, que institui o novo Quadro, composto por carreiras e cargos multidisciplinares de Analistas em Administração, Orçamento e Finanças Públicas, Analistas de Desenvolvimento Urbano, Analistas de Assistência e Desenvolvimento Social, Analistas em Informações Técnicas, Culturais e Desportivas e Analistas em Meio Ambiente.</div><div><br></div><div>A principal questão colocada pelos representantes das entidades é, sem dúvida, a da remuneração por subsídio que, da forma proposta, impede que os profissionais ativos ou aposentados no final da carreira, sejam enquadrados, igualmente, no final da nova carreira proposta. Os que estão ainda na ativa, se quiserem atingir a última referência proposta (Q17), ainda que já estejam na última referência atual (S 13), deverão permanecer em exercício por, pelo menos, mais seis anos.</div><div><br></div><div>Há inúmeros outros pontos, como a extinção dos adicionais e sexta parte, incompatibilidade entre o subsídio e outras vantagens pessoais, falta de clareza quanto a critérios para transposição para as novas referências, inexistência de previsão de regras de reajustamento, após o ano de 2016, rigidez de critérios para o estágio probatório, inexistência de menção a critérios para o acesso ao quarto nível da carreira, dentre outros.</div><div><br></div><div>Chama a atenção, também, o fato de que, com essa proposta, os hoje denominados Especialistas, se optarem pela nova carreira de Analistas, caso tenham ou venham a ter ganhos de ações judiciais, que lhes proporcionem valor superior ao ora proposto para seu enquadramento, receberão a diferença por meio de Subsídio Complementar, sobre o qual não incidirão quaisquer vantagens ou reajustes. Ou seja, a Prefeitura, na prática, pretende anular até as decisões judiciais!</div><div><br></div><div>No que se refere aos servidores admitidos, há previsão de enquadramento na referência Q5, que é a última categoria do Nível I, e que corresponde a seis anos de efetivo exercício, sem perspectiva de progressão na carreira, já que não são efetivos. Vale lembrar que há muitos admitidos estáveis que já têm, pelo menos, trinta anos de efetivo exercício e, portanto, larga experiência profissional e que não estão recebendo tratamento compatível com ela.</div><div><br></div><div>Questionado sobre as razões pelas quais se justifica a implantação do regime de remuneração por subsídio, o representante do governo só conseguiu demonstrar que se trata de uma decisão política para facilitar o processamento da folha de pagamento, hoje um sistema muito complexo e, segundo ele, obsoleto.</div><div><br></div><div>Nova reunião está prevista para o próximo dia 14/03, tendo o representante do governo se comprometido a apresentar esclarecimentos sobre as dúvidas colocadas, desde que as Entidades passem por e-mail seus questionamentos.</div>
		</div>
	</div>
</div>
@endsection