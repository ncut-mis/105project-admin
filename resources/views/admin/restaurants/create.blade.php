@extends('admin.layouts.master')
@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <font color="#000000" face="微軟正黑體"><i class="fa fa-plus-circle"></i>新增餐廳帳號 </font>
        </h1>
    </div>
</div>
<!-- /.row -->
@include('admin.layouts.partials.validation')
<!-- /.row -->
<div class="row justify-content-center">
    <form action="{{ route('admin.restaurants.index') }}" method="POST" role="form" enctype="multipart/form-data">{{ csrf_field() }}
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="text-align:center">
                <font color="#000000" face="微軟正黑體" size="5"><b>餐廳基本資料</b></font>
            </div>
            <div class="card-body">
                {{--餐廳名稱--}}
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('餐廳名稱') }}</font></label>
                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--Logo--}}
                {{--<div class="form-group row">--}}
                    {{--<label for="logo" class="col-md-3" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('Logo') }}</font></label>--}}
                    {{--<div class="col-md-8">--}}
                        {{--<input type="file" name="file" id="file"><br><input type="submit" name="submit" value="上傳檔案">--}}
                        {{--<input id="logo" type="text" class="form-control" name="logo" required>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--電話--}}
                <div class="form-group row">
                    <label for="phone" class="col-md-3" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('電話') }}</font></label>
                    <div class="col-md-8">
                        <input id="phone" type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                {{--地址--}}
                <div class="form-group row">
                    <label for="address" class="col-md-3" style="text-align:right;line-height:30px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('地址') }}</font></label>
                    <div class="col-md-8">
                        <input id="address" type="text" class="form-control" name="address" required>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header" style="text-align:center">
                <font color="#000000" face="微軟正黑體" size="5"><b>餐廳經理帳號</b></font>
            </div>
            <div class="card-body">
                {{--姓名--}}
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('姓名') }}</font></label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="stname" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--職稱--}}
                <div class="form-group row">
                    <label for="position" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('職稱') }}</font></label>

                    <div class="col-md-8">
                        <input id="position" type="text" class="form-control" name="position" value="經理" readonly>
                    </div>
                </div>
                {{--電話--}}
                <div class="form-group row">
                    <label for="phone" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('電話') }}</font></label>

                    <div class="col-md-8">
                        <input id="phone" type="text" class="form-control" name="phone" required>
                    </div>
                </div>
                {{--地址--}}
                <div class="form-group row">
                    <label for="address" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('地址') }}</font></label>

                    <div class="col-md-8">
                        <input id="address" type="text" class="form-control" name="address" required>
                    </div>
                </div>
                {{--信箱--}}
                <div class="form-group row">
                    <label for="email" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('信箱') }}</font></label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--密碼--}}
                <div class="form-group row">
                    <label for="password" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('密碼') }}</font></label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                {{--確認密碼--}}
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-3" style="text-align:right;line-height:32px;"><font color="#000000" face="微軟正黑體" size="4">{{ __('確認密碼') }}</font></label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
            </div>
        </div>

        <br>
        {{--註冊--}}
        <div class="form-group row">
            <div class="col-md-2"></div>
            <div class="col-md-4" style="text-align:center">
                <button type="submit" class="btn btn-primary">
                    {{ __('確定') }}
                </button>
            </div>
            <div class="col-md-4" style="text-align:center">
                <button type="button" onclick="history.back()" class="btn btn-danger">取消</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="col-md-3"></div>
    </form>
</div>

<main class="py-4">
    @yield('content')
</main>

<!-- /.row -->

@endsection
