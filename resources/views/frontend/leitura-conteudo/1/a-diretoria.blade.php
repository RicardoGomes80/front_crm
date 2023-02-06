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
<title>A Diretoria</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">A Diretoria</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/uploads/00000002/JT5J3V3t7yIwexZvF1j0qB9tSeTrnFWwAg6ctcFP.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000002/JT5J3V3t7yIwexZvF1j0qB9tSeTrnFWwAg6ctcFP.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>A Diretoria</h4>
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
			<p><b>MANDATO: </b>Triênio 2021/2024</p><div><br></div><p class="lead">I - DIRETORIA</p><p><strong>Diretoria Executiva</strong></p><ul><li><strong>Presidente: </strong>Ismael Nery Palhares Junior (Supervisor Escolar Aposentado e Prof. de Ens. Fund. II e Médio Aposentado)</li><li><strong>Vice-Presidente: </strong>Margarida Prado Genofre (Supervisor Escolar Aposentada)</li><li><strong>Secretário Geral</strong>: Andréa Carla Aydar de Melo Generoso (Prof. de Ed. Inf. e Ens. Fund. I) </li><li><strong>1º Secretário:</strong> Antonio Braga (Supervisor Escolar Aposentado e Prof. de Ens. Fund. II e Médio Aposentado) <em>(In memorian)</em></li><li><strong>2º Secretário: </strong>Elaine Barrionuevo Belmonte Kim (Prof. de Ed. Inf. e Ens. Fund. I Aposentada)</li><li><strong>Tesoureiro Geral</strong>: Teresa Cristina Seripierri (Prof. de Ed. Infantil)</li><li><strong>1º Tesoureiro: </strong>Leila Martinez Souto (Diretor de Escola Aposentada)</li><li><strong>2º Tesoureiro:</strong> Regina Clementina Paglione (Coordenador Pedagógico Aposentada)</li></ul><p><strong><br></strong></p><p><strong>Departamentos</strong><br></p><p><strong>Departamento de Gestores/Especialistas:</strong><br></p><ul><li><strong>Diretor Geral: </strong>José Flavio Pinto (Diretor de Escola Aposentado)</li><li><strong>1º Diretor: </strong>Rosana de Oliveira Nascimento (Diretor de Escola)</li><li><strong>2º Diretor:</strong> Edivani Giovanetti (Prof. de Ens. Fund. II e Médio Aposentada e Diretor de Escola)</li><li><strong>3º Diretor:</strong> Arnaldo Ribeiro dos Santos (Supervisor Escolar Aposentado e Prof. de Ens. Fund. II e Médio) </li><li><strong>4º Diretor:</strong> Elaine Hezne Bianco (Coordenador Pedagógico Aposentada)<br> </li></ul><p><strong>Departamento de Docentes:</strong><br></p><ul><li><strong>Diretor Geral: </strong>Débora Dimitrov Pedromo Domiciano (Prof. de Ed. Inf. e Ens. Fund. I) </li><li><strong>1º Diretor: </strong>Ione Oliveira de Carvalho Maciel (Prof. de Ed. Infantil e Prof. de Ed. Inf. e Ens. Fund. I) </li><li><strong>2º Diretor:</strong> João Luiz Martins (Prof. de Ens. Fund. II e Médio) </li><li><strong>3º Diretor:</strong> Carla Marina Inoue (Prof. de Ed. Inf. e Ens. Fund. I) </li><li><strong>4º Diretor:</strong> Berisvaldo Gonçalves Ferreira (Prof. de Ens. Fund. II e Médio Aposentado)<br> </li></ul><p><strong>Departamento de Administrativos, Técnicos e Operacionais:</strong><br></p><ul><li><strong>Diretor Geral: </strong>Paulo Soares da Rocha (Auxiliar Técnico de Educação) </li><li><strong>1º Diretor: </strong>Rogério Alves Dias (Auxiliar Técnico de Educação) </li><li><strong>2º Diretor: </strong>Monika Gizela Pillat Reis (Agente Escolar) </li><li><strong>3º Diretor: </strong>Álan de Moraes Torelli (Assistente de Gestão de Políticas Públicas)<br><strong></strong></li></ul><p><strong><br></strong></p><p class="lead">II - CONSELHO FISCAL</p><p><strong>Membros Efetivos:</strong><br></p><ul><li>Benilde Silva (Diretor de Escola Aposentada) </li><li>Célia Prado Genofre Rodrigues dos Santos (Coordenador Pedagógico Aposentada)</li><li>Josefina de Assunção Carmassi Miguel (Assistente de Diretor Aposentada) <br> </li></ul><p><strong>Membros Suplentes:</strong><br></p><ul><li>Hércules Rodrigues (Auxiliar Técnico de Educação)</li><li>Regiane Borges da Silva (Prof. de Ed. Infantil Aposentada) </li><li>Solange Aparecida Orvalho Pereira (Prof. de Ens. Fund. II e Médio Aposentada)</li></ul>
		</div>
	</div>
</div>
@endsection