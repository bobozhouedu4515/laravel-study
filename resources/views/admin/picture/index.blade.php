@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10" style="display: flex">
                @foreach($pictures as $picture)
                    <a href="Javascript:;" onclick="del(this)" class="btn btn-white btn-xs">
                        <img src="{{$picture->path}}" alt="" style="height:100px ;">
                        删除</a>
                    <form action="{{route ('admin.picture.destroy',$picture)}}" method="post">
                        @csrf @method('delete')
                    </form>
                @endforeach
            </div>

        </div>
        <div class="page-sidebar">
            <div class="row justify-content-center  __web-inspector-hide-shortcut__">

                <div class="card">
                    <div class="card-header">
                        <h4>选择图片</h4>
                    </div>
                    <div class="card-body  text-center">

                        <div class="avatar avatar-xxl mb-2" style="cursor: pointer" onclick="upImagePc(this)">
                            {{--需要上传的文件的名字class avatar-img--}}
                            <img src="" alt="点击加载图片" class="pic-img ">
                            {{--<a href=""></a>--}}
                        </div>


                    </div>
                </div>

                <form action="{{route ('admin.picture.store')}}" method="post" class="col-sm-8" id="form-pic">
                    @csrf
                    <input type="hidden" name="pic" value="">
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    {{--hdjs里面上传需要再控制台--network中检测数据--}}
    {{--处理上传之前需要创建处理上传控制器方法、配置对应的路由--}}
    {{--需要修改hdjs上传配置项：hdjs.blade.php--}}
    {{--还需要注意上传419状态码--}}
    <script>
        require(['hdjs', 'bootstrap']);

        //上传图片
        function upImagePc() {
            require(['hdjs'], function (hdjs) {
                var options = {
                    multiple: false,//是否允许多图上传
                    //data是向后台服务器提交的POST数据
                    data: {name: '后盾人', year: 2099},
                };
                hdjs.image(function (images) {
                    // alert(1);
                    //上传成功的图片，数组类型
                    //获取表单ico的val值
                    $("[name='pic']").val(images[0]);
                    $(".pic-img-img").attr('src', images[0]);
                    $('#form-pic').submit();
                }, options)
            });
        }

        //移除图片

        function del(obj) {
            require(['hdjs', 'bootstrap'], function (hdjs) {
                hdjs.confirm('确定删除吗?', function () {
                    $(obj).next('form').submit();
                })
            })
        }

    </script>
@endpush