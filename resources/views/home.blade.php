@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 title-home">Desarrollo Web con PHP y Laravel</h1>
            <p class="lead text-secondary">Este es un primer programa creado utilizando las herramientas de php y laravel</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/Home.svg" alt="Desarrollo web">
        </div>
    </div>
</div>
@endsection

