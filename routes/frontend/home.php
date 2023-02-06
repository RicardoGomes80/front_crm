<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\PousadaController;
Route::get('/', [HomeController::class, 'index'])->name('hotsite');
Route::get('/sou-filiado', [HomeController::class, 'souFiliado'])->name('index');


Route::get('/nao-sou-filiado', [HomeController::class, 'naoSouFiliado'])->name('nao-sou-filiado');
Route::get('/beneficio/{page}', [HomeController::class, 'beneficios'])->name('beneficio');
Route::get('/colonias-e-pousadas', [HomeController::class, 'listarPousadas'])->name('pousadas');
Route::get('/filie-se', [HomeController::class, 'filieSe'])->name('filie-se');
Route::post('/filie-se-enviar', [HomeController::class, 'filieSeEnviar'])->name('filie-se-enviar');    
Route::get('/fale-conosco', [HomeController::class, 'faleConosco'])->name('fale-conosco');
Route::post('/fale-conosco/enviar', [HomeController::class, 'faleConoscoEnviar'])->name('fale-conosco-enviar');
Route::post('/filiado-filiado_add_newsletter', [HomeController::class, 'adicionarNewsLetter'])->name('filiado_add_newsletter');
Route::get('cursos/buscar', [HomeController::class, 'buscarCursosHome'])->name('cursos.buscar.home');
Route::get('cursos/detalhes/{id}', [HomeController::class, 'showCursoDetalhesHome'])->name('cursos.show.detalhes.home');
Route::get('cursos/convenios/detalhes/{id}', [HomeController::class, 'showCursoConveniosDetalhesHome'])->name('cursos-convenios.show.detalhes.home');
Route::post("convenio/produto/adicionar/{clienteId}", [HomeController::class, 'adicionaProdutoConvenioCliente'])->name('gravar.cliente.convenio.produto');
Route::put("adicionar/dependente/{clienteId}", [HomeController::class, 'adicionaDependenteCliente'])->name('cliente.add.dependente');
Route::post("/buscar-por-identificador", [HomeController::class, 'getDadosByIdentificadorForFaleConosco'])->name('buscar.identificador.ajax');
Route::get("/get-unidades-dres/{ce_codigo}/{dre_codigo}", [HomeController::class, 'getUnidadesWithDre'])->name('unidades.dres.ajax');
Route::post("/verificaIdentificador", [HomeController::class, 'verificaIdentificador_ajax'])->name('verificaIdentificador');
Route::get("verificar-cpf/{cpf}", [HomeController::class, 'verificaCpf'])->name('verificar.cpf');
Route::get("verificar-rg/{rg}", [HomeController::class, 'verificaRg'])->name('verificar.rg');