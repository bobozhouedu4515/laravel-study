@extends('home.layouts.master')
@section('content')


<div class="swiper-container  mt-5">
<div class="swiper-wrapper">
    @foreach($pictures as $picture)
    <div class="swiper-slide">
        <!-- Required swiper-lazy class and image source specified in data-src attribute -->
        <img data-src="{{$picture->path}}" class="swiper-lazy">
        <!-- Preloader image -->
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
    </div>
    @endforeach
</div>
<!-- Add Pagination -->
<div class="swiper-pagination swiper-pagination-white"></div>
<!-- Navigation -->
<div class="swiper-button-next swiper-button-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>
</div>

<!-- Swiper JS -->
<script src="{{asset ('org/js/swiper.min.js')}}"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        // Enable lazy loading
        lazy: true,
        autoplay:true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<div class="container mt-5">
    <div class="page-sidebar ">
        <!-- Projects -->
        <div class="card">
            <div class="card-header" style="background: #218838">
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Title -->
                        <h4 class="card-header-title">

                        </h4>

                    </div>
                    <div class="col-auto" style="background: antiquewhite" >

                            <a href="" class="small">广告时间</a>


                        <!-- Link -->
                        <a href="#!" class="small">最新动态</a>

                    </div>
                </div> <!-- / .row -->
            </div>
            <div class="card-body">

                @foreach($activities as $activity)
                    @if($activity->log_name=='comment')
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="{{route ('member.user.show',$activity->causer->id)}}" class="avatar avatar-4by3">
                                    <img src="{{$activity->causer->ico}}"
                                         alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="">{{$activity->causer->name}}</a><span>评论了</span>
                                    <a href="{{route ('homearticle.show',$activity->subject->article)}}"> <strong>{{$activity->properties['attributes']['title']}}</strong></a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">{{$activity->created_at->diffForHumans()}}</time>
                                </p>

                            </div>

                        </div>
                        <hr>
                    @elseif($activity->log_name=='article')
                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="{{route ('member.user.show',$activity->causer->id)}}" class="avatar avatar-4by3">
                                    <img src="{{$activity->causer->ico}}"
                                         alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="">{{$activity->causer->name}}</a><span>
                                                @if($activity->description=='created')发表了
                                        @elseif($activity->description=='updated')更新了
                                        @elseif($activity->description=='deleted') 删除了
                                        @endif
                                            </span>
                                    <strong>{{$activity->properties['attributes']['title']}}</strong>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">{{$activity->created_at->diffForHumans()}}</time>
                                </p>

                            </div>

                        </div>
                        <hr>


                    @endif

                @endforeach
            </div> <!-- / .card-body -->
        </div> <!-- / .card -->

    </div>
</div>

@endsection
@push('css')
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        body {
            background: white;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 80%;
            height: 80%;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: rgba(0,0,0,0.8);
        }
        .swiper-slide img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }
    </style>
    @endpush