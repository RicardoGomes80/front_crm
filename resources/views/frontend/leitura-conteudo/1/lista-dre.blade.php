@extends('frontend.layouts.app_frontend')
@section('content')
<link rel="stylesheet" href="{{asset('/vendors/pgwslideshow/pgwslideshow.min.css')}}"/>
@push('js-scripts')
<script type="text/javascript" src="{{asset('/vendors/pgwslideshow/pgwslideshow.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		if($('#useSlider').val() ==1){
			$('.pgwSlideshow').pgwSlideshow(
			{
				transitionEffect : 'fading',
				adaptiveDuration : 400,
				autoSlide: 1,
			});
		}
	});
</script>
@endpush
<title>lista-dre</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">lista-dre</span></h2>
	</div>
</section>
<input type="hidden" id="useSlider" value="1"><div class="widget-content-right pb-3 mb-3"><div class="container"><ul class="pgwSlideshow"><li><a href="" target="_blank"><img src="{{asset('storage/uploads/00000509/OAl3KQy3Feob8qqnVmJxe131pQ3JH2UEwF4BHa34.jpg')}}" alt="" data-description=""></a></li><li><a href="" target="_blank"><img src="{{asset('storage//uploads/00000509/OAl3KQy3Feob8qqnVmJxe131pQ3JH2UEwF4BHa34.jpg')}}" alt="" data-description=""></a></li></ul></div></div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>lista-dre</h4>
		</div>
		<div class="col-sm">
			<!-- TEXTO_PUPLICADO_POR -->
		</div>
		<div class="col-sm">
			<!-- TEXTO_DATA_PUPLICACAO -->
		</div>
	</div>
</div>
<div class="container pb-5 mb-5">
	<div class="row">
		<div class="col-sm">
			<div class="row">
<div class="col-1">&nbsp;</div>

<div class="col-10">
<table border="1" style="width:100%">
	<tbody>
		<tr>
			<td><strong>BT - DRE Butantã</strong><br />
			R. Azem Abdalla Azem, 564 - 574 - Jardim Bonfigliolli<br />
			Distrito: Butantã - CEP: 05593-090<br />
			Telefone: 3397-8400<br />
			<a href="mailto:smedrebutantaadm@sme.prefeitura.sp.gov.br">smedrebutantaadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>JT - DRE Jaçanã/Tremembé</strong><br />
			Av. Tucuruvi, 808 - 2o Andar - Tucuruvi<br />
			Distrito: Tucuruvi - CEP: 02304-002<br />
			Telefone: 3396-5700<br />
			<a href="mailto:smedrejacanatremembeadm@sme.prefeitura.sp.gov.br">smedrejacanatremembeadm@sme.prefeitura.sp.gov.br</a></td>
		</tr>
		<tr>
			<td><strong>CL - DRE Campo Limpo</strong><br />
			Av. João Dias, 3.763 - Jardim Santo Antônio<br />
			Distrito: Capão Redondo - CEP: 05801-000<br />
			Telefone: 3396-6250<br />
			<a href="mailto:smedrecampolimpoadm@sme.prefeitura.sp.gov.br">smedrecampolimpoadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>PE - DRE Penha</strong><br />
			R. Apucarana, 215 - Tatuapé<br />
			Distrito: Tatuapé - CEP: 03311-000<br />
			Telefones: 3397-9189 / 3397-9190<br />
			<a href="mailto:smedrepenhaadm@sme.prefeitura.sp.gov.br">smedrepenhaadm@sme.prefeitura.sp.gov.br</a></td>
		</tr>
		<tr>
			<td><strong>CS - DRE Capela do Socorro</strong><br />
			R. Deputado Adib Chammas, 112<br />
			Distrito: Socorro - CEP: 04773-170<br />
			Telefone: 3397-2900<br />
			<a href="mailto:smedrecapsocorroadm@sme.prefeitura.sp.gov.br">smedrecapsocorroadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>PJ - DRE Pirituba/Jaraguá</strong><br />
			R. Aurélia, 996 - Vila Romana<br />
			Distrito: Lapa - CEP: 05046-000<br />
			Telefone: 3397-6800<br />
			<a href="mailto:smedrepiritubaadm@sme.prefeitura.sp.gov.br">smedrepiritubaadm@sme.prefeitura.sp.gov.br</a></td>
		</tr>
		<tr>
			<td><strong>FO - DRE Freguesia do Ó/Brasilândia</strong><br />
			R. Léo Ribeiro de Moraes, 66 - Freguesia do Ó<br />
			Distrito: Freguesia do Ó - CEP: 02910-060<br />
			Telefones: 3397-8560 / 3397-8561<br />
			<a href="mailto:drefbadm@sme.prefeitura.sp.gov.br">drefbadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>SA - DRE Santo Amaro</strong><br />
			R. Dr. Abelardo Vergueiro Cesar, 370 - Vila Alexandria<br />
			Distrito: Santo Amaro - CEP: 04635-080<br />
			Telefone: 3397-9200<br />
			E-mail: smedrestoamaroadm@sme.prefeitura.sp.gov.br</td>
		</tr>
		<tr>
			<td><strong>G - DRE Guaianases</strong><br />
			R. Agapito Maluf, 58 - Vila Princesa Isabel<br />
			Distrito: Guaianases - CEP: 08410-131<br />
			Telefone: 3397-8836<br />
			<a href="mailto:smedreguaianasesadm@sme.prefeitura.sp.gov.br">smedreguaianasesadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>SM - DRE São Mateus</strong><br />
			Av. Ragueb Chohfi, 1.550 - Jardim Três Marias<br />
			Distrito: Iguatemi - CEP: 08375-000<br />
			Telefone: 3397-6700<br />
			<a href="mailto:smedresaomateusadm@sme.prefeitura.sp.gov.br">smedresaomateusadm@sme.prefeitura.sp.gov.br</a></td>
		</tr>
		<tr>
			<td><strong>IP - DRE Ipiranga</strong><br />
			R. Leandro Dupré, 525 - Vila Clementino<br />
			Distrito: Saúde - CEP: 04025-012<br />
			Telefone: 3397-0270<br />
			<a href="mailto:smedreipirangaadm@sme.prefeitura.sp.gov.br">smedreipirangaadm@sme.prefeitura.sp.gov.br</a></td>
			<td><strong>SMP - DRE São Miguel Paulista</strong><br />
			Av. Nordestina, 747 - Vila Americana<br />
			Distrito: São Miguel Paulista - CEP: 08021-000<br />
			Telefones: 3397-5018 / 3397-5024 / 3397-5000<br />
			<a href="mailto:smedresaomigueladm@sme.prefeitura.sp.gov.br">smedresaomigueladm@sme.prefeitura.sp.gov.br</a></td>
		</tr>
		<tr>
			<td><strong>IQ - DRE Itaquera</strong><br />
			Av. Itaquera, 241 - Cidade Líder<br />
			Distrito: Cidade Líder - CEP: 08285-060<br />
			Telefone: 3397-9400<br />
			<a href="mailto:smedreitaqueraadm@sme.prefeitura.sp.gov.br">smedreitaqueraadm@sme.prefeitura.sp.gov.br</a></td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>
</div>

<div class="pb-3 pt-4 row">
<div class="col-2">&nbsp;</div>

<div class="col-10"><strong>Para consultar os endereços das Unidades Educacionais, acesse o "Caderno de Endereços", disponível na área restrita do Portal APROFEM.</strong></div>
</div>
</div>
		</div>
	</div>
</div>
@endsection