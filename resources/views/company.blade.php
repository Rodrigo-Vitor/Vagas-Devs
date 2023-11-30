@extends('layouts.general')

@section('title', 'Sou Empresa')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
@endsection

@section('content')
    <section>
        <div class="hire">
            <h1>Contrate seu programador</h1>
            <p>100 programadores cadastrados</p>
            <a href="#" class="hire-button">Comece a contratar</a>
            <span>Contrate profissionais de programação Front-End, Back-End, Mobile ou Full Stack por meio de nossa plataforma online</span>
        </div>

        <div class="for-company">
            <x-card-desc title="100% gratuito" description="Cadastre sua empresa na plataforma, divulgue vagas e encontre o programador que você procura!" />
            <x-card-desc title="Apenas candidatos alinhados" description="Nossa tecnologia assegura que apenas desenvolvedores que atendam aos requisitos da vaga possam se candidatar." />
        </div>

        <div class="how-work">
            <h2>Como funciona?</h2>
            <x-card-etapa etapa="Etapa 1:" content="Criação de vagas" desc="Crie novas vagas em nossa plataforma" />
            <x-card-etapa etapa="Etapa 2:" content="Revisão" desc="Após criar a vaga, verificaremos se todas as informações são coerentes com o mercado e com os padrões da plataforma. Tempo de revisão: 1 dia." />
            <x-card-etapa etapa="Etapa 3:" content="Receba candidatos" desc="Após a vaga ser aprovada, receba os primeiros candidatos." />
        </div>

        <div style="text-align: center; margin:60px">
            <a href="#" class="hire-button">Comece a contratar</a>
        </div>
    </section>
@endsection