@php
$sliders=\App\Models\Slider::where('status',1)->where('image','!=',null)->get();
@endphp

<div class="home-slider" style="direction: ltr;">
    @foreach($sliders as $row)
    <div class="item">
        <div class="slider-image">
            <img alt="slide" src="{{getImageUrl('Slider',$row->image)}}">
        </div>
        <div class="slider-content hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <h2>{{$row->title}}</h2>
                        <p>{{$row->desc}}</p>
                        @if($row->btn_link AND $row->btn_name)
                        <a class="btn btn-red" href="{{$row->btn_link}}">{{$row->btn_name}}</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
</div>

{{-- quik links --}}
<div class="home_quicklinks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <div class="quicklinks1"><a href="{{route('General.volunteer')}}"> <img src="/Fronted/images/quicklinks_1.png"> وحدة التطوع </a>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="quicklinks2"><a href="{{route('Team.Team')}}"> <img src="/Fronted/images/quicklinks_2.png"> أصحاب الهمم </a></div>
            </div>
        </div>
    </div>
</div>
