@extends('admin.layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-4 my-5">

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    登录
                </h1>

                <!-- Subheading -->
                <p class="text-muted text-center mb-5">
                    好好学习 天天向上
                </p>

                <!-- Form -->
                <form action="{{route ('login.form',['from'=>Request::query('from')])}}" method="post">
                @csrf

                <!-- Email address -->
                    <div class="form-group">

                        <!-- Label -->
                        <label>
                            邮箱
                        </label>

                        <!-- Input -->
                        <input type="email" class="form-control" name="email" placeholder="请输入邮箱">

                    </div>

                    <!-- Password -->
                    <div class="form-group">

                        <!-- Label -->
                        <label>
                            密码
                        </label>

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input type="password" name="password" class="form-control " placeholder="请输入密码">

                            <!-- Icon -->
                            <div class="input-group-append">
                                {{--<span class="input-group-text">--}}
                                {{--<i class="fe fe-eye"></i>--}}
                                {{--</span>--}}
                            </div>

                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg btn-block btn-primary mb-3">
                        登录
                    </button>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1">
                        <label class="form-check-label "  for="remember">记住我</label>
                    </div>

                    <!-- Link -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            没有账号? <a href="{{route ('register')}}">快去注册</a>

                        </small>

                    </div>
                    <div class="text-center">
                        <small class="text-muted text-center">
                            忘记密码?<a href="{{route ('user.reset')}}">重置密码</a>
                        </small>
                    </div>

                </form>

            </div>
        </div> <!-- / .row -->
    </div>


@endsection