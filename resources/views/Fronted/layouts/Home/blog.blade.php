@php
$blogs=\App\Models\Blog::orderBy('id','desc')->where('status',1)->take(3)->get();
@endphp

<div id="blog" class="blog-section pd-top-80 pd-bottom-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section-title">أحدث الأخبـــار <i class="fa fa-file-text-o"></i></h2>
            </div>
            @foreach($blogs as $row)
            <div class="col-sm-4">
                <div class="blog-single">
                    <div class="thumb">
                        <img alt="blog" src="{{getImageUrl('Blog',$row->icon)}}">
                    </div>
                    <div class="post-desk">
                        <div class="post-meta">

                            <span class="meta-right"><i class="fa fa-calendar"></i>{{$row->created_at->format('m/d/Y')}}</span>
                        </div>
                        <h3 class="title"><a href="{{route('Blog.singleBlog',['blog_id'=>$row->id])}}">{{$row->title}}</a></h3>
                        <p class="category-meta">{!! strip_tags(substr($row->content,0,200)) !!}</p>
                    </div>
                    <div class="post-author">

                        <div class="name">
                            <a class="btn btn-red " href="{{route('Blog.singleBlog',['blog_id'=>$row->id])}}"> المزيد</a>
                        </div>
                    </div>
                </div>
                <!-- /.end blog single -->
            </div>
                @endforeach
        </div>
    </div>
</div>
