@extends('Fronted.layouts.master')

@section('title')
    {{$title}}
    @endsection

@section('content')
   {!! gePageSection($title) !!}

    <!-- Gallery -->
    <div class="gallery-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">

                <div class="gallery-isotope" style="clear: left;">
                    @foreach($media as $row)
                    <div class="col-sm-3 item cat-1">
                        <div class="thumb">
                            <a data-effect="mfp-zoom-in" href="{{getImageUrl($folder,$row->image)}}"><img src="{{getImageUrl($folder,$row->image)}}" alt="gallery"></a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection