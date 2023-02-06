<div class="container-fluid p-0 m-0">
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav nav-item-header mr-auto ml-auto d-flex justify-content-center">
			@include('frontend.layouts.partials.menu2')
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