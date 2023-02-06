@extends('frontend.layouts.app_frontend')
@section('content')
<title>Livros</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Livros</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Livros</h4>
		</div>
		<div class="col-sm">
			<!-- TEXTO_PUPLICADO_POR -->
		</div>
		<div class="col-sm">
			<!-- TEXTO_DATA_PUPLICACAO -->
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			Ana Paula Hornos, palestrante, empresária, autora, mãe, especialista em finanças, estratégia e gestão, sugere, de maneira lúcida, prática e realizável, material de auxílio ao educador e ainda uma história a ser trabalhada com crianças e adolescentes. Confira!
		</div>
	</div>
</div>
<div class="container pb-5 mb-5">
	<div class="row mt-2 pt-2 pb-2">
		<div class="col-sm">
			<table class="table table-striped"><thead><tr><th>Nome do Arquivo</th><th class="text-center">Download</th></tr></thead><tbody><tr><td><a href="{{asset('storage/014000004000001_0.pdf') }}" target="_blank">Livros </a></td><td class="text-center"><a href="{{asset('storage/014000004000001_0.pdf') }}" target="_blank"><i class="pe-7s-file"></i></a></td></tr><tr><td><a href="{{asset('storage//uploads/00000400/014000004000001_0.pdf') }}" target="_blank"></a></td><td class="text-center"><a href="{{asset('storage//uploads/00000400/014000004000001_0.pdf') }}" target="_blank"><i class="pe-7s-file"></i></a></td></tr></tbody></table>
		</div>
	</div>
</div>
@endsection