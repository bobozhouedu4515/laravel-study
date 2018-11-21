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
                                    文章编辑
                                </h1>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

                <!-- Form -->
                <form class="mb-4" action="{{route('homearticle.update',$article)}}" method="post">
                @csrf @method('put')
                <!-- Project name -->
                    <div class="form-group">
                        <label>
                            文章主题
                        </label>
                        <input type="text" name="title" value="{{$article->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                            选择栏目标题
                        </label>
                        <select class="form-control" name="category_id">
                            <option value="">请选择</option>
                            @foreach($categories as $category)
                                <option @if($article->category_id==$category->id) selected @endif value="{{$category->id}}">
                                    {{$category->title}}
                                    {{--{{$category->id}}--}}

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
                            <textarea  style="display:none;" name="content">{{$article->content}}</textarea>
                        </div>
                    </div>
                    <hr class="mt-4 mb-5">
                    <!-- Project cover -->
                    <div class="form-group">
                        <label class="mb-1">
                            Project cover
                        </label>
                        <small class="form-text text-muted">
                            Please use an image no larger than 1200px * 600px.
                        </small>
                        <div class="dropzone dropzone-single mb-3 dz-clickable" data-toggle="dropzone" data-dropzone-url="http://">

                            <div class="dz-preview dz-preview-single"></div>

                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div></div>
                    </div>

                    <!-- Divider -->
                    <hr class="mt-5 mb-5">

                    <!-- Starting files -->
                    <div class="form-group">
                        <label class="mb-1">
                            Starting files
                        </label>
                        <small class="form-text text-muted">
                            Upload any files you want to start the projust with.
                        </small>
                        <div class="card">
                            <div class="card-body">
                                <div class="dropzone dropzone-multiple dz-clickable" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-multiple="">



                                    <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush"></ul>

                                    <div class="dz-default dz-message"><span>Drop files here to upload</span></div></div>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="mt-5 mb-5">

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <!-- Private project -->
                            <div class="form-group">
                                <label class="mb-1">
                                    Private project
                                </label>
                                <small class="form-text text-muted">
                                    If you are available for hire outside of the current situation, you can encourage others to hire you.
                                </small>
                                <div class="custom-control custom-checkbox-toggle">
                                    <input type="checkbox" class="custom-control-input" id="exampleToggle" checked="">
                                    <label class="custom-control-label" for="exampleToggle"></label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Warning -->
                            <div class="card bg-light border">
                                <div class="card-body">

                                    <h4 class="mb-2">
                                        <i class="fe fe-alert-triangle"></i> 警告
                                    </h4>

                                    <p class="small text-muted mb-0">
                                        一旦项目成为私有项目, 就不能将其还原到公共项目。
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Divider -->
                    <hr class="mt-5 mb-5">

                    <!-- Buttons -->
                    <button  class="btn btn-block btn-primary">
                        确认修改
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
