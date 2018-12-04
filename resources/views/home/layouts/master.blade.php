<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{hd_config ('base.description')}}">
    <meta name="keyword" content="{{hd_config ('base.keyword')}}">
    <meta name="toTop" content="true">
    <!-- Libs CSS -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/css/theme.min.css">
    {{--//轮播图--}}
    <link rel="stylesheet" href="{{asset ('org/css/swiper.min.css')}}">
    {{--icon小图标的在线文件--}}
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>{{hd_config ('base.title')}}</title>
    {{--设置active字体颜色的css--}}
    @stack('css')

</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-black">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mr-auto" href="#">
            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/vp.png" alt="..." class="navbar-brand-img">
        </a>
        <form class="form-inline mr-4 d-none d-lg-flex" action="{{route ('homesearch')}}">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists"
                 data-lists-values='["name"]'>
                <!-- Input -->
                <input type="search" name="wd" class="form-control form-control-prepended  dropdown-toggle search"
                       data-toggle="dropdown" placeholder="搜索关键词" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fe fe-search "></i>
                    </div>
                </div>
            </div>
        </form>
        <div class="navbar-user">
            <!-- Dropdown -->
            @auth()
                <div class="dropdown mr-4 d-none d-lg-flex">
                    <!-- Toggle -->
                    <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
              <span class="icon  @if(auth ()->user ()->unreadNotifications()->count()!=0) active @endif">
                <i class="fe fe-bell"></i>
              </span>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                        新的通知
                                    </h5>

                                </div>
                                <div class="col-auto">
                                    <!-- Link -->
                                    @auth()
                                        <a href="{{route ('member.notify',auth ()->user ())}}" class="small">
                                            查看所有
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        @auth()
                            @if(auth ()->user ()->unreadNotifications()->count()!=0)
                            @foreach(auth ()->user ()->unreadNotifications()->limit(3)->get() as $notification)

                                <div class="card-body">

                                    <!-- List group -->
                                    <div class="list-group list-group-flush my--3">
                                        <a class="list-group-item px-0" href="#!">

                                            <div class="row">

                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img src="{{$notification['data']['user_icon']}}" alt="..."
                                                             class="avatar-img rounded-circle">

                                                    </div>

                                                </div>
                                                <div class="col ml--2">

                                                    <!-- Content -->
                                                    <div class="small text-muted">
                                                        <strong class="text-body">{{$notification['data']['user_name']}}</strong>
                                                        <strong class="text-body">评论了</strong> <strong
                                                                class="text-body">{{$notification['data']['article_title']}}</strong>
                                                        <strong class="text-body"></strong>.
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <small class="text-muted">
                                                        {{$notification->created_at->diffForHumans()}}
                                                    </small>

                                                </div>
                                            </div> <!-- / .row -->

                                        </a>

                                    </div>

                                </div>
                                <hr>
                            @endforeach
                               @else
                                <p class="text-center text-muted">暂时没有新消息</p>
                                @endif
                        @endauth

                    </div> <!-- / .dropdown-menu -->

                </div>
        @endauth
        <!-- Dropdown -->
            <div class="dropdown">
                @auth()
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{auth()->user()->ico}}" alt="..." class="avatar-img rounded-circle">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{route ('member.user.show',auth ()->user ())}}" class="dropdown-item">个人中心:</br><span
                                    style="font-size:smaller;color:blue;">{{auth ()->user ()->name}}</span></a>
                        <hr class="dropdown-divider">

                        @can('view',Auth::user () )

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


        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link fa fa-home " href="{{route ('home')}}">
                        首页
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link fa fa-list" href="{{route ('homearticle.index')}}" id="topnavPages" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        热门话题
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</div>


@yield('content')

<footer class="container">

    <hr class="my-0">
    <div class="text-center py-6">
        <div>
            <p class="text-muted">我们的使命：传播互联网前沿技术，帮助更多的人实现梦想</p>
            <small class="small text-secondary">
                Copyright © 2010-2018 bobozhou.cn All Rights Reserved
                京ICP备{{hd_config ('base.icp')}}号-3
            </small>
            <p class="small text-secondary">
                <i class="fa fa-phone-square" aria-hidden="true"></i> : 010-8888888
                <i class="fa fa-telegram ml-2" aria-hidden="true"></i> :
                <a href="mailto:215414234@qq.com" class="text-secondary">
                    215414234@qq.com
                </a>
                <br>
            </p>
        </div>

    </div>

</footer>

@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['bootstrap'])
</script>
@stack('js')
</body>
</html>