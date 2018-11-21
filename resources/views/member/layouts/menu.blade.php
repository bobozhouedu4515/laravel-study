<div class="col-sm-3">
    <div class="card">
        <div class="card-block text-center pt-5">
            <div class="avatar avatar-xxl">
                <a href="{{route ('member.user.edit',[$user,'type'=>'ico'])}}">
                    {{--选择头像-->创建本地库--}}
                    <img src="{{$user->ico}}" class="avatar-img rounded-circle">
                </a>
            </div>
            <div class="text-center mt-4">
                <a href="">
                    <h3 class="text-secondary"></h3>
                </a>
            </div>
        </div>
        <div class="card-body text-center pt-1 pb-2">
            <div class="nav flex-column nav-pills ">
                <a href="" class="nav-link text-muted fa fa-gittip">
                  添加关注
                </a>
            </div>
                @can('isMine',$user)
                <div class="nav flex-column nav-pills ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'ico'])}}" class="nav-link text-muted">
                        修改头像
                    </a>
                </div>

                <div class="nav flex-column nav-pills ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'password'])}}" class="nav-link text-muted">
                        修改密码
                    </a>
                </div>
                <div class="nav flex-column nav-pills ">
                    <a href="{{route ('member.user.edit',[$user,'type'=>'name'])}}" class="nav-link text-muted">
                        修改昵称
                    </a>
                </div>
                @endcan
            <div class="nav flex-column nav-pills ">
                <a href="" class="nav-link text-muted">
                    粉丝列表
                </a>
                <a href="" class="nav-link text-muted">
                    关注列表
                </a>
                <a href="" class="nav-link text-muted">
                    消息中心
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <div class="nav flex-column nav-pills">
                <a href="" class="nav-link
                                    text-muted">
                    帖子管理
                </a>
                <a href="" class="nav-link
                                    text-muted">
                    文档管理
                </a>
                <a href="" class="nav-link
                                    text-muted">
                    会员时长
                </a>
            </div>
        </div>
    </div>
</div>