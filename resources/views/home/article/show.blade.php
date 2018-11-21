@extends('home.layouts.master')
@section('content')
    <div class="container">
    <div class="card-body">

        <!-- Header -->
        <div class="mb-3">
            <div class="row align-items-center">
                <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>

                </div>
                <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        {{$article->user->name}}
                            </font></font></h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4小时前</font></font></time>
                    </p>

                </div>
                <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                                Action
                            </a>
                            <a href="#!" class="dropdown-item">
                                Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                                Something else here
                            </a>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

        <!-- Text -->
        <p class="mb-3">{{$article->content}}
                   </p>

        <p class="mb-4">
                    </p>

        <!-- Image -->
        <p class="text-center mb-3">
            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/posts/post-1.jpg" alt="..." class="img-fluid rounded">
        </p>

        <!-- Buttons -->
        <div class="mb-3">
            <div class="row">
                <div class="col">

                    <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                😬1
                            </font></font></a>
                    <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                👍2
                            </font></font></a>
                    <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                添加反应
                            </font></font></a>

                </div>
                <div class="col-auto mr--3">

                    <div class="avatar-group d-none d-sm-flex">
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Ab Hadley">
                            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Adolfo Hess">
                            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Daniela Dewitt">
                            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                        </a>
                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="" data-original-title="Miyah Myles">
                            <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle border border-white">
                        </a>
                    </div>

                </div>
                <div class="col-auto">

                    <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                分享
                            </font></font></a>

                </div>
            </div> <!-- / .row -->
        </div>

        <!-- Divider -->
        <hr>

        <!-- Comments -->

        <div class="comment mb-3">
            <div class="row">
                <div class="col-auto">

                    <!-- Avatar -->
                    <a class="avatar" href="profile-posts.html">
                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>

                </div>
                <div class="col ml--2">

                    <!-- Body -->
                    <div class="comment-body">

                        <div class="row">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="comment-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            艾哈德利
                                        </font></font></h5>

                            </div>
                            <div class="col-auto">

                                <!-- Time -->
                                <time class="comment-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            11:12
                                        </font></font></time>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    看起来很好的Dianna！</font><font style="vertical-align: inherit;">我喜欢左边的图像网格，但是处理起来感觉很多，并没有真正</font></font><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">告诉</font></font></em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我产品的作用？</font><font style="vertical-align: inherit;">我认为使用短循环视频或类似的演示产品可能会更好？
                                </font></font></p>

                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

        <div class="comment mb-3">
            <div class="row">
                <div class="col-auto">

                    <!-- Avatar -->
                    <a class="avatar" href="profile-posts.html">
                        <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>

                </div>
                <div class="col ml--2">

                    <!-- Body -->
                    <div class="comment-body">

                        <div class="row">
                            <div class="col">

                                <!-- Title -->
                                <h5 class="comment-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            阿道夫·赫斯
                                        </font></font></h5>

                            </div>
                            <div class="col-auto">

                                <!-- Time -->
                                <time class="comment-time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            11:12
                                        </font></font></time>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Text -->
                        <p class="comment-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    您是否有机会将网格链接到使用Launchday构建的网站的公共图库？
                                </font></font></p>

                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

        <!-- Divider -->
        <hr>

        <!-- Form -->
        <div class="row align-items-start">
            <div class="col-auto">

                <!-- Avatar -->
                <div class="avatar">
                    <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                </div>

            </div>
            <div class="col ml--2">

                <!-- Input -->
                <form>
                    <label class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发表评论...</font></font></label>
                    <textarea class="form-control" placeholder="Leave a comment" rows="2"></textarea>
                </form>

            </div>
        </div> <!-- / .row -->

    </div>
    </div>
@endsection()