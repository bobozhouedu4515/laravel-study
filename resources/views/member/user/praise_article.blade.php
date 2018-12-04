@extends('home.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @include('member.layouts.menu')
            <div class="col-sm-9">
                <ul class="nav nav-tabs nav-tabs-sm">
                    <li class="nav-item">
                        <a href="#!" class="nav-link  active">
                        文章
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route ('member.myPraise',[$user,'type'=>'comment'])}}" class="nav-link">
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

                                            <h4 class="card-header-title">
                                                @if(auth()->id() == $user->id)我@else他@endif赞过的文章
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

                                        {{$praises->appends(['type'=>'article'])->links()}}


                                        @foreach($praises as $praise)

                                        <li class="list-group-item px-0">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <a href="{{route ('member.user.show',$user)}}" class="avatar avatar-sm">
                                                        <img src="{{$praise->belongsModel->user->ico}}" alt="..."
                                                             class="avatar-img rounded">
                                                    </a>
                                                </div>
                                                <div class="col ml--2">
                                                    <!-- Title -->
                                                    <h4 class="card-title mb-1 name">
                                                        <a href="{{route ('homearticle.show',$praise->belongsModel->id)}}"> {{$praise->belongsModel->title}} </a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </li>
                                            @endforeach

                                    </ul>
                                    <div>
                                        <a href="">1111</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection
