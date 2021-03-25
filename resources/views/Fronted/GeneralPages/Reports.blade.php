@extends('Fronted.layouts.master')

@php
    $repots=\App\Models\Reports::where('type',2)->take(20)->get();
    $cats=\App\Models\Cat_reports::whereHas('reports')->get();
@endphp

@section('title')
    الحوكمة والتقارير
@endsection

@section('style')
    <style>

        .well {
            border: 0;
        }

        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
            background: #029803;
        }

        .nav-tabs-dropdown {
            display: none;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .nav-tabs-dropdown:before {
            content: "\e114";
            font-family: 'Glyphicons Halflings';
            position: absolute;
            right: 30px;
        }

        @media screen and (min-width: 769px) {
            #nav-tabs-wrapper {
                display: block !important;
            }
        }

        @media screen and (max-width: 768px) {
            .nav-tabs-dropdown {
                display: block;
            }

            #nav-tabs-wrapper {
                display: none;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                text-align: center;
            }

            .nav-tabs-horizontal {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            }

            .nav-tabs-horizontal > li {
                float: none;
            }

            .nav-tabs-horizontal > li + li {
                margin-left: 2px;
            }

            .nav-tabs-horizontal > li,
            .nav-tabs-horizontal > li > a {
                background: transparent;
                width: 100%;
            }

            .nav-tabs-horizontal > li > a {
                border-radius: 4px;
            }

            .nav-tabs-horizontal > li.active > a,
            .nav-tabs-horizontal > li.active > a:hover,
            .nav-tabs-horizontal > li.active > a:focus {
                color: #ffffff;
                background-color: #428bca;
            }
        }

        .nav-tabs a {
            color: #000;
            font-weight: bold;
        }

        h4 a {
            color: #000;
            font-weight: bold;
            text-align: center;
        }

        .filedownload img {
            max-width: 120px;
            margin: 0 auto;
        }

        .filedownload {
            margin-bottom: 20px;
            padding-bottom: 20px;
            padding-top: 20px;
            border: solid thin #dddfdd;
            text-align: center;
        }

        .inside .nav-tabs > li {
            float: right;
        }

        .tab-pane {
            padding: 20px;
        }
    </style>

@endsection


@section('content')
    {!! gePageSection('الحوكمة والتقارير') !!}

    <div class="registar-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">


                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                            <li class="active"><a href="#vtab1" data-toggle="tab">الحوكمة</a></li>
                            <li><a href="#vtab2" data-toggle="tab">التقارير</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="vtab1">


                                <div class="row inside">
                                    <div class="col-sm-12">
                                        <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
                                        <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal">
                                            @foreach($cats as $key=>$row)
                                            <li @if($key==0) class="active" @endif><a href="#htab{{$row->id}}" data-toggle="tab">{{$row->name}}</a></li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content">
                                            @foreach($cats as $key=>$row)

                                            <div role="tabpanel" class="tab-pane fade in @if($key==0) active @endif" id="htab{{$row->id}}">

                                                <div class="row">
                                                    @foreach($row->reports as $report)
                                                    <div class="col-md-4">
                                                        <div class="filedownload"><img src="/Fronted/images/file_icon.png"
                                                                                       class="img-fluid">
                                                            <h4><a target="_blank" href="{{getImageUrl('Reports',$report->file)}}">{{$report->name}}</a></h4>
                                                        </div>
                                                    </div>
                                                        @endforeach
                                                </div>
                                            </div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="vtab2">
                                <div class="row">
                                    @foreach($repots as $row)
                                    <div class="col-md-4">
                                        <div class="filedownload"><img src="/Fronted/images/file_icon.png" class="img-fluid">
                                            <h4><a target="_blank" href="{{getImageUrl('Reports',$row->file)}}">{{$row->name}}</a></h4>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <script>
                    $('.nav-tabs-dropdown').each(function (i, elm) {

                        $(elm).text($(elm).next('ul').find('li.active a').text());

                    });

                    $('.nav-tabs-dropdown').on('click', function (e) {

                        e.preventDefault();

                        $(e.target).toggleClass('open').next('ul').slideToggle();

                    });

                    $('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function (e) {

                        e.preventDefault();

                        $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

                    });
                </script>
            </div>
        </div>
    </div>


@endsection