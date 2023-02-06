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
<title>Aprovado o texto do Regimento Interno do Fórum Municipal de Educação de São Paulo</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Aprovado o texto do Regimento Interno do Fórum Municipal de Educação de São Paulo</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Aprovado o texto do Regimento Interno do Fórum Municipal de Educação de São Paulo</h4>
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
			<div>Em Reunião Ordinária dos integrantes do Fórum Municipal de Educação de São Paulo, ocorrida em 10 de junho de 2014, foi aprovado o texto do Regimento Interno do FME, órgão instituído pela Portaria SME nº 3098/13.</div><div><br></div><div>Criado com o objetivo de "institucionalizar mecanismos de planejamento educacional participativo que garantam o diálogo como método e a democracia como fundamento' e 'de traduzir, no conjunto de ações da Secretaria Municipal de Educação, políticas educacionais que assegurem a democratização da gestão e a qualidade social da educação", o FME, nos termos do Art. 2º da citada Portaria, tem as seguintes competências: </div><div><br></div><div><ul><li><span style="line-height: 1.2;">Planejar e coordenar a realização da Conferência Municipal de Educação, instituída por portaria da Secretaria Municipal de Educação, bem como divulgar as suas deliberações; </span><br></li><li><span style="line-height: 1.2;">Elaborar seu regimento interno, bem como o da Conferência Municipal de Educação, que serão aprovados e publicados mediante portaria da Secretaria Municipal de Educação; </span><br></li><li><span style="line-height: 1.2;">Oferecer suporte técnico para a organização e realização dos fóruns e da Conferência; </span><br></li><li><span style="line-height: 1.2;">Acompanhar e avaliar o processo de implementação das deliberações da Conferência Municipal de Educação e sua articulação com as deliberações das Conferências Estadual e Nacional de Educação; </span><br></li><li><span style="line-height: 1.2;">Planejar e organizar espaços de debates sobre o Plano Municipal de Educação. </span><br></li></ul></div><div>Em que pese a formalidade do ato, alguns segmentos representativos da sociedade civil, dentre eles a<b> APROFEM,</b> manifestaram seu desconforto com a atual composição do Fórum no que tange ao quórum para votações que - se mantido - em tese, resultará num desequilíbrio em prol do governo. Em razão dos pronunciamentos apontando essa tendência, o Coordenador dos trabalhos assumiu o compromisso de discutir tal problema na primeira reunião do FME.</div>
		</div>
	</div>
</div>
@endsection