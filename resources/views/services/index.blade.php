@extends('layouts')
@section('title', 'Contacts Us')

@section('banner')
    <section class="banner contact-banner">
        <div class="banner-overley"></div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-content-search">
                    <div class="position-info">
                        <div class="banner-text">
                            <h1>Our Services</h1>
                            <p>Find your dream jobs in our powerful career website template.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="service-block">
        <div class="container">
            <div class="service-content">
                @foreach($services as $service)
                    <div class="service-item">
                    <div class="icon">
                        <i class="fa {{$service->icon}}"></i>
                    </div>
                    <div class="title">
                        <h3>{{$service->title}}</h3>
                    </div>
                    <div class="text">
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
                <div class="paginate">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection

