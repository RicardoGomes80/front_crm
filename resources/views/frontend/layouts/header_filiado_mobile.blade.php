@if($logged_in_user->hasrole('filiados'))
<div class="container mt-0 pt-0" style="z-index: 999;background: transparent;">
	<div class="d-flex flex-row-reverse collapse-menu-filiado-logado-trigger">
		<div class="mr-0 p-2">
			<div class="col-2 pl-0 pr-0 ">
				<img width="64" height="64" class="rounded-circle imagemUserProfile" src="{!! auth()->user()->getImageCliente(auth()->user()->id) !!}" alt="">
			</div>
		</div>
		<div class="p-2">
			<div class="col-10 pl-0 pt-3">
				<div class="widget-content-left  ml-3 header-user-info text-left">
					<div class="widget-heading"><span class="pl-0 font-14"><b>{{ auth()->user()->name  ?? ''}}</b></span></div>
					<div class="widget-heading"><span class="pl-0 font-12">{{ auth()->user()->email ?? ''}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pt-2"></div>
	<div class="collapse" id="collapseMenuFiliadoLogado">
		<div class="d-flex flex-row-reverse">
			<div class="main-card mb-3 p-0 card">
				<div class="grid-menu ">
					<div class="no-gutters row " style="width:300px">
						<div class="col-sm-12 col-xl-12">
							<div class="btn-icon-vertical btn-square btn-transition btn btn-outline-warning">
								<a class="btn-transition btn btn-outline-warning" href="{{route('painel_cliente.meusDados')}}">
									<table>
										<tr>
											<td>
												<div class="col-1 p-0 m-0 mt-0 pr-3">
													<img width="36" height="36" src="{{asset('./images/cms/acessar_painel.png')}}" /> 
												</div>
											</td>
											<td>
												<div class="w-100">
													<b><span class="pl-0 font-18">{{ __('Acessar Painel')}}</span></b>
												</div>
											</td>
										</tr>
									</table>
								</a>
							</div>
							<div class="divider"></div>
							<div class="btn-icon-vertical btn-square btn-transition btn btn-outline-warning">
								<a class="btn-transition btn btn-outline-warning" href="{{route('frontend.auth.logout')}}">
									<table>
										<tr>
											<td>
												<div class="col-1 p-0 m-0 mt-0 pr-3">
													<img width="36" height="36" src="{{asset('./images/cms/acessar_painel.png')}}" /> 
												</div>
											</td>
											<td>
												<div class="w-100">
													<b><span class="pl-0 font-18">{{ __('Fazer Logout')}}</span></b>
												</div>
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
<div class="container mt-0 pt-0" style="z-index: 1099;background: transparent;">
	<div class="d-flex flex-row-reverse collapse-menu-filiado-logado-trigger">
		<div class="mr-0 p-2">
			<div class="col-2 pl-0 pr-0 ">
				<img width="64" height="64" class="rounded-circle imagemUserProfile" src="{!! auth()->user()->getImageUser(auth()->user()->id) !!}" alt="">
			</div>
		</div>
		<div class="p-2">
			<div class="col-10 pl-0 pt-3">
				<div class="widget-content-left  ml-3 header-user-info text-left">
					<div class="widget-heading"><span class="pl-0 font-14"><b>{{ auth()->user()->name  ?? ''}}</b></span></div>
					<div class="widget-heading"><span class="pl-0 font-12">{{ auth()->user()->email ?? ''}}</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pt-2"></div>
	<div class="collapse" id="collapseMenuFiliadoLogado">
		<div class="d-flex flex-row-reverse">
			<div class="main-card mb-3 p-0 card">
				<div class="grid-menu ">
					<div class="no-gutters row " style="width:300px">
						<div class="col-sm-12 col-xl-12">
							<div class="btn-icon-vertical btn-square btn-transition btn btn-outline-warning">
								<a class="btn-transition btn btn-outline-warning" href="{{route('dashboard')}}">
									<table>
										<tr>
											<td>
												<div class="col-1 p-0 m-0 mt-0 pr-3">
													<img width="36" height="36" src="{{asset('./images/cms/acessar_painel.png')}}" /> 
												</div>
											</td>
											<td>
												<div class="w-100">
													<b><span class="pl-0 font-18">{{ __('Acessar Painel')}}</span></b>
												</div>
											</td>
										</tr>
									</table>
								</a>
							</div>
							<div class="btn-icon-vertical btn-square btn-transition btn btn-outline-warning">
								<a class="btn-transition btn btn-outline-warning" href="{{route('frontend.auth.logout')}}">
									<table>
										<tr>
											<td>
												<div class="col-1 p-0 m-0 mt-0 pr-3">
													<img width="36" height="36" src="{{asset('./images/cms/acessar_painel.png')}}" /> 
												</div>
											</td>
											<td>
												<div class="w-100">
													<b><span class="pl-0 font-18">{{ __('Fazer Logout')}}</span></b>
												</div>
											</td>
										</tr>
									</table>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<script type="text/javascript">
	$(document).on("click", ".collapse-menu-filiado-logado-trigger", function () {
		$('#collapseMenuFiliadoLogado').collapse('toggle')
	})
</script>