@extends('back.layouts.master')
@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <font color="#000000" face="微軟正黑體">店內人員管理 <small>所有人員列表</small></font>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align:right">
    <div class="col-lg-6">
        <a href="{{ route('back.staff.create') }}" class="btn btn-success">新增人員</a>
    </div>
    <div class="col-lg-6">
        <a href="{{ route('back.staff.test') }}" class="btn btn-success">test</a>
    </div>
</div>
<!-- /.row -->
<font color="#000000" face="微軟正黑體" style="text-align: center">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="50" style="text-align: center">編號</th>
                        <th width="80" style="text-align: center">姓名</th>
                        <th width="80" style="text-align: center">職稱</th>
                        <th width="120" style="text-align: center">信箱</th>
                        <th width="120" style="text-align: center">電話</th>
                        <th width="200" style="text-align: center">密碼</th>
                        <th width="100" style="text-align: center">修改/刪除</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($staff as $sf)
                    <tr>
                        <td>{{$sf->id}}</td>
                        <td>{{$sf->name}}</td>
                        <td>{{$sf->position}}</td>
                        <td>{{$sf->email}}</td>
                        <td>{{$sf->phone}}</td>
                        <td>{{$sf->password}}</td>
                        <td>
                            <div>
                                <a href="{{ route('back.staff.edit',$sf->id) }}" class="btn btn-info" style="text-decoration:none;">修改</a>
                                <form action="{{ route('back.staff.destroy', $sf->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button  class="btn btn-danger">刪除</button>
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
<!-- /.row -->
@endsection
