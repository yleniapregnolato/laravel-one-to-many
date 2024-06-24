@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-4">DETTAGLI DEL PROGETTO:</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <div>
            <h3>Titolo:</h3>
            <p class="fw-bold">{{ $project->title }}</p>
        </div>
        <div>
            <h3>Tipologia:</h3>
            <p class="fw-bold">{{ $project->type?->name }}</p>
        </div>
        <div>
            <h3>Contenuto:</h3>
            <p>{{ $project->content }}</p>
        </div>
        <div>
            <h3>Slug:</h3>
            <p>{{ $project->slug }}</p>
        </div>
    </div>
@endsection
