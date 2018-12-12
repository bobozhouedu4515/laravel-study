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
            <form action="{{route ('role.show_permission_store',$role)}}" method="post">
                @csrf
            <div class="card-body">
                @foreach($modules as $module)
                <div class="card">
                    <div class="card-header">
                        {{$module->title}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($module->permissions as $permission)
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="form-check">

                                        <input type="checkbox"  name="permission[]" value="{{$module['name'].'-'.$permission['name']}}" class="form-check-input"
                                        @if($role->hasPermissionTo($module['name'].'-'.$permission['name'])) checked @endif
                                        >
                                        <label for="permission00" class="form-check-label">
                                            {{$permission['title']}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                <button class="btn btn-primary">保存</button>
            </form>
        </div>

    </div>
@endsection

