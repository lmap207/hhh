@extends('layouts.admin') 
@section('title') 用户添加 @endsection 
@section('title','用户添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>用户添加</span> 
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user"
                  enctype="multipart/form-data">
                    <!-- 用户名 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="" >
                 
                        </div>
                    </div>
                  <!-- 密码 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="">
                      
                        </div>
                    </div>
                    <!-- 权限 -->
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">权限</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="qx" style="display: none;"> 
                                <option value="0">普通用户</option>
                                <option value="1">管理员</option>
                            </select>
                        </div>
                    </div>
                    
                     
                    <!-- 手机号 -->
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手机号<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="tel" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>
                     <!-- 用户邮箱 -->
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户邮箱<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="email" name="email" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>
                    <!-- 用户头像 -->
                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">个人头像<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <!-- 头像需要做上传  -->
                            <input type="file" name="pic" class="tpl-form-input" id="user-name" placeholder="" >
                        </div>
                    </div>



                    {{csrf_field()}}
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