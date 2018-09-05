@extends('layouts.admin') @section('title') 属性值列表 @endsetion @section('content')
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span>属性值列表</span> 
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a href="/vpro/create" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                        <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/vpro" method="get">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field" name="keyword" value="{{request() ->keyword}}">
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
                            <th class="table-title">属性名</th>
                            <th class="table-title">属性值</th> 
                            <th class="table-set">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vpros as $v)
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>{{$v->id}}</td>
                            <td class="am-hide-sm-only">{{$v->value}}</td>
                            <td class="am-hide-sm-only">{{$v->pro->pname}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/vpro/{{$v->id}}/edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form action="/vpro/{{$v->id}}" method="post" style="float:left">
                                            {{ csrf_field() }} {{ method_field('DELETE') }}
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="am-cf">
                    <div class="am-fr">
                        <style>
                        .pagination {
                            padding-left: 0;
                            margin: 1.5rem 0;
                            list-style: none;
                            color: #999;
                            text-align: left;
                            padding: 0;
                        }

                        .pagination li {
                            display: inline-block;
                        }

                        .pagination li a,
                        .pagination li span {
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

                        .pagination .active span {
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
                        {{ $vpros->appends(request() ->all())->links() }}
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
@endsection