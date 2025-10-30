@extends('layouts.app')

@section('title', 'Digitaal Museum')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section class="intro">
        <h1>Digitaal Museum</h1>
        <p>Ontdek geschiedenis, figuren en gevechten met je AI-gids</p>
    </section>

    <section class="cards">
        <div class="card">
            <h3>Geschiedenis</h3>
            <p>Leer over belangrijke periodes en revoluties.</p>
            <a href="{{ route('geschiedenis') }}" class="button">Bezoek</a>
        </div>
        <div class="card">
            <h3>Figuren</h3>
            <p>Ontdek invloedrijke personen uit de geschiedenis.</p>
            <a href="{{ route('figuren') }}" class="button">Bezoek</a>
        </div>
        <div class="card">
            <h3>Gevechten</h3>
            <p>Verdiep je in historische veldslagen en strategieën.</p>
            <a href="{{ route('gevechten') }}" class="button">Bezoek</a>
        </div>
    </section>
@endsection
