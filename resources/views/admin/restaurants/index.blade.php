@extends('admin.layouts.master')
@section('content')

    <style>
        .table {border: 1px solid black;}
        .table tr:nth-child(even) {background: #EDEDED}
        .table tr:nth-child(odd) {background: #FFFFFF}
    </style>

    <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <font color="#000000" face="微軟正黑體"><i class="fa fa-registered"></i>餐廳帳號管理 <small>所有餐廳帳號列表</small></font>
        </h1>
    </div>
</div>

<!-- /.row -->
<div class="row" style="margin-bottom: 20px; text-align:right">
    <div class="col-lg-12">
        <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i>　新增餐廳帳號</a>
    </div>
</div>

<!-- /.row -->
<font color="#000000" face="微軟正黑體" style="text-align: center">
<div class="row">
    <div class="col-lg-12">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-hover" style="border:3px #9BA2AB solid;">
                <thead style="border:2px #9BA2AB solid;">
                    <tr style="background-color: lightgrey;">
                        <th width="50" style="text-align: center">編號</th>
                        <th width="80" style="text-align: center">餐廳名稱</th>
                        <th width="80" style="text-align: center">Logo</th>
                        <th width="120" style="text-align: center">電話</th>
                        <th width="250" style="text-align: center">地址</th>
                        <th width="85" style="text-align: center">開啟/停權</th>
                        <th width="85" style="text-align: center">修改</th>
                        <th width="85" style="text-align: center">刪除</th>
                    </tr>
                </thead>
                <tbody style="border:3px #9BA2AB solid;">
                @foreach($restaurants as $res)

                    <tr>
                        <td>{{$res->id}}</td>
                        <td>{{$res->name}}</td>
                        <td>{{$res->logo}}</td>
                        <td>{{$res->phone}}</td>
                        <td>{{$res->address}}</td>
                        <td>
                            <form action="/admin/restaurants/{{$res->id}}/status" method="POST">
                                <a href ="/admin/restaurants/{{$res->id}}/status" class="btn btn-primary " type="submit" role="button">
                                    @if($res->open==0)
                                        <i class="fa fa-toggle-on"></i>{{($res->open)?' 開啟':' 停權'}}
                                    @else
                                        <i class="fa fa-toggle-off"></i>{{($res->open)?' 開啟':' 停權'}}
                                    @endif
                                </a>
                                {{ csrf_field() }}
                            </form>
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('admin.restaurants.edit',$res->id) }}" class="btn btn-info" style="text-decoration:none;"><i class="fa fa-edit"></i>修改</a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <form class="delete" action="{{route('admin.restaurants.destroy',['id'=>$res->id]) }}" method="POST" onsubmit="return ConfirmDelete()">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-danger" value="刪除">
                                </form>
                            </div>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</font>

<script>
    function ConfirmDelete()
    {
        var x = confirm("確定要刪除該餐廳帳號嗎?");
        if (x)
            return true;
        else
            return false;
    }
</script>


<!-- /.row -->
@endsection
