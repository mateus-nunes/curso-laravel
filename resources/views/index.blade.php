@extends("layout")

@section("main")
    <h1 class="text-center">Minicurso Laravel</h1>
    <p>Data: <b>09/12/2025</b></p>
    <p class="text-justify">O minicurso tem como objetivo apresentar os fundamentos essenciais do framework Laravel, capacitando o estudante a compreender sua estrutura, criar rotas, trabalhar com controllers, models, migrations e construir interfaces básicas utilizando o mecanismo de templates Blade. Ao final, o participante será capaz de desenvolver um CRUD simples com operações de cadastro, edição, listagem e remoção de registros, aplicando boas práticas e recursos nativos do framework.</p>

    <h4>Conteúdos a serem abordados</h4>
    <ul>
        <li>
            <strong>Introdução ao Laravel</strong>
            
            <ul>
                <li>O que é o framework e seus principais componentes</li>
                <li>Visão geral da estrutura de pastas do projeto</li>
            </ul>
        </li>
        <li>
            <b>Ambiente e configurações iniciais</b>
            <ul>
                <li>Instalação do Laravel</li>
                <li>Uso do Artisan</li>
                <li>Configuração de banco de dados e arquivo .env</li>
            </ul>
        </li>
        <li>
            <b>Rotas (Routes)</b>
            <ul>
                <li>Rotas básicas</li>
                <li>Rotas com parâmetros</li>
                <li>Rotas Resource</li>
            </ul>
        </li>
        <li>
            <b>Controllers</b>
            <ul>
                <li>Criação e organização de controllers</li>
                <li>Controle do fluxo entre rotas e views</li>
            </ul>
        </li>
        <li>
            <b>Models e Migrations</b>
            <ul>
                <li>Criação de tabelas com migrations</li>
                <li>Manipulação de dados com Eloquent ORM</li>
            </ul>
        </li>
        <li>
            <b>Views com Blade</b>
            <ul>
                <li>Criação de interfaces</li>
                <li>Templates, layouts e componentes básicos</li>
            </ul>
        </li>
        <li>
            <b>Validação de Dados</b>
            <ul>
                <li>Uso de Form Requests</li>
                <li>Exibição de mensagens de erro no Blade</li>
            </ul>
        </li>
        <li>
            <b>Desenvolvimento de um CRUD Completo</b>
            <ul>
                <li>Cadastro, listagem, edição e exclusão de produtos</li>
                <li>Paginação e mensagens de feedback ao usuário</li>
            </ul>
        </li>
    </ul>
    @endsection
