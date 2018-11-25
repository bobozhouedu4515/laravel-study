@extends('home.layouts.master')
@section('content')
    <div class="container" id="app">
        <div class="card-body">
        {{--{{$article->id}}--}}

        <!-- Header -->
            <div class="mb-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <!-- Avatar -->
                        <a href="{{route ('member.user.show',$user)}}" class="avatar ">
                            <img src="{{$user->ico}}" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <div>
                            @auth()
                                <a href="{{route ('member.attention',$user)}}"
                                   class="btn btn-danger btn-xs" title="点击关注">
                                    @if($user->fans->contains(auth ()->user ()))
                                        取消关注
                                    @else
                                        点击关注
                                    @endif
                                </a>
                            @else
                                <a href="#!" onclick="remind(this)" class="btn btn-xs btn-danger">点击关注</a>
                            @endauth
                        </div>

                    </div>
                    <div class="col ml--2">

                        <!-- Title -->
                        <h4 class="card-title mb-1"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">
                                    {{$user->name   }}
                                </font></font></h4>

                        <!-- Time -->

                        <p class="card-text small text-muted">

                            <span class="fe fe-clock"></span>
                            <time datetime="2018-05-24"><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">{{$article->created_at->diffForHumans()}}</font></font>
                            </time>
                        </p>


                    </div>
                    <div class="col-auto">


                        <!-- Dropdown -->
                        <div class="dropdown">

                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#!" class="dropdown-item">
                                    Action
                                </a>
                                <a href="#!" class="dropdown-item">
                                    Another action
                                </a>
                                <a href="#!" class="dropdown-item">
                                    Something else here
                                </a>
                            </div>
                        </div>

                    </div>
                </div> <!-- / .row -->
            </div>

            <!-- Text -->
            <p class="mb-3">{{$article->content}}
            </p>

            <p class="mb-4">
            </p>

            <!-- Image -->
            <p class="text-center mb-3">
                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/posts/post-1.jpg" alt="..."
                     class="img-fluid rounded">
            </p>

            <!-- Buttons -->
            <div class="mb-3">
                <div class="row">
                    <div class="col">

                        <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">
                                    😬1
                                </font></font></a>
                        <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">
                                    👍2
                                </font></font></a>
                        <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">
                                    添加反应
                                </font></font></a>

                    </div>
                    <div class="col-auto mr--3">

                        <div class="avatar-group d-none d-sm-flex">
                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title=""
                               data-original-title="Ab Hadley">
                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                     alt="..." class="avatar-img rounded-circle border border-white">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title=""
                               data-original-title="Adolfo Hess">
                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                     alt="..." class="avatar-img rounded-circle border border-white">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title=""
                               data-original-title="Daniela Dewitt">
                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-4.jpg"
                                     alt="..." class="avatar-img rounded-circle border border-white">
                            </a>
                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title=""
                               data-original-title="Miyah Myles">
                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-5.jpg"
                                     alt="..." class="avatar-img rounded-circle border border-white">
                            </a>
                        </div>

                    </div>
                    <div class="col-auto">

                        <a href="#!" class="btn btn-sm btn-white"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">
                                    分享
                                </font></font></a>

                    </div>
                </div> <!-- / .row -->
            </div>

            <!-- Divider -->
            <hr>

            <!-- Comments -->

            <div class="comment mb-3" v-for="v in comments">
                <div class="row">
                    <div class="col-auto">

                        <!-- Avatar -->
                        <a class="avatar" href="profile-posts.html">
                            <img :src="v.user.ico"
                                 alt="..." class="avatar-img rounded-circle">
                        </a>

                    </div>
                    <div class="col ml--2">

                        <!-- Body -->
                        <div class="comment-body">

                            <div class="row">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="comment-title"><font style="vertical-align: inherit;"><font
                                                    style="vertical-align: inherit;">
                                                @{{ v.user.name }}
                                            </font></font></h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Time -->
                                    <time class="comment-time"><font style="vertical-align: inherit;"><font
                                                    style="vertical-align: inherit;">
                                                @{{v.created_at}}
                                            </font></font></time>

                                </div>
                            </div> <!-- / .row -->

                            <!-- Text -->
                            <p class="comment-text " v-html="v.content">
                                {{--@{{ v.content }}--}}
                            </p>

                        </div>

                    </div>
                </div> <!-- / .row -->
            </div>
            <!-- Divider -->
            <!-- Form -->
            <div class="container">
                <div class="col ml--2">
                    <!-- Input -->

                    <div id="editormd">
                        <textarea id="hdphp" style="height:300px;width:100%;"></textarea>
                    </div>
                    @auth()
                        <button class="btn btn-primary" @click.prevent="send()">发表评论</button>
                        {{--<textarea class="form-control" placeholder="Leave a comment" rows="2"></textarea>--}}
                    @else()
                        <p class=""> 点击<a href="{{route ('login',['from'=>url ()->full()])}}">登录</a>后评论</p>
                    @endauth
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

@endsection()
@push('js')
    <script>
        require(['hdjs', 'vue', 'axios', 'MarkdownIt', 'marked', 'highlight'], function (hdjs, Vue, axios, MarkdownIt) {
            var vm = new Vue({
                el: '#app',
                data: {
                    //为了和返回的数据保持一致 所有创建了一层content
                    comment: {content: ''},
                    comments: []
                },
                methods: {
                    {{--@auth()--}}
                    send() {
                        // alert(2);
                        if (this.comment.content.trim() == '') {
                            hdjs.swal({
                                text: "请输入评论内容",
                                button: false,
                                icon: 'warning'
                            });
                            return false;
                        }
                        axios.post('{{route ('homecomment.store')}}', {
                            content: this.comment.content,
                            article_id: '{{$article['id']}}'
                        }).then((response) => {
                            // console.log(response.data.comment);
                            //接收php处理以后的数据,是一个json格式的数据.其中的data中的comment中包含了我们本条评论的所有信息!
                            // console.log(response);
                            //把每次发表的文章都追加到comments中!
                            this.comments.push(response.data.comment);
                            let md = new MarkdownIt();
                            response.data.comment.content = md.render(response.data.comment.content);
                            $(document).ready(function () {
                                $('pre code').each(function (i, block) {
                                    hljs.highlightBlock(block);
                                });
                            });
                        });

                        editormd.setSelection({line: 0, ch: 0}, {line: 9999999, ch: 9999999});
                        //将选中文本替换成空字符串
                        editormd.replaceSelection("");
                    },
                    {{--@endauth--}}
                },
                mounted() {
                    // alert(1);

                    hdjs.editormd("editormd", {
                        width: '100%',
                        height: 300,
                        toolbarIcons: function () {
                            return [
                                "undo", "redo", "|",
                                "bold", "del", "italic", "quote", "|",
                                "list-ul", "list-ol", "hr", "|",
                                "link", "hdimage", "code-block", "|",
                                "watch", "preview", "fullscreen"
                            ]
                        },
                        //后台上传地址，默认为 hdjs配置项window.hdjs.uploader
                        server: '',
                        //editor.md库位置
                        path: "{{asset('org/hdjs')}}/package/editor.md/lib/",

                        onchange: function () {
                            // console.log(1)
                            //当检测到页面变化的时候,this代表编辑器?

                                vm.$set(vm.comment, 'content', this.getValue())
                                // vm.$set()

                        }
                    });

                    //因为index页面是get请求 所以需要把数据放到地址的参数中
                    axios.get('{{route("homecomment.index",['article_id'=>$article['id']])}}')
                        .then((response) => {
                            // console.log(response);

                            this.comments = response.data.comments;
                            let md = new MarkdownIt();
                            if (this.comments) {
                                this.comments.forEach((v, k) => {
                                    v.content = md.render(v.content)
                                })
                            }
                            $(document).ready(function () {
                                $('pre code').each(function (i, block) {
                                    hljs.highlightBlock(block);
                                });
                            });
                        })

                }
            });
        })
    </script>
    <script>
        function remind() {
            require(['hdjs'], function (hdjs) {
                hdjs.swal("亲啊", "你还没有登录呀!", "error");
            })
        }
    </script>
@endpush
