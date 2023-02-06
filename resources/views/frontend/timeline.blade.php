@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/slick-carousel/slick/slick.css')}}">    
@endpush
@php
$url= 'sou_filiado';
@endphp
@section('content')
<div class="container-fluid">

	<style type="text/css">

		.timeline {
			list-style: none;
			padding: 20px 0 20px;
			position: relative;
		}

		.timeline:before {
			top: 0;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 3px;
			background-color: #eeeeee;
			left: 50%;
			margin-left: -1.5px;
		}

		.timeline > li {
			margin-bottom: 20px;
			position: relative;
		}

		.timeline > li:before,
		.timeline > li:after {
			content: " ";
			display: table;
		}

		.timeline > li:after {
			clear: both;
		}

		.timeline > li:before,
		.timeline > li:after {
			content: " ";
			display: table;
		}

		.timeline > li:after {
			clear: both;
		}

		.timeline > li > .timeline-panel {
			width: 46%;
			float: left;
			border: 1px solid #d4d4d4;
			border-radius: 2px;
			padding: 20px;
			position: relative;
			-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
			box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
		}

		.timeline > li > .timeline-panel:before {
			position: absolute;
			top: 26px;
			right: -15px;
			display: inline-block;
			border-top: 15px solid transparent;
			border-left: 15px solid #ccc;
			border-right: 0 solid #ccc;
			border-bottom: 15px solid transparent;
			content: " ";
		}

		.timeline > li > .timeline-panel:after {
			position: absolute;
			top: 27px;
			right: -14px;
			display: inline-block;
			border-top: 14px solid transparent;
			border-left: 14px solid #fff;
			border-right: 0 solid #fff;
			border-bottom: 14px solid transparent;
			content: " ";
		}

		.timeline > li > .timeline-titulo {
			color: #fff;
			width: 50px;
			height: 50px;
			line-height: 50px;
			font-size: 1.4em;
			position: absolute;
			top: 0;
			left: 48%;
			margin-left: -35px;
			z-index: 100;
		}

		.timeline > li > .timeline-badge {
			color: #fff;
			width: 50px;
			height: 50px;
			line-height: 50px;
			font-size: 1.4em;
			text-align: center;
			position: absolute;
			top: 16px;
			left: 50%;
			margin-left: -25px;
			background-color: #999999;
			z-index: 100;
			border-top-right-radius: 50%;
			border-top-left-radius: 50%;
			border-bottom-right-radius: 50%;
			border-bottom-left-radius: 50%;
		}

		.timeline > li.timeline-inverted > .timeline-panel {
			float: right;
		}

		.timeline > li.timeline-inverted > .timeline-panel:before {
			border-left-width: 0;
			border-right-width: 15px;
			left: -15px;
			right: auto;
		}

		.timeline > li.timeline-inverted > .timeline-panel:after {
			border-left-width: 0;
			border-right-width: 14px;
			left: -14px;
			right: auto;
		}

		.timeline-badge.primary {
			background-color: #2e6da4 !important;
		}

		.timeline-badge.success {
			background-color: #3f903f !important;
		}

		.timeline-badge.warning {
			background-color: #f0ad4e !important;
		}

		.timeline-badge.danger {
			background-color: #d9534f !important;
		}

		.timeline-badge.info {
			background-color: #5bc0de !important;
		}

		.timeline-title {
			margin-top: 0;
			color: inherit;
		}

		.timeline-body > p,
		.timeline-body > ul {
			margin-bottom: 0;
		}

		.timeline-body > p + p {
			margin-top: 5px;
		}

		/*@media (max-width: 767px) {
			ul.timeline:before {
				left: 40px;
			}

			ul.timeline > li > .timeline-panel {
				width: calc(100% - 90px);
				width: -moz-calc(100% - 90px);
				width: -webkit-calc(100% - 90px);
			}

			ul.timeline > li > .timeline-badge {
				left: 15px;
				margin-left: 0;
				top: 16px;
			}

			ul.timeline > li > .timeline-panel {
				float: right;
			}

			ul.timeline > li > .timeline-panel:before {
				border-left-width: 0;
				border-right-width: 15px;
				left: -15px;
				right: auto;
			}

			ul.timeline > li > .timeline-panel:after {
				border-left-width: 0;
				border-right-width: 14px;
				left: -14px;
				right: auto;
			}
		}*/

	</style>










































	<div class="row mr-auto ml-auto d-flex justify-content-center">
		<div class="col-navbar-menu-2 mt-5 mb-5">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
				<div class="col-12 ">
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $dadosDaUrl->sessao }}</b></h5>
					<div class="progress-bar-xs progress h2px">
						<div class="progress-bar progress-bar-xs bg-warning" style="width: 5rem;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-navbar-menu-2 mt-5 mb-10">
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
				<div class="col-12">
					<ul class="timeline">
						@foreach($result as $conteudo)
						<li>
							<div class="timeline-titulo">
								<h4 class="timeline-title badge badge-pill badge-success"><b>Fevereiro 2030</b></h4>
							</div>
							<br><br>
							<br><br>
							<br><br>
						</li>
						<li>
							<div class="timeline-badge success">31</div>
							<div class="timeline-panel btn-outline-success fs-6" data-id="{{$conteudo->id}}" data-url_amigavel="{{$conteudo->url_amigavel}}">
								<div class="timeline-heading ">
									<h4 class="timeline-title">{{$conteudo->titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</small></p>
								</div>
								<div class="timeline-body">
									<p>{{$conteudo->titulo}}</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge success">31</div>
							<div class="timeline-panel btn-outline-success fs-6" data-id="{{$conteudo->id}}" data-url_amigavel="{{$conteudo->url_amigavel}}">
								<div class="timeline-heading ">
									<h4 class="timeline-title">{{$conteudo->titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</small></p>
								</div>
								<div class="timeline-body">
									<p>{{$conteudo->titulo}}</p>
								</div>
							</div>
						</li>
						<li>
							<div class="timeline-badge success">31</div>
							<div class="timeline-panel btn-outline-success fs-6" data-id="{{$conteudo->id}}" data-url_amigavel="{{$conteudo->url_amigavel}}">
								<div class="timeline-heading ">
									<h4 class="timeline-title">{{$conteudo->titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</small></p>
								</div>
								<div class="timeline-body">
									<p>{{$conteudo->titulo}}</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-badge warning">32</div>
							<div class="timeline-panel btn-outline-warning fs-6" data-id="{{$conteudo->id}}" data-url_amigavel="{{$conteudo->url_amigavel}}">
								<div class="timeline-heading ">
									<h4 class="timeline-title">{{$conteudo->titulo}}</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</small></p>
								</div>
								<div class="timeline-body">
									<p>{{$conteudo->titulo}}</p>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection