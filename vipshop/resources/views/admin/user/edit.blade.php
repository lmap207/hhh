@extends('layouts.admin') 
@section('title') 用户编辑 @endsection 
@section('title','用户编辑') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户编辑
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user/{{$users['id']}}" enctype="multipart/form-data">
                   <!-- 用户名 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="" value="{{$users['username']}}">

                        </div>
                    </div>
                    <!-- 权限  -->
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">权限<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="radio" name="qx" class="tpl-form-input" id="user-name" placeholder="" value="{{$users['qx']}}">普通用户
                            <input type="radio" name="qx" class="tpl-form-input" id="user-name" placeholder="" value="{{$users['qx']}}">管理员
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="tel" class="tpl-form-input" id="user-name" placeholder="" value="{{$users['tel']}}">

                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">邮箱<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="email" class="tpl-form-input" id="user-name" placeholder="" value="{{$users['email']}}">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头像<span class="tpl-form-line-small-title"><img src="{{$users['pic']}}" alt=""></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic">
                        </div>
                    </div>
					{{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection