<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/css/theme.min.css">

    <title>注册</title>
</head>
<body class="d-flex align-items-center bg-white border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
              重置密码
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                请妥善保存好自己的密码
            </p>

            <!-- Form -->
            <form action="{{route ('user.store')}}" method="post">
                @csrf
                <div class="form-group">

                    <!-- Label -->
                    <label>
                        邮箱地址
                    </label>

                    <!-- Input -->
                    <input type="email" class="form-control" name="email" value="13934873532@163.com" placeholder="name@address.com">

                </div>


                <div class="form-group">

                    <!-- Label -->
                    <label>
                        新密码
                    </label>

                    <!-- Input -->
                    <input type="password" class="form-control" name="password" placeholder="请输入密码">

                </div>
                <div class="form-group">

                    <!-- Label -->
                    <label>
                        确认密码
                    </label>

                    <!-- Input -->
                    <input type="password" class="form-control" name="password_confirmation" placeholder="再次输入密码">

                </div>

                <!-- Email address -->

                <div class="form-group">
                    <!-- Label -->
                    <label>
                        验证码
                    </label>
                    <!-- Input -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="请输入验证码" name="code" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="bt">发送验证码</button>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    重置
                </button>

                <!-- Link -->
                <div class="text-center">
                    <small class="text-muted text-center">
                        我想起密码了! <a href="{{route ('login')}}">去登录</a>.
                    </small>
                </div>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->
{{--<script>--}}
{{--window.hdjs={--}}
{{--//组件目录必须绝对路径--}}
{{--base:'{{asset ('org')}}/hdjs',--}}
{{--//上传文件后台地址--}}
{{--uploader : '/uploader.php?',--}}
{{--//获取文件列表的后台地址--}}
{{--filesLists : '/filesLists.php?',--}}

{{--//require.js配置项（可为空）--}}
{{--requireJs:{paths:{},shim:{}},--}}
{{--};--}}
{{--</script>--}}

{{--<script src="{{asset ('org')}}/hdjs/require.js"></script>--}}
{{--<script src="{{asset ('org')}}/hdjs/config.js"></script>--}}
@include('layouts.hdjs');
@include('layouts.message');
<script>
    require(['hdjs','bootstrap'], function (hdjs) {
        let option = {

            //按钮
            el: '#bt',
            //后台链接
            url: '{{route('code.send')}}',
            //验证码等待发送时间
            timeout: 10,
            //表单，手机号或邮箱的INPUT表单
            input: '[name="email"]'
        };
        hdjs.validCode(option);
    })
</script>

{{--<script>--}}
{{--@if (session()->has('danger'))--}}
{{--require(['hdjs'], function (hdjs) {--}}
{{--hdjs.swal({--}}
{{--text: "{{session()->get('danger')}}",--}}
{{--button:false,--}}
{{--icon:'warning'--}}
{{--});--}}
{{--})--}}
{{--@endif--}}
{{--</script>--}}

{{--<script>--}}
{{--@if (session()->has('success'))--}}
{{--require(['hdjs'], function (hdjs) {--}}
{{--hdjs.swal({--}}
{{--text: "{{session()->get('success')}}",--}}
{{--button:false,--}}
{{--icon:'success'--}}
{{--});--}}
{{--})--}}
{{--@endif--}}
{{--</script>--}}

{{--<script>--}}
{{--@if ($errors->any())--}}
{{--require(['hdjs'], function (hdjs) {--}}
{{--hdjs.swal({--}}
{{--text: "@foreach ($errors->all() as $error) {{ $error }}\r\n @endforeach",--}}
{{--button:false,--}}
{{--icon:'warning'--}}
{{--});--}}
{{--})--}}
{{--@endif--}}
{{--</script>--}}



</body>
</html>