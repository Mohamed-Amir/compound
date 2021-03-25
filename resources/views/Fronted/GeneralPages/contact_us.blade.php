@extends('Fronted.layouts.master')

@section('title')
    {{'تواصل معنا'}}
@endsection

@section('content')
    {!! gePageSection('تواصل معنا') !!}

    <div class="about-feature mg-bottom-55 pd-top-100">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">

                        <div class="media">
                            <img src="/Fronted/images/about1.png">
                            <div class="media-body">
                                <h3 class="feature-title">المقر</h3>
                                <div>{{about()->title}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">

                        <div class="media">
                            <img src="/Fronted/images/about2.png">

                            <div class="media-body">
                                <h3 class="feature-title">التليفون</h3>
                                <div>{{about()->our_phone}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="feature-list ">

                        <div class="media">
                            <img src="/Fronted/images/about3.png">

                            <div class="media-body">
                                <h3 class="feature-title">البريد الالكتروني</h3>
                                <div>{{about()->our_email}}</div>
                                <div><br/></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- contact-section start -->
    <div class="contact-section pd-top-100 pd-bottom-50">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 contact-main mg-bottom-50">
                    <h3 class="form-title">إرسال رسالة</h3>
                    <form id="commentForm" class="contact-form" >
                        @csrf
                        <label class="contact-title" for="message">الرسالة</label>
                        <textarea required id="message" name="message" class="input-message" rows="7" cols="30"
                                  placeholder="نص الرسالة ...."></textarea>
                        <label class="contact-title" for="name">الاسم بالكامل</label>
                        <input required id="name" name="name" class="input" type="text" placeholder="الاسم بالكامل"/>
                        <label class="contact-title" for="email">البريد الالكتروني</label>
                        <input id="email" name="email" class="input" type="text" placeholder="example@gmail.com"/>
                        <input class="btn" type="submit" id="saveComment" value="إرسال"/>
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 ">
                    <div class="contact-head">
                        <div class="g-maps">
                            <div id="map" style="height: 291px"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUmz_Riose169lAsGLx3ckI4rsCYFnpyU&callback=initMap">
    </script>
    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng("{{about()->lat}}","{{about()->lng}}");
            var map = new google.maps.Map(document.getElementById('map'), {
                center: latlng,
                zoom: 13
            });
            var marker = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: false,
                anchorPoint: new google.maps.Point(0, -29)
            });
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', function() {
                var iwContent = '<div id="iw_container">' +
                    '<div class="iw_title"><b>Location</b> : Noida</div></div>';
                // including content to the infowindow
                infowindow.setContent(iwContent);
                // opening the infowindow in the current map and at the current marker location
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    @include('Admin.includes.scripts.AlertHelper')
    <script>
        $('#commentForm').submit(function (e) {
            e.preventDefault();
            $("#saveComment").attr("disabled", true);

            Toset('الطلب قيد التتنفيد', 'info', 'يتم تنفيذ طلبك الان', false);
            var formData = new FormData($('#commentForm')[0]);
            $.ajax({
                url: '/saveContactUs',
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data.status == 1) {

                        $("#saveComment").attr("disabled", false);

                        $.toast().reset('all');
                        swal(data.message, {
                            icon: "success",
                        });
                        $('#commentForm')[0].reset();

                        $("#saveComment").attr("disabled", false);
                    }
                }
            });

        })
    </script>
    @endsection