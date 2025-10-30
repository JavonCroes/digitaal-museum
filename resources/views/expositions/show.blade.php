@extends('layouts.app')

@section('title', $exposition->title)

@section('head')
    <link rel="stylesheet" href="{{ asset('css/exposition.css') }}">
@endsection

@section('content')
<div class="exposition-container">
    <h1>{{ $exposition->title }}</h1>

    @if ($exposition->year)
        <p class="year">{{ $exposition->year }}</p>
    @endif

    <img src="{{ asset($exposition->image) }}" alt="{{ $exposition->title }}">

    <div class="description">
        <p>{{ $exposition->description }}</p>
    </div>

    <div class="back-button">
        <a href="{{ url()->previous() }}">Terug</a>
    </div>
</div>
@endsection

