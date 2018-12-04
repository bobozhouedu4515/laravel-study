@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="header mt-5">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            栏目列表
                        </h6>
                        <h1 class="header-title">
                            持之以恒
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route ('home')}}" class="btn btn-primary">
                            退出后台
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.config.update',['name'=>$name])}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">驱动</label>
                                    <input type="text" name="MAIL_DRIVER"
                                           value="{{$config['data']['MAIL_DRIVER']??'smtp'}}" class="form-control"
                                           id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">主机</label>
                                    <input type="text" name="MAIL_HOST"
                                           value="{{$config['data']['MAIL_HOST']??'smtp.qq.com'}}" class="form-control"
                                           id="exampleInputEmail1" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">端口</label>
                                    <input type="text" name="MAIL_PORT" value="{{$config['data']['MAIL_PORT']??'25'}}"
                                           class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">账号</label>
                                    <input type="text" name="MAIL_USERNAME" value="{{$config['data']['MAIL_USERNAME']}}"
                                           class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">密码</label>
                                    <input type="text" name="MAIL_PASSWORD" value="{{$config['data']['MAIL_PASSWORD']}}"
                                           class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">发信邮箱</label>
                                    <input type="text" name="MAIL_FROM_ADDRESS"
                                           value="{{$config['data']['MAIL_FROM_ADDRESS']}}" class="form-control"
                                           id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">发信人</label>
                                    <input type="text" name="MAIL_FROM_NAME"
                                           value="{{$config['data']['MAIL_FROM_NAME']}}" class="form-control"
                                           id="exampleInputEmail1" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-primary">保存</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
