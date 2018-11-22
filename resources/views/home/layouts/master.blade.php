
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <!-- Libs CSS -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/css/theme.min.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>红袖添香主页</title>
</head>
<body>
{{--Top!--}}

<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

        <!-- Toggler -->
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        {{--<a href="" class="fa fa-anchor"></a>--}}
        <a class="navbar-brand mr-auto" href="#">
            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/vp.png" alt="..." class="navbar-brand-img">
        </a>

        <!-- Form -->
        <form class="form-inline mr-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-search"></i>
                    </div>
                </div>

                <!-- Menu --><div class="dropdown-menu dropdown-menu-card">
                    {{--<div class="card-body">--}}

                        {{--<!-- List group -->--}}
                        {{--<div class="list-group list-group-flush list my--3">--}}
                            {{--<a href="team-overview.html" class="list-group-item px-0">--}}
                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Airbnb--}}
                                        {{--</h4>--}}

                                        {{--<!-- Time -->--}}
                                        {{--<p class="small text-muted mb-0">--}}
                                            {{--<span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}
                            {{--</a>--}}
                            {{--<a href="team-overview.html" class="list-group-item px-0">--}}
                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Medium Corporation--}}
                                        {{--</h4>--}}

                                        {{--<!-- Time -->--}}
                                        {{--<p class="small text-muted mb-0">--}}
                                            {{--<span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}
                            {{--</a>--}}
                            {{--<a href="project-overview.html" class="list-group-item px-0">--}}

                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar avatar-4by3">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Homepage Redesign--}}
                                        {{--</h4>--}}

                                        {{--<!-- Time -->--}}
                                        {{--<p class="small text-muted mb-0">--}}
                                            {{--<span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}

                            {{--</a>--}}
                            {{--<a href="project-overview.html" class="list-group-item px-0">--}}

                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar avatar-4by3">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Travels & Time--}}
                                        {{--</h4>--}}

                                        {{--<!-- Time -->--}}
                                        {{--<p class="small text-muted mb-0">--}}
                                            {{--<span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}

                            {{--</a>--}}
                            {{--<a href="project-overview.html" class="list-group-item px-0">--}}

                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar avatar-4by3">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Safari Exploration--}}
                                        {{--</h4>--}}

                                        {{--<!-- Time -->--}}
                                        {{--<p class="small text-muted mb-0">--}}
                                            {{--<span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}

                            {{--</a>--}}
                            {{--<a href="profile-posts.html" class="list-group-item px-0">--}}

                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Dianna Smiley--}}
                                        {{--</h4>--}}

                                        {{--<!-- Status -->--}}
                                        {{--<p class="text-body small mb-0">--}}
                                            {{--<span class="text-success">●</span> Online--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}

                            {{--</a>--}}
                            {{--<a href="profile-posts.html" class="list-group-item px-0">--}}

                                {{--<div class="row align-items-center">--}}
                                    {{--<div class="col-auto">--}}

                                        {{--<!-- Avatar -->--}}
                                        {{--<div class="avatar">--}}
                                            {{--<img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    {{--<div class="col ml--2">--}}

                                        {{--<!-- Title -->--}}
                                        {{--<h4 class="text-body mb-1 name">--}}
                                            {{--Ab Hadley--}}
                                        {{--</h4>--}}

                                        {{--<!-- Status -->--}}
                                        {{--<p class="text-body small mb-0">--}}
                                            {{--<span class="text-danger">●</span> Offline--}}
                                        {{--</p>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- / .row -->--}}

                            {{--</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                </div> <!-- / .dropdown-menu -->

            </div>
        </form>

        <!-- User -->
        <div class="navbar-user">

            <!-- Dropdown -->


            <!-- Toggle -->
            @auth()
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{auth()->user()->ico}}" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                {{--{{auth ()->user ()->id}}--}}
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route ('member.user.show',auth ()->user ())}}" class="dropdown-item">个人中心:</br><span style="font-size:smaller;color:blue;">{{auth ()->user ()->name}}</span></a>
                    <hr class="dropdown-divider">
                    {{--<a href="{{route ('home.article.index')}}" class="dropdown-item">文章管理</a>--}}

                    {{--<hr class="dropdown-divider">--}}

                    @can('view',Auth::user () )
                        {{--<a href="" class="dropdown-item">{{auth ()->user ()->name}}</a>--}}

                        <a href="{{route ('admin.category.index')}}" class="dropdown-item">后台管理</a>

                        <hr class="dropdown-divider">
                    @endcan
                    <a href="{{route ('user.logout')}}" class="dropdown-item">注销登录</a>
                </div>
            @else
                <a href="{{route ('login')}}" class="btn btn-white btn-sm">登录</a>

                <a href="{{route ('register')}}" class="btn btn-white btn-sm">注册</a>
            @endauth
        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link fa fa-home " href="{{route ('home')}}">
                        首页
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fa fa-list" href="{{route ('homearticle.index')}}" id="topnavPages" role="button"  aria-haspopup="true" aria-expanded="false">
                        热门话题
                    </a>

                </li>

                    <a class="nav-link dropdown-toggle" href="#!" id="topnavLayouts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       待开发
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavLayouts">
                        <li>
                            <a class="dropdown-item" href="{{route ('admin.member')}}">
                                查看会员表
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="dashboard-side-topnav.html">
                                Side + top nav
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item  active " href="dashboard-topnav.html">
                                Topnav
                            </a>
                        </li>
                        <li class="dropright">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="topnavDashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Without hero chart
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnavDashboard">
                                <a class="dropdown-item" href="dashboard-no-hero.html">
                                    Sidenav
                                </a>
                                <a class="dropdown-item" href="dashboard-side-topnav-no-hero.html">
                                    Side + topnav
                                </a>
                                <a class="dropdown-item " href="dashboard-topnav-no-hero.html">
                                    Topnav
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#!" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       待开发
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                        <li>
                            <a class="dropdown-item" href="getting-started.html">
                                Getting started
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="components.html">
                                Components
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="changelog.html">
                                Changelog
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div> <!-- / .container -->
</nav>
@yield('content')
@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['bootstrap'])
</script>
@stack('js')
</body>
</html>