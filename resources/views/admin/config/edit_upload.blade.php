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
                                    <label for="exampleInputEmail1">上传大小</label>
                                    <input type="text" name="size" value="{{$config['data']['size']}}"
                                           class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">上传类型</label>
                                    <input type="text" name="type" value="{{$config['data']['type']}}"
                                           class="form-control" id="exampleInputEmail1" placeholder="">
                                    <span class="help-block text-muted">类型如:jpg|png</span>
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
