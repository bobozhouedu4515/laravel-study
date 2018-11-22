@extends('home.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @include('member.layouts.menu')
            <div class="col-sm-9">
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
                                                @if(auth()->id() == $user->id)我@else他@endif的粉丝
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

                                    <ul class="list-group list-group-lg list-group-flush list my--4">
                                        {{$followings}}
                                        @if($followings->count()!=0)
                                        @foreach($followings as $follow)
                                            <li class="list-group-item px-0">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        {{--{{auth ()->user ()}}--}}
                                                        <a href="#" class="avatar avatar-sm">
                                                            <img src="{{$follow->ico}}" alt="..."
                                                                 class="avatar-img rounded">
                                                        </a>
                                                    </div>
                                                    <div class="col ml--2">
                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <a href="{{route ('member.user.show',$follow)}}">{{$follow->name}} </a>
                                                        </h4>
                                                    </div>
                                                    <div>
                                                        @auth()
                                                        @if($follow->fans->contains(auth ()->user ()))
                                                            <a href="{{route ('member.attention',$follow)}}"
                                                               class="btn btn-success btn-xs">
                                                                取消关注
                                                            </a>
                                                        @else
                                                            <a href="{{route ('member.attention',$follow)}}"
                                                               class="btn btn-danger btn-xs">
                                                                点击关注
                                                            </a>
                                                        @endif
                                                            @endauth
                                                    </div>
                                                </div> <!-- / .row -->
                                            </li>
                                        @endforeach
                                            @else
                                        <p class=" text-muted text-center">该用户暂时没有被关注</p>
                                            @endif
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div> <!-- / .row -->

                </div>
            </div>

        </div>
    </div>
@endsection
