@extends('layouts.admin') @section('title') 后台设置 @endsection @section('title','后台设置') @section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 网站设置
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/admin/settings" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> 网站标题<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ? $setting->title : ''}}">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-intro" class="am-u-sm-3 am-form-label">网站开关</label>
                       
                        <div class="am-u-sm-9">
                            <input type="radio" name="sopen" value="1"

                             @if($setting->sopen=='1')
                             checked 
                             @endif

                             > on
                            <input type="radio" name="sopen" value="0"
                             @if($setting->sopen=='0')
                             checked
                              @endif>off
                        </div>
                        
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">网站logo
                            <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="logo" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ? $setting->logo : ''}}">
                            <img src="{{$setting->logo}}" width="60px">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">二维码 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="qrcode" class="tpl-form-input" id="user-name" placeholder="" value="{{$setting ? $setting->qrcode : ''}}">
                            <img src="{{$setting->qrcode}}" width="60px">
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