@extends('frontend.layouts.app',['page'=>'about_us'])
@section('content')
    <style>

        body{
            background: linear-gradient(107.16deg, #6B4D7A -2.75%, #50008E 43.03%, rgba(149, 0, 255, 0) 97.82%);
            border: 4px solid #3C415C;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 4px;
            min-height: 100vh;
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
        .content{ flex:1; }
    </style>
    <div class="content container" id="event" >
        <div class="item mt-5 "  >
            <div class="row">
                <div class=" col-lg-8">
                    <h3 class="base-color mb-5 head " style="margin: 5vh 0">Announcement</h3>
                    <p class="p1">
                        Attention all aspiring space enthusiasts!<br>
                        We are thrilled to announce the first-ever Mars Rover Competition in Egypt! This exciting event will simulate the mission of real rovers on Mars, giving participants a taste of what it's like to explore the Red Planet.
                    </p>
                </div>
                <div class="col-lg-4 position-relative m-auto" style="max-width: 40%;">
                    <img width="100%" src="images/Rectangle%2014.png" >
                    <img width="100%" src="images/648-6489270_curiosity-png-mars-curiosity-rover-png-removebg%201.png"  class="position-absolute" style="left: 0;top: 0;">
                </div>
            </div>


            <p class="p2">
                The competition will be open to high school and university students alike, with teams of up to five members. Participants will be tasked with designing and building their own rover, which will then be put through a series of challenges designed to test its capabilities. These challenges will include navigating rough terrain, collecting samples, and conducting experiments.
            </p>
            <p class="p3">
                The competition promises to be an unforgettable experience for all involved, offering a unique opportunity to learn about space exploration and robotics. It's also a chance to showcase your skills and creativity in front of a panel of judges made up of experts in the field.
            </p>
            <p class="p3 base-color-light" style="color:#B279FA;">
                So, if you're ready for an adventure that's out of this world, gather your team and start preparing for the Mars Rover Competition!
            </p>
            <p class="p3 ">
                If you are not yet ready to participate in the competition, we still have a place for you to watch and learn from our workshops and talks during the day.
                <br>
                <span class="base-color">Registration details</span> will be announced soon, all you have to do for now is to follow our social media pages and to stay tuned for more information. Let's show the world what Egypt is capable of!
            </p>
            <div class="row">
                <div class="col-lg-8 position-relative " style="max-width: 40%;">
                    <img width="100%" src="images/from_here.jpg" >
                </div>
                <div class=" col-lg-4" style="margin:auto 0;color:#B279FA;">
                    <p class="p1 m-auto">
                        the competition will take place in the Egyptian black desert (Egyptian Mars) early 2024.
                    </p>
                </div>
            </div>
            <p class="" style="color:#FF0000;" >
                the student contest will consist of four challenges for the rovers, including:
            </p>
            <p class="fw-bolder">
                - A terrain trek, commencing on easy terrain which will become more difficult, with rovers being awarded points for the number of milestones reached.
                <br></br>
                - A task to deliver a small tool to a dummy representing a stranded, injured astronaut. Points will be awarded based on how close the tool is delivered to the manikin.
                <br></br>
                - A task to operate an apparatus, for example, turn on a switch or push a button, with points awarded based on the number of switches thrown, buttons pushed, and valves turned.
                <br></br>
                -A task to find fossils placed in the terrain, with points for each fossil photographed and for each fossil gathered.
            </p>
            <p>
                To accomplish the tasks, student teams will have to build rovers that can be controlled and operated from a remote station via Wi-Fi, using cameras on the rover to provide eyes for the operator, who will not be able to see the rover directly. Rovers will have a maximum mass of 10 kg . Teams will need to raise their own funds or find parts to build their rovers, with a maximum parts budget for each team being 20,000 EGP.
            </p>
            <p>
                Teams are free to design their rover any way they like within these limits, with, for example, wheels, treads, halftracks, or legs all being acceptable means of propulsion. Airborne devices are not permitted; however, rovers may employ masts to hold cameras in elevated positions. Rovers will have 15 minutes to complete each task. To accomplish the required tasks, vehicles will need a propulsion system, a mechanical claw, a holding basket and an imaging and communication system. The computer employed as the remote-control station will not count as part of the mass or cost of the rover. Teams are free to base their design upon already existing models or use completely original designs. Teams may also employ rover kits or build their systems from scratch.
            </p>
            <p class="base-color">
                Further information, including answers to frequently asked questions and detailed contest rules, will be posted on our website and social media in the near future.
            </p>
        </div>
    </div>

@endsection
