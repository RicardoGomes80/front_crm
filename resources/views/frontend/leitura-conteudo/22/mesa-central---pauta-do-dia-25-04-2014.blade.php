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
<title>Mesa Central - Pauta do dia 25/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mesa Central - Pauta do dia 25/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mesa Central - Pauta do dia 25/04/2014</h4>
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
			<div>Abrindo os trabalhos, o representante do Governo anunciou que, dos seis itens propostos pelas Entidades, propunham-se a tratar, na discussão da data - base de maio deste ano, apenas dois deles: alteração da Lei nº 13.303/2003, que dispõe sobre os salários dos servidores e revisão geral anual, que é o reajuste a que todos os servidores fazem jus a cada ano.</div><div><br></div><div>I - Alteração da Lei Salarial: o Governo anunciou que aceita debater essa Lei com as Entidades, mas não neste momento, e passou a discorrer sobre os critérios para a análise dos percentuais gastos no ano passado, com o funcionalismo, enfocando as diferenças de tratamento da mesma questão pela Lei de Responsabilidade Fiscal e pela Lei nº 13.303/2003.</div><div><b>Posição da APROFEM:</b> Nossa reivindicação não se prende simplesmente à discussão da Lei e menos ainda à comparação com a legislação federal. Reivindicamos alterar essa lei para permitir que haja mais recursos destinados às despesas com pessoal e, consequentemente, sejam possíveis os reajustes gerais anuais diferentes dos abomináveis índices de 0,01%. Portanto, entendemos que não foi feita nenhuma proposta para esse item.</div><div> </div><div>II - Revisão Geral Anual: quanto a este item o representante do Governo informou que, com a aplicação de recursos para as propostas feitas nas Mesas Setoriais de Negociação da Saúde, da Educação, dos Especialistas e da Guarda Civil Metropolitana,  não haverá nenhuma possibilidade de conceder a revisão geral anual diferente do que vem sendo praticado há mais de uma década, a não ser que as Entidades ali presentes aceitassem reduzir as propostas que o Governo já fez.</div><div><b>Posição da APROFEM: </b>Uma proposta como esta chega a ser afrontosa ao conjunto dos servidores municipais e constitui-se numa tentativa de divisão da categoria.</div><div><br></div><div>Diante dessas colocações do Governo, as Entidades solicitaram um intervalo na reunião, para definir um posicionamento de consenso entre elas e definiu-se, então, pela comunicação ao Governo, nos seguintes termos:</div><div><br></div><div><b>A Bancada Sindical entendeu que o Governo não se propôs a atender a nenhum dos itens de nossa Pauta Unificada para a data base de maio de 2014, até o presente momento. Por esta razão, solicitam ao Governo que convoque nova Reunião, quando houver propostas para as nossas reivindicações.</b></div>
		</div>
	</div>
</div>
@endsection