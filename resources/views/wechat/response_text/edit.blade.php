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
                            微信基本回复
                        </h2>

                    </div>

                </div> <!-- / .row -->
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-overflow header-tabs">
                            <li class="nav-item">
                                <a href="{{route('wechat.response_text.index')}}" class="nav-link ">
                                    回复列表
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="{{route('wechat.response_text.create')}}" class="nav-link active">
                                    添加回复
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-auto">

                        <!-- Buttons -->
                        <a href="" class="btn btn-white btn-sm">
                            添加回复
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <form action="{{route ('wechat.response_text.update',$responseText)}}" method="post">
            @csrf
            @method('PUT')
           {!! $ruleView !!}

            <div class="card" id="keyword">
                <div class="card-body" id="keyword-textarea">
                    <div class="form-group" v-for="(v,k) in contents" >
                        <label for="exampleInputEmail1">回复内容</label>
                        <a href="" @click="del(k)"  class="text-muted">删除</a>
                        <a href="javascript:;">表情</a>
                        <textarea class="form-control" v-model="v.content"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-white" @click="add()" type="button">添加回复内容</button>
                </div>
                <textarea hidden  name="data" cols="30" rows="10">@{{contents}}</textarea>
            </div>
            <button class="btn btn-primary">保存数据</button>
        </form>

    </div>
@endsection
@push('js')

        <script>
        require(['hdjs','vue'],function (hdjs,Vue) {
            let vm= new  Vue({
                el:'#keyword',
                data:{
                    contents:{!! $responseText['content'] !!}
                },
                mounted(){

                    this.emotion()
                },
                updated(){
                    this.emotion()
                },
                methods:{

                    emotion(){
                        $('#keyword textarea').each(function () {
                            hdjs.emotion({
                                btn:$(this).prev('a'),
                                input:$(this),
                                callback:function (con,btn,input) {
                                    //抓取$input 获取他在keyword-textarea 中的textarea中的检索位置
                                    let index=$(input).index('#keyword-textarea textarea')
                                    // console.log(index);
                                    vm.contents[index].content=input.val();
                                }
                            })
                        })

                    },
                    add(){

                        this.contents.push({content:''})
                    },
                    del(k){
                        if (k>0) {
                            this.contents.splice(k,1)
                        }

                    }
                },

            })

        })
    </script>


    @endpush