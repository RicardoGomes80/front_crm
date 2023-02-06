@extends('frontend.layouts.app_frontend')
@section('title', __('Cursos'))
@section('meta_description', '')
@section('meta_keywords','')
@push('after-styles')
<link rel="stylesheet" href="{{asset('./vendors/select2/dist/css/select2.min.css')}}">
@endpush
@section('content')
<div class="p-0 m-0 imagem_principal_full cursor-pointer">
	@if (empty(request('categoria')))
	<img src="{{asset('storage/uploads/encontre-curso.png')}}" class="img-fluid" width="100%" height="850px">
	@else
	<img src="{{asset('storage/uploads/')}}/{{ $categorias[request('categoria')]->image_src ?? 'encontre-curso.png' }}" class="img-fluid" width="100%" height="850px">
	@endif
</div>
<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-11 p-0 m-0 mb-2 mt-2 mb-4">
			<div class="row p-0 m-0">
				<div class="col-12 p-0 m-0 mb-5 w-100 text-center">					
				</div>
				<div class="col-12 col-md-3">
					@include('layouts/sidebar_cursos_esquerda', compact('categorias', 'cursos','categoriasConveniados'))
				</div>
				<div class="col-12 col-md-9 pl-md-5 pr-md-5">
					<div class="row">
						<div class="col-12 mt-5 mt-md-0">
							<form class="" action="" autocomplete="off">
								<div class="input-group mb-5">
									<input type="text" class="form-control text-muted h4 bombadinho" placeholder="{{__('Digite aqui o curso que você está procurando')}}" name="search" value="{{request('search','')}}" autocomplete="off">
									<div class="input-group-append">
										<button class="btn btn-info btn-hover-shine bombadinho">
											<span>{{__('Buscar') }}</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5 p-3">
							<span class="h3">
								<strong>
									{{__('Serviços Disponíveis')}}
								</strong>
							</span>
						</div>
						<div class="col-5 mb-5 col-md-5 bg-write-2 text-center p-0 mr-5  ml-3 btn btn-impr-cert box_cursos_servicos">
							<img src="{{asset('images/cms/impr_cert.png')}}" class="img-fluid rounded-3" width="100%">
						</div>
						<div class="col-5 mb-5 col-md-5 bg-write-2 text-center p-0 mr-0 ml-5 btn btn-vald-cert box_cursos_servicos">
							<img src="{{asset('images/cms/vald_cert.png')}}" class="img-fluid rounded-3" width="100%">
						</div>
					</div>
					<div class="row">
						@if($cursos->isNotEmpty())
						<div class="col-12 mb-5 p-3">
							<span class="h5">
								<strong>
									{{__('Amplie suas oportunidades')}}
								</strong>
							</span>
						</div>
						@endif
						<div @class(['row  w-100 mb-10 mr-0 ml-2', 'mx-auto' => $cursos->isEmpty()])>
							@forelse($cursos as $keys => $item)
							<div class="col-12 mb-5 col-md-3 bg-write-2 mr-4 ml-3 rounded-1 text-center p-0 box_cursos_imagem_divulgacao">
								<div class="mb-1">
									@if (empty($item->image_divulgacao))
									<img src="{{asset('images/sem-imagem.jpg')}}" class=" rounded-top cursos_imagem_divulgacao">
									@else
									<img src="{{Helper::viewS3($item->image_divulgacao)}}" class=" rounded-top cursos_imagem_divulgacao" >
									@endif
									<div class="circulo-cursos" style="background:{{$item->categoria_cor}}"></div>
								</div>
								<div class="mb-4 mt-3">
									<p class="text-dark font-10">
										<strong>{{$item->nome}}</strong>
									</p>
									<p>
										@if(Route::currentRouteName() == 'frontend.cursos.buscar.home')
										<a href="{{route('frontend.cursos.buscar.home',['categoria' => $item->categoria_id])}}" class="text-muted font-9">
											{{$item->nome_categoria}}
										</a>
										@else
										<a href="{{route('open_route.cursos.buscar',['categoria' => $item->categoria_id])}}" class="text-muted font-9">
											{{$item->nome_categoria}}
										</a>
										@endif
									</p>
									@if(Route::currentRouteName() == 'frontend.cursos.buscar.home')
									<a class="btn btn-pill btn-orange font-10" href="{{route('frontend.cursos.show.detalhes.home', [$item->id])}}">
										{{__('Saiba mais')}} <i class="fa fa-check"></i>
									</a>
									@else
									<a class="btn btn-pill btn-orange font-10" href="{{route('open_route.cursos.show.detalhes', [$item->id])}}">
										{{__('Saiba mais')}} <i class="fa fa-check"></i>
									</a>
									@endif
									<a class="d-none" href="#">
										<span class="rounded-circle bg-light pl-2 pr-2 pt-2 pb-2">
											<i class="fas pr-1 pl-1">&#xf27a</i>
										</span>
									</a> 
								</div>
							</div>
							@empty
							<div class="col-12 mb-5 mt-5 p-3 text-center">
								<span class="h5">
									<strong>
										@if (!empty(request('categoria')))
										{{ __('SEM RESULTADOS PARA ESSA CATEGORIA DE CURSO') }}
										@else
										{{ !empty(request('search')) ? __('SEM RESULTADOS PARA ESSA PESQUISA') : __('SEM RESULTADOS') }}
										@endif
									</strong>
								</span>
							</div>
							@endforelse
						</div>
						<div class="col-12 mb-5 p-3">
							<div class="float-right">{{$cursos}}</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5 p-3">
							<span class="h5">
								<strong>
									{{__('Cursos de Parceiros')}}
								</strong>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-5 p-3">
							@include('frontend.produtos_parceiros', compact('cursosConveniados'))
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('after-scripts')
<script type="text/javascript">
	$('.btn-vald-cert').on('click', function(){
		rota = "{{route('frontend.user.cursos.meus_certificados')}}"
		window.location.href = rota;
	});
	$('.btn-impr-cert').on('click', function(){
		rota = "{{route('frontend.user.cursos.meus_certificados')}}"
		window.location.href = rota;
	});	
</script>
@endpush