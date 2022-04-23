@extends('layouts')
@section('title', 'job item')
@section('banner')
    <section class="banner contact-banner">
        <div class="banner-overley"></div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-content-search">
                    <div class="position-info">
                        <div class="banner-text">
                            <h1>{{$footerItem->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="job-item-content">
        <div class="container">
            <div class="job-item">
                <div class="job-item-info">{!! $footerItem->description !!}</div>
            </div>
        </div>
    </div>
@endsection



