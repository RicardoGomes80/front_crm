@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')

@php
$url= 'sou_filiado';
@endphp
@section('content')
<div class="container-fluid">
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
				<div class="col-4">
					<div class="table-responsive border rounded">
						<table class="text-nowrap table-lg mb-0 table table-hover">
							<tbody>
								<tr>
									<td class="text-center" style="width: 78px;">
										<i class="fa fa-calendar-alt opacity-4 mr-2"></i>
									</td>
									<td>
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">

												<div class="widget-content-left">
													<div class="widget-heading">John Smith</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="text-center" style="width: 78px;">
										<i class="fa fa-calendar-alt opacity-4 mr-2"></i>
									</td>                                                           
									<td>
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">

												<div class="widget-content-left">
													<div class="widget-heading">John Smith</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="text-center" style="width: 78px;">
										<i class="fa fa-calendar-alt opacity-4 mr-2"></i>
									</td>                                                           
									<td>
										<div class="widget-content p-0">
											<div class="widget-content-wrapper">

												<div class="widget-content-left">
													<div class="widget-heading">John Smith</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-8 border rounded">
					@foreach($result as $conteudo)
					<div class="ml-3 mt-2 mB-2 col-11">
						<div class="col-12 mb-xs-2">
							<div class="  border-left border-3 pl-1 border-success">
								<b>{{ $conteudo->titulo }}</b>
							</div>
							<div class="font-9 pl-2 text-secondary">
								Por: {{ $conteudo->publicado_por }}
							</div>
							<div class="font-9 pl-2 text-muted pb-4">
								<span>{{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</span>
								<a href="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
									{{__('Ver Mais')}}
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				{{$result}}
			</div>
		</div>
	</div>
</div>
@endsection