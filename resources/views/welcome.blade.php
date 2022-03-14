<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('settings.system_title')}}</title>
    <link rel="icon" href="{{asset("favicon.png")}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');

        html, body {
            background-color: #fff;
            color: #575e62;
            font-family: 'Tajawal', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            direction: rtl;

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
            padding: 5px 20px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            border: 1px solid #636b6f;
            border-radius: 10px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: #0a568c;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ route('admin.dashboard') }}">الرئيسية</a>
            @else
                <a href="{{ route('login') }}">تسجيل الدخول</a>
            @endauth
        </div>
    @endif


    <div class="container mt-5">
        <div class="row align-items-center mt-5">
            <div class="col-12 mt-5">
                <div class="logo-container">
                    <img src="{{asset("images/bcc-logo.png")}}" class="rounded mx-auto d-block" style="width: 200px"/>
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="title m-b-md text-center">
                    نظام الارشفة
                </div>
            </div>

            <div class="col-12">
                <div class="links text-center">
                    <blockquote>
                        اهلا بكم في نظام الارشفة الخاص بغرفة تجارة بغداد
                    </blockquote>

                    <blockquote>
                        برمجة وتصميم <a target="_blank" href="https://bcc.iq/team">شعبة تكنولوجيا المعلومات</a> في غرفة
                        تجارة بغداد
                    </blockquote>
                </div>
            </div>

        </div>


    </div>

</div>
</body>
</html>
