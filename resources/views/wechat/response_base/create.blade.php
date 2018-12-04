@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- Header -->
        <div class="header mt-md-2">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col">
                        <!-- Title -->
                        <h2 class="header-title">
                            微信基本回复
                        </h2>

                    </div>

                </div> <!-- / .row -->

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">


                <div class="card">
                    <div class="card-body">

                        <form method="post" action="{{route('wechat.response_base.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">关注回复</label>
                                <input type="text" name="subscribe" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">默认回复</label>
                                <input type="text" name="default" value="" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-primary">保存</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
