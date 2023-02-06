@if($logged_in_user->hasrole('filiados'))
<div class="pl-2">
	<div class="widget-content p-0">
		<div class="widget-content-wrapper">
			<div class="widget-content-left text-left">
				<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
					<img width="42" height="42" class="rounded-circle imagemUserProfile" src="{!! auth()->user()->getImageCliente(auth()->user()->id) !!}" alt="">
					<div class="widget-content-left  ml-3 header-user-info text-left">
						<div class="widget-heading">{{ auth()->user()->name  ?? ''}}</div>
						<div class="widget-heading">{{ auth()->user()->email ?? ''}}</div>
					</div>
					<i class="fa fa-angle-down ml-2 opacity-8"></i>
				</a>
				<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu bordas_rounded">
					<div class="scroll-area-xs ml-1 mr-1 ">
						<a class="dropdown-item nav-link" href="{{route('painel_cliente.meusDados')}}">
							<div class="col-5 pt-3 pb-3 pl-3 mt-2 ml-2">
								<img class="mb-2" width="18" height="18" src="{{asset('./images/cms/acessar_painel.png')}}" /> <b><span class="pl-2">{{ __('Acessar Painel')}}</span></b>
							</div>
						</a>
						<a class="dropdown-item nav-link" href="{{ route('frontend.auth.logout') }}">
							<div class="col-5 pt-3 pb-3 pl-3 mt-2 ml-2">
								<img class="mb-2" width="18" height="18" src="{{asset('./images/cms/logout.png')}}" /> <b><span class="pl-2">{{__('Fazer Logout')}}</span></b>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
<div class="pl-2">
	<div class="widget-content p-0">
		<div class="widget-content-wrapper">
			<div class="widget-content-left text-left">
				<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
					<img width="42" height="42" class="rounded-circle imagemUserProfile" src="{!! auth()->user()->getImageUser(auth()->user()->id) !!}" alt="">
					<div class="widget-content-left  ml-3 header-user-info text-left">
						<div class="widget-heading">{{ auth()->user()->name  ?? ''}}</div>
						<div class="widget-heading">{{ auth()->user()->email ?? ''}}</div>
					</div>
					<i class="fa fa-angle-down ml-2 opacity-8"></i>
				</a>
				<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu bordas_rounded">
					<div class="scroll-area-xs ml-1 mr-1">
						<a class="dropdown-item nav-link" href="{{route('dashboard')}}">
							<div class="col-5 pt-3 pb-3 pl-3 mt-2 ml-2">
								<img class="mb-2" width="18" height="18" src="{{asset('./images/cms/acessar_painel.png')}}" /> <b><span class="pl-2">{{ __('Acessar Painel')}}</span></b>
							</div>
						</a>
						<a class="dropdown-item nav-link" href="{{ route('frontend.auth.logout') }}">
							<div class="col-5 pt-3 pb-3 pl-3 mt-2 ml-2">
								<img class="mb-2" width="18" height="18" src="{{asset('./images/cms/logout.png')}}" /> <b><span class="pl-2">{{__('Fazer Logout')}}</span></b>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endif