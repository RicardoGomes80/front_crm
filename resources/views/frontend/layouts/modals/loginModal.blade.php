@if(!auth()->check())

<div class="modal main-login-modal fade bloqueia-pagina" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog"> 
		<div class="modal-content"  style="width: 700px !important; margin-left: -100px;">
			<!-- Modal Header -->
			<div class="modal-header modal-background-style w-100">
				<div class="gradient-bg bg-info-2 w-100"></div>
				<div class="row w-100 text-center border m-0 p-0">
					<div class="col-12 mt-2">
						<img src="{{asset("storage/logos/".config('logo_popup'))}}" alt="">
					</div>
					<div class="col-12 mt-3 mb-5">
						<h2>
							{{__('Minha Conta')}}
						</h2>
					</div>
					{{-- <div class="col-12 mt-2 mb-5">
						<p>@lang('labels.frontend.modal.login_register')</p>
					</div> --}}
				</div>
				<button type="button" class="close text-write" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="tab-content">
					<div class="tab-pane container active" id="login">
						<span class="error-response text-danger"></span>
						<span class="success-response text-success">{{(session()->get('flash_success'))}}</span>
						<form class="contact_form" id="loginForm" action="/" method="POST" enctype="multipart/form-data">
							@csrf
							{{-- <a href="#" class="go-register float-left text-info pl-0">
								@lang('labels.frontend.modal.new_user_note')
							</a> --}}
							<div class="contact-info mb-2">
								<input class="form-control mb-0 login_modal" type="text" name="email" id="email" placeholder="{{__('RF ou EMAIL')}}" maxlength="191" autocomplete="off">
							</div>
							<span id="sp-login-email-error" class="text-danger d-block"></span>
							<div class="contact-info mb-2">
								<input class="form-control mb-0 login_modal" type="password" name="password" id="password" placeholder="{{__('SENHA')}}" autocomplete="off">
							</div>
							<span id="sp-login-password-error" class="text-danger d-block"></span>

							<div class="contact-info mb-2">
								<a class="text-info p-0 d-block text-right my-2" href="/">@lang('labels.frontend.passwords.forgot_password')</a>
							</div>
							@if(config('access.captcha.registration'))
							<div class="contact-info mb-2 text-center">
								{{ no_captcha()->display() }}
								{{ html()->hidden('captcha_status', 'true') }}
								<span id="login-captcha-error" class="text-danger"></span>
							</div>
							<!--col-->
							@endif
							<div class="text-center">
								<button type="submit" value="Submit" class="btn-login-modal btn btn-primary-2 btn-lg btn-roundeds btn-hover-shine pr-5 pl-5">{{__('LOGIN') }}</button>
							</div>
						</form>
						<div id="socialLinks" class="text-center"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
	
@endif

@push('after-scripts')
@if (session('openModel'))
<script>
	$('#myModal').modal('show');
</script>
@endif
@if(config('access.captcha.registration'))
{{ no_captcha()->script() }}
@endif
<script>
	$(function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$(document).ready(function () {
			@if(!empty(request()->query('login-modal')))
				$('#password, #email').val('');
				$('#sp-login-password-error').text('Faça login novamente');
				$('#sp-login-email-error').text('');
				$('.btn-login-modal').attr('disabled',false).text('{{__('LOGIN')}}')
				$('#myModal').modal('show');
			@endif
			$(document).on('click', '.go-login', function () {
				$('.btn-login-modal').attr('disabled',false).text('{{__('LOGIN')}}')
				$('#login').addClass('active').removeClass('fade')
			});
			
			$(document).on('click', '.openLoginModal', function (e) {
				$('#password,#email').val('');
				$('#sp-login-password-error').text('');
				$('#sp-login-email-error').text('');
				$('.btn-login-modal').attr('disabled',false).text('{{__('LOGIN')}}')
				
				$('#myModal').modal('show');
			});

			$('#loginForm').on('submit', function (e) {
				e.preventDefault();
				bloqueiaPagina()
				$('#sp-login-password-error').text('');
				$('#sp-login-email-error').text('');
				$('.btn-login-modal').attr('disabled',true).text('{{__('AGUARDE')}}')

				var $this = $(this);
				$('.success-response').html('');
				$('.error-response').html();

				$.ajax({
					type: $this.attr('method'),
					url: $this.attr('action'),
					data: $this.serializeArray(),
					dataType: $this.data('type')
				}).done(function(responseData) {
					
					if (responseData.success != undefined && responseData.success == true) {
						$('#loginForm')[0].reset();
						if (responseData.redirect == 'back') {
							location.reload();
						} else {
							window.location.href = "/dashboard/"
						}
					}
					
					$('.btn-login-modal').attr('disabled',false).text('{{__('LOGIN')}}')
				}).fail(function(response) {
					$('#sp-login-email-error').text('');
					$('#sp-login-password-error').text('');
					$('#login-captcha-error').text('');
					desbloqueiaPagina()
					var responseData = response.responseJSON;
					if (responseData.errors !== undefined) {
						if (responseData.errors.email  !== undefined) {
							console.log(responseData.errors.email[0]);
							$('#sp-login-email-error').text(responseData.errors.email[0]);
						}
						if (responseData.errors.password !== undefined) {
							$('#sp-login-password-error').text(responseData.errors.password[0]);
						}

						var captcha = "g-recaptcha-response";
						if (responseData.errors[captcha]) {
							$('#login-captcha-error').html(responseData.errors[captcha][0]);
						}
					} else {
						var message = responseData.message || '{{__('Não foi possível realizar o login')}}' ;
						if (message) {
							$('#login').find('span.error-response').html(message)
						}
					}					
					

					$('.btn-login-modal').attr('disabled',false).text('{{__('LOGIN')}}')
				});
			});
 
		});

	});
</script>
@endpush
