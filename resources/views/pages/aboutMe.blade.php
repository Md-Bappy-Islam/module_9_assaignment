@extends('layout.app')
@section('section')
    <section class="section pt-0" id="about">
        <div class="container text-center">
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{ asset($link) }}" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        {{ $about }}
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4">Download CV</button>
                </div>
            </div>
        </div>
    </section>
@endsection
