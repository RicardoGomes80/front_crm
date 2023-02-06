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
<title>Mesa Central - Pauta do dia 30/01/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Mesa Central - Pauta do dia 30/01/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Mesa Central - Pauta do dia 30/01/2014</h4>
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
			<div><ol><li><span style="line-height: 1.2;">Aprovação das Atas nº 03, 04, 05 e 06.</span><br></li><li><span style="line-height: 1.2;">Apresentação de todas as signatárias.</span><br></li><li><span style="line-height: 1.2;">Regimento Interno do SINP.</span><br></li><li><span style="line-height: 1.2;">Avaliação do SINP, nos termos da Cláusula 29ª, Parágrafo Único do Convênio do SINP.</span><br></li></ol></div><div><br></div><div>Antes de entrar na pauta propriamente dita, abriu-se espaço para informes das Entidades, ocasião em que várias questões foram levantadas, em relação a problemas que os servidores vêm enfrentando, tais como:</div><div> </div><div><ul><li><span style="line-height: 1.2;">Convocação de Professores de Educação infantil durante as férias de janeiro;</span><br></li><li><span style="line-height: 1.2;">Envio de substitutivo ao PL 646/2013, com propostas que não eram do conhecimento das  entidades;</span><br></li><li><span style="line-height: 1.2;">Falta de peritos no DESS, ocasionando problemas na concessão de licenças médicas;</span><br></li><li><span style="line-height: 1.2;">Edição de decreto sobre pagamento de precatórios, a despeito do parecer do STF quanto à ilegalidade dos acordos.</span><br></li></ul></div><div><br></div><div>Respondendo às Entidades, o Coordenador da Bancada do Governo, em linhas gerais, solicitou que as Entidades Sindicais enviem, por meio de ofício, à assessoria de Relações do Trabalho de SEMPLA, todas essas questões, para as quais serão oferecidas respostas também oficiais.</div><div><br></div><div><b>1 - Aprovação de atas: </b>a bancada sindical argumentou que a pauta foi apresentada sem antecedência, o que inviabilizaria a discussão do tema.</div><div><br></div><div><b>2 - Apresentação das signatárias: </b>a representante da APROFEM solicitou que as Entidades que assinaram o convênio SINP sejam acrescentadas na publicação que consta no Portal da PMSP e que haja uma orientação para que esses Sindicatos entrem em contato com o Fórum de Entidades, já que a condição para  dele participar é assinar o convênio.</div><div><br></div><div><b>3 - Regimento Interno do SINP:</b> a coordenadora do Fórum lembrou que as Entidades já enviaram sua proposta de redação e que aguarda a posição do governo quanto à finalização da redação.</div><div><br></div><div><b>4 - Avaliação do SINP</b>, nos termos do contido no próprio convênio, deverá ocorrer através da organização de um seminário com essa finalidade específica.</div><div><br></div><div>Depois de alguns encaminhamentos, deliberou-se pela realização de uma Reunião Extraordinária da Mesa Central, marcada para o dia 13/02/2014, às 14h30min, para tratar das questões formais do SINP: atas, regimento e avaliação.</div>
		</div>
	</div>
</div>
@endsection