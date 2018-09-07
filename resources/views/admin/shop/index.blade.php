@extends('layouts.admin')
@section('title') 商品列表 @endsection 
@section('title','商品列表') 

@section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>商品列表</span> 
        </div>
        
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="/shop/create"> 新增</a></button>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
            
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/shop" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="{{request()->keywords}}">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                        <tr>
                            <th class="table-check">
                                <input type="checkbox" class="tpl-table-fz-check">
                            </th>
                            <th class="table-id">ID</th>
                            <th class="table-title">商品名</th>
                            <!--
                            <th class="table-title">商品作者</th>
                            <th class="table-title">商品标题</th>
                            <th class="table-title">商品简介</th>
                            -->
                            <th class="table-title">分类名</th>
                            <th class="table-title">属性名</th>
                            <th class="table-title">商品价格</th>
                            <th class="table-title">商品数量</th>
                            <th class="table-title">商品图片</th>
                            <th class="table-title">作者头像</th>
                            <th class="table-title">作者简介</th>
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($shops as $v)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td class="am-hide-sm-only">{{$v['id']}}</td>
                            <td class="am-hide-sm-only">{{$v['name']}}</td>
                            <!--
                            <td class="am-hide-sm-only">{{$v['author']}}</td>
                            <td class="am-hide-sm-only">{{$v['title']}}</td>
                            <td class="am-hide-sm-only">{{$v['intro']}}</td>
                            -->
                            <td class="am-hide-sm-only">{{$v->cate->cate}}</td>
                            <td class="am-hide-sm-only">{{$v->pro->pname}}</td>
                            <td class="am-hide-sm-only">{{$v['price']}} 元</td>
                            <td class="am-hide-sm-only">{{$v['sice']}}</td>
                            <td class="am-hide-sm-only"><img src="{{$v['picture']}}" width="50" alt=""></td>
                            <td class="am-hide-sm-only"><img src="{{$v['apic']}}" width="50" alt=""></td>
                             <td class="am-hide-sm-only">{{$v['aintro']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/shop/{{$v['id']}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form style="float:left" action="/shop/{{$v['id']}}" method="post">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <style>
                    .pagination{
                        padding-left: 0;
                        margin: 1.5rem 0;
                        list-style: none;
                        color: #999;
                        text-align: left;
                        padding: 0;
                    }

                    .pagination li{
                        display: inline-block;
                    }

                    .pagination li a, .pagination li span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                    }

                    .pagination .active span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                        background: #23abf0;
                        color: #fff;
                        border: 1px solid #23abf0;
                        padding: 6px 12px;
                    }
                </style>
                <div class="am-cf">
                    <div class="am-fr">
                        {{ $shops->appends(request()->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection