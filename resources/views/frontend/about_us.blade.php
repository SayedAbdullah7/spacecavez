@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>
        #body{ min-height: 100vh; margin:0; }
        #bg{ display:flex; flex-direction:column;min-height: 100vh; }
        #bg > .content{ flex:1; }
        body{
            background-image: unset !important;
            /*background-size: cover;*/
            /*min-height: 100vh;*/
        }
        .bg{
            background: url("images/bg_about.jpg")  no-repeat   center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .content .
    </style>
    <div class="content col-xl-9 mx-lg-5 mx-2 " >
        <div class="item" id="about" >
            <h3 class="base-color mb-5 head" style="margin: 5vh 0">ABOUT US</h3>
            <p class="p1 col-xl-6">
                SpaceCavez is a leading space
                startup providing advancing Space
                education and space R&D through
                and for analog space missions.
            </p>
            <p class="p2">
                We offer a wide range of <a  style="font-size: unset!important;" href="{{route('education')}}" class="base-color">educational opportunities</a> including
                webinars, workshops, courses, and internships that allow our
                interns to work on real space projects while learning.
            </p>
            <h3 class="base-color head" style="margin: 5vh 0">Our Goal</h3>
            <p class="p3">
                is to launch a research platform for crewed space exploration in the middle east to support educational and technological development by providing infrastructure for complex research on the impact of short and long-term Lunar and Martian space missions.
            </p>
            <p class="base-color">
                Join us now as we embark on an exciting journey towards
                a brighter future for all.
            </p>
        </div>
    </div>
@endsection
