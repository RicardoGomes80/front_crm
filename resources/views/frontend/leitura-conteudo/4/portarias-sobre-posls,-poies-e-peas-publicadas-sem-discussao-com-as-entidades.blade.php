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
<title>Portarias sobre POSLs, POIEs e PEAs publicadas sem discussão com as Entidades</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Portarias sobre POSLs, POIEs e PEAs publicadas sem discussão com as Entidades</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Portarias sobre POSLs, POIEs e PEAs publicadas sem discussão com as Entidades</h4>
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
			<div>Com a primeira Reunião da Mesa Setorial da Educação  para o ano de 2014, marcada para o dia 04 de fevereiro, a Secretaria Municipal de Educação já fez publicar, no Diário Oficial da Cidade, no dia 25/01/2014 (págs 13, 14 e 15), as Portarias SME nºs 899, 900 e 901, de 24/01/2014, que tratam, respectivamente, da Organização das Salas , Espaços e Núcleos de Leitura, dos Laboratórios de Informática e dos Projetos Especiais de Ação - PEAs, sem qualquer discussão com as Entidades Representativas dos Profissionais de Educação.</div><div><br></div><div>Péssimo indício de que não há disposição para o diálogo aberto -  embora o discurso seja bem diferente dessa prática.</div><div><br></div><div>As três Portarias citadas afetam diretamente o funcionamento de todas as Unidades Educacionais, sem exceção: CEIs, CEMEIs, EMEIs, EMEFs, EMEFMs, EMEBs e  CIEJAs, ainda que não tenham Salas de Leitura ou Laboratórios de Informática, pois tudo se articula com os programas "Mais Educação - São Paulo" e de "Reorganização Curricular da Rede Municipal de Ensino".</div><div><br></div><div>No período de Organização das UEs, as equipes escolares deverão analisar esses documentos e organizar seu Projeto Político Pedagógico em consonância com o disposto nas portarias acima, além das disposições contidas na  Portaria nº 6.771, de 13/12/2013, publicada no DOC de 14/12/2013, na página 12.</div><div><br></div><div>O Setor de Atendimento da <b>APROFEM</b> estará à disposição dos filiados para oferecer maiores esclarecimentos aos interessados.</div>
		</div>
	</div>
</div>
@endsection