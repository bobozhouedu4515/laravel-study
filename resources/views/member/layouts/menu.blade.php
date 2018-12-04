<div class="col-sm-3">

    <div class="card" id="activeCard">
        <div class="card-block text-center pt-4">
            <div class="avatar avatar-xxl">
                <a href="{{route ('member.user.edit',[$user,'type'=>'ico'])}}">
                    {{--选择头像-->创建本地库--}}
                    <img src="{{$user->ico}}" class="avatar-img rounded-circle">
                    {{--{{$user}}--}}
                </a>
            </div>
            <div class="text-center mt-2">
                <a href="">
                    <h3 class="text-secondary"></h3>
                </a>
            </div>
        </div>
        <div class="card-body text-center pt-4 pb-5">
            <div class="nav flex-column nav-pills ">
                @if($user->fans->contains(auth ()->user ()))
                    <a href="{{route ('member.attention',$user)}}" class=" nav-link text-muted fe fe-heart">
                        取消关注
                        @else
                            <a href="{{route ('member.attention',$user)}}" class=" nav-link text-muted  fe fe-heart">
                                添加关注
                                @endif
                            </a>
                    </a>
            </div>
            @can('isMine',$user)
                <div class="nav flex-column nav-pills pb--3 ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'ico'])}}"
                       class="nav-link text-muted  fe fe-user {{ active_class(if_route(['member.user.edit']) && if_query('type', 'ico'),'active','') }}">
                        修改头像
                    </a>
                    <a href="{{route ('member.user.edit',[$user,'type'=>'password'])}}"
                       class="nav-link text-muted fa fa-key {{ active_class(if_route(['member.user.edit']) && if_query('type', 'password'),'active','') }}">
                        修改密码
                    </a>
                    <a href="{{route ('member.user.edit',[$user,'type'=>'name'])}}"
                       class="nav-link text-muted fa fa-pencil-square-o {{ active_class(if_route(['member.user.edit']) && if_query('type', 'name'),'active','') }}">
                        修改昵称
                    </a>
                    <a href="{{route ('member.notify',$user)}}"
                       class="nav-link text-muted fe fe-mail {{ active_class(if_route(['member.notify']))}} ">
                        消息通知
                    </a>
                </div>
            @endcan

        </div>
        <div class="card-body text-center pt-2 pb-2 ">
            <a href="{{route ('member.fans',$user)}}"
               class="nav-link text-muted fe fe-users {{active_class (if_route (['member.fans',$user]))}}">
                粉丝列表
            </a>
            <a href="{{route ('member.followings',$user)}}"
               class="nav-link text-muted fe fe-users {{ active_class(if_route(['member.followings',$user])) }}">
                关注列表
            </a>
            <a href="{{route ('member.user.show',$user)}}"
               class="nav-link text-muted fe fe-user  {{active_class(if_route(['member.user.show',$user]))}} ">
                个人中心
            </a>
            <a href="{{route ('member.article.collection',[$user,'type'=>'article'])}}"
               class="nav-link text-muted fe fe-folder {{ active_class(if_route(['member.article.collection']))}}">
                @can('noMine',$user)
                    他的收藏
                    @else
                    我的收藏
                @endcan
            </a>
            <a href="{{route ('member.myPraise',[$user,'type'=>'comment'])}}"
               class="nav-link text-muted fe fe-heart {{ active_class(if_route(['member.myPraise']))}}  ">
                @can('noMine',$user)
                他的点赞
                @else
                我的点赞
                @endcan
            </a>
        </div>
    </div>
</div>
@push('css')
    <style>
        #activeCard .active {
            color: white !important;
            background:cornflowerblue;
        }
    </style>
@endpush
