@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="header mt-5">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            配置修改
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
                                  <label for="exampleInputEmail1">token</label>
                                  <input type="text" name="WECHAT_TOKEN" value="{{$config['data']['WECHAT_TOKEN']??''}}" class="form-control"  placeholder="请输入令牌">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">appid</label>
                                  <input type="text" name="WECHAT_APPID" value="{{$config['data']['WECHAT_APPID']??''}}" class="form-control"  placeholder="请输入APPID">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">appsecret</label>
                                  <input type="text" name="WECHAT_APPSECRET" value="{{$config['data']['WECHAT_APPSECRET']??''}}" class="form-control"  placeholder="请输入APP密码">
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
