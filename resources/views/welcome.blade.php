@extends('layout.base')

@section('content')    
    <main role="main" class="container" id="app">
        <div class="starter-template">
            <h1>{{trans('messages.welcome')}}</h1>
            <p class="lead">
                Use this Laravel skeleton to quickly start any new project.<br>
                All you get is the <a href="https://laravel.com/docs/5.6/mix">Laravel Mix</a>
                with <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        </div>
    </main>
@endsection