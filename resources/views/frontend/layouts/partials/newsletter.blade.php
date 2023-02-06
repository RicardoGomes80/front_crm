<div class="row pl-0 mr-auto ml-auto d-flex justify-content-center ">
	<div class="col-12 p-0">
		<h5 class="titulo_section"> <b>{{__('Newsletter') }}</b></h5>
		<div class="progress-bar-xs progress h2px bg-light p-0 m-0" style=" min-height:0.35rem;">
			<div class="progress-bar progress-bar-xs bg-green" style="width: 5rem; height:0.35rem;"></div>
		</div>
	</div>
</div>
<div class="container bg-light text-left mt-4 ">
	<div class="col-11 d-flex justify-content-center pt-5">
		<div class="align-items-center ">
			<p  class="h4">{{ __('Assine a nossa newsletter') }}</p>
			<p  class="font-10 text-muted text-center">{{ __('Fique por dentro das novidades') }}</p>
		</div>
	</div>
	<div class="col-11 d-flex justify-content-center pb-10 mx-auto ">
		<div class="row p-0 m-0">
			<form method="POST" id="form_add_newsletter" action="/">
				@csrf
				<div class="input-group input-group-lg align-items-center col-12 justify-content-center">
					<div class="col-xs-12 d-sm-inline-block mb-2 ml-2">
						<input type="text" class="form-control rounded shadow-lg @error('nome') is-invalid @enderror" autocomplete="off" name="nome" value="{{ old('nome') }}" placeholder="{{__('Nome')}}" required>
						@error('nome')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="col-xs-12 d-sm-inline-block mb-2 ml-2">
						<input type="email" class="form-control rounded shadow-lg @error('email') is-invalid @enderror" autocomplete="off" name="email" value="{{ old('email') }}" placeholder="{{__('Email')}}" required>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="col-xs-12 d-sm-inline-block mb-2 ml-2">
						<button type="submit" class="rounded btn btn-primary-2 add_newsletter"><span class="h6">{{__('Assinar') }}</span></button>
					</div>
				</div>
				<div class="col-12 p-0 ml-2">
					<div class="align-items-center">
						<div class="form-group">						
							<label for="de_acordo" @error('de_acordo') is-invalid @enderror class="erro_de_acordo font-13px" >
								<input type="checkbox" name="de_acordo" id="de_acordo">
								{{ __('Ao informar os meus dados, declaro term ciência e concordar com os Termos de uso e política de privacidade da APROFEM') }}
							</label>
						</div>
					</div>
				</div>
			</form>
		</div>		
	</div> 
</div>