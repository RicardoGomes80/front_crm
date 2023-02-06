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
<title>Sites Úteis</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Sites Úteis</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/uploads/00000003/dB8Lrx3ZtmaW0szu5ICEfYbZJ19Mfk5r9xromeqg.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000003/dB8Lrx3ZtmaW0szu5ICEfYbZJ19Mfk5r9xromeqg.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Sites Úteis</h4>
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
			<ul><br><li><a href="http://www.docidadesp.imprensaoficial.com.br/" target="_blank">Diário Oficial do Município de São Paulo</a></li><li><a title="" href="https://educacao.sme.prefeitura.sp.gov.br/escolaaberta/" target="_blank" data-original-title="">Escolas da Cidade de São Paulo</a></li><li><a href="https://www.areaprivada.prefeitura.sp.gov.br/PortalPMSP/PortalPMSP/Portal/PMSPprt001.tp" target="_blank">Holerite Eletrônico</a></li><li><a href="http://portal.aprofem.com.br/leitura-conteudo/00002025" target="_blank">Recadastramento Anual</a></li><li><a href="http://www.al.sp.gov.br/" target="_blank">ALESP - Assembleia Legislativa do Estado de São Paulo</a></li><li><a href="http://www.camara.gov.br" target="_blank">Câmara dos Deputados</a></li><li><a href="http://www.camara.sp.gov.br" target="_blank">Câmara Municipal de São Paulo</a></li><li><a href="http://www.ceesp.sp.gov.br" target="_blank">CEESP - Conselho Estadual de Educação de São Paulo </a></li><li><a href="http://portal.mec.gov.br/index.php?option=com_content&view=article&id=12449&Itemid=754" target="_blank">CNE - Conselho Nacional de Educação</a></li><li><a href="http://www.dominiopublico.gov.br/pesquisa/PesquisaObraForm.jsp" target="_blank">Domínio Público - Biblioteca Digital - Governo Federal </a></li><li><a href="http://portal.mec.gov.br/index.php" target="_blank">MEC - Ministério da Educação</a></li><li><a href="http://www.brasil.gov.br/" target="_blank">Portal do Governo Brasileiro </a></li><li><a href="http://www.saopaulo.sp.gov.br/" target="_blank">Portal do Governo do Estado de São Paulo</a></li><li><a href="http://www.prefeitura.sp.gov.br" target="_blank">Portal Oficial da Prefeitura do Município de São Paulo</a></li><li><a href="http://www.senado.gov.br" target="_blank">Senado Federal</a></li><li><a title="" href="http://portal.sme.prefeitura.sp.gov.br/Main" target="_blank" data-original-title="">SME - Secretaria Municipal de Educação de São Paulo</a></li><li><a href="http://www.stf.jus.br/portal/principal/principal.asp" target="_blank">STF - Supremo Tribunal Federal</a></li><li><a href="http://www.stj.jus.br" target="_blank">STJ - Superior Tribunal de Justiça</a></li><li><a href="http://www.tcm.sp.gov.br/" target="_blank"> TCM - Tribunal de Contas do Município de São Paulo</a></li></ul>
		</div>
	</div>
</div>
@endsection