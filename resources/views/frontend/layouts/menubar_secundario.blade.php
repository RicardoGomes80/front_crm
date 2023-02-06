<div class="collapse navbar-collapse" id="menu_2">
	<div class="container">
		<ul class="navbar-nav nav-item-header mr-auto ml-auto">
			<li class="nav-item pr-0 mr-0 d-none d-sm-none d-md-block d-xl-block">
				<a class="navbar-brand" href="{{ config('app.url') }}/">
					<img src="{{ asset('./images/cms/logo-black-text.png') }}" alt="{{__('Aprofem')}}" title="{{__('Aprofem')}}" class="img-logo-aprofem">
				</a>
			</li>
			@include('frontend.layouts.partials.menu2')
				 <li class="nav-item nav-noimage font-12 mt-0 mb-sm-3 mb-md-3 d-none d-sm-none d-md-block d-xl-block">
				@include('frontend.layouts.header_filiado_deslogado')
				</li>
		</ul>
	</div>
</div>
@push('after-scripts')
<script type="text/javascript">
	$(document).ready(function () {
		var showIcon =  $('.nav-item-header').find('li.active');
		showIcon.find('.set-icon').removeClass('d-none');
		$('.dropdown-menu-hover').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
		}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
		});
	});
</script>
@endpush