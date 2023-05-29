@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>
@if($post->category == 'education')
        /*.bg {*/
    {{--background: url({{asset("images/education.jpg") }})  no-repeat   center center;--}}
{{--  .bg {--}}
{{--        background: url({{asset("images/education.jpg") }})  no-repeat center center fixed;--}}
{{--    }--}}
{{--@else--}}
{{--        .bg {--}}
{{--    background: linear-gradient(107.16deg, #6B4D7A -2.75%, #50008E 43.03%, rgba(149, 0, 255, 0) 97.82%);--}}
{{--}--}}
/*body {*/
/*    background: url(images/home-bg1.jpg) no-repeat center center fixed;*/
/*}*/
@endif
        .bg{
            background: linear-gradient(107.16deg, #6B4D7A -2.75%, #50008E 43.03%, rgba(149, 0, 255, 0) 97.82%);
        border: 4px solid #3C415C;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        border-radius: 4px;
        background-size: cover;

        }
        textarea, input{
            border-radius: 0 !important;
            outline: 0!important;
            border-width: 0 0 2px!important;
            border-color: black !important;
        }
        .form-control:focus{
            box-shadow: unset !important;
        }
        #bg{ min-height: 100vh; margin:0; }
        #bg{ display:flex; flex-direction:column; }
        #event.container{ flex:1; }
        p {
            font-size: 14.9px !important;
        }
    </style>
    <div class="container" id="event" >
        <div class="item"  style="margin-top: 10vh">
                <h1 class=" text-white my-md-5 my-2">{{$post->title}}</h1>
                <div>
                    <img class="w-100 card-rounded rounded shadow-sm" src="{{asset('blog/images/'.$post->image)}}" alt="" />
                </div>
                <div class="montserrat-font my-5">
                    {!! $post->content !!}
                </div>
        </div>
    </div>

@endsection
