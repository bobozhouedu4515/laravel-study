@extends('home.layouts.master')
@section('content')
    <div class="container">
        <div class="main-content ">
            <div class="row mt-5">
                <div class="col-12 col-xl-4 ">
                    <!-- Projects -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h4 class="card-header-title">
                                        Projects
                                    </h4>

                                </div>
                                <div class="col-auto">

                                    <!-- Link -->
                                    <a href="#!" class="small">动态</a>

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
                                        <strong>{{$activity->subject->article->title}}</strong>
                                    </h4>

                                    <!-- Time -->
                                    <p class="card-text small text-muted">
                                        <time datetime="2018-05-24">{{$activity->created_at->diffForHumans()}}</time>
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Dropdown -->
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <strong>{{$activity->subject->title}}</strong>
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <time datetime="2018-05-24">{{$activity->created_at->diffForHumans()}}</time>
                                        </p>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                </div>
                                <hr>


                            @endif

                            @endforeach
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->

                </div>
                <div class="col-12 col-xl-8">

                    <!-- Goals -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h4 class="card-header-title">
                                        Goals
                                    </h4>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Export
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="table-responsive mb-0" data-toggle="lists"
                             data-lists-values='["goal-project", "goal-status", "goal-progress", "goal-date"]'>
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="goal-project">
                                            Goal
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="goal-status">
                                            Status
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="goal-progress">
                                            Progress
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" class="text-muted sort" data-sort="goal-date">
                                            Due date
                                        </a>
                                    </th>
                                    <th class="text-right">
                                        Team
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                <tr>
                                    <td class="goal-project">
                                        Update the API
                                    </td>
                                    <td class="goal-status">
                                        <span class="text-warning">●</span> In progress
                                    </td>
                                    <td class="goal-progress">
                                        55%
                                    </td>
                                    <td class="goal-date">
                                        <time datetime="2018-10-24">07/24/18</time>
                                    </td>
                                    <td class="text-right">
                                        <div class="avatar-group">
                                            <a href="profile-posts.html" class="avatar avatar-xs"
                                               data-toggle="tooltip" title="Dianna Smiley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs"
                                               data-toggle="tooltip" title="Ab Hadley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs"
                                               data-toggle="tooltip" title="Adolfo Hess">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs"
                                               data-toggle="tooltip" title="Daniela Dewitt">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-4.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="goal-project">
                                        Release v1.2-Beta
                                    </td>
                                    <td class="goal-status">
                                        <span class="text-warning">●</span> In progress
                                    </td>
                                    <td class="goal-progress">
                                        25%
                                    </td>
                                    <td class="goal-date">
                                        <time datetime="2018-10-24">08/26/18</time>
                                    </td>
                                    <td class="text-right">
                                        <div class="avatar-group justify-content-end">
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Dianna Smiley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Ab Hadley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Adolfo Hess">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="goal-project">
                                        GDPR Compliance
                                    </td>
                                    <td class="goal-status">
                                        <span class="text-success">●</span> Completed
                                    </td>
                                    <td class="goal-progress">
                                        100%
                                    </td>
                                    <td class="goal-date">
                                        <time datetime="2018-10-24">06/19/18</time>
                                    </td>
                                    <td class="text-right">
                                        <div class="avatar-group justify-content-end">
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Dianna Smiley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Ab Hadley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Adolfo Hess">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="goal-project">
                                        v1.2 Documentation
                                    </td>
                                    <td class="goal-status">
                                        <span class="text-danger">●</span> Cancelled
                                    </td>
                                    <td class="goal-progress">
                                        0%
                                    </td>
                                    <td class="goal-date">
                                        <time datetime="2018-10-24">06/25/18</time>
                                    </td>
                                    <td class="text-right">
                                        <div class="avatar-group justify-content-end">
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Dianna Smiley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Ab Hadley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fe fe-more-vertical"></span>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td class="goal-project">
                                        Plan design offsite
                                    </td>
                                    <td class="goal-status">
                                        <span class="text-success">●</span> Completed
                                    </td>
                                    <td class="goal-progress">
                                        100%
                                    </td>
                                    <td class="goal-date">
                                        <time datetime="2018-10-24">06/30/18</time>
                                    </td>
                                    <td class="text-right">
                                        <div class="avatar-group justify-content-end">
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Dianna Smiley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-1.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Ab Hadley">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-2.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Adolfo Hess">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-3.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                            <a href="#!" class="avatar avatar-xs" data-toggle="tooltip"
                                               title="Daniela Dewitt">
                                                <img src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/img/avatars/profiles/avatar-4.jpg"
                                                     class="avatar-img rounded-circle border border-white"
                                                     alt="...">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>

    </div>


    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/chart.js/dist/Chart.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/chart.js/Chart.extension.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/highlight/highlight.pack.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/list.js/dist/list.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/quill/dist/quill.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/libs/select2/dist/js/select2.min.js"></script>

@endsection