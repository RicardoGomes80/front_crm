<div class="row">
	<div class="row  w-100 mb-10 mr-0 ml-2">
		@foreach($cursosConveniados as $cursosConveniado)
		<div class="col-12 mb-5 col-md-3 bg-write-2 mr-4 ml-3 rounded-1 text-center p-0 box_cursos_imagem_divulgacao">
			<div class="mb-1">
				<img src="{{asset('images/sem-imagem.jpg')}}" class=" rounded-top cursos_imagem_divulgacao">
				<div class="circulo-cursos" style="background:#105ea2"></div>
			</div>	
			<div class="mb-4 mt-3">
				<p class="text-dark font-10">
					<strong>{{$cursosConveniado->titulo}}</strong>
				</p>

				<p>
					@if(Route::currentRouteName() == 'frontend.cursos.buscar.home')
					<a href="{{route('frontend.cursos.buscar.home',['categoria' => 0,'categoria-convenios' => $cursosConveniado->grupo_id])}}" class="text-muted font-9">
						{{$cursosConveniado->grupo}}
					</a>
					@else
					<a href="{{route('open_route.cursos.buscar',['categoria' => 0,'categoria-convenios' => $cursosConveniado->grupo_id])}}" class="text-muted font-9">
						{{$cursosConveniado->grupo}}
					</a>
					@endif
				</p>
				@if(Route::currentRouteName() == 'frontend.cursos.buscar.home')
				<a class="btn btn-pill btn-orange font-10" href="{{route('frontend.cursos-convenios.show.detalhes.home', [$cursosConveniado->id])}}">
					{{__('Saiba mais')}} <i class="fa fa-check"></i>
				</a>
				@else
				<a class="btn btn-pill btn-orange font-10" href="{{route('frontend.cursos-convenios.show.detalhes.home', [$cursosConveniado->id])}}">
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
		@endforeach
	</div>
</div>