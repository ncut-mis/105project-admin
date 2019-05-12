<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>尚食併狂</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body {background:url('https://i.imgur.com/M4nLkQ5.jpg');background-size:100%;background-repeat:no-repeat;}
            html, body {
                background-color: #FFFFFF;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            <div class="content">
                <div class="title m-b-md">
                    <font color="#737373" face="微軟正黑體">尚食併狂</font>
                </div>

                <div class="container">
                    <div class="row" style="background-color:transparent">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        {{--<input type="hidden" name="_token" value="4q9d8DIp8IIiGUJscr8X6akbPBleJ1d3xvMfUhhe">--}}
                                        <div class="form-group row" style="background-color:transparent">
                                            <label for="email" class="col-md-4" style="text-align:right;line-height:35px;"><font color="#000000" face="微軟正黑體" size="3"><b>{{ __('帳號　') }}</b></font></label>
                                            <input id="email" type="email" name="email" value="" required="required" placeholder="請輸入信箱" autofocus="autofocus" class="form-control">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group row" style="background-color:transparent">
                                            <label for="password" class="col-md-4" style="text-align:right;line-height:35px;"><font color="#000000" face="微軟正黑體" size="3"><b>{{ __('密碼　') }}</b></font></label>
                                            <input id="password" type="password" name="password" required="required"  placeholder="請輸入密碼"class="form-control">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group row" style="background-color:transparent">
                                            <div class="form-check">
                                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                                <label for="remember" class="form-check-label"><font color="#000000" face="微軟正黑體" size="3">{{ __('Remember Me') }}</font></label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                            <a href="http://localhost:8000/password/reset" class="btn btn-link">Forgot Your Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
