@extends('Fronted.layouts.master')

@section('title')
    {{$title}}
@endsection

@section('content')
    {!! gePageSection($title) !!}
    <div id="blog" class="blog-section pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                @if($blogs->count() > 0)
                @foreach($blogs as $row)
                <div class="col-sm-4">
                    <div class="blog-single">
                        <div class="thumb">
                            <img src="{{getImageUrl('Blog',$row->icon)}}" alt="blog image">
                        </div>
                        <div class="post-desk">
                            <div class="post-meta">
                                <span class="meta-left"><i class="fa fa-tags"></i><a href="{{route('Blog.singleBlog',['blog_id'=>$row->id])}}">{{$row->tags}}</a></span>
                                <span class="meta-right"><i class="fa fa-comments-o"></i>{{$row->comments->count()}}</span>
                            </div>
                            <h3 class="title"><a href="{{route('Blog.singleBlog',['blog_id'=>$row->id])}}">{{$row->title}}</a></h3>

                        </div>
                        <div class="post-author">

                            <div class="name">
                                {{$row->author}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                    @else
                    <h3>لا توجد مقالات متوفرة</h3>
                @endif
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <nav class="page-navigation">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li class="active"><a href="#">2</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>


@endsection
