<div class="container-fluid p-0 m-0">
	<div class="row mr-auto ml-auto d-flex justify-content-center p-0 m-0">
		<div class="col-11">
			<nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-light bg-white ml-0 mr-0 pt-4 pb-3"  style="border-radius: 2rem !important; align-items: center;">
				<div class="navbar-collapse" id="menu_2">
					<ul class="navbar-nav nav-item-header mr-auto ml-auto d-flex justify-content-center"  >
						@include('frontend.layouts.partials.menu2')
					</ul>
				</div>
			</div>
		</div>
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