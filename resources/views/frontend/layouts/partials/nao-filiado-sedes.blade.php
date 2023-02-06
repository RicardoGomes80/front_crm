<div class="row pl-0 pt-4 mt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 mt-4 pt-4 mb-4 pb-4">
				<div class="row p-0 m-0 pl-0 pr-2 ">
				<div class="col-8 p-0 m-0 pl-4 pr-4">
					<div class="col-12 p-0 m-0 text-center shadow border_bottom_radius_20">
						<h2 class="pt-4"><b>Conheça nossas Sedes</b></h2>
						<h4>Esses são os locais onde estamos localizados</h4>
						<div class="p-0 m-0 box_imagem_2x2" style="background: url('./storage/uploads/cms/ads-sede-1.png') 0% 100% / 100% no-repeat;"></div>	
						<div class="col-12 p-0">
							<div class="text-center pt-10 ml-0 pl-0 pr-0 ">
								<div class="row text-left pt-2">
									<div class="col-11 pt-4 pl-3 pr-3"><h2><b>Nova Sede Aprofem.</b></h2></div>
								</div>
								<div class="mt-1 mb-3 pt-1 pl-3 pr-3 text-left" style="height:10.50rem;">
									<p class="font-12">Rua Humaitá, 483 - Bela Vista - CEP 01321-010 - São Paulo/SP - 
										<br>(travessa da av. alguns dias de descanso com)
									</p>
									<p class="font-12">Atendimento Presemcial de Segunda 
										<br>Central de Atendimento: (11) 3292-5500
									</p>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="col-4 p-0 m-0">
					<div class="row p-0 m-0 pl-4">
						<div class="col-12 p-0 m-0 cursor-pointer btn-filiar-me">
							<img src="{{asset('storage/uploads/cms/ads-sede-side.png')}}" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pl-0 pt-4 mr-auto ml-auto d-flex justify-content-center">
		<div class="col-11 pl-0 ml-0 pr-0 mr-0 pt-4 mb-4 pb-4">
			<div class="row p-0 m-0 pl-0 pr-2">
				<div class="col-8 p-0 m-0 pl-4 pr-4">
					<div class="col-12 p-0 m-0 text-center shadow border_bottom_radius_20">
						<div class="p-0 m-0 box_imagem_2x2" style="background: url('./storage/uploads/cms/ads-sede-1.png') 0% 100% / 100% no-repeat;"></div>
						<div class="col-12 p-0">
							<div class="text-center pt-10 ml-0 pl-0 pr-0 ">
								<div class="row text-left pt-2">
									<div class="col-11 pt-4 pl-3 pr-3"><h2><b>Nova Sede Aprofem.</b></h2></div>
								</div>
								<div class="mt-1 mb-3 pt-1 pl-3 pr-3 text-left" style="height:10.50rem;">
									<p class="font-12">Rua Humaitá, 483 - Bela Vista - CEP 01321-010 - São Paulo/SP - 
										<br>(travessa da av. alguns dias de descanso com)
									</p>
									<p class="font-12">Atendimento Presemcial de Segunda 
										<br>Central de Atendimento: (11) 3292-5500
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 p-0 m-0">
					<div class="row p-0 m-0 pl-4">
						<div class="col-12 p-0 m-0">
							<div class="col-12 p-0 m-0 shadow b-r-20 h-600">
								<div class="col-12 pt-4 mt-4 text-center">
									<h2 class="pt-3"><b>Assine nossa newsletter</b></h2>
								</div>
								<div class="divider"></div>
								<div class="form-row ">
									<div class="col-11 pl-3 ml-3">
										<div class="position-relative form-group">
											<label for="txtNome" class="col-form-label">{{ __('Nome') }}</label>
											<input id="txtNome" type="text" class="form-control @error('txtNome') is-invalid @enderror" placeholder="Seu nome" maxlength="100" name="txtNome" autocomplete="off" required>
											@error('txtNome')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
									<div class="col-11 pl-3 ml-3">
										<div class="position-relative form-group">
											<label for="txtNome" class="col-form-label">{{ __('Email') }}</label>
											<input id="Email" type="text" class="form-control @error('Email') is-invalid @enderror w100" placeholder="Seu Email" maxlength="100" name="Email" autocomplete="off" required>
											@error('Email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-11 text-center">
										<div class="position-relative form-group">
											<label class="col-form-label" for="textAceiteContato">Termos de uso e privacidade</label>
											<div class="col-sm-12 ">
												<input type="checkbox" id="textAceiteContato" name="textAceiteContato" class="@error('textAceiteContato') is-invalid @enderror" required>
												<small>Ao informar os meus dados, declaro ter ciência e concordar com o <a target="_blank" href="./leitura-conteudo/00005759">Termo de Uso e Política de Privacidade</a> da APROFEM</small>
												<span class="message-error text-danger d-none">
													<br>
													<small>Aceite obgrigatório</small>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="divider"></div>
								<div class="form-row">
									<div class="col-12 text-center">
										<button type="submit" class="btn btn-primary btn-shadow btn-hover-shine">
											{{ __('Assinar') }}
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>