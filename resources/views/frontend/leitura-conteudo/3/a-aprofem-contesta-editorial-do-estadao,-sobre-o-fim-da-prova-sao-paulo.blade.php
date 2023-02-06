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
<title>A APROFEM contesta Editorial do Estadão, sobre o fim da Prova São Paulo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">A APROFEM contesta Editorial do Estadão, sobre o fim da Prova São Paulo</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="0"><div class="widget-content-right pb-3 mb-3"><a href="" target="_blank"><img src="{{asset('storage//uploads/00000030/014000000300001_0.jpg')}}" alt="a-aprofem-contesta-editorial-do-estadao-sobre-o-fim-da-prova-sao-paulo" data-description="a-aprofem-contesta-editorial-do-estadao-sobre-o-fim-da-prova-sao-paulo"></a></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>A APROFEM contesta Editorial do Estadão, sobre o fim da Prova São Paulo</h4>
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
			<p><em><sup>Publicado em 02/05/2013</sup></em></p><blockquote><div><b><i>Editorial "A extinção da Prova São Paulo",</i></b> (Estadão, 30/04/2013, A3).</div></blockquote><p class="text-justify">Assinantes e admiradores da seriedade que invariavelmente pauta a abordagem dos fatos neste respeitado jornal, manifestamos nossa discordância em relação à opinião manifestada no citado Editorial.</p><p class="text-justify">Nossa entidade, por princípio independente e apartidária, não tem qualquer interesse ou compromisso em defender os atos da atual gestão municipal e/ou de demonizar a(s) anterior (es).</p><div class="text-justify">Entretanto, no que se refere à Prova São Paulo, é histórica nossa posição crítica a respeito: volumosos recursos da Educação gastos com a sua consecução terceirizada; a mobilização de Profissionais da Educação para a "preparação dos alunos" para a Prova (em muitas Unidades) e para a sua aplicação, comprometendo a continuidade pedagógica.</div><p class="text-justify"><br>Os fatos demonstram que, na declaração presente no Editorial, ... <b><i>"A Prova São Paulo serve de base... Ela permite que as escolas da rede municipal saibam..."</i></b>, melhor seria trocar o tempo dos verbos, registrando serviria e permitiria, uma vez que os seus resultados não ensejaram providências de resultados emblemáticos para a melhoria da qualidade da Educação.</p><p class="text-justify">A irônica e injusta afirmação de que a sua eliminação teve o objetivo político e partidário de 'aplacar o descontentamento de professores "companheiros" ' carece de propósito e respeito para com os Profissionais que representamos, que se dedicam às suas atividades com afinco e compromisso, independentemente da coloração política dos detentores do poder municipal, a qualquer tempo.</p>
		</div>
	</div>
</div>
@endsection