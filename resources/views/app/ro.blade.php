@extends('layouts.app_ro', ['title' => "$pageros->seo_title", 'description' => "$pageros->description"])
@section('content')
    @include('app.includes.header_ro')
    @include('app.includes.carousel_ro')
    @include('app.includes.content_ro')
    @include('app.includes.call_us_ro')
    @include('app.includes.footer_ro')
@endsection
