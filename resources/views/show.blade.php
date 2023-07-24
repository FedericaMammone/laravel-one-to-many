@extends('layouts.app')

@section('content')
    <div>
        <h1>Nome progetto: {{ $projects->title }}</h1>

        <span>Data pubblicazione: {{ $projects->publish_date }}</span>

        <p>Descrizione: {{ $projects->description }}</p>

        <span>Accessibilità: {{ $projects->accessibility }}</span>
    </div>
@endsection
