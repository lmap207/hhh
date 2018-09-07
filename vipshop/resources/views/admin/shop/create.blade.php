@extends('layouts.admin')
@section('title') 商品添加 @endsection 
@section('title','商品添加') 

@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>商品添加</span> 
        </div>
    </div>

    <div class="tpl-block ">
        <div class="am-g tpl-amazeui-form">
            <div class="am-u-sm-12 am-u-md-9">
                <form class="am-form am-form-horizontal" action="/shop" method="post" enctype="multipart/form-data">

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品名</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" id="user-name" placeholder="请输入商品名">
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" id="user-name" placeholder="请输入商品标题">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品简介</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="intro" id="user-name" placeholder="请输入商品简介">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品作者</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="author" id="user-name" placeholder="请输入商品作者">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">分类</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="cate_id" style="display: none;">
                                @foreach($cates as $v)
                                <option value="{{$v['id']}}">{{$v['cate']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">属性</label>
                        <div class="am-u-sm-9">
                            <select data-am-selected="{searchBox: 1}" name="pro_id" style="display: none;">
                                @foreach($pros as $v)
                                <option value="{{$v['id']}}">{{$v['pname']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">商品价格</label>
                        <div class="am-u-sm-9">
                            <input type="tel" name="price" id="user-phone" placeholder="请输入商品价格">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">作者简介</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="aintro" id="user-phone" placeholder="请输入作者简介">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-QQ" class="am-u-sm-3 am-form-label">商品数量</label>
                        <div class="am-u-sm-9">
                            <input type="number" name="sice" pattern="[0-9]*" id="user-QQ" placeholder="请输入商品数量">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">商品图片</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                   <!--  <img src="assets/img/a5.png" width="100"> -->
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 添加商品图片</button>
                                <input id="doc-form-file" type="file" name="picture" multiple="">
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">作者头像</label>
                        <div class="am-u-sm-9">
                            <div class="am-form-group am-form-file">
                                <div class="tpl-form-file-img">
                                   <!--  <img src="{{request()->apiv}}" width="100"> -->
                                </div>
                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 添加作者头像</button>
                                <input id="doc-form-file" type="file" name="apic" multiple="">
                            </div>
                        </div>
                    </div>
                    {{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection