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
                            给设置权限
                        </h2>

                    </div>

                </div> <!-- / .row -->
                <div class="row align-items-center">

                    <div class="col-auto">

                        <!-- Buttons -->
                        <a href="{{route ('role.role.index')}}" class="btn btn-white btn-sm">
                            返回
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="card">
                <div class="card-header">
                    请选择角色
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <div class="form-check">

                                    <input type="checkbox" id="role0" name="role[]" value="webmaster">
                                    <label for="role0" class="form-check-label">
                                        站长 | webmaster
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <div class="form-check">

                                    <input type="checkbox" id="role1" name="role[]" value="master" checked="">
                                    <label for="role1" class="form-check-label">
                                        超级管理员 | master
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <div class="form-check">

                                    <input type="checkbox" id="role2" name="role[]" value="article" checked="">
                                    <label for="role2" class="form-check-label">
                                        文章管理员 | article
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

