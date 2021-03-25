@extends('Fronted.layouts.master')
@php
$hmm=\App\Models\Team::where('status',1)->orderBy('id','desc')->paginate(2);
@endphp
@section('title')
    اصحاب الهمم
    @endsection

@section('content')

    {!! gePageSection('اصحاب الهمم') !!}

    <section class="team-one team-page mg-top-100 mg-bottom-70">
        <div class="container">


            <div class="row">
            @foreach($hmm as $row)
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="team-one__single team-one__content">
                        <div class="team-one__image">
                            <img src="{{getImageUrl('Team',$row->image)}}" alt="">
                            <p class="team-one__designation">{{$row->specialization}}</p><!-- /.team-one__designation -->

                        </div><!-- /.team-one__image -->
                        <div class="">
                            <h2 class="team-one__name"><a href="{{route('Team.singleTeam',['team_id'=>$row->id])}}">{{$row->name}}</a></h2>
                            <!-- /.team-one__name -->
                            <p class="team-one__text">{{$row->specialization_desc}} </p>


                            <a class="btn btn-red" href="{{route('Team.singleTeam',['team_id'=>$row->id])}}">المزيد</a>
                            <!-- /.team-one__text -->
                        </div><!-- /.team-one__content -->

                    </div>
                </div><!-- /.col-lg-3 -->
                @endforeach

            </div><!-- /.row -->
{{--            <div class="col-sm-12">--}}
{{--                <nav class="page-navigation">--}}
{{--                    <ul class="pagination">--}}
{{--                        {{$hmm->links()}}--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
        </div><!-- /.container -->
    </section>

@endsection