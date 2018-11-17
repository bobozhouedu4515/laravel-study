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
                        <a href="{{route ('admin.index')}}" class="btn btn-primary">
                            返回首页
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <ul class="nav nav-tabs header-tabs">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-center active">
                                    栏目列表
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route ('admin.category.create')}}" class="nav-link text-center">
                                    栏目添加
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-center">
                                    待开发
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tb">
            <table class="table table-nowrap">
                <thead>
                <tr>
                    <th scope="col">编号</th>
                    <th scope="col">栏目标题</th>
                    <th scope="col">图标</th>
                    <th scope="col">操作</th>
                    <th scope="col">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->title}}</td>
                        <td><span class="{{$category->icon}}"></span></td>
                        <td>
                            <a class=" btn btn-success" href="{{route ('admin.category.edit',$category)}}">编辑</a>
                        </td>
                        <td>
                            <form action="{{route ('admin.category.destroy',$category)}}" method="post">
                                @csrf @method('delete')
                                <button type="button" onclick="del(this)" class="btn btn-danger">删除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function del(obj) {
            require(['hdjs', 'bootstrap'], function (hdjs) {
                hdjs.confirm('确认删除吗?', function () {
                    $(obj).parent().submit();
                })
            })
        }
    </script>
@endpush