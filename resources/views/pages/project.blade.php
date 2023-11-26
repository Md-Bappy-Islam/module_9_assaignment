@extends('layout.app')
@section('section')
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Projects</h6>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-4">
                        <a href="#" class="portfolio-card">
                            <img src="{{ asset($item['image']) }}" class="portfolio-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                            <span class="portfolio-card-overlay">
                                <span class="portfolio-card-caption">
                                    <h4>{{ $item['name'] }}</h5>
                                        <p class="font-weight-normal">{{ $item['build'] }}</p>
                                </span>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
