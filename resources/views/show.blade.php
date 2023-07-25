@extends('layouts.app')

@section('content')
    <div>
        <h1>Nome progetto: {{ $projects->title }}</h1>

        <span>Data pubblicazione: {{ $projects->publish_date }}</span>

        <p>Descrizione: {{ $projects->description }}</p>

        <span>Accessibilità: {{ $projects->accessibility }}</span>

        <br>
        @foreach ($types->project as $project)
            <span class="bg-warning">
                Tipo progetto: {{ $project->type_name }}
            </span>
        @endforeach
    </div>
@endsection
