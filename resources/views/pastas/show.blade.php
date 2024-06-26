@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli della pasta: {{ $pasta->title }}</h1>
        <img class="w-25" src="{{ $pasta->image }}" alt="{{ $pasta->title }}">
        <table class="table">
            <dl>
                <dt>Tipologia</dt>
                <dd>{{ $pasta->type }}</dd>
                <dt>Peso</dt>
                <dd>{{ $pasta->weight }}</dd>
                <dt>Tempo di cottura</dt>
                <dd>{{ $pasta->cooking_time }}</dd>
            </dl>

            <div>
                <h4>Descrizione</h4>
                <p>{{ $pasta->description }}</p>
            </div>
    </div>
@endsection
