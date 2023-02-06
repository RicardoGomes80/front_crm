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
<title>Saúde - Pauta do dia 17/04/2014</title>
<meta name="keywords" content="HASHTAGS">
<meta name="description" content="TEXTO-DESCRIPTION">
<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
	<div class="blakish-overlay"></div>
	<div class="page-breadcrumb-content text-center">
		<h2 class="breadcrumb-head black bold">Saúde - Pauta do dia 17/04/2014</span></h2>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-sm">
			<h4>Saúde - Pauta do dia 17/04/2014</h4>
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
			<div>Transcrevemos, abaixo, um exemplo de tabela para Médicos com jornada de 20h, com a proposta de vencimentos para 2014, 2015 e 2016:</div><div><br></div><div>Proposta da Prefeitura da Capital para jornada de 20 horas:</div><div><br></div><div class="table-responsive"><table class="table table-bordered table-hover"><thead><tr class="active"><th><strong>Referência</strong></th><th class="text-center"><strong>2014</strong></th><th class="text-center"><strong>2015</strong></th><th class="text-center"><strong>2016</strong></th></tr></thead><tbody><tr><td>ESM1</td><td class="text-right">5.040,00</td><td class="text-right">5.499,09</td><td class="text-right">6.000,00</td></tr><tr><td>ESM2</td><td class="text-right">5.266,80</td><td class="text-right">5.746,55</td><td class="text-right">6.270,00</td></tr><tr><td>ESM3</td><td class="text-right">5.424,80</td><td class="text-right">5.918,95</td><td class="text-right">6.458,10</td></tr><tr><td>ESM4</td><td class="text-right">5.587,55</td><td class="text-right">6.096,51</td><td class="text-right">6.651,84</td></tr><tr><td>ESM5</td><td class="text-right">5.755,17</td><td class="text-right">6.279,41</td><td class="text-right">6.851,40</td></tr><tr><td>ESM6</td><td class="text-right">6.014,16</td><td class="text-right">6.561,98</td><td class="text-right">7.159,71</td></tr><tr><td>ESM7</td><td class="text-right">6.194,58</td><td class="text-right">6.758,84</td><td class="text-right">7.374,50</td></tr><tr><td>ESM8</td><td class="text-right">6.380,42</td><td class="text-right">6.961,61</td><td class="text-right">7.595,74</td></tr><tr><td>ESM9</td><td class="text-right">6.571,83</td><td class="text-right">7.170,46</td><td class="text-right">7.823,61</td></tr><tr><td>ESM10</td><td class="text-right">7.229,02</td><td class="text-right">7.632,41</td><td class="text-right">8.058,32</td></tr><tr><td>ESM11</td><td class="text-right">7.662,76</td><td class="text-right">8.032,91</td><td class="text-right">8.420,94</td></tr><tr><td>ESM12</td><td class="text-right">8.199,15</td><td class="text-right">8.433,02</td><td class="text-right">8.673,57</td></tr><tr><td>ESM13</td><td class="text-right">8.609,11</td><td class="text-right">8.769,94</td><td class="text-right">8.933,78</td></tr><tr><td>ESM14</td><td class="text-right">8.867,38</td><td class="text-right">9.033,04</td><td class="text-right">9.201,79</td></tr><tr><td>ESM15</td><td class="text-right">9.266,41</td><td class="text-right">9.439,52</td><td class="text-right">9.615,87</td></tr><tr><td>ESM16</td><td class="text-right">9.544,40</td><td class="text-right">9.722,71</td><td class="text-right">9.904,35</td></tr><tr><td>ESM17</td><td class="text-right">9.830,74</td><td class="text-right">10.014,39</td><td class="text-right">10.201,48</td></tr></tbody></table><p>Analisando a tabela acima, verificamos que não há regularidade entre as referências, cujos valores variam de 4% a 10% na vertical e, de um ano para outro, já estão fixados os percentuais de reajustes até 2016, e que também não são os mesmos para todas as referências, variando entre 1,8% e 9,10%.<br></p><div><div><br></div><div>Quando comparamos a diferença entre o menor e o maior valor de subsídio verifica-se que, em 2014, há uma variação de 95% e que, em 2016 cai para 70%, o que indica, inequivocamente, um achatamento para a carreira.</div><div><br></div><div>As Entidades fizeram uma contra - proposta, mostrando as perdas salariais com os subsídios e a preocupação com o impacto dos plantonistas, dentre outras questões.</div><div><br></div><div>A pedido das Entidades, os representantes do Governo ficaram de trazer dados dos cálculos para os servidores da saúde inativos, bem como para os plantonistas.</div></div></div>
		</div>
	</div>
</div>
@endsection