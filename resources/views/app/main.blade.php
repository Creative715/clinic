@extends('layouts.app', ['title' => "$pages->seo_title", 'description' => "$pages->description"])
@section('content')
    @include('app.includes.header')
    @include('app.includes.carousel')
    @include('app.includes.content')
    @include('app.includes.call_us')
    @include('app.includes.footer')
@endsection
