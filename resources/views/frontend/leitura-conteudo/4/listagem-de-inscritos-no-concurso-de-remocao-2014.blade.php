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
<title>Listagem de Inscritos no Concurso de Remoção 2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Listagem de Inscritos no Concurso de Remoção 2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Listagem de Inscritos no Concurso de Remoção 2014</h4>
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
			<div>Foram publicadas, no D.O.C. de 08/10/2014, a partir da página 72 até a página 126, as listagens de candidatos inscritos para o Concurso de Remoção de 2014, conforme especificado abaixo:</div><div> </div><div><b>Págs. 72, 125 e 126</b> - Relações de servidores inscritos de ofício.</div><div> </div><div><b>Págs. 73 a 124 - </b><span style="line-height: 1.2;">Comunicado nº 1.572, de 07/10/2014, contendo a relação dos candidatos inscritos no concurso de remoção, na seguinte conformidade:</span></div><div> </div><div><ul><li><span style="line-height: 1.2;"><b>Pág. 73 a 90 -</b> Professor de Ensino Fundamental I</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 90 - </b>Prof. Ens. Fund. II e Médio - Biologia</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 90 a 91 - </b>Prof. Ens. Fund II e Médio - Ciências</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 91 a 93 - </b>Prof. Ens. Fund II e Médio Ed. Artística</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 93 a 94 - </b>Prof. Ens. Fund II e Médio - Ed. Física</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 94 - </b>Prof. Ens. Fund II e Médio - Física e Espanhol</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 94 a 96 - </b>Prof. Ens. Fund II e Médio - Geografia</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 96 a 97 - </b>Prof. Ens. Fund II e Médio - História</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 97 a 99 - </b>Prof. Ens. Fund II e Médio - Inglês</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 99 a 100 - </b>Prof. Ens. Fund II e Médio - Matemática</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 100 a 102 - </b>Prof. Ens. Fund. II e Médio - Português</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 102 - </b>Prof. Ens. Fund II e Médio - Química<br></span></li><li><span style="line-height: 1.2;"><b>Pág. 102 a 105</b> - Agente Escolar</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 105 a 107</b> - Profissionais Readaptados</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 105</b> - Coordenador Pedagógico e Diretor de Escola</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 105 a 106</b> - Prof. Ens. Fund I<br></span></li><li><span style="line-height: 1.2;"><b>Pág. 106</b> - Prof. Ens. Fund II e Médio - Ciências, História, Ed. </span><span style="line-height: 1.2;">Artística, Ed, Física, Geografia, Inglês, Matemática                  </span></li><li><span style="line-height: 1.2;"><b>Pág. 107</b> - Prof. Ens. Fund II e Médio - Português</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 107 a 109</b> - Coordenador Pedagógico</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 109 a 110</b> - Diretor de Escola</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 110</b> - Supervisor Escolar</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 110 a 118</b> - Professor de Educação Infantil</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 118 a 124</b> - Auxiliar Técnico de Educação</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 124</b> - Esp. Inf. Tec. Cult. Desp. - Biblioteca</span><br></li><li><span style="line-height: 1.2;"><b>Pág. 124</b> - Esp. Inf. Tec. Cult. Desp. - Ed. Física</span><br></li></ul><div><div> </div><div><b>OBSERVAÇÃO:</b></div><div>Caberá recurso quanto à omissão na publicação de inscritos, nos dias 09 e 10/10/2014, a ser interposto, pelo interessado, em CONAE 2, Av. Angélica, 2606, sala 31, mediante preenchimento de formulário próprio, fornecido no local.   </div><div>Consulte a publicação!  </div></div><div><br></div></div>
		</div>
	</div>
</div>
@endsection