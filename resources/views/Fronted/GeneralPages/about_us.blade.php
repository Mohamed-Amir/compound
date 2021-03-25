@extends('Fronted.layouts.master')

@section('title')
    {{'تعرف علينا'}}
@endsection

@section('content')
    {!! gePageSection('تعرف علينا') !!}
    <!-- About section start-->
    <div class="about-section mg-top-100 mg-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{getImageUrl('About_us',about()->image)}}">
                </div>
                <div class="col-md-8">
                    <p class="about-content">{!! about()->about_us !!}
                   </p>
                </div>
            </div>

        </div>
    </div>

    <!-- About feature  -->
    <div class="about-feature mg-bottom-55">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">

                        <div class="media">
                            <img src="/Fronted/images/about1.png">
                            <div class="media-body">
                                <h3 class="feature-title">الرؤية</h3>
                                <div>
                                    {{about()->our_vision}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">

                        <div class="media">
                            <img src="/Fronted/images/about2.png">

                            <div class="media-body">
                                <h3 class="feature-title">الرسالة</h3>
                                <div>{{about()->our_massage}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="feature-list ">

                        <div class="media">
                            <img src="/Fronted/images/about3.png">

                            <div class="media-body">
                                <h3 class="feature-title">الاهداف</h3>
                                <div> {{about()->our_goals}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Call to action -->
    <div class="call-to-action pd-top-80 pd-bottom-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>هل انت من اصحاب الهمم ؟</h2>
                    <p>ذوي الهمم فئة مهمة في المجتمع نعمل جاهدين لنفتح لهم
                        افاق في متفرقات الحياة سواء كان طفلا أو رجلا او إمراة</p>
                    <a class="btn btn-red mg-top-30" href="">شارك معنا الان</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-2 clients pd-top-80 pd-bottom-80" data-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section-title">شركــاء النجاح <i class="fa fa-user"></i></h2>
                </div>
                <div class="col-md-12">
                    @foreach(getClients(10) as $row)
                        <img src="{{getImageUrl('Client',$row->image)}}" alt="client">
                    @endforeach
                </div>
{{--                <div class="col-sm-12 mg-top-30 text-center">--}}
{{--                    <a href="our-client.html">عرض الكل</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>


@endsection
