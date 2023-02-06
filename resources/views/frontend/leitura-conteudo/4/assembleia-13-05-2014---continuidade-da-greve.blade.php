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
<title>Assembléia 13/05/2014 - Continuidade da Greve</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Assembléia 13/05/2014 - Continuidade da Greve</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/014000002950001_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000002950002_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000002950003_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000002950004_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000002950005_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage/014000002950006_0.jpg')}}" alt="Assembléia 13/05/2014 - Continuidade da Greve" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950001_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950002_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950003_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950004_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950005_0.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000295/014000002950006_0.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Assembléia 13/05/2014 - Continuidade da Greve</h4>
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
			<div>Reunidos novamente em assembleia, na tarde do dia 13/05/2014, no vão livre do MASP, cerca de vinte mil educadores da Rede Municipal de Ensino, em greve desde o dia 23/04, ouviram um breve histórico da situação da Campanha Salarial de 2014, com foco na proposta, anunciada pelo Prefeito através da imprensa, de majoração do piso dos Profissionais de Educação em 15,38%, com previsão de incorporação a ser discutida apenas em 2015.</div><div><br></div><div>Colocada em votação, a assembleia decidiu, quase que por unanimidade, pela rejeição da proposta do Governo e, consequentemente, pela manutenção da greve.</div><div><br></div><div>Foram votadas, ainda, e aprovadas, por ampla maioria dos presentes, a realização imediata de passeata, partindo do MASP e indo em direção à sede do Governo Municipal e nova assembleia, no dia 15/05/2014, às 14 horas, desta vez em frente ao prédio da Secretaria Municipal de Educação, na Rua Diogo de Faria.</div><div><br></div><div>Durante toda a caminhada, que tomou todas as faixas da Avenida Paulista e, na sequencia, as Ruas da Consolação, Xavier de Toledo e o Viaduto do Chá, os dirigentes da <b>APROFEM </b>e do SINPEEM revezaram-se ao microfone e reiteraram nossas posições frente à política educacional desta Administração, reivindicando não apenas melhores salários, mas a necessária melhoria nas condições de trabalho, a valorização dos profissionais do Quadro de Apoio à Educação,  aliadas à isonomia de tratamento entre ativos e aposentados.</div><div><br></div><div>O ato encerrou-se no Viaduto do Chá,sem que os dirigentes dos Sindicatos fossem recebidos pelos representantes do Governo.</div><div><br></div><div>A greve não apenas continuará, mas ganhará, certamente, mais e mais adesões, mostrando que os Profissionais de Educação do Município de São Paulo estão, a cada dia, mais fortes e coesos em torno deste movimento.</div>
		</div>
	</div>
</div>
@endsection