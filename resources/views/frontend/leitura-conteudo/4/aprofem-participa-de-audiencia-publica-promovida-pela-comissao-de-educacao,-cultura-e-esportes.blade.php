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
<title>APROFEM participa de Audiência Pública promovida pela Comissão de Educação, Cultura e Esportes</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">APROFEM participa de Audiência Pública promovida pela Comissão de Educação, Cultura e Esportes</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>APROFEM participa de Audiência Pública promovida pela Comissão de Educação, Cultura e Esportes</h4>
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
			<div>Realizou-se, em 6 de dezembro de 2014, na Câmara de São Paulo, Audiência Pública para debater dois Projetos de Leis voltados à Educação: PLs 202/2013 e 341/2014.</div><div><br></div><div>O <b>PL 202/2013</b>, de autoria do Vereador Laércio Benko, "Cria o programa de ampliação do atendimento em creches ou entidade equivalente para crianças na faixa etária de zero a três anos de idade e pré-escola para crianças de quatro a cinco anos de idade" e o PL 341/2014, de autoria do Vereador Nelo Rodolfo, "Dispõe sobre o funcionamento dos centros de educação infantil, escolas municipais de educação infantil e centros municipais de educação infantil nos dias em que for decretado ponto facultativo, e dá outras providências".</div><div><br></div><div>O <b>PL 202/2013</b>, nos termos do seu Artigo 2º, tem por objeto "ampliar o atendimento gratuito nas creches ou entidades equivalentes e pré-escolas por meio de unidades da rede particular, que serão conveniadas e serão compensadas com redução proporcional no Imposto Sobre Serviços a pagar do valor anual da matrícula na mesma forma parcelada de pagamento adotada para os demais alunos em cada creche, entidade equivalente ou pré-escola...". Os artigos posteriores praticamente "operacionalizam`` o contido neste artigo.</div><div>Ainda, com relação a este Projeto de Lei, convém ressaltar o que está posto no parágrafo primeiro do Artigo 1º: "O Programa de Ampliação se dará tanto em número de unidades existentes, bem como em relação ao <b>horário de atendimento que se dará até às 21 h em dias úteis.</b>"</div><div><br></div><div>O <b>PL 341/2014</b>, desconsiderando o fato de que os Profissionais da Educação também têm família e vida social, bem como o fato de a Educação constituir-se num microssistema, em interface com outros, e a compor organicamente o macrossistema social, é autoexplicativo.</div><div><span rel="line-height: 1.2;">Nessa Audiência, a </span><b>APROFEM</b> posicionou-se contrária ao conteúdo dos PLs apresentados, sem, no entanto, deixar de apontar o direito constitucional de todos os cidadãos brasileiros à Educação. <br></div><div>A destacar que, dos Vereadores que compõem a Comissão de Educação, Cultura e Esportes, a sessão contou, apenas, com a presença do Presidente da Comissão.</div>
		</div>
	</div>
</div>
@endsection