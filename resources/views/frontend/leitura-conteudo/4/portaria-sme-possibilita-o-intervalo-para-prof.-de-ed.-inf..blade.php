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
<title>Portaria SME possibilita o intervalo para Prof. de Ed. Inf.</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Portaria SME possibilita o intervalo para Prof. de Ed. Inf.</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Portaria SME possibilita o intervalo para Prof. de Ed. Inf.</h4>
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
			<div>Foi publicada, no Diário Oficial da Cidade do dia 13/09/2014, à página 10, a Portaria SME nº 5.372, de 12 de setembro de 2014, que altera a Portaria nº 6.771, de 13/12/13, que dispôs sobre a organização das Unidades de Educação Infantil, de Ensino Fundamental, de Ensino Fundamental e Médio e dos Centros Educacionais Unificados da Rede Municipal de Ensino, para nela acrescentar dois parágrafos, conforme segue:</div><div><br></div><div><b>"§ 3º</b> - Nos CEIs, garantido o atendimento ininterrupto às crianças, deverá ser assegurado o intervalo escalonado de 15(quinze) minutos para os Professores de Educação Infantil - PEIs e Auxiliares de Desenvolvimento Infantil - ADIs em regência de classe/agrupamento, observadas as seguintes regras":<br><ul><li><span style="line-height: 1.2;">Cada Unidade Educacional deverá elaborar plano específico integrado ao seu Projeto Político- Pedagógico de modo a assegurar o estabelecido no caput deste artigo;</span><br></li><li><span style="line-height: 1.2;">Durante o período mencionado, as crianças deverão estar sob a responsabilidade de outro profissional da educação;</span><br></li><li><span style="line-height: 1.2;">Nas Unidades cuja estrutura organizacional comporte 2(dois) ou mais agrupamentos no mesmo espaço, o intervalo poderá ocorrer em sistema de rodízio entre os profissionais envolvidos, desde que assegurado o atendimento pedagógico ininterrupto às crianças.</span><br></li></ul></div><div><b>" <span style="line-height: 14.3999996185303px;">§ </span></b><span style="line-height: 1.2;"><b>4º</b> - Excepcionalmente, esgotados de forma evidente todos os recursos para assegurar o atendimento ininterrupto às crianças, o Diretor de Escola poderá flexibilizar o período de intervalo concedido nos termos do parágrafo anterior."</span></div><div><span style="line-height: 1.2;"><br></span></div><div>Esta alteração de Portaria se deu como forma de cumprimento ao disposto na Cláusula Quinta do Protocolo de Negociação, firmado entre o Governo de um lado e a <b>APROFEM</b> e o SINPEEM de outro, resultado do acordo para o encerramento da greve dos Profissionais de Educação, cuja íntegra pode ser conferida na edição do Jornal <b>APROFEM</b> de Julho/Agosto de 2014, na página 3.</div><div><br></div><div><span style="line-height: 1.2;">Como o prazo ali estipulado para a publicação do documento legal era até o final do mês de agosto, fica claro que houve um atraso no cumprimento do acordo, pelo qual responsabilizamos o governo, visto que a competência legal para a edição de Portarias cabe às autoridades constituídas.</span></div><div><span style="line-height: 1.2;"><br></span></div><div>Ainda que reconheçamos como um avanço a conquista do intervalo de quinze minutos para os Professores de Educação Infantil,  registramos nossa intenção de procurarmos o aperfeiçoamento da legislação para que isto seja reconhecido como um direito desses docentes e não apenas uma concessão expressa em Portaria.</div><div><br></div>
		</div>
	</div>
</div>
@endsection