@extends('home.layouts.master')
@section('content')
    <div class="container mt-5" id="app">
        <div class="row">
            @include('member.layouts.menu')
            <div class="col-sm-9">


                <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                        <a href="{{route ('member.myPraise',[$user,'type'=>'article'])}}" class="nav-link  ">
                            文章
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#!" class="nav-link active">
                            评论
                        </a>
                    </li>
                </ul>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Files -->
                            <div class="card" data-toggle="lists" data-lists-values="[&quot;name&quot;]">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        {{--{{auth ()->id ()}}--}}

                                        <!-- Title -->
                                            {{--{{route ('')}}--}}
                                            <h4 class="card-header-title">
                                                @if(auth()->id() == $user->id)我@else他@endif赞过的评论
                                            </h4>

                                        </div>
                                        @can('isMine',$user)

                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="" class="btn btn-sm btn-primary">
                                                    发表文章
                                                </a>

                                            </div>
                                        @endcan
                                        @can('noMine',$user)
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="{{route ('member.user.show',auth ()->user ())}}"
                                                   class="btn btn-sm btn-primary">
                                                    回家
                                                </a>
                                            </div>
                                        @endcan
                                    </div> <!-- / .row -->
                                </div>
                                <div class="card-body">
                                    <!-- List -->
                                    <ul class="list-group list-group-lg list-group-flush list my--4">

                                        {{--{{$fans->count()}}--}}
                                        {{$praises->appends(['type'=>'comment'])->links()}}
                                    @foreach($praises as $praise)
                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <a href="" class="avatar avatar-sm">
                                                        <img src="{{$praise->belongsModel->user->ico}}" alt="..."
                                                             class="avatar-img rounded">
                                                    </a>
                                                </div>
                                                <div class="col ml--2">
                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        {{$praise->belongsModel->content}}
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
@push('js')
    <script>
        require(['hdjs','vue','MarkdownIt'],function(hdjs,Vue,MarkdownIt){

            new Vue({
                el:'#app',
                data:{
                    content:[]
                },
                methods:{
                },
                mounted(){
                    let md=new MarkdownIt();
                }
                } )
        })
    </script>
    @endpush