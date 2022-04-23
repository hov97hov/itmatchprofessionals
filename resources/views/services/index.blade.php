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
                            @foreach($banner as $text)
                                <h1>{{$text->title_services_page}}</h1>
                                <p>{{$text->info_services_page}}</p>
                            @endforeach
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
                        <a href="{{route('service-item', $service->id)}}">
                            <div class="icon">
                                <i class="fa {{$service->icon}}"></i>
                            </div>
                            <div class="title">
                                <h3>{{$service->title}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="paginate">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection

