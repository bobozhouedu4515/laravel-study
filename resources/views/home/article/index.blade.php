@extends('home.layouts.master')
@section('content')

    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <!-- Title -->
                    <h4 class="modal-title">
                        Notifications
                    </h4>

                    <!-- Close -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
                    </button>

                </div>
                <div class="modal-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my--3">
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Dianna Smiley</strong> shared your post with <strong
                                                class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo
                                            Hess</strong>, and <strong class="text-body">3 others</strong>.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Adolfo Hess</strong> commented
                                        <blockquote class="text-body">“I don’t think this really makes sense to do
                                            without approval from Johnathan since he’s the one...”
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-4.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-5.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Miyah Myles</strong> shared your post with <strong
                                                class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen
                                            Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-6.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-7.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Glen Rouse</strong> commented
                                        <blockquote class="text-body">“I don’t think this really makes sense to do
                                            without approval from Johnathan since he’s the one...”
                                        </blockquote>
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a class="list-group-item px-0" href="#!">

                            <div class="row">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm">
                                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-8.jpg"
                                             alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Content -->
                                    <div class="small text-muted">
                                        <strong class="text-body">Grace Gross</strong> subscribed to you.
                                    </div>

                                </div>
                                <div class="col-auto">

                                    <small class="text-muted">
                                        2m
                                    </small>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- SIDEBAR




    <div class="main-content">

        <!-- HEADER -->
    <div class="container">
        <div class="header">
            <div class="container-fluid">

                <!-- Body -->

            </div> <!-- / .container-fluid -->
        </div> <!-- / .header -->

        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                {{$articles}}
                    <!-- Files -->
                    <div class="card" data-toggle="lists" data-lists-values='["name"]'>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    @auth()
                                    <a  href="{{route ('homearticle.create')}}"  class="card-header-title ">

                                        文章发布
                                    </a>
                                        @else
                                       <p class="text-center fa fa-hand-o-right"> 亲:<a href="{{route ('login',['from'=>url ()->full()])}}">登录</a>后才能<strong class="">发表文章</strong>哦!</p>
                                        @endauth
                                </div>

                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">

                                        <!-- Toggle -->
                                        <a href="#!" class="small text-muted dropdown-toggle" data-toggle="dropdown">
                                            按时间排序
                                        </a>

                                        <!-- Menu -->
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item sort" data-sort="name" href="#!">
                                                最新的文章
                                            </a>
                                            <a class="dropdown-item sort" data-sort="name" href="#!">
                                                最久的文章
                                            </a>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->


                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">

                                    <!-- Form -->
                                    <form>
                                        <div class="input-group input-group-flush input-group-merge">
                                            <input type="search" class="form-control form-control-prepended search"
                                                   placeholder="Search">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="fe fe-search"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="card-body">

                            <!-- List -->
                            <ul class="list-group list-group-lg list-group-flush list my--4">
                                @foreach($articles as $article)
                                <li class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="{{route ('member.user.show',$article->user)}}" class="avatar avatar-lg">
                                                <img src="{{$article->user->ico}}"
                                                     alt="..." class="avatar-img rounded">
                                            </a>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->

                                            <h4 class="card-title mb-1 name">
                                                <a href="{{route ('homearticle.show',$article)}}">{{$article->title}}</a>
                                            </h4>

                                            <!-- Text -->
                                            <p class="card-text small text-muted" style="color: blue">
                                                栏目:{{$article->category->title}}
                                            </p>
                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                              {{$article->user->name}} 发布于:
                                                <time datetime="2018-01-03">{{$article->created_at->diffForHumans()}}</time>
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Button -->


                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{route ('homearticle.show',$article)}}" class="dropdown-item">
                                                        查看文章
                                                    </a>


                                                    @can('update',$article)
                                                    <a href="{{route ('homearticle.edit',$article)}}" class="dropdown-item">
                                                       修改文章
                                                    </a>
                                                    @endcan
                                                    @can('delete',$article)
                                                    <a href="#!" onclick="del(this)" class="dropdown-item">
                                                        删除文章
                                                    </a>
                                                    @endcan

                                                        <form action="{{route ('homearticle.destroy',$article)}}" method="post">
                                                            @csrf @method('delete')
                                                        </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->

                                </li>
                            @endforeach
                            </ul>


                        </div>

                    </div>

                </div>
            </div> <!-- / .row -->
        </div>
    </div>
    <script>
        function del(obj) {
            if (confirm('确认删除吗?')){
                $(obj).next('form').submit();
            }
        }

    </script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/chart.js/dist/Chart.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/chart.js/Chart.extension.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/highlight.pack.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/list.js/dist/list.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/js/select2.min.js"></script>

    <!-- Theme JS -->
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/js/theme.min.js"></script>



@endsection