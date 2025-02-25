@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation-errors')

                <form class="py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">

                    <h1 class="display-4">@lang('Edit project')</h1>
                    <hr>
                    @method('PATCH')

                    @include('projects._form', ['btnText' => 'Actualizar'])

                </form>
            </div>
        </div>
    </div>
@endsection
