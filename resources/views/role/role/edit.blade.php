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
                            角色修改
                        </h2>

                    </div>

                </div> <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-overflow header-tabs">
                            <li class="nav-item">
                                <a href="{{route('role.role.index')}}" class="nav-link ">
                                    角色列表
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('role.role.create')}}" class="nav-link  ">
                                    添加角色
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link active ">
                                    修改角色
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto">

                        <!-- Buttons -->
                        <a href="{{route('role.role.index')}}" class="btn btn-white btn-sm">
                            返回
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{route ('role.role.update',$role)}}" method="post">
                       @csrf @method('put')
                        <div class="form-group">
                            <label for="exampleInputEmail1">角色中文名称</label>
                            <input  name="title" type="text" class="form-control" value="{{$role->title}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">角色英文名称</label>
                            <input  name="name" type="text" class="form-control" value="{{$role->name}}">
                        </div>
                        <button class="btn btn-primary">保存</button>

                    </form>

                </div>

            </div>

        </div>
    </div>
@endsection

