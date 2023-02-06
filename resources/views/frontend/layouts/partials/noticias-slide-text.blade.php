<div class="container-fluid">
	<div class="col-11">
		<div class="row mr-auto ml-auto d-flex justify-content-center">
			<div class="col-navbar-menu-2 mt-5 mb-5 ">
				<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center">
					<div class="col-11">
						<h5> <b>{{__('Notícias') }}</b></h5>
						<div class="progress-bar-xs progress h2px">
							<div class="progress-bar progress-bar-xs " style="width: 5rem;"></div>
						</div>
					</div>
					<div class="col-11">
						<div class="slick-slider-noticia-text m-0 p-0">
							@for ($i=0; $i<9;$i++)
							<div class="ml-3 col-sm border rounded mt-5">
								<div class="mt-3 mb-2">
									<div class="col-12 mb-xs-2">
										<div  class="border-left border-3 pl-1 border-success">
											{{__('Programa de transporte escolar')}} 
										</div>
										<div class="font-9 pl-2 text-secondary">
											Auxiliar técnico educação
										</div>
										<div class="font-9 pl-2 text-muted pb-5">
											<span>{{ date('d/m/y') }}</span>
											<a href="#" type="button" class="pull-right text-muted btn btn-pill btn-sm btn-light">
												{{__('Ver Mais')}}
											</a>
										</div>
									</div>
								</div>
							</div>
							@endfor
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>