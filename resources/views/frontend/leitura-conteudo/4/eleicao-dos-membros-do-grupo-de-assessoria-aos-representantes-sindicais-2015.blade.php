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
<title>Eleição dos Membros do Grupo de Assessoria aos Representantes Sindicais 2015</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Eleição dos Membros do Grupo de Assessoria aos Representantes Sindicais 2015</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="0"><div class="widget-content-right pb-3 mb-3"><a href="" target="_blank"><img src="{{asset('storage//uploads/00000007/01400000007_0.jpg')}}" alt="" data-description=""></a></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Eleição dos Membros do Grupo de Assessoria aos Representantes Sindicais 2015</h4>
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
			<p><strong>Caro(a) Representante Sindical da APROFEM</strong><br></p><p>Visando facilitar a sua atuação, incrementando-a e valorizando-a, listamos, abaixo, os nomes dos membros do nosso Grupo de Assessoria que foram eleitos em 2015.</p><p><strong><br></strong></p><table class="table table-bordered table-hover "><tbody><tr class="active"><td><strong>Nome</strong></td><td><strong>DRE</strong></td></tr><tr><td>Ana Paula Palmeira</td><td>Butantã</td></tr><tr><td>Luciana Silva Marinho</td><td>Butantã</td></tr><tr><td>Leia Aparecida Siqueira</td><td>Campo Limpo</td></tr><tr><td>Eliseu Marcolino Rosa Muzel</td><td>Campo Limpo</td></tr><tr><td>Maria Hozamônica Bezerra Santos Reis</td><td>Capela do Socorro</td></tr><tr><td>Claudia Regina Pereira Pires</td><td>Capela do Socorro</td></tr><tr><td>Adriana Aparecida Mariano da Silva</td><td>Freguesia do Ó/Brasilândia</td></tr><tr><td>Adriana Henrique de Oliveira</td><td>Freguesia do Ó/Brasilândia</td></tr><tr><td>Dinah Maria da Barra</td><td>Guaianases</td></tr><tr><td>Terezinha Caparroz Silva</td><td>Guaianases</td></tr><tr><td>Solange Placa</td><td>Ipiranga</td></tr><tr><td>Marina Inez Schiavon</td><td>Ipiranga</td></tr><tr><td>Arlete Coelho Coutinho</td><td>Itaquera</td></tr><tr><td>Amauri Denilo Cardeiro</td><td>Itaquera</td></tr><tr><td>Cintia Menezes Marcoli</td><td>Jaçanã/Tremembé</td></tr><tr><td>Rosilene Fernandes de Lima</td><td>Jaçanã/Tremembé</td></tr><tr><td>Eliane Tozzo Almeida</td><td>Penha</td></tr><tr><td>Haydeé de Souza</td><td>Penha</td></tr><tr><td>Caio Stenio e Silva Borges</td><td>Pirituba</td></tr><tr><td>Rodrigo Rodrigues da Silva</td><td>Pirituba</td></tr><tr><td>Jacqueline Gomes dos Santos</td><td>Santo Amaro</td></tr><tr><td>Priscilla Santos Boschini</td><td>Santo Amaro</td></tr><tr><td>Marcelo Beltran</td><td>São Mateus</td></tr><tr><td>Vânia Aparecida Pio Brandão Porcho</td><td>São Mateus</td></tr><tr><td>Edna Maria de Souza (Companheira)</td><td>São Miguel</td></tr><tr><td>João Francisco de Souza</td><td>São Miguel</td></tr></tbody></table>
		</div>
	</div>
</div>
@endsection