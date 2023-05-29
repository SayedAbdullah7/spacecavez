@php
    $currentRouteName = Route::currentRouteName();
@endphp
<section id="header" style="z-index: 10">
    <nav class="navbar navbar-expand-lg rounded navbar-light pt-3" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <div class=" m-auto" type="button"  >
                <div class="row" >
                    <div class="col-3 navbar-toggler">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('images/bg-logo.png')}}" alt="Bootstrap" width="100%" height="100%" >
                        </a>
                    </div>
                    <div class="dropdown-center col-7 navbar-toggler" style="margin: auto 0;text-align: center;">
                        <button class="btn btn-secondary dropdown-toggle bg-transparent text-capitalize" type="button" data-bs-toggle="dropdown" aria-expanded="false " data-bs-auto-close="outside" style="border-radius: 8px;border-color: #D9D9D9;border-width:2px;padding: 0px 18px;">
                            @if(isset($post))
                                {{$post->category}}
                            @else
                                {{str_replace('_', ' ', $currentRouteName)}}
                            @endif
                        </button>
                        <ul class="dropdown-menu bg-transparent" style="width: 100%;text-align: center;" aria-labelledby="navbarDropdownMenuLink"  >
                            @if($currentRouteName != 'home')
                                <li><a class="dropdown-item text-white " href="{{route('home')}}">home</a></li>
                            @endif
                            @if($currentRouteName != 'about_us')
                                <li><a class="dropdown-item text-white " href="{{route('about_us')}}">about us</a></li>
                            @endif
                            <li class="dropdown-submenu">
                                <a class="dropdown-item text-white" href="#" tabindex="-1">space programs</a>
                                <ul class="dropdown-menu dropdown-menu-start bg-transparent" style="left: 70%;">
                                    <li><a class="dropdown-item text-white opacity-75" href="#">missions</a></li>
                                    @if($currentRouteName != 'education')
                                        <li><a class="dropdown-item text-white " href="{{route('education')}}">education</a></li>
                                    @endif
                                    <li><a class="dropdown-item text-white  opacity-75" href="#">projects</a></li>
                                </ul>
                            </li>
                            @if($currentRouteName != 'events')
                                <li><a class="dropdown-item text-white" href="{{route('events')}}">events</a></li>
                            @endif
                            @if($currentRouteName != 'contact_us')
                                <li><a class="dropdown-item text-white" href="{{route('contact_us')}}">contact us</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>



            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <!--          <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>-->
                <div class="container col-lg-2" style="margin: 0px 5.8vw ">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('images/bg-logo.png')}}" alt="Bootstrap" width="174" >
                    </a>
                </div>
                <ul class="navbar-nav col-lg-10 justify-content-lg-start">
                    <li class="nav-item mx-4">
                        <a class="nav-link active text-white"" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-white" href="{{route('about_us')}}">about us</a>
                    </li>
                    <li class="nav-item dropdown bg-transparent">
                        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">space programs</a>
                        <ul class="dropdown-menu bg-transparent text-center">
                            <li><a class="dropdown-item text-white opacity-75" href="#">missions</a></li>
                            <li><a class="dropdown-item text-white" href="{{route('education')}}">education</a></li>
                            <li><a class="dropdown-item text-white opacity-75" href="#">projects</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-white" href="{{route('events')}}">events</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link text-white" href="{{route('contact_us')}}">contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
