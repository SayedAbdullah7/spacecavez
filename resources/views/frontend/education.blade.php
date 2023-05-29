@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>
        body{
            background-image: unset !important;
        }
         html{
             background-color: rgba(0,0,0,0.5);
         }
        .bg{
            background: url("images/education.jpg")  no-repeat   center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            box-shadow:inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
        }
        .navbar-nav a{
            color: #9500FF !important;
        }
        #bg{ min-height: 100vh; margin:0; }
        #bg{ display:flex; flex-direction:column; }
        .content{ flex:1; }
    </style>
    <div class="content container">
        <div id="education" >
            <p>
                If you aspire to take your career in space technology to the Next level  by learning while working on a real space projects then the forthcoming 2023 summer internship program is tailored for you.
            </p>
            <h1 class="base-color">Stay Tuned ...</h1>
        </div>

    </div>
@endsection
