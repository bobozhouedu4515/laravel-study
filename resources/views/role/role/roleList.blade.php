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
            <form action="{{route ('role.role_list_store ',$user)}}" method="post">
                @csrf
            <div class="card">
                <div class="card-header">
                    请选择角色
                </div>

                <div class="card-body">
                    <div class="row">
                        @foreach($roles as $value)
                        <div class="col-2">
                            <div class="form-group">
                                <div class="form-check">

                                    <input type="checkbox" id="role0" name="role[]" value="{{$value->name}}"
                                           @if($user->hasRole($value->name)) checked @endif
                                    >
                                    <label for="role0" class="form-check-label">
                                        {{$value->title}}
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                    <button class="btn btn-primary">保存</button>

            </div>
            </form>
        </div>
    </div>
@endsection

