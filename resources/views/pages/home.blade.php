@extends('layout.app')
@section('section')
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">{{ $name }}</span>
            </h1>
            <p class="header-subtitle">{{ $talent }}</p>
            <a class="btn btn-primary" href="{{ url($link ) }}">Visit My Works</a>
        </div>
    </header>
@endsection
