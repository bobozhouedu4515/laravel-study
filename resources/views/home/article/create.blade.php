@extends('home.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">

            <!-- Header -->
            <div class="header mt-md-5">
                <div class="header-body">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                                记录生活的点点滴滴!
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                                添加一片新文章
                            </h1>

                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>

            <!-- Form -->
            <form class="mb-4" action="{{route ('homearticle.store')}}" method="post">
            @csrf
                <!-- Project name -->
                <div class="form-group">
                    <label>
                        文章主题
                    </label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>
                        选择栏目标题
                    </label>
                    <select class="form-control" name="category_id">
                        <option value="">请选择</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->title}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- Project description -->
                <div class="form-group">
                    <label class="mb-1">
                       主要内容
                    </label>
                    <small class="form-text text-muted">
                        这就是别人将如何了解这个项目, 所以让它变得好!
                    </small>
                    <div id="editormd">
                        <textarea  style="display:none;" name="content"></textarea>
                    </div>
                </div>



                <!-- Divider -->
                <hr class="mt-5 mb-5">

                <!-- Buttons -->
                <button  class="btn btn-block btn-primary">
                    发表文章
                </button>
                <a href="#" class="btn btn-block btn-link text-muted">
                   取消发表
                </a>

            </form>

        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        require(['hdjs'], function (hdjs) {
            hdjs.editormd("editormd", {
                width: '100%',
                height: 300,
                toolbarIcons: function () {
                    return [
                        "bold", "del", "italic", "quote", "|",
                        "list-ul", "list-ol", "hr", "|",
                        "link", "hdimage", "code-block", "|",
                        "watch", "preview", "fullscreen"
                    ]
                },
                //后台上传地址，默认为 hdjs配置项window.hdjs.uploader
                server: '',
                //editor.md库位置
                path: "{{asset('org/hdjs')}}/package/editor.md/lib/"
            });
        })
    </script>
    @endpush
