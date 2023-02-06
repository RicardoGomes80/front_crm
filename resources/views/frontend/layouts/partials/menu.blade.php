<div class="container ">
    <ul class="navbar-nav nav-item-header mx-auto menu-top-bar">
        {{-- <li class="nav-item image-home">
            <img class="" src="{{asset('images/cms/home.png') }}" alt="Ícone página inicial" title="Ícone página inicial">
        </li> --}}
        <li class="nav-item home">
            <a class="nav-link align-middle pl-2 active font-menu btn-home-filiado-nao-filiado" href="{{ config('app.url') }}//">
                <i><img class="" src="{{asset('images/cms/home.png') }}" alt="Ícone página inicial" title="Ícone página inicial"></i>
                <b>Home</b>
            </a>
        </li>
        <li class="dropdown institucional"><a href="#"><i class="fa fa-building-o"></i><b><span class="font-menu">Institucional</span></b><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/aprofem" >A APROFEM</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/a-diretoria" >A Diretoria</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/palavra-do-presidente" >Palavra do Presidente</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/fale-conosco" >Fale Conosco</a></li> 
            </ul>
        </li>
        <li class="dropdown fique-por-dentro">
            <a href="#"><i class="fa fa-building-o"></i>&nbsp;<b><span class="font-menu">Fique por Dentro</span></b><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/noticias" >Notícias</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/publicacoes-do-doc" >Publicações do DOC</a></li>
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/jornal" >Jornal APROFEM</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/newsletter" >Newsletter</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/galeria-de-fotos" >Galeria de Fotos</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/galeria-de-videos" >Galeria de Vídeos</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/enquete" >Enquete</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/" >Mesas de Negociação</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/" >Conteúdos</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/" >Espaço Cultural</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/app-aprofem" >APP-APROFEM</a></li> 
            </ul>
        </li>
        <li class="dropdown vida-funcional">
            <a href="#"><i class="fa fa-building-o"></i>&nbsp;<b><span class="font-menu">Vida Funcional</span></b><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/vencimentos" >Vencimentos</a></li> 
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/concursos-publicos" >Concursos Públicos</a></li> 
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/permutas" >Permutas</a></li> 
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/publicacoes-do-doc" >Publicações do DOC</a></li> 
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/certificados" >Certificados cadastrados no Sistema EOL</a></li> 
                    <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/recadastramento-anual" >Recadastramento Anual</a></li> 
                </ul>
        </li>
        <li class="dropdown legislacao">
            <a href="#"><i class="fa fa-building-o"></i>&nbsp;<b><span class="font-menu">Legislação</span></b><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/acoes" >Ações</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/leis" >Leis</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/decretos" >Decretos</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/pareceres-resolucoes" >Pareceres e Resoluções</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/readaptados" >Readaptados</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/portarias" >Portarias</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/juridico-comunicados" >Comunicados</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/instrucoes-normativas" >Instruções Normativas</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/projetos-lei" >Projetos de Lei</a></li> 
            </ul>
        </li>
        <li class="dropdown servicos">
            <a href="#"><i class="fa fa-building-o"></i>&nbsp;<b><span class="font-menu">Serviços</span></b><i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/assistencia-juridica" >Assistência Jurídica</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/atendimento-personalizado" >Atendimento Personalizado</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/leitura-do-doc" >Leitura do DOC</a></li> 
                <li class="font-menu"><i class=""></i><a href="{{ config('app.url') }}/orientacoes-tecnologicas" >Suporte e Orientação Tecnológica</a></li> 
            </ul>
        </li>
        <li class="nav-item filie-se"><a class="nav-link align-middle pl-2" href="{{ config('app.url') }}//filie-se"><i class=""></i>&nbsp;<b><span class="font-menu">Filie-se</span></b></a></li>
        {{-- <li class="nav-item after-image-home busca">
            <div class="form-row has-feedback pl-0 ml-0 mr-0 barra-busca-menu">
                <form id="form-busca-site" class="form-inline" action="busca-site">
                    <div class="input-group input-group-rounded bg-white shadow-lg searchAndDestroy">
                        <div class="input-group-prepend align-items-center">
                            <i class="text-orange pl-2 fa fa-search form-control-feedback"></i>
                        </div>
                        <input type="text" placeholder="Buscar" aria-label="Buscar" 
                        class="form-control form-control-sm form-control-rounded preloader_16" 
                        name="parametro" value="{{$request->input("parametro")}}">
                        <button class="btn btn-rounded btn-orange btn-busca-site font-menu" type="button"><b>OK</b></button>
                    </div>
                </form>
            </div>
            <div class="form-row pr-3 pl-3">
                <a type="button" class="nav-link text-primary font-menu" href="{{ config('app.url') }}/fale-conosco">
                    <b class="menu-text-fale-conosco">FALE CONOSCO</b>
                    <img class="ml-0 pt-0 pb-0 pr-0 pl-0 btn btn-hover-headphone" 
                    src="{{asset('images/cms/headphone.png') }}">
                </a>
            </div>
        </li> --}}
        
        <li class="nav-item  busca-top">
            <div class="form-row has-feedback pl-0 ml-0 mr-0 barra-busca-menu">
                <form id="form-busca-site" class="form-inline" action="busca-site">
                    <div class="input-group input-group-rounded bg-white shadow-lg searchAndDestroy">
                        <div class="input-group-prepend align-items-center">
                            <i class="text-orange pl-2 fa fa-search form-control-feedback"></i>
                        </div>
                        <input type="text" placeholder="Buscar" aria-label="Buscar" 
                        class="form-control form-control-sm form-control-rounded " 
                        name="parametro" value="{{$request->input("parametro")}}">
                        <button class="btn btn-rounded btn-orange btn-busca-site font-menu" type="button"><b>OK</b></button>
                    </div>
                </form>
            </div>
        </li>
        <li class="nav-item contato-topo">
            <div class="form-row pr-3 pl-3">
                <a type="button" class="nav-link text-primary font-menu" href="{{ config('app.url') }}/fale-conosco">
                    <b class="menu-text-fale-conosco">FALE CONOSCO</b>
                    <img class="ml-0 pt-0 pb-0 pr-0 pl-0 btn btn-hover-headphone" 
                    src="{{asset('images/cms/headphone.png') }}">
                </a>
            </div>
        </li>
    </ul>
</div>


