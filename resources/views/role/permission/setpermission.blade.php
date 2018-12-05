@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- Header -->
        <div class="header mt-md-2">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Title -->
                        <h2 class="header-title">
                            权限设置
                        </h2>

                    </div>

                </div> <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col">
                    </div>
                    <div class="col-auto">
                        <a href="{{route('role.role.index')}}" class="btn btn-white btn-sm">
                            返回
                        </a>
                    </div>
                </div>
            </div>
            <form action="">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        后台管理
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission00" name="permission[]" value="Admin-admin-index" class="form-check-input" checked="" disabled="">
                                        <label for="permission00" class="form-check-label">
                                            登录后台
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission01" name="permission[]" value="Admin-category" class="form-check-input" checked="" disabled="">
                                        <label for="permission01" class="form-check-label">
                                            栏目管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission02" name="permission[]" value="Admin-flash" class="form-check-input" checked="" disabled="">
                                        <label for="permission02" class="form-check-label">
                                            轮播图管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission03" name="permission[]" value="Admin-config-webset" class="form-check-input" checked="" disabled="">
                                        <label for="permission03" class="form-check-label">
                                            网站配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission04" name="permission[]" value="Admin-config-upload" class="form-check-input" checked="" disabled="">
                                        <label for="permission04" class="form-check-label">
                                            上传配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission05" name="permission[]" value="Admin-config-mail" class="form-check-input" checked="" disabled="">
                                        <label for="permission05" class="form-check-label">
                                            邮件配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission06" name="permission[]" value="Admin-config-code" class="form-check-input" checked="" disabled="">
                                        <label for="permission06" class="form-check-label">
                                            验证码配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission07" name="permission[]" value="Admin-config-search" class="form-check-input" checked="" disabled="">
                                        <label for="permission07" class="form-check-label">
                                            搜索配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission08" name="permission[]" value="Admin-config-wechat" class="form-check-input" checked="" disabled="">
                                        <label for="permission08" class="form-check-label">
                                            微信配置
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        微信管理
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission10" name="permission[]" value="Wechat-base" class="form-check-input" checked="" disabled="">
                                        <label for="permission10" class="form-check-label">
                                            基本回复管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission11" name="permission[]" value="Wechat-button" class="form-check-input" checked="" disabled="">
                                        <label for="permission11" class="form-check-label">
                                            菜单管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission12" name="permission[]" value="Wechat-news" class="form-check-input" checked="" disabled="">
                                        <label for="permission12" class="form-check-label">
                                            图文回复
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        权限管理
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission20" name="permission[]" value="Role-use" class="form-check-input" checked="" disabled="">
                                        <label for="permission20" class="form-check-label">
                                            用户管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission21" name="permission[]" value="Role-role" class="form-check-input" checked="" disabled="">
                                        <label for="permission21" class="form-check-label">
                                            角色管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox" id="permission22" name="permission[]" value="Role-permission" class="form-check-input" checked="" disabled="">
                                        <label for="permission22" class="form-check-label">
                                            权限管理
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button class="btn btn-primary">保存</button>
            </form>
        </div>

    </div>
@endsection

