<style>
	.modal-extend {
		margin: auto;
		min-height: calc(100vh - 60px);
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	#modalTermo .close {
		position: absolute;
		right: 0.3rem;
	}

	.modal-extend{
		max-width: 70% !important;
		min-height: 768px !important;
	}
	@media (max-width: 768px) {
		.modal-dialog {
			min-height: calc(100vh - 20px);
		}
		#modalTermo .modal-body {
			padding: 15px;
		}
	}


	@media (min-width: 576px){
		.modal-extend {
			max-width: 70% !important;
			min-height:768px!important;
			margin: 1.75rem auto;
		}
	}
</style>
<div class="modal fade" id="modalTermo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-extend">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header backgroud-style">
				<div class="gradient-bg"></div>
				<div class="popup-logo">
					<img src="{{asset("storage/logos/".config('logo_popup'))}}" alt="">
				</div>
				<div class="popup-text text-center">
					<h2>{{$termos->titulo}} </h2>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="col-12" style="overflow-y:scroll; height: 300px;">
					{!! $termos->texto !!}
					<div class="text-center">
					 <button id="aceteCookie" class="js-cookie-consent-agree btn btn-info text-white text-light  cookie-consent__agree"> {{ $termos->btn }}
					 </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@push('after-scripts')
<script>
    $(function () {
        $(document).ready(function () {
            $(document).on('click', '#aceteCookie', function () {
             $('#modalTermo').modal('hide');
             $('#cookieWrapper').remove()
         });            
        });
    });
</script>
@endpush

