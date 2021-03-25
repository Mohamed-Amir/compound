@extends('Fronted.layouts.master')

@section('title')
    جمعية أضواء الخير
    @endsection

@section('content')
    @include('Fronted.layouts.Home.slider')
    @include('Fronted.layouts.Home.icons')
    @include('Fronted.layouts.Home.about')
    @include('Fronted.layouts.Home.blog')
    @include('Fronted.layouts.Home.numbers')
    @include('Fronted.layouts.Home.subscribe')
    @include('Fronted.layouts.Home.clients')
@endsection