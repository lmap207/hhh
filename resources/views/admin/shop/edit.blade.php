@extends('layouts.admin')
@section('title') 商品修改 @endsection 
@section('title','商品修改') 

@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>商品修改</span> 
        </div>
    </div>
    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">
                <form class="am-form am-form-horizontal" method="post" action="/shop/{{$shops['id']}}" enctype="multipart/form-data">

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品名</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" id="user-name" placeholder="请输入商品名" value="{{$shops->name}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="cate_id" style="display: none;">
                                @foreach($cates as $v)
                                <option value="{{$v['id']}}"
                                    @if($v['id'] == $shops['cate_id']) 
                                        selected 
                                    @endif
                                >{{$v['cate']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">商品价格</label>
                        <div class="am-u-sm-9">
                            <input type="tel" name="price" id="user-phone" placeholder="请输入商品价格" value="{{$shops->price}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-QQ" class="am-u-sm-3 am-form-label">商品数量</label>
                        <div class="am-u-sm-9">
                            <input type="number" name="sice" pattern="[0-9]*" id="user-QQ" placeholder="请输入商品数量" value="{{$shops->sice}}">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img src="{{$shops->picture}}" width="50" alt="">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 修改商品图片</button>
                                <input id="doc-form-file" type="file" name="picture" multiple="">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-QQ" class="am-u-sm-3 am-form-label">作者简介</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="aintro" pattern="[0-9]*" id="user-QQ" placeholder="请输入作者简介" value="{{$shops->aintro}}">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">作者头像</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                    <img src="{{$shops->apic}}" width="50" alt="">
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 修改作者头像</button>
                                <input id="doc-form-file" type="file" name="apic" multiple="">
                            </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary">修改</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection