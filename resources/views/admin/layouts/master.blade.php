<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.css">
    <!-- Theme CSS -->
    {{--//轮播图--}}
    <link rel="stylesheet" href="{{asset ('org/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/css/theme.min.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@stack('css')
    <title>后台管理系统</title>
</head>
<body>

<!-- MODALS
================================================== -->
<!-- Modal: Members -->

<!-- SIDEBAR
================================================== -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">

        <!-- Toggler -->

        <!-- Brand -->
        <a class="navbar-brand" href="#!">
            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/vp.png" class="navbar-brand-img
          mx-auto" alt="...">
        </a>
        <!-- User (xs) -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- 右侧边栏 -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{route ('home')}}">
                        <i class="fe fe-home"></i> 主页
                    </a>
                </li>
                @hasanyrole('category-admin|webmaster|masterhelper')
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-file"></i> 栏目管理
                    </a>
                    <div class="collapse " id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route ('admin.category.create')}}" class="nav-link" data-toggle="" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                                    添加栏目
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route ('admin.picture.index')}}">
                                    <i class="fe fe-clipboard"></i> 前台图片
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('development-admin|webmaster|masterhelper')
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarAuth">
                        <i class="fe fe-user"></i> 修改配置
                    </a>
                    <div class="collapse " id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">  <a href="{{route ('admin.config.edit',['name'=>'base'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    基础配置
                                </a></li>
                            <li class="nav-item">  <a href="{{route ('admin.config.edit',['name'=>'mail'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    邮箱配置
                                </a></li>
                            <li class="nav-item"><a href="{{route ('admin.config.edit',['name'=>'wechat'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    微信配置
                                </a></li>
                            <li class="nav-item"><a href="{{route ('admin.config.edit',['name'=>'upload'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    上传配置
                                </a></li>
                            <li class="nav-item"><a href="{{route ('admin.config.edit',['name'=>'code'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    验证码配置
                                </a></li>
                            <li class="nav-item"><a href="{{route ('admin.config.edit',['name'=>'search'])}}" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    搜索配置
                                </a></li>
                          </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('wechat-admin|webmaster|masterhelper')
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarWechat" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="fe fe-message-square"></i> 微信管理
                    </a>
                    <div class="collapse " id="sidebarWechat">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('wechat.button.index')}}" class="nav-link" >
                                    微信菜单
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('wechat.response_text.index')}}" class="nav-link" >
                                    文本回复
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('wechat.response_news.index')}}" class="nav-link" >
                                    图文回复
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('wechat.response_base.create')}}" class="nav-link" >
                                   基本回复
                                </a>

                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('webmaster')
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#sidebarLayouts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="fe fe-layout"></i> 权限管理
                    </a>
                    <div class="collapse " id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route ('role.userlist')}}" class="nav-link active">
                                    用户列表
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route ('role.role.index')}}" class="nav-link">
                                    角色管理
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route ('role.permission.index')}}" class="nav-link active">
                                   权限列表
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-topnav.html" class="nav-link">
                                    Topnav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarDashboard" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboard">
                                    Without hero chart
                                </a>
                                <div class="collapse " id="sidebarDashboard">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-no-hero.html" class="nav-link ">
                                                Sidenav
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-side-topnav-no-hero.html" class="nav-link ">
                                                Sidenav + top nav
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-topnav-no-hero.html" class="nav-link">
                                                Topnav
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">

            <!-- Heading -->
            <h6 class="navbar-heading text-muted">
                系统配置
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">

                <li class="nav-item">
                    <a class="nav-link " href="changelog.html">
                        <i class="fe fe-git-branch"></i> 待开发 <span class="badge badge-primary ml-auto">v1.1.2</span>
                    </a>
                </li>
            </ul>



        </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container-fluid -->
</nav>
<div class="main-content">
@yield('content')
</div>
@include('layouts.hdjs')
@include('layouts.message')
<script>
    require(['bootstrap'])
 </script>
@stack('js')
</body>
</html>
