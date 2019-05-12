@extends('admin.layouts.master')
@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <font color="#000000" face="微軟正黑體"><i class="fa fa-registered"></i>餐廳人員帳號管理 <small>所有餐廳人員帳號列表</small></font>
        </h1>
    </div>
</div>

<!-- /.row -->
<font color="#000000" face="微軟正黑體" style="text-align: center">
<div class="row">
    <form action="/admin/restaurants/{{$restaurants->id}}" method="POST" role="form">
    <div class="col-lg-12">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="50" style="text-align: center">帳號</th>
                        <th width="80" style="text-align: center">密碼</th>
                        <th width="85" style="text-align: center">啟用/停用</th>
                        <th width="85" style="text-align: center">回上頁</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($staff as $sf)
                    <tr>
                        <td>{{$sf->email}}</td>
                        <td>{{$sf->password}}</td>
                        <td>
                            <form action="/admin/restaurants/{{$sf->id}}/status" method="POST">
                                <a href ="/admin/restaurants/{{$sf->id}}/status" class="btn btn-primary " type="submit" role="button">{{($sf->open)?'開啟':'停權'}}</a>
                                {{ csrf_field() }}
                            </form>
                        </td>
                        <td>
                            <button type="button" onclick="history.back()" class="btn btn-success">取消</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </form>
</div>
</font>

<!-- /.row -->
@endsection
