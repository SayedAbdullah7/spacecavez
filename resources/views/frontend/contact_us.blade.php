@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>

        body{
            background: linear-gradient(107.16deg, #6B4D7A -2.75%, #50008E 43.03%, rgba(149, 0, 255, 0) 97.82%);
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
            background-color: transparent;!important;
        }
        #bg{ min-height: 100vh; margin:0; }
        #bg{ display:flex; flex-direction:column; }
        .container.content{ flex:1; }
        /* contact us */
        #contact-us button{
            background-color: #000;
            width: 374px;
            max-width: 88vw;
            height: 77px;
            border-radius: 48px;
            font-size: 24px;
        }
    </style>
    <div class="content container" id="contact-us" >
        <div class="row my-5">
            <div class="col-md-6 d-md-block d-none"  >
                <img src="images/purple-planet-dark-background-saturn-astronomy-1440x2560-6425.jpg" class="img-fluid object-fit-cover" width="100%" style="max-height: 90vh"  />
            </div>
            <div class="col-md-6" id="form-card">
                <h1 class="text-capitalize  montserrat-font text-black head" style="font-size: 112px;font-weight:100 "> contact us</h1>
                <form action="{{route('send.mail')}}" method="post"  onsubmit="disableSubmitButton()" style="max-width: 400px">
                    @csrf
                    <div class="my-5">
                        <label for="name" class="form-label text-black fs-2">Name</label>
                        <input type="text" class="form-control bg-transparent text-white" id="name" name="name" autocomplete="off" aria-describedby="nameHelp">
                        @error('name')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="email" class="form-label text-black fs-2">Email </label>
                        <input type="email" class="form-control bg-transparent text-white" id="email" name="email"  autocomplete="off" aria-describedby="emailHelp">
                        @error('email')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="my-5">
                        <label for="message" class="form-label text-black fs-2">message</label>
                        <textarea class="form-control bg-transparent text-white" id="message" name="message" rows="3"  autocomplete="off"></textarea>
                        @error('message')
                        <div>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        @if(session('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                        @else
                            <button type="submit" id="contact-us-btn" class="btn text-black bg-m  btn-lg text-center text-white bg-black text-capitalize montserrat-font">contact us</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        #contact-us h1{
            font-size: 112px;
            font-size: min(8vw,112px) !important;
            font-weight:500;

        }
        @media (max-width: 576px) {
            #contact-us h1{
                font-size: 48px !important;
                font-weight:500 !important;
            }
            #contact-us  *{
                color: #fff!important;
                border-color: #fff !important;
            }
            #contact-us button{
                background-color: #fff !important;
                color: #000!important;
                width: 143px;
                height: 43px;
                font-size: 16px;
                font-weight: 500;
            }
            .bg {
                background: url(images/purple-planet-dark-background-saturn-astronomy-1440x2560-6425.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            #footer .social-icon {
                width: 13% !important;
                margin-bottom: 28px;
            }
            #get-in-touch{
                display: none;
            }
        }
    </style>
    <script>
        function disableSubmitButton() {
            var submitButton = document.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';
        }
    </script>
@endsection
