@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <form action="{{route ('admin.category.store')}}" method="post">
            @csrf
            <div class="form-group mt-5">
                <label for="exampleInputEmail1">栏目标题</label>
                <input type="text" class="form-control" name="title" id=""  placeholder="请输出栏目标题">
                <small id="" class="form-text text-muted"></small>
            </div>
            <div class="input-group mb-3">
                {{--<div class="input-group-prepend">--}}
                    {{--<span class="input-group-text "></span>--}}
                {{--</div>--}}
                <input type="text" readonly name="icon" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span style="cursor: pointer"  onclick="choose()" class="input-group-text">选择图标</span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">保存</button>
        </form>







    </div>

@endsection
@push('js')
    <script>
        function choose() {
            require(['hdjs'],function (hdjs) {
                hdjs.font(function (icon) {
                    $('input[name=icon]').val(icon)
                    $('#icon').addClass(icon)
                })
            })

        }

    </script>
    @endpush