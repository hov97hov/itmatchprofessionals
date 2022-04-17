@extends('layouts')
@section('title', 'Home')
@section('content')
    @include('content.banner')
{{--    @include('content.statistics')--}}
    @include('content.job-list')
{{--    @include('content.work-companys')--}}
    @include('content.locking')
@endsection




