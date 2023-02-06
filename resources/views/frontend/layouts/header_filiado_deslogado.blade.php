<div class="row btn btn-primary-2 btn-lg btn-pill text-center btn-hover-shine openLoginModal" data-target="#myModal">
	<a  href="#" role="button">
		<div class="col-2 pl-0">
			<i class="fa fa-user text-orange font-18 pt-3"></i>
		</div>
		<div class="col-sm text-white">
			<div class="row ">
				{{ __('ÁREA DO') }}
			</div>
			<div class="row">
				<b>{{ __('FILIADO') }}</b>
			</div>
		</div>
	</a>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('click','#go-to-home',function () {
			url = "/";
			window.location.replace(url);
		})
	})
</script>