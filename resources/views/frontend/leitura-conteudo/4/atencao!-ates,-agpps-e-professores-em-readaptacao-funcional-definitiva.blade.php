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
<title>Atenção! ATEs, AGPPs e Professores em Readaptação Funcional Definitiva</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Atenção! ATEs, AGPPs e Professores em Readaptação Funcional Definitiva</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Atenção! ATEs, AGPPs e Professores em Readaptação Funcional Definitiva</h4>
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
			<div>Através da Portaria nº 1.610, publicada na página 5 do DOC de 06/03/2014, a Secretaria Municipal de Educação fixou as diretrizes e procedimentos para selecionar e designar servidores municipais (dentre os Profissionais acima citados) para exercer  a função de Secretário Acadêmico dos Polos de Apoio Presencial da Universidade Aberta do Brasil (UAB), em funcionamento nos CEUs.</div><div><br></div><div>Como o período de inscrição é de 10 a 14 de março, a <b>APROFEM</b> sugere que os interessados leiam com atenção a Portaria acima citada e, se for o caso, inscrevam-se para o processo seletivo em tempo hábil. A Entidade comunica que a publicação da  Portaria e as explicações pertinentes foram divulgadas na sua Reunião  de Representantes Sindicais, no dia 06 de março passado.</div>
		</div>
	</div>
</div>
@endsection