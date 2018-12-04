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
                                        <label for="exampleInputEmail1">网站标题</label>
                                        <input type="text" name="title" value="{{$config['data']['title']}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">网站关键词</label>
                                        <input type="text" name="keyword" value="{{$config['data']['keyword']}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">网站描述</label>
                                        <input type="text" name="description" value="{{$config['data']['description']}}" class="form-control" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">icp</label>
                                        <input type="text" name="icp" class="form-control" value="{{$config['data']['icp']}}" id="exampleInputEmail1" placeholder="">
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
