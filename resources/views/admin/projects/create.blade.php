@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Crea una nuova pasta</h1>

        <form action="{{ route('admin.project.store') }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Data di inizio</label>
                <input type="text" class="form-control" id="start_date" name="start_date">
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Data di fine</label>
                <input type="text" class="form-control" id="end_date" name="end_date">
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
