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
<title>Câmara fará Audiência Pública para debater subsídio</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Câmara fará Audiência Pública para debater subsídio</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Câmara fará Audiência Pública para debater subsídio</h4>
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
			<div>Acontecerá no dia 05/11/2014, às 13h, no Plenário do 1º andar, a Audiência Pública sobre a Proposta de Emenda à Lei Orgânica do Município, n° 03/2014, que altera a redação dos artigos 92 e 97, na seguinte conformidade:</div><div><b style="line-height: 1.2;"><br></b></div><div style="text-align: center;"><b style="line-height: 1.2;">Artigo 92</b><br></div><div style="text-align: left;"><b><br></b></div><div><b>Redação atual:</b> "A remuneração dos servidores públicos será estabelecida com vistas a garantir o atendimento de suas necessidades básicas de moradia, alimentação, educação, saúde, lazer, vestuário, higiene, transporte e previdência social e obedecerá aos seguintes critérios:.."</div><div><br></div><div><b>Redação proposta:</b> "A remuneração dos servidores públicos, admitida a fixação na forma de subsídio nos termos da Constituição Federal, será estabelecida com vistas a garantir o atendimento de suas necessidades básicas de moradia, alimentação, educação, saúde, lazer, vestuário, higiene, transporte e previdência social e obedecerá aos seguintes critérios:.."</div><div><br></div><div style="text-align: left;"><b>O que muda?</b></div><div>Simplesmente acrescenta a possibilidade de remunerar os servidores municipais através de subsídio.</div><div><br></div><div style="text-align: left;"><b>Isso é bom ou ruim?</b></div><div>Da forma como vêm sendo propostas, as alterações podem ser muito danosas aos servidores municipais, por eliminar muitos dos direitos e benefícios, compatíveis com a remuneração por vencimentos, mas incompatíveis com os subsídios.</div><div><br></div><div><div style="text-align: center;"><b>Artigo 97</b></div><div><b><br></b></div><div><b>Redação atual</b>: "Ao servidor público municipal é assegurado o percebimento do adicional por tempo de serviço público, concedido por quinquênio, bem como a sexta parte dos vencimentos integrais concedida aos vinte anos de efetivo exercício no serviço público, que se incorporarão aos vencimentos para todos os efeitos, não sendo computados nem acumulados para fins de concessão de acréscimos ulteriores sob o mesmo título ou idêntico fundamento".</div><div><br></div><div><b>Redação proposta:</b> Ao servidor público municipal, exceto aqueles remunerados por subsídio, é assegurado o percebimento dos seguintes adicionais por tempo de serviço público, que se incorporarão aos vencimentos para todos os efeitos, não sendo computados nem acumulados para fins de concessão de acréscimos ulteriores sob o mesmo título ou idêntico fundamento:</div></div><div><br></div><div><div><ul><li><span style="line-height: 1.2;">quinquênio concedido a cada período de 5 (cinco) anos de serviço público municipal, calculado na forma da lei;</span><br></li><li><span style="line-height: 1.2;">sexta-parte: concedida aos 20 (vinte) anos de efetivo exercício no serviço público     municipal e correspondente a 1/6 (um sexto) sobre os vencimentos integrais, salvo exceções previstas em lei.</span></li></ul><div><div><b>O que muda?</b></div><div><b>1 - </b>Exclui do benefício os que optarem pela remuneração por subsídio, ou que ingressarem na carreira após a vigência da lei;</div><div><b>2 </b>- Elimina a contagem de tempo de serviço público fora do âmbito municipal;</div><div><b>3 -</b> Prevê a possibilidade de, através de uma lei ordinária, alterar critérios de concessão dos quinquênios e da sexta-parte para qualquer carreira.</div><div><br></div><div><b>Isso é bom ou ruim?</b></div><div>Não poderia ser pior. Afronta conquistas já consolidadas pelo funcionalismo, desrespeita a experiência profissional adquirida em outras esferas do serviço público e, ainda, abre a possibilidade de, através de lei ordinária, dificultar a implementação de critérios para a obtenção dos quinquênios e da sexta-parte, afetando a vida de todo o funcionalismo público municipal.</div><div><br></div><div><b>APROFEM</b> convoca a todos para participar da Audiência Pública</div><div>Por estas razões, a <b>APROFEM </b>participará da Audiência Pública, em defesa dos direitos dos servidores municipais, independentemente da carreira em que se encontrem, e espera a participação de seus filiados nesse evento.</div><div><br></div><div><b>COMPAREÇA!</b></div></div></div></div>
		</div>
	</div>
</div>
@endsection