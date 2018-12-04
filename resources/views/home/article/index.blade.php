@extends('home.layouts.master')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">

                    <div class="card" data-toggle="lists" data-lists-values='["name"]'>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <!-- Title -->
                                    @auth()
                                        <a href="{{route ('homearticle.create')}}" class="btn btn-primary">
                                            文章发布
                                        </a>
                                    @else
                                        <p class="text-center fa fa-hand-o-right"> 亲:<a
                                                    href="{{route ('login',['from'=>url ()->full()])}}">登录</a>后才能<strong
                                                    class="">发表文章</strong>哦!</p>

                                    @endauth
                                    <a href="{{route ('home.article.index',['num'=>0])}}"
                                       class="btn btn-success">所有文章</a>
                                    <a href="{{route ('home.article.index',['num'=>3])}}" class="btn btn-white">技术分享</a>
                                    <a href="{{route ('home.article.index',['num'=>5])}}" class="btn btn-white">码农生活</a>
                                    <a href="{{route ('home.article.index',['num'=>2])}}" class="btn btn-white">桌面文化</a>
                                    <a href="{{route ('home.article.index',['num'=>1])}}" class="btn btn-white">程序人生</a>
                                    <a href="{{route ('home.article.index',['num'=>4])}}" class="btn btn-white">问答求助</a>
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
                                                <a href="{{route ('member.user.show',$article->user)}}"
                                                   class="avatar avatar-lg">
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
                                            @auth()
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{route ('homearticle.show',$article)}}"
                                                           class="dropdown-item">
                                                            查看文章
                                                        </a>


                                                        @can('update',$article)
                                                            <a href="{{route ('homearticle.edit',$article)}}"
                                                               class="dropdown-item">
                                                                修改文章
                                                            </a>
                                                        @endcan
                                                        @can('delete',$article)
                                                            <a href="Javascript:;" onclick="del(this)"
                                                               class="dropdown-item">
                                                                删除文章
                                                            </a>
                                                        @endcan

                                                        <form action="{{route ('homearticle.destroy',$article)}}"
                                                              method="post">
                                                            @csrf @method('delete')
                                                        </form>

                                                    </div>
                                                </div>
                                                @endauth
                                            </div>
                                        </div> <!-- / .row -->

                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="container ">
                            <div class="center-block">
                                {{$articles->appends(['num' =>$num])->links()}}
                            </div>

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>
    </div>
@endsection
@push('js')
    <script>
        function del(obj) {
            require(['hdjs', 'bootstrap'], function (hdjs) {
                hdjs.confirm('确定删除吗?', function () {
                    $(obj).next('form').submit();
                })
            })
        }
    </script>
@endpush