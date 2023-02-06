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
<title>Hospital do Servidor Público Municipal - HSPM ("O bode na sala")</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Hospital do Servidor Público Municipal - HSPM ("O bode na sala")</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Hospital do Servidor Público Municipal - HSPM ("O bode na sala")</h4>
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
			<div>Nas reuniões do Conselho Gestor do HSPM têm sido recorrentes as declarações dos responsáveis, pela Autarquia, de que o Governo Municipal pretente reinstituir o desconto obrigatório mensal, no holerite dos usuários.</div><div><br></div><div><b>As justificativas que já pululam nas Unidades Municipais e junto aos servidores aposentados e pensionistas deixam a desejar e são, por nós, observadas com reservas e descrédito:</b></div><div><br></div><div><ul><li><span style="line-height: 1.2;">"a Prefeitura não dispõe de recursos para a manutenção do HSPM - se não houver a contribuição, o Hospital poderá ser entregue ao SUS..."<br></span><br></li><li><span style="line-height: 1.2;">"havendo a contribuição, o Hospital passará a ser de uso exclusi­vo dos servidores e dependentes, não atendendo mais ao restante da população...".</span><br></li></ul></div><div><br></div><div>A avaliação da Aprofem é que a Administração parece pretender adotar, também nesse caso, a fórmula mais simplista e cômoda de contornar o problema de sucateamento e péssimo atendimento ao servidor usuário: criar a contribuição compulsória, tirando os recursos dos bolsos dos próprios servidores. Algo parecido com o pretendido (e temporariamente suspenso pela Justiça) exagerado aumento do IPTU, através da revisão dos valores venais dos imóveis.</div><div><br></div><div>Mais uma semelhança: uma ca­suística e politiqueira prática "robinhoodiana", ideologicamente compatível com os seus idealizadores: "quem pode mais, contribui com mais", bancando os que possuem menos recursos.</div><div><br></div><div><b>A APROFEM, ao longo das gestões passadas e no decurso da atual, apresentou inúmeras sugestões para reverter o péssimo atendimento do HSPM. A Entidade entende que o tratamento de tema tão delicado e relevante deve ocorrer no âmbito da Mesa Central de Negociação (SINP), onde reiterará o seguinte encaminhamento:</b></div><div><br></div><div><ol><li><span style="line-height: 1.2;">Que o Governo Municipal concretize, previamente, a recuperação total do HSPM em termos de prédio, instalações, equipamentos e pessoal, sem nenhum ônus para os servidores;<br><br></span></li><li><span style="line-height: 1.2;">Que o Governo Municipal documente a garantia de atendimento digno, amplo e com presteza, exclusivo aos servidores e dependentes, no HSPM ou de forma descentralizada (se inevitável o atendimento à população, que se assegure o mesmo em Pronto Socorro separado e com garantia de ressarcimento pelo SUS);<br><br></span></li><li><span style="line-height: 1.2;">Que o conjunto do funcionalismo municipal (servidores ativos, aposentados e pensionistas), conhecendo o efetivo atendimento dos itens anteriores, participe de consulta para saber do seu interesse em contribuir.</span><br></li></ol></div><div><br></div><div>Ocorrida dessa forma, transparente e escorreita, a APROFEM respeitará e apoiará a manifestação que se revelar majoritária, legítima porque oriunda dos donos de fato do HSPM: os Servidores Públicos Municipais.</div><div><br></div><div><b>Seguem, para balizar uma análise mais consistente, algumas informações sobre o HSPM e a história das contribuições.</b></div><div><br></div><div><ul><li><span style="line-height: 1.2;">O HSPM - Complexo Hospitalar foi construído a partir de 1950.<br></span><br></li><li><span style="line-height: 1.2;">Em 1972, pela Lei no 7.736, de 26/05/1972, passou a ser Autarquia vinculada à Secretaria Municipal de Saúde. Nessa época, havia uma contribuição ao IPREM de 5% + a contribuição ao HSPM de 3% = 8%.<br></span><br></li><li><span style="line-height: 1.2;">A partir da Emenda Constitucional no 20/1998, o sistema previdenciário passou a ser contributivo e prever, no mínimo, 11% sobre a remuneração, mas para abranger, no conceito previdência, aposentadoria e a assistência à saúde.<br></span><br></li><li><span style="line-height: 1.2;">Em 2005, a Lei no 13.973, de 12/05/2005, que dispõe sobre as contribuições para o regime próprio de previdência social dos servidores públicos do Município de São Paulo, instituiu a contribuição de 11%, incidente sobre a totalidade da base de contribuição.<br></span><br></li><li><span style="line-height: 1.2;">Desde então, os servidores municipais passaram a contribuir com 11% + 3% = 14%, para os dois quesitos (aposentadoria/saúde).<br></span><br></li><li><span style="line-height: 1.2;">Em 2007, a Lei no 14.661, de 26/12/2007, extinguiu a contribuição de 3%. Com isso, a contribuição total passou a ser de 11% (para aposentadoria e saúde).<br></span><br></li><li><span style="line-height: 1.2;">O HSPM, ao longo desse tempo, se já não estava em boas condições para atender com dignidade os servidores, foi se deteriorando em termos de prédio, equipamentos, instalações e pessoal, e se tornando completamente caótico para suas funções primeiras (ser o hospital do Servidor Público Municipal).</span><br></li></ul></div>
		</div>
	</div>
</div>
@endsection