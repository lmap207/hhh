@extends('layouts.admin') @section('title') 商品属性值 @endsection @section('content')
<div class="tpl-portlet-components" style="height:500px;">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 商品属性值
        </div>
    </div>
    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">
                <form class="am-form am-form-horizontal" method="post" action="/vpro">
                    {{ csrf_field() }}
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">属性 <span class="tpl-form-line-small-title">/Pro</span></label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="pro_id">
                                @foreach($pros as $v)
                                <option value="{{$v->id}}">{{$v->pname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品属性值 / vpro</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-name" placeholder="" name="value">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection