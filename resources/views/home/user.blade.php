@extends('home.layouts.master')
@section('content')
    <div class="container">
        <div class="header">
            <div class="container-fluid">


            </div> <!-- / .container-fluid -->
        </div> <!-- / .header -->

        <!-- CONTENT -->
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">


                    <div class="card" data-toggle="lists" data-lists-values='["name"]'>
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <!-- Title -->
                                    <a href="" class="btn btn-primary">
                                        搜索结果
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                        </div>

                        <div class="card-body">

                            <!-- List -->
                            <ul class="list-group list-group-lg list-group-flush list my--4">
                                @foreach($users as $user)
                                    @if($users)

                                        <li class="list-group-item px-0">


                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <a href="{{route ('member.user.show',$user->id)}}"
                                                   class="avatar avatar-lg">
                                                    <img src="{{$user->ico}}"
                                                         alt="..." class="avatar-img rounded">
                                                </a>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Title -->
                                                {{$user->name}}




                                                <h4 class="card-title mb-1 name">
                                                    <a href="{{route ('homearticle.show',$user->id)}}"></a>
                                                </h4>

                                                <!-- Text -->
                                                <p class="card-text small text-muted" style="color: blue">

                                                </p>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">

                                                    <time datetime="2018-01-03">{{$user->created_at->diffForhumans()}}</time>
                                                </p>

                                            </div>
                                            <div class="col-auto">

                                                <!-- Button -->


                                            </div>
                                            <div class="col-auto">

                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href=""
                                                           class="dropdown-item">

                                                        </a>



                                                        <a href=""
                                                           class="dropdown-item">

                                                        </a>


                                                        <a href="Javascript:;"
                                                           class="dropdown-item">

                                                        </a>




                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->

                                    </li>
                                    @else
                                        <p class="text-center text-muted">没有你想要的结果</p>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
