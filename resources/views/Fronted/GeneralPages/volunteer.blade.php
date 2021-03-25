@extends('Fronted.layouts.master')

@php
    $Voulnter=\App\Models\Voulnter::where('status',1)->where('image','!=',null)->paginate(36);
@endphp

@section('title')
    وحدة التطوع
@endsection

@section('content')
    {!! gePageSection('وحدة التطوع') !!}


    <div class="donation-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">
                @foreach($Voulnter as $row)
                <div class="col-sm-3">
                    <div class="blog-single">

                        <div class="post-desk">

                            <h3 class="title"><a target="_blank" href="{{getImageUrl('Voulnter',$row->image)}}">{{$row->name}}</a></h3>

                        </div>
                        <div class="post-author">
                            <div class="thumb">
                                <img src="/Fronted/images/pdf.png" alt="author">
                            </div>
                            <div class="name">
                                <a target="_blank" href="{{getImageUrl('Voulnter',$row->image)}}"> تحميل</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
    </div>

@endsection