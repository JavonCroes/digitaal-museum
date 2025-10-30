@extends('layouts.app')

@section('title', 'Geschiedenis | Digitaal Museum')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/geschiedenis.css') }}">
@endsection

@section('content')
    <div class="history-page">
        <section class="intro">
            <h1>Ontdek de Geschiedenis</h1>
            <p>Leer over belangrijke tijdperken, beschavingen en gebeurtenissen die onze wereld gevormd hebben.</p>
        </section>

        <section class="expositions">
            @foreach($expositions as $expo)
                <div class="expo-card">
                    <img src="{{ asset($expo->image) }}" alt="{{ $expo->title }}">
                    <div class="expo-content">
                        <h3>{{ $expo->title }}</h3>
                        <p>{{ Str::limit($expo->description, 150, '...') }}</p>
                        <a href="{{ route('expositie.show', $expo->id) }}" class="button">Lees meer</a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
