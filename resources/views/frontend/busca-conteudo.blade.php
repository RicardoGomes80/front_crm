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
	<div class="row p-0 m-0">
		<div class="col-1"></div>
		<div class="col-3 p-0 m-0 pr-5 mr-2">
			<h5> <b>Resultados por : " {{$parametro}} "</b></h5>
		</div>
	</div>
	<div class="row mr-auto ml-auto d-flex mt-2 mb-5">
		<div class="col-1"></div>
		<div class="col-3 p-0 m-0 pr-5 mr-2">
			<div class="card-hover-shadow-2x mb-3 card">
				@foreach($categorias as $categoria)
				@if($categoria['counter'] > 0)
				<div class="card-header">
					<a href="{{env('APP_URL')}}/busca-site?parametro={{$parametro}}&categoria={{ $categoria['index'] }}">
						<div class="row p-0 m-0">
							<div class="col-12 p-0 m-0">
								<b>{{ $categoria['CMS_NOME_CATEGORIA'] }} ({{ $categoria['counter'] }})</b> 
							</div>
						</div>
					</a>
				</div>
				@endif
				@endforeach
			</div>
		</div>
		<!--  
			Variaveis disponiveis
			"index" => 4
		    "counter" => 70
		    "CMS_ID_CATEGORIA" => 4
		    "CMS_NOME_CATEGORIA" => "Notícias"
		    "CMS_ID_ICONE" => null
		    "CMS_ID_COR" => "danger"
		-->
		<div class="col-sm p-0 m-0">
			<div class="row p-0 m-0">
				<div class="col-12">
					@if($id_categoria =='')
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $categorias[0]['CMS_NOME_CATEGORIA'] }} ({{ $categorias[0]['counter'] }})</b></h5>
					@else
					<h5> <b>{{ $dadosDaUrl->titulo_categoria }} / {{ $categorias[$id_categoria]['CMS_NOME_CATEGORIA'] }} ({{ $categorias[$id_categoria]['counter'] }})</b></h5>
					@endif
					<div class="progress-bar-xs progress h2px bg-light p-0 m-0 fundo-progress-bar">
						<div class="progress-bar progress-bar-xs bg-{{ $dadosDaUrl->CMS_ID_COR }} indicador-progress-bar"></div>						
					</div>
				</div>
			</div>
			<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">	
				<div class="col-11">
					<table class=" table-lg mb-0 table table-hover" width="100%">
						<tbody>
							@foreach($result as $conteudo)
							<tr>
								<td class="text-left">
									<div class="mb-xs-2 pt-2 pb-2">
										<div class="border-left border-3 pl-1 border-{{$conteudo->CMS_ID_COR}} btn-hover " data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											<b>{!! $conteudo->titulo !!}</b>
										</div>
										@if($id_categoria =='')
										<div class="border-left border-3 pl-1 border-{{$conteudo->CMS_ID_COR}} btn-hover" data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											<b>Categoria: {{ $conteudo->CMS_NOME_CATEGORIA }}</b> 
										</div>
										@endif
										<div class="font-9 pl-2 text-secondary btn-hover pt-2 pb-2 " data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											<span >{!! $conteudo->conteudo !!}</span>
										</div>
										<div class="font-9 pl-2 text-secondary btn-hover pt-2 pb-2" data-url_amigavel="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}">
											Por: {{ $conteudo->publicado_por }}  -  <span> {{Carbon\Carbon::parse($conteudo->data_publicacao)->format('d/m/Y')}}</span>
										</div>
										<!-- 
										<div class="pt-2 pb-2">
											<a href="{{env('APP_URL')}}/{{ $conteudo->url_amigavel }}" target="_blank" type="button" class=" text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div> 
									-->
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="container justify-content-center pt-4 mt-4">
					<div class="row">
						<div class="col-8 text-center">
							{{ $result->withQueryString()->links() }}
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