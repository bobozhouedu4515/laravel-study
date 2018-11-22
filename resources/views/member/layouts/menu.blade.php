
<head>
    <link rel="stylesheet" href="{{asset ('org/Dashkit-1.1.2/dist/assets')}}/fonts/feather/feather.min.css">
</head>

<div class="col-sm-3">

    <div class="card">
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
                <a href="{{route ('member.attention',$user)}}" style="color:red;"  class=" pb-2 nav flex-column nav-pills fa fa-heart">
                  @if($user->fans->contains(auth ()->user ()))
                    取消关注
                      @else
                    添加关注
                      @endif
                </a>
            </div>
                @can('isMine',$user)
                <div class="nav flex-column nav-pills pb--3 ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'ico'])}}" class="nav-link text-muted fa fa-user">
                        修改头像
                    </a>
                </div>

                <div class="nav flex-column nav-pills ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'password'])}}" class="nav-link text-muted fa fa-key">
                        修改密码
                    </a>
                </div>
                <div class="nav flex-column nav-pills ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'name'])}}" class="nav-link text-muted fa fa-pencil-square-o">
                        修改昵称
                    </a>
                </div>
                @endcan
            <div class="nav flex-column nav-pills ">
                <a href="{{route ('member.user.edit',[$user,'type'=>'fans'])}}" class="nav-link text-muted fa fa-users">
                    粉丝列表
                </a>
                <a href="{{route ('member.user.edit',[$user,'type'=>'followings'])}}" class="nav-link text-muted fa fa-users">
                    关注列表
                </a>
                <a href="{{route ('member.user.show',$user)}}" class="nav-link text-muted fa fa-male">
                    个人中心
                </a>
            </div>
        </div>
    </div>

</div>
