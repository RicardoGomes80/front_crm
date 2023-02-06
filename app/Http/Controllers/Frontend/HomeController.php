<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\System\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Str;

class HomeController extends Controller
{
	private $path;

	protected $paginas;
	
	public function __construct()
	{
		$path               = 'frontend';
		$this->path         = $path;
	}

	public function index(Request $request)
	{
		$termos = [];
		return view("{$this->path}.hotsite", compact('termos'));
	}

	public function get_url_amigavel(Request $request, $url, $categoria = null)
	{
		if($url == null){
			return $this->index($request);
		}
		if($url != null){
			$dadosDaUrl = $this->paginas->getUrl($url);
			if ($url == 'busca-site'){
				$parametro = $request->input('parametro');
				$id_categoria = $request->input('categoria');
				$dadosBusca = $this->paginas->getAllPaginasByBusca($parametro);
				$filtroCategorias = $dadosBusca->mapWithKeys(function ($item, $key) {
					return [$item['CMS_ID_CATEGORIA'] => ['CMS_ID_CATEGORIA' => $item['CMS_ID_CATEGORIA'],'CMS_NOME_CATEGORIA' => $item['CMS_NOME_CATEGORIA'], 'CMS_ID_ICONE' => $item['CMS_ID_ICONE'], 'CMS_ID_COR' => $item['CMS_ID_COR']]];
				});
				$categorias = [];
				$categorias[0]['index'] = '';
				$categorias[0]['counter'] = $dadosBusca->count();
				$categorias[0]['CMS_ID_CATEGORIA'] = '';
				$categorias[0]['CMS_NOME_CATEGORIA'] = 'Geral';
				$categorias[0]['CMS_ID_ICONE'] = '';
				$categorias[0]['CMS_ID_COR'] = '';
				foreach($filtroCategorias as $index => $categoria){
					$counter = $this->paginas->getCounterByBusca($parametro,$index);
					$categorias[$index]['index'] = $index;
					$categorias[$index]['counter'] = $counter;
					$categorias[$index]['CMS_ID_CATEGORIA'] = $categoria['CMS_ID_CATEGORIA'];
					$categorias[$index]['CMS_NOME_CATEGORIA'] = $categoria['CMS_NOME_CATEGORIA'];
					$categorias[$index]['CMS_ID_ICONE'] = $categoria['CMS_ID_ICONE'];
					$categorias[$index]['CMS_ID_COR'] = $categoria['CMS_ID_COR'];
				}
				$result = $this->paginas->getAllPaginasByBuscaPaginate($parametro,$id_categoria);
				foreach($result as $index => $res){
					$conteudo = strtolower(strip_tags($res->conteudo));
					$pos = strpos($conteudo, strtolower($parametro));
					$rest = substr($conteudo, $pos-30, 120 );
					$uperParametro = mb_strtoupper($parametro);
					$rest = str_replace($parametro, "<b>...<span style='background:#fc0'> $uperParametro", $rest);
					$rest = str_replace($uperParametro, "$uperParametro </b> </span>... ", $rest);
					$titulo = strtolower(strip_tags($res->titulo));
					$titulo = str_replace($parametro, "<b>...<span style='background:#fc0'> $uperParametro", $titulo);
					$titulo = str_replace($parametro, "<b>...<span style='background:#fc0'> $uperParametro", $titulo);					
					$result[$index]->titulo = '...'.$titulo.'...';
					$result[$index]->conteudo = '...'.$rest.'...';
				}
				$linksDaCategoria = $this->paginas->getLinksDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url','linksDaCategoria','categorias','parametro','id_categoria'));
			}
			if(empty($dadosDaUrl)){
				return view("{$this->path}.404", compact('url'));
			}
			if($dadosDaUrl->id_tipo_link == 8){
				return  $this->{$dadosDaUrl->function}($request);
			}
			elseif($dadosDaUrl->url == 'lista-conteudo'){				
				$result = $this->paginas->getAllPaginasDaCategoria($dadosDaUrl->id_categoria);
				$linksDaCategoria = $this->paginas->getLinksDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url','linksDaCategoria'));
			}
			elseif($dadosDaUrl->url == 'timeline'){
				$result = $this->paginas->getAllPaginasDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'leitura-conteudo'){
				if (view()->exists("{$this->path}.{$dadosDaUrl->url}.{$dadosDaUrl->id_categoria}.{$url}")) {
					return view("{$this->path}.{$dadosDaUrl->url}.{$dadosDaUrl->id_categoria}.{$url}", compact('categoria','dadosDaUrl','url'));
				}else{
					return view("{$this->path}.404", compact('url'));
				}			
			}
			elseif($dadosDaUrl->url == 'lista-arquivos-thumb'){
				$result = $this->paginas->getAllPaginasDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'galeria-fotos-videos'){
				$result = $this->paginas->getAllPaginasDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'noticias'){
				$result = $this->paginas->getAllPaginasDaCategoria($dadosDaUrl->id_categoria);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'lista-parceiros'){
				$result = $this->conveniosGruposRepository->getGruposByTitulo($dadosDaUrl->titulo);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'visualiza-galeria'){
				$result = $this->paginas->getVideo($dadosDaUrl->id_conteudo);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'lista-jornais-thumb'){
				$result = $this->paginas->getJornais($dadosDaUrl->id_conteudo);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
			elseif($dadosDaUrl->url == 'lista-jornais'){
				$result = $this->paginas->getJornais($dadosDaUrl->id_conteudo);
				return view("{$this->path}.{$dadosDaUrl->url}", compact('categoria','result','dadosDaUrl','url'));
			}
		}
	}

	public function listarPousadas(Request $request)
	{
        //SetarDatasReservaSearchRequest
		$data = $this->pousada->getPousadasDeslogado();
		$id = $request->input('pousada');
		if(empty(!$request->input('pousada'))){
			$pousadaId = $request->input('pousada');
			$data['quartos'] =   $this->quarto->getQuartos($request, $id);
		}
		return view('frontend.pousadas', $data); 
	}

	public function souFiliado(Request $request)
	{
		$termos = [];
		$categorias = collect([]);
		$cursos     = collect([]);
		$cliente = [];
		$categoriasCountable = [];
		$complemento_rota = 'sou-filiado';
		$cliente = '';
		return view("{$this->path}.sou_filiado", compact('categorias', 'cursos', 'termos', 'cliente', 'categoriasCountable'));
	}

	public function naoSouFiliado(Request $request)
	{	
		$termos = [];
		return view("{$this->path}.nao-filiado", compact('termos'));
	}

	/*public function beneficios(Request $request)
	{	
		if($request->segment(1) == 'beneficio'){
			$page = $request->segment(2);
			if (view()->exists("{$this->path}.beneficios/inc-".$page)) {
				$termos = Termos::select('btn', 'texto', 'titulo', 'chamada')->where('slug', '=', 'cookies')->first();
				return view("{$this->path}.beneficios/beneficio", compact('termos','page'));
			}
			return view("{$this->path}.404")->with('warning', 'Página Não encontrada!');
		}
	}*/
	
	public function buscarCursosHome(Request $request)
	{
		$dados= $this->buscarCursos($request);

		return view($this->path.'.cursos_resultados')->with($dados);
	}

	public function showCursoDetalhesHome(Request $request, $cursoId)
	{
		$data = $this->turma->getDataToDetalhes($request,$cursoId);
		$dados= $this->buscarCursos($request);		
		return view($this->path.'.curso_detalhes', $data)->with($dados);
	}

	public function showCursoConveniosDetalhesHome(Request $request, $produtoId)
	{
		$cliente = '';
		$dependentes = [];
		if(\Auth::user() != null){
			if(auth()->user()->isFiliado() === true){
				$cliente = $this->clienteRepository->getDadosFiliadoByIdentificador(auth()->user()->identificador);
				$clienteId = $cliente['cliente_id'];
				$cliente['limitCursoGratuito'] = $this->clienteRepository->getLimitCursoGratuitoConvenio($clienteId);
				$dependentes = $this->clienteRepository->getDependentes($clienteId);
			}
		}
		$data = $this->conveniosProdutosRepository->getConveniosProdutoById($produtoId);
		if($data != null){
			$data->subProdutos = $this->conveniosProdutosRepository->getConveniosSubProdutoByProdutoId($produtoId);
		}
		$dados= $this->buscarCursos($request);
		return view($this->path.'.curso_convenio_detalhes', compact('data','cliente','dependentes'))->with($dados);
	}

	public function adicionaProdutoConvenioCliente(Request $request)
	{
		$dados = $request->only('cliente_id','convenio_id','convenio_grupo_id','convenio_produto_id','convenio_sub_produto_id','titular','dependente_id','data_entrada','data_expiracao');
		return $this->clienteRepository->adicionaConvenioCliente($dados);
	}

	public function adicionaDependenteCliente(CriarDependenteRequest $request, $clienteId)
	{
		return $this->clienteRepository->salvarDependenteCliente($request, $clienteId);
	}

	public function buscarCursosFiliado(Request $request)
	{
		$dados= $this->buscarCursos($request);
		return view('paginas.painel_cliente.cursos.cursos_resultados')->with($dados);
	}

	public function showCursoDetalhesFiliado(Request $request, $cursoId)
	{
		$infos = $this->turma->getDataToDetalhes($request,$cursoId);
		$dados= $this->buscarCursos($request);
		return view('paginas.painel_cliente.cursos.curso_detalhes', $infos)->with($dados);
	}

	public function buscarCursos(Request $request)
	{
		$CategoriaConvenio = $request->input('categoria-convenio');
		$categorias = collect([]);
		$cursos = collect([]);
		$cursosConveniados = collect([]);
		$categoriasCountable = [];

		if (!$this->turma->checkIfIAmBlocked()) {
			$categorias = $this->categoria->getAll();
			$categoriasCountable = $this->turma->countCategoriasCursos();
			$cursos = $this->turma->getListaCursoParaOFrontEndDashboard($request);
			$this->turma->remapCursosResultsWithVagasCursosAndCategorias($cursos, $categorias);
		}
		$cursosConveniados = $this->conveniosGruposRepository->buscarCursosConveniados($CategoriaConvenio);
		$categoriasConveniados = $this->conveniosGruposRepository->buscarCategoriasCursosConveniados();

		/**
		 * Para simular os circulos sobre o cards dos cursos
		 * após ter isso no cadastro de categorias, pode remover e tratar direto na view
		 */

		$classes = [
			'bg-orange',
			'bg-success',
			'bg-danger',
			'bg-info',
			'bg-primary',
			'bg-primary-2',
		];
		$totalClasses = count($classes);
		//fim para simular os circulos sobre o card
		return compact('cursos', 'categorias', 'totalClasses', 'classes', 'categoriasCountable','cursosConveniados','categoriasConveniados');
	}

	public function showCursoDetalhes(Request $request, $cursoId)
	{
		$data = null;
		if (!$this->turma->checkIfIAmBlocked()) {
			$data = $this->turma->getCursoByIdForHome($request, $cursoId);
		}
		return $data;
	}

	public function resetPassword(Request $request)
	{
		$update = $this->userRepository->resetPassword($request);
		if (!empty($update)) {
			return redirect()->route('frontend.index')->with('success', 'Senha redefinida');
		}
		return redirect()->back()->with('error', 'Erro inesparado ao redefinir senha');
	}

	public function viewReset(Request $request, $token)
	{
		$email = $request->input('email');
		return view('auth.passwords.reset', compact('token', 'email'));
	}

	public function filieSe(Request $request)
	{
		$complemento_rota = 'filie-se';
		$dres = $this->clienteRepository->getDresWithCe();
		$tiposSexo = $this->clienteRepository->getTiposSexo();
		$tipoEstadoCivil = $this->clienteRepository->getTipoEstadoCivil();
		$cargosFuncionais = $this->clienteRepository->getCargosFuncionais();
		$tiposJornada = $this->clienteRepository->getTipoJornadaTrabalho();
		$tiposVencimento = $this->clienteRepository->getTiposVencimentoByCodigo();
		$categoriasFuncionais = $this->clienteRepository->getAllCategoriasFuncionais();
		return view("{$this->path}.filie-se",compact('complemento_rota','dres','cargosFuncionais','tiposSexo','tipoEstadoCivil','tiposJornada','tiposVencimento','categoriasFuncionais' ));
	}

	public function getUnidadesWithDre(Request $request, $ce_codigo, $dre_codigo)
	{
		$isAjax = $request->ajax();
		return $this->clienteRepository->getUnidadesWithDre($ce_codigo, $dre_codigo, $isAjax);
	}

	public function verificaIdentificador_ajax(Request $request)
	{
		$identificador =  Helper::removerCaracteresEspeciais($request->input('identificador'), true);
		if ($this->clienteRepository->verificaIdentificador($identificador) == '') {
			return response()->json(['success' => 'success']);
		}
		return response()->json(['error' => 'RF já Cadastrado']);
	}

	protected function verificaCpf(Request $request, $cpf)
	{	
		$isValid = Helper::validarCpf($cpf);
		if (!$isValid) {
			return	response()->json(['msg' => 'O cpf informado é inválido'], 422);
		}
		$cpf =  Helper::removerCaracteresEspeciais($cpf);
		if($this->clienteRepository->getByCpf($cpf) != null){
			return	response()->json(['msg' => 'O cpf informado é já está em uso'], 422);
		}
		else{
			return	response()->json(['msg' => 'O cpf é válido']);	
		}
	}

	protected function verificaRg(Request $request, $rg)
	{	
		$rg =  Helper::removerCaracteresEspeciais($rg);
		if($this->clienteRepository->getByRg($rg) != null){
			return	response()->json(['msg' => 'O rg informado é já está em uso'], 422);
		}
		else{
			return	response()->json(['msg' => 'O rg é válido']);
		}		
	}

	public function filieSeEnviar(CriarClienteRequest $request)
	{
		//dd($request->request);
		$clienteId = $this->clienteRepository->create($request)->id;
		
		if($clienteId){
			$emailValidated['email']  = $request->input('email');	
			$emailValidated = $request->validate([
				'email' => ['required','email:rfc,dns'],
			]);
			$emailValidated['principal'] = 1;
			$emailValidated['cliente_id'] = $clienteId;
			$email = $this->clienteRepository->salvarEmailClienteFrontend($emailValidated);

			$endValidated = $request->validate([
				'cep' => ['required'],
				'endereco' => ['required',],
				'bairro' => ['required'],
				'cidade' => ['required'],
				'estado' => ['required'],
				'pais' => ['required','string'],
				'numero' => ['nullable'],
				'complemento' => ['nullable'],
				'receber_correspondencia' => ['nullable'],
				'receber_jornal' => ['nullable'],
				'receber_doc' => ['nullable'],
			]);

			$endValidated['tipo'] = 'Residencial';
			$endValidated['pais'] = 'Brasil';
			$endValidated['cliente_id'] = $clienteId;
			$end = $this->clienteRepository->salvarEnderecoClienteFrontend($endValidated);


			$telValidated = $request->validate([
				'txtMelhorHorarioContatoDe' => ['date_format:H:i'],
				'txtMelhorHorarioContatoAte' => ['date_format:H:i'],
			]);

			$telValidated['tipo'] = 'Residencial';
			$telValidated['ddd'] = Helper::removerCaracteresEspeciais($request->input('txtDDDTelResidencia'));
			$telValidated['telefone'] = Helper::removerCaracteresEspeciais($request->input('txtTelResidencial'));
			$telValidated['melhor_horario_inicio'] = $request->input('txtMelhorHorarioContatoDe');
			$telValidated['melhor_horario_fim'] = $request->input('txtMelhorHorarioContatoAte');
			$telValidated['cliente_id'] = $clienteId;

			$this->clienteRepository->salvarTelefoneClienteFrontend($telValidated);


			$telValidated['tipo'] = 'Celular';
			$telValidated['ddd'] = Helper::removerCaracteresEspeciais($request->input('txtDDDTelCelular'));
			$telValidated['telefone'] = Helper::removerCaracteresEspeciais($request->input('txtTelCelular'));
			$telValidated['melhor_horario_inicio'] = $request->input('txtMelhorHorarioContatoDe');
			$telValidated['melhor_horario_fim'] = $request->input('txtMelhorHorarioContatoAte');
			$telValidated['cliente_id'] = $clienteId;

			$this->clienteRepository->salvarTelefoneClienteFrontend($telValidated);


			$infoValidated =  $request->validate([
				'vinculo' => ['integer', 'nullable'],
				'cargo_codigo' => ['required'],
				//'cargo_em_comissao_codigo' => ['nullable'],
				'situacao_funcional' => ['required',],
				//'data_inicio_cargo' => ['nullable', 'date_format:d/m/Y', 'before:tomorrow'],
				'ce_codigo' => ['required'],
				//'ce_descricao' => ['nullable'],
				//'dre_descricao' => ['nullable'],
				//'unidade_descricao' => ['nullable'],
				'dre_codigo' => ['required'],
				'unidade_codigo' => ['required'],
				'tipo_jornada_id' => ['required'],
				'codigo_vencimento_id' => ['required'],
				//'horario_contato_ue_inicio' => ['date_format:H:i'],
				//'horario_contato_ue_fim' => ['date_format:H:i',],
			]);

			$infoValidated['cliente_id'] = $clienteId;

			$info = $this->clienteRepository->salvarInformacoesFuncionaisClienteFrontend($infoValidated);
			
			if (!empty($info)) {
				if (!empty($this->clienteRepository->verificaFiliacaoDestaUnidade($request->input('unidade_codigo'), $clienteId))) {
					$cria = $this->clienteRepository->atualizaNumeroDeFiliados($request->input('unidade_codigo'), $request->input('ce_codigo'), $request->input('dre_codigo'));
				}
			}
			return redirect()->route('frontend.index')->with('success', 'Registro efetuado com sucesso!');

		}
	}

	public function getDadosByIdentificadorForFaleConosco(Request $request)
	{
		$identificador = $request->input('identificador');
		return $this->clienteRepository->getDadosByIdentificadorForFaleConosco($identificador);
	}

	public function faleConosco(Request $request)
	{
		$dres = $this->clienteRepository->getDresWithCe();
		$cargosFuncionais = $this->clienteRepository->getCargosFuncionais();
		return view("{$this->path}.fale-conosco",compact('dres','cargosFuncionais'));
	}

	public function faleConoscoEnviar(Request $request)
	{
		$tipo_de_cliente = $request->input('tipo_de_cliente');
		$cpf =  Helper::removerCaracteresEspeciais($request->input('txtCPF'));
		$identificador =  Helper::removerCaracteresEspeciais($request->input('txtRF'), true);
		if($request->input('cliente_id') == null){
			$tipo_de_cliente = 0;
		}
		if ($this->clienteRepository->clienteExistsByIdentificadorORCpf($identificador,$cpf) > 0){
			return redirect()->back()->with('warning', 'Este RF pertence à um filiado!')->withInput();
		}
		$dados['descricao'] = $request->input('txtAssunto') . $request->input('txtMsg');
		$dados['categoria_chamado_id'] = $request->input('categoria_chamado_id');
		$dados['status_chamado_id'] = $request->input('status_chamado_id');
		$dados['tipo_chamado_id'] = $request->input('tipo_chamado_id');
		$dados['tipo_retorno'] = $request->input('tipo_retorno');
		$dados['created_at'] = now();
		$dados['aberto_at'] = now();
		$dados['aberto_por'] = '';
		$dados['atendente_atual'] = '';
		$dados['id_ligacao'] = '';
		$dados['cargo_codigo'] = $request->input('cargo_codigo');
		$dados['ce_codigo'] = $request->input('ce_codigo');
		$dados['dre_codigo'] = $request->input('dre_codigo');
		$dados['unidade_codigo'] = $request->input('unidade_codigo');
		if ($tipo_de_cliente  == 0) {
			if(!empty($request->input('txtDDDTelCelular'))){
				$dadosNCliente['tipo'] = 'Celular';
				$dadosNCliente['ddd'] = $request->input('txtDDDTelCelular');
				$dadosNCliente['telefone'] = $request->input('txtTelCelular');
				$dadosNCliente['ramal'] = '';
			}else{
				$dadosNCliente['tipo'] = 'Residencial';
				$dadosNCliente['ddd'] = $request->input('txtDDDResidencial');
				$dadosNCliente['telefone'] = $request->input('txtTelResidencial');
				$dadosNCliente['ramal'] = '';
			}
			$dadosNCliente['melhor_horario_inicio'] = $request->input('txtMelhorHorarioContatoDe');
			$dadosNCliente['melhor_horario_fim'] = $request->input('txtMelhorHorarioContatoAte');
			$dadosNCliente['nome'] = $request->input('txtNome');
			$dadosNCliente['email'] = $request->input('txtEmail');
			$dadosNCliente['cpf'] = $cpf;
			$dadosNCliente['cargo_codigo'] = $request->input('cargo_codigo');
			$dadosNCliente['ce_codigo'] = $request->input('ce_codigo');
			$dadosNCliente['dre_codigo'] = $request->input('dre_codigo');
			$dadosNCliente['unidade_codigo'] = $request->input('unidade_codigo');
			$naoCliente = $this->chamadosRepository->buscarNaoCliente($cpf, true);
			if (empty($naoCliente)) {
				$naoCliente = $this->chamadosRepository->gravarDadosNaoCliente($dadosNCliente);
			} else {
				$dados['nao_cliente_id'] = $naoCliente->id;
				$verificaMaximo = $this->chamadosRepository->contaAtendimentosNaoCliente($naoCliente->id);
				if (!empty($verificaMaximo)) {
					return redirect()->back()->with('warning', 'Este não fliiado ja tem o máximo de atendimentos');
				}
			}
			$dados['cliente_id'] = null;
			$chamadoId =  $this->chamadosRepository->gravarChamado($dados);
		}else{
			$dados['cliente_id'] = $request->input('cliente_id');
			$dados['nao_cliente_id'] = null;
			$chamadoId =  $this->chamadosRepository->gravarChamado($dados);
		}
	}


	/*public function getTeachers()
	{
		$recent_news = Blog::orderBy('created_at', 'desc')->take(2)->get();
		$teachers = User::role('teacher')->paginate(12);
		return view($this->path . '.teachers.index', compact('teachers', 'recent_news'));
	}*/

/*	public function showTeacher(Request $request)
	{
		$recent_news = Blog::orderBy('created_at', 'desc')->take(2)->get();
		$teacher = User::with('teacherProfile')->role('professor')->where('id', '=', $request->id)->first();
		$courses = $teacher->courses;
		if (count($teacher->courses) > 0) {
			$courses = $teacher->courses()->paginate(12);
		}
		return view($this->path . '.teachers.show', compact('teacher', 'recent_news', 'courses'));
	}*/
}