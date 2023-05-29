
@extends('frontend.layouts.app',['page'=>'home'])

@section('content')
    <section id="content">
        <div class="s-wrap s-type-1" role="slider">

            <input type="radio" id="s-1" name="slider-control" value="1" checked="checked">
            <input type="radio" id="s-2" name="slider-control" value="2">
            <input type="radio" id="s-3" name="slider-control" value="3">
            <input type="radio" id="s-4" name="slider-control" value="4">
            <input type="radio" id="s-5" name="slider-control" value="5">
            <div class="s-content">
                <div class="s-item position-relative "  id="page-1">
                    <div class="position-absolute group-one"  style="width: 70%;margin: 0px 15%;" >
                        <img id="banner" class="m-auto d-block" style="opacity: 0.2;max-width: 100%;max-height: 50vh;" src="{{asset('images/bg-logo.png')}}">
                        <p style="font-family: 'Montserrat';color: #FFFFFF;opacity: 0.6;max-width: 900px;" class="paragraph first-paragraph text-center m-auto mt-4 fw-semibold">
                            Pushing the boundaries of what is possible with space education and space R&D to create more sustainable future.
                        </p>
                    </div>
                </div>
                <div class="s-item position-relative " id="page-2">
                    <div class="position-absolute group-one center-absolute container text-center" style="" >
                      <img id="space-ship" class="position-absolute" style="" src="images/q2.png">
                        <div class="row mt-xs-5 " style="margin-top: 55Vh;">
                            <!--                            <div class="">-->
                            <p style="font-family: 'Montserrat';color: #FFFFFF;opacity: 0.6;max-width: 900px;margin-left: 13vw" class="col-lg-4 paragraph text-center   col-md-6 fw-bold">
                                a research platform to support scientific and technological development in crewed space exploration
                            </p>
                            <!--                            </div>-->

                        </div>

                    </div>
                </div>
                <!-- three -->
                <!--                <div class="row mt-xs-5 position-absolute " style="right: 0">-->
                <!--                </div>-->
                <div class="s-item position-relative ">
                    <div class="position-absolute center-absolute container" style="" >
                        <p style="font-family: 'Montserrat';color: #FFFFFF;opacity: 0.6;max-width: 900px;right: 15%;position: absolute;top: 80%;" class="col-lg-4 paragraph text-center   col-lg-4">
                            Sustainability Studies
                        </p>
                        <div class="row container group"  style="margin-top: 50Vh;">
                            <div id="element" class="col-md-7  col-xs-8 row position-absolute " style="right: 0">
                                <div id="test" class="col-6 p-0 m-0" style="top:200%;margin-right: 0">
                                    <img  id="plants-one"  src="{{asset('images/plants1.png')}}" width="100%">
                                </div>
                                <div id="plants-two"  class="col-6 p-0 m-0">
                                    <img   src="{{asset('images/plants2.png')}}" width="100%">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- four 4 -->
                <div class="s-item position-relative " id="page-4">
                    <div class="position-absolute center-absolute container" >
                        <div class="row  " >
                            <div class="col-4 p-0 m-0" >
                                <img   src="{{asset('images/SUIT1.png')}}" style="
                                       max-width: 100%;
                                       max-height: 60vh;">
                            </div>
                            <div class="col-4 p-0 m-0" >
                                <img   src="{{asset('images/SUIT2.png')}}" style="
                                       max-width: 100%;
                                       max-height: 60vh;">
                            </div>
                            <div class="col-4 p-0 m-0" >
                                <img   src="{{asset('images/SUIT3.png')}}" style="
                                       max-width: 100%;
                                       max-height: 60vh;"
                                >
                            </div>
                        </div>
                        <p style="font-family: 'Montserrat';color: #FFFFFF;opacity: 0.6;max-width: 900px;" class="col-12 paragraph text-center m-auto fw-semibold">
                            Technology testing and development platform
                        </p>
                    </div>
                </div>

                <!-- five 5 -->
                <div class="s-item position-relative " id="page-5">
                    <div class="position-absolute center-absolute container"  style="height: 100vh">
                        <div class="row " >
                            <div class="banner col-md-8  m-auto">
                                <div class="col-12">
                                    <img  width="100%" src="{{asset('images/bg-logo.png')}}" style="opacity: 0.6;" >
                                </div>
                                <div class="col-12">
                                    <a href="{{route('events')}}">
                                        <button id="explore" type="button" class="btn btn-secondary btn-lg mt-3 mt-md-4 mt-lg-5 text-uppercase ">explore</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-control">
                <label class="s-c-1" for="s-1"></label>
                <label class="s-c-2" for="s-2"></label>
                <label class="s-c-3" for="s-3"></label>
                <label class="s-c-4" for="s-4"></label>
                <label class="s-c-5" for="s-5"></label>
            </div>
            <div class="s-nav">
                <label class="s-nav-1 left btn btn-outline-light text-uppercase navigate p-0" for="s-5">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >skip</span>
                        </div>
                    </div>
                </label>
                <label class="s-nav-1 right btn btn-outline-light text-uppercase navigate p-0" for="s-2">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >next</span>
                        </div>
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                    </div>
                </label>
                <label class="s-nav-2 left btn btn-outline-light text-uppercase navigate p-0" for="s-1">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >back</span>
                        </div>
                    </div>
                </label>
                <label class="s-nav-2 right btn btn-outline-light text-uppercase navigate p-0" for="s-3">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >next</span>
                        </div>
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                    </div>
                </label>
                <label class="s-nav-3 left  btn btn-outline-light text-uppercase navigate p-0" for="s-2">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >back</span>
                        </div>
                    </div>
                </label>
                <label class="s-nav-3 right btn btn-outline-light text-uppercase navigate p-0" for="s-4">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >next</span>
                        </div>
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                    </div>
                </label>
                <label class="s-nav-4 left  btn btn-outline-light text-uppercase navigate p-0" for="s-3">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >back</span>
                        </div>
                    </div>
                </label>
                <label class="s-nav-4 right btn btn-outline-light text-uppercase navigate p-0" for="s-5">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >next</span>
                        </div>
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                    </div>
                </label>
                <label class="s-nav-5 left  btn btn-outline-light text-uppercase navigate p-0" for="s-4">
                    <div class="row m-auto w-100 h-100 p-0"  >
                        <div class="col-6 p-0 m-auto" >
                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 448 512">
                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
                            </svg>
                        </div>
                        <div class="col-6  p-0 m-auto">
                            <span class="m-auto" >back</span>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div>
            <div style="position: relative;">
            </div>
{{--            <div id="space-ship" class="position-fixed" >--}}
{{--                <img id="s" src="images/q2.png" height="100%">--}}
{{--            </div>--}}
            <img id="moon" src="images/moon.png">
            <div class="bg-body-tertiaryp-5 rounded">
                <div class="col-sm-8 mx-auto">
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <script src="{{asset('js/main.js')}}"></script>
@endpush
@push('style')
    <style>
        .bg {
            background: url(images/home-bg1.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /*overflow: hidden;*/
            transition: all 2s ease-in-out;
            /*padding: 10px;*/
            /*z-index: 10;*/

            height: 100% !important;
        }
        html, body, .bg{
            height: 100% !important;
        }
        #header{
            position: absolute;
            width: 100%;
        }
        .s-wrap{
            height: 100vh;
        }
        .group-one{
            margin: 0 !important;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #space-ship{
            top: 50% ;
            left: 50% ;
            transform: translate(-50%, -50%);
        }
        #page-5 .banner{
            top: 50%  !important;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #page-4>div{
            top: 40%  !important;
            /*top: 40%  !important;*/
            left: 50%;
            transform: translate(-50%, -50%);
        }
        @media (max-width: 1000px) {
            #space-ship{
                height: 60vh !important;
            }
            .four #moon {
                width: 40vw;
                top: 60%;
                left: 5%;
            }
            #page-1 .group-one {
                top: 38%;
            }
        }

        @media (max-width: 780px) {
            #space-ship{
                top: 40% ;
            }
            #page-4>div{
                top: 30%  !important;
            }
            .three .s-item  .group{
                margin-top: 54Vh !important;
            }

        }

        @media (max-width: 450px) {
            #page-1 .group-one {
                top: 45%;
            }
        }
        /*@media (max-width: 1000px) {*/
        /*    #page-4>div{*/
        /*        top: 30%  !important;*/
        /*    }*/
        /*}*/
    </style>
@endpush
