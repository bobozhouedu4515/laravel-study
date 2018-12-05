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
                           权限列表
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
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">编号</th>
                    <th scope="col">权限名称</th>
                    <th scope="col">权限模块</th>
                    <th scope="col">权限英文名称</th>

                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <th scope="row">{{$permission->id}}</th>
                    <td>{{$permission->title}}</td>
                    <td>{{$permission->module}}</td>
                    <td>{{$permission->name}}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

