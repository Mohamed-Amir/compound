<div id="header--fixed" class="header">
    <div class="nav-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="phone">
                        <i class="fa fa-volume-control-phone"></i>+ {{about()->our_phone}}
                    </div>
                    <div class="email">
                        <i class="fa fa-envelope"></i>{{about()->our_email}}
                    </div>
                </div>

                <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                    <div class="social">
                        @foreach(social() as $row)
                        <a class="icon-{{$row->name}}" target="_blank" href="{{$row->link}}"><i class="fa fa-{{$row->name}}-square"></i></a>
                            @endforeach
                    </div>



                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="col-md-6"><a href="/"><img class="اضواء الخير" src="/Fronted/images/logo.png" alt="logo"></a></div>
        <div class="col-md-6"> <a class="navbar-brand" href="/"><img class="رؤية 2030" src="/Fronted/images/vision-logo.png" alt="logo"></a></div></div>


    <div id="main-nav" class="main-nav">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="{{route('General.Reports')}}"> الحوكمة والتقارير</a></li>
                        <li><a href="{{route('Team.Team')}}">اصحاب الهمم</a></li>
                        <li><a href="{{route('General.about_us')}}"> تعرف علينا</a></li>
                        <li><a href="{{route('General.volunteer')}}">  وحدة التطوع </a></li>
                        <li><a href="{{route('General.media')}}">  المركز الإعلامي </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">الخدمات الإلكترونية <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu">
                                    <a href="{{route('Subscribe.Active')}}" class="dropdown-toggle" >عضو عامل</a>
                                    <a href="{{route('Subscribe.Associate')}}" class="dropdown-toggle" >عضو منتسب </a>
                                </li>

                            </ul>
                        </li>


                        <li><a href="activites.html">  أنشطتنــا </a></li>

                        <li><a href="{{route('Blog.allBlog')}}">  المدونة </a></li>
                        <li><a href="{{route('General.contact_us')}}">تواصل معنا</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>
