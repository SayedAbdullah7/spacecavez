@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>

        body{
            background: linear-gradient(107.59deg, #000000 -3.6%, #000000 38.26%, #9500FF 63.49%, #C89EFF 97.83%);
            border: 4px solid #3C415C;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 4px;
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
        .container.content{ flex:1; }
        p{
            font-size: unset !important;
        }
        .btn-card{
            color: #9747FF !important;
            border-color: #9747FF !important;
            border-radius: 36.39px;
            /*max-width: 87px;*/
            /*max-height: 14px;*/
            font-size: 14px !important;
        }
        .btn-card:hover{
            color: #fff !important;
            background-color:#9747FF !important;
            border-color: #9747FF !important;
        }
        .card{
            background: #D9D9D9;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);
        }
        .card-text{
            /*text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);*/
            font-weight: 500;
            color: #000;
        }
        .card-title{
            /*text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.5);*/
            font-weight: 600;
            color: #000;
        }
    </style>
    <div class="content container" id="event-index" >
        <div class="item mt-5 row">
            @foreach($posts as $post)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card w-100 overflow-hidden p-0 my-2" style="border-radius: 35px;">
                        <img src="{{asset('blog/thumbnails/'.$post->image)}}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column" >
                            <h5 class="card-title fs-1 montserrat-font">{{$post->title}}</h5>
                            <p class="card-text montserrat-font" style="flex:1;font-size: unset!important;">
{{--                                {{\Illuminate\Support\Str::limit(strip_tags($post->content),265)}}--}}
                                {{ Illuminate\Support\Str::limit(str_replace('&nbsp;', '', strip_tags($post->content)), 265) }}

                            </p>
                            <div class="m-auto w-100 text-center">
                                <a  href="{{route('post.show',$post->id)}}" class="btn btn-outline-info m-auto btn-card px-4 py-1">Learn me more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>
    </div>

@endsection
