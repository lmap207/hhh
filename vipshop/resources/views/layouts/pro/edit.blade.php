@extends('layouts.admin') @section('title') 商品修改 @endsection @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>商品修改</span> 
        </div>
    </div>
    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">
                <form class="am-form am-form-horizontal" method="post" action="/pro/{{$pros->id}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品属性 / Pro</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-name" placeholder="" name="pname" value="{{$pros->pname}}">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary">保存修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection