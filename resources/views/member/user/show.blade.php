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
                                                @if(auth()->id() == $user->id)我@else他@endif的文章
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
                                            <a href="{{route ('member.user.show',auth ()->user ())}}" class="btn btn-sm btn-primary">
                                                回家
                                            </a>
                                        </div>
                                            @endcan

                                    </div> <!-- / .row -->
                                </div>

                                <div class="card-body">

                                    <!-- List -->
                                    <ul class="list-group list-group-lg list-group-flush list my--4">
                                        @foreach($articles as $article)
                                            <li class="list-group-item px-0">

                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        {{--{{auth ()->user ()}}--}}
                                                        <a href="#" class="avatar avatar-sm">
                                                            <img src="{{$user->ico}}" alt="..." class="avatar-img rounded">
                                                        </a>
                                                    </div>
                                                    <div class="col ml--2">

                                                        <!-- Title -->
                                                        <h4 class="card-title mb-1 name">
                                                            <a href="{{route ('homearticle.show',$article)}}"> {{$article->title}}</a>
                                                        </h4>

                                                        <p class="card-text small mb-1">
                                                            <a href="" class="text-secondary mr-2">
                                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                            </a>

                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>

                                                            <a href="#" class="text-secondary ml-2">
                                                                <i class="fa fa-folder-o" aria-hidden="true"></i> {{$article->user->name}}于{{$article->created_at->diffForHumans()}}创作</a>
                                                            {{--{{$article->create_at()->diffForhumans()}}创作--}}
                                                        </p>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            @can('view',$article)
                                                            <div class="dropdown-menu dropdown-menu-right">

                                                                <a href="{{route ('homearticle.edit',$article)}}" class="dropdown-item">
                                                                    编辑
                                                                </a>

                                                                    <a href="" class="dropdown-item">

                                                                    </a>


                                                                    <a href="#!" onclick="del(this)" class="dropdown-item">
                                                                        删除
                                                                    </a>
                                                                    <form action="{{route ('homearticle.destroy',$article)}}" method="post">
                                                                        @csrf @method('delete')
                                                                    </form>

                                                            </div>
                                                            @endcan
                                                        </div>

                                                    </div>
                                                </div> <!-- / .row -->

                                            </li>
                                        @endforeach
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
@push('js')
    <script>
        function del(obj) {
            if (confirm('确认删除吗?')){
                // alert(111);
                $(obj).next('form').submit();
            }


        }
    </script>
@endpush