@extends('frontend.layouts.app_frontend')
@section('title', trans('labels.frontend.home.title').' | '.app_name())
@section('meta_description', '')
@section('meta_keywords','')
@php
$url= 'sou_filiado';
@endphp
@section('content')
<div class="widget-content-right p-0 m-0 pb-4">
	<img src="storage/{{ $dadosDaUrl->CMS_CAT_BANNER }}" alt="" data-description="">
</div>
<div class="container-fluid">
	<div class="row mr-auto ml-auto d-flex mt-5 mb-5">
		<div class="col-1"></div>
		@if(!$linksDaCategoria->isEmpty())
		<div class="col-3 p-0 m-0 pr-5 mr-2">
			<div class="card-hover-shadow-2x mb-3 card">
				@foreach($linksDaCategoria as $links)
				<div class="card-header">
					<a href="{{env('APP_URL')}}/{{ $links->url }}" @if($links->externo == 0) target="_self" @else target="_blank" @endif>
						<div class="row">
							<div class="col-2">
								<i class="{{$links->icone}} btn-icon-wrapper"></i>
							</div>
							<div class="col-9">
								<b>{{ $links->titulo }}</b>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
		@endif
		<div class="col-sm p-0 m-0">
			<div class="row p-0 m-0">
				<div class="col-12">
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $dadosDaUrl->sessao }}</b></h5>
					<div class="progress-bar-xs progress h2px">
						<div class="progress-bar progress-bar-xs bg-{{ $dadosDaUrl->CMS_ID_COR }}" style="width: 5rem;"></div>
					</div>
				</div>
			</div>
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">	
				<div class="col-11">
					<table class="text-nowrap table-lg mb-0 table table-hover" width="100%">
						<tbody>
							@foreach($result as $conteudo)
							<tr>
								<td class="text-left" >
									<div class="col-12 mb-xs-2 pt-2 pb-2">
										<div class="border-left border-3 pl-1 border-{{$dadosDaUrl->CMS_ID_COR}} btn-hover" data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											<b>{{ $conteudo->titulo }}</b>
										</div>
										<div class="font-9 pl-2 text-secondary btn-hover pt-2 pb-2" data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											Por: {{ $conteudo->publicado_por }}  -  <span> {{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</span>											
										</div>
										<div class="col-12 pt-2 pb-2">
											<a href="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}" target="_blank" type="button" class=" text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<div class="container justify-content-center pt-4 mt-4">
						<div class="row">
							<div class="col-8 text-center">
								{{$result}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.btn-hover{
		cursor: pointer;
	}
</style>
@endsection
@section('more-scripts')
<script type="text/javascript">	
	$(document).on('click', '.btn-hover', function () {
		rota= $(this).attr('data-url_amigavel').trim();
		window.open(rota, "_blank");
	});	
</script>
@endsection