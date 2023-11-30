@extends('layouts.general')

@section('title', 'Home')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
    <main>
        <h1>Oportunidades para programadores</h1>
        <button>Ver nossas vagas</button>
        <p>Acesse uma variedade de oportunidades exclusivas para desenvolvedores. <br> Encontre a vaga ideal para programador(a) Front-End, Back-End, Mobile ou Full Stack que você procura.</p>
    </main>

    <section>
        <div class="for-you">
            <x-card-desc :title="'Apenas para programadores'" description="Uma plataforma totalmente dedicada aos programadores" />
            <x-card-desc title="Totalmente gratuito" description="Registre-se agora e preencha seu perfil para candidatar-se gratuitamente a todas as vagas" />
        </div>

        <div class="vagas">
            <h2>Ultimas Vagas</h2>
            <div>
                <a href="#">
                    <div class="vagas-card">
                        <img src="{{asset('img/logo.jpg')}}" alt="Logo da empresa">
                        <p>Desenvolvedor back-end</p>
                    </div>
                </a>
                <a href="#">
                    <div class="vagas-card">
                        <img src="{{asset('img/logo.jpg')}}" alt="Logo da empresa">
                        <p>Desenvolvedor back-end</p>
                    </div>
                </a>
                <a href="#">
                    <div class="vagas-card">
                        <img src="{{asset('img/logo.jpg')}}" alt="Logo da empresa">
                        <p>Desenvolvedor back-end</p>
                    </div>
                </a>
            </div>

            <button>VER TODAS AS VAGAS</button>
        </div>
        <div class="programmer">
            <h2>Programadores</h2>
            <div>
                <a href="#">
                    <div class="programmer-card">
                        <img src="{{asset('img/perfil.png')}}" alt="Foto do programador" width="200px">
                        <p>Rodrigo Vitor</p>
                        <span>Front-end</span>
                    </div>
                </a>
                <a href="#">
                    <div class="programmer-card">
                        <img src="{{asset('img/perfil.png')}}" alt="Foto do programador" width="200px" alt="Foto do programador">
                        <p>Lucas José</p>
                        <span>Back-end</span>
                    </div>
                </a>
                <a href="#">
                    <div class="programmer-card">
                        <img src="{{asset('img/perfil.png')}}" alt="Foto do programador" width="200px" alt="Foto do programador">
                        <p>Maria Clara</p>
                        <span>Full-stack</span>
                    </div>
                </a>
            </div>

            <button>VER TODOS OS PROGRAMADORES</button>
        </div>
    </section>
@endsection