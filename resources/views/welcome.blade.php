@extends('Layouts.header')

@section('title')
    Home
@endsection
<style>

@media only screen and (max-width: 425px) and (min-width: 320px) {

.secondslider{


    display: block !important;
}

.icons{
    padding-right: 0px !important;
            margin-right: 0px !important;
        text-align: right !important;
           

}

#myCarousel{

    display: none;
}

}
.carousel {
        /* margin: 50px auto; */
        padding: 0 70px;
        margin-top: -6%;
    }

    .carousel .carousel-item {

        text-align: center;
        overflow: hidden;
    }

    .carousel .carousel-item .img-box {
        height: 160px;
        width: 100%;
        position: relative;
    }

    .carousel .carousel-item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .carousel .carousel-item h4 {
        font-size: 18px;
        margin: 10px 0;
    }

    .carousel .carousel-item .btn {
        color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }

    .carousel .carousel-item .btn:hover,
    .carousel .carousel-item .btn:focus {
        color: #fff;
        background: #000;
        border-color: #000;
        box-shadow: none;
    }

    .carousel .carousel-item .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }

    .carousel .thumb-wrapper {
        text-align: center;
    }

    .carousel .thumb-content {
        padding: 15px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        height: 38px;
        width: 34px;
        border-radius: 30px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-control-prev i,
    .carousel-control-next i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0);
        text-shadow: none;
        font-weight: bold;
    }

    .carousel-control-prev i {
        margin-left: -3px;
    }

    .carousel-control-next i {
        margin-right: -3px;
    }

    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }

    .carousel .item-price strike {
        color: #999;
        margin-right: 5px;
    }

    .carousel .item-price span {
        color: #86bd57;
        font-size: 110%;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border-color: transparent;
        border: none;
    }

    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }

    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }

    .carousel-control-next,
    .carousel-control-prev {
        width: 4% !important;
    }

    .con2 {
        background-color: #CCf7FF;
        height: auto;
        display: block;
    }

    .heading {
        margin-top: 10%;
    }

    .icons a {
        font-size: 30px;
        color: black;
    }

    .con1 {
        margin-left: auto;
        margin-right: auto;
        display: none;
    }

    .video {
        display: none !important;

    }


    .con3 {
        background-color: #1295BD;
        height: auto;
        display: block;
    }
    .card {
     /* position: relative;
     display: flex;
     width: 100px;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #1295BD;
     background-clip: border-box; */
     
    
 }

 .slick-slide{

    border: 0px !important;
 }



 .card .card-body {
     padding: 1rem 1rem;
     background: #1295BD;
 }

 .slick-slide{

    height: auto !important;
 }

 .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }

 .logo {
     height: 67px
 }

 .items {
     width: 90%;
     margin: 0px auto;
  
 }

 .slick-slide {
     margin: 10px
 }

    


    /* .carousel-control-next {

        right: 23% !important;
    } */

    .col_margin {
        margin-right: 20px;
        margin-left: 20px;
    }

    .img_sizing {

        height: 350px;
        box-shadow: 10px 10px 18px #3c3838;
        object-fit: cover;
    }

    .story_heading {
        padding-top: 20px;
        text-align: center;
        justify-content: center;
        color: white;
        font-size: 18px
    }


    .heading {
        margin-top: 10%;
    }

    .team_img_pading {
        /* margin: 20px; */
    }

    .img_sizing_team {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        box-shadow: 5px 5px 18px #3c3838;

    }

    .team_name {
        margin-top: 8px;
    }

    .team_name_picture {
        height: 30px;
    }


    .dot {
        height: 65px;
        width: 65px;
        background-color: black;
        border-radius: 50%;

    }


    .question_mark {
        height: 300px;
        width: 200px;
        margin-bottom: 90px;
        color: white
    }

    .partners {
        width: 600px;
    }


    .fa_icon {
        background-color: white;
        border-radius: 20%;
        padding: 2px;
        font-size: 22px;
    }


    .intro_para {

        margin-bottom: 4px;
    }


    @media screen and (min-width: 1440px) {
        /* .dyor {
    margin-top: 0px !important;
  }

  .mt-3, .my-3 {
    margin-top: 0rem !important;
} */


        .carousel-control-prev {

            top: -14px !important;
        }


        .carousel-control-next {

            top: -14px !important;
        }

        .settext {

            margin-bottom: -135px;
        }

        .settext1 {

            margin-bottom: -85px;
        }
    }


    @media only screen and (max-width: 1200px) and (min-width: 992px) {

        .dyor {

            margin-top: 14px !important;

        }



    }


    @media only screen and (max-width: 800px) and (min-width: 768px) {

        .dyor {

            margin-top: 24px !important;

        }

        .carousel-control-prev {

            top: 48px !important;
        }

        .carousel-control-next {

            top: 48px !important;
        }

    }



    @media only screen and (max-width: 1400px) and (min-width: 1201px) {

        .dyor {

            margin-top: 15px !important;

        }

        .ssdds {

            margin-top: 12px !important;
        }

        .settext {

            margin-bottom: -102px;
        }

        .settext1 {

            margin-bottom: -85px;
        }

    }



    @media only screen and (max-width: 1100px) and (min-width: 992px) {

        .dyor {

            margin-top: 50px !important;

        }

        .carousel-control-prev {

            top: 35px !important;
        }



        .carousel-control-next {

            top: 35px !important;
        }


        .settext {

            margin-bottom: -94px;
        }

        .settext1 {

            margin-bottom: -85px;
        }
    }

    }



    /* @media screen and (min-width: 768px) {



.carousel-control-prev{

    top: 26px !important;
}


.carousel-control-next{

    top: 26px !important; 
}
} */

</style>
@section('content')


    <div class="container-fluid con2">
        <!-- Button trigger modal -->
        {{-- <button type="button" class="btn btn-primary video" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button> --}}

        <!-- Modal -->
        {{-- <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl " role="document">
                <div class="modal-content" style="    background: no-repeat;border: 0px;">
                    <div class="modal-header" style="border: 0px">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close mt-3  " style="    color: transparent;    margin-right: 15%;"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                

                        <div class="row">


                            <div class="col-2"></div>
                            <div class="col-8">
                                <video controls width="100%">

                                    <source src="{{ asset('Images/2nd.mp4') }}" type="video/webm">

                                    <source src="{{ asset('Images/2nd.mp4') }}" type="video/mp4">

                                    Sorry, your browser doesn't support embedded videos.
                                </video>
                            </div>

                            <div class="col-2"></div>

                        </div>
                    </div>
              
                </div>
            </div>
        </div> --}}

        <div class="row">
            {{-- <div class="col-lg-11 col-md-11 col-sm-6">
                <h1 class="text-center heading ml-5" style="letter-spacing: 15px; ">INTRO VIDEO</h1>
                <br>
            </div> --}}


            <div class="col-lg-11 mt-5 col-md-11 text-center  col-8 py-5">

                <h1 class="mt-2" style="    letter-spacing: 18px;">INTRO VIDEO</h1>

                {{-- <video controls width="100%">

                    <source src="{{ asset('Images/2nd.mp4') }}" type="video/webm">

                    <source src="{{ asset('Images/2nd.mp4') }}" type="video/mp4">

                    Sorry, your browser doesn't support embedded videos.
                </video> --}}
            </div>




            <div class="col-lg-1 col-md-1  col-4 py-5 icons" >
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-twitter-square"></i></a><br>
                <a href="#"><i class="fab fa-youtube-square"></i></a><br>
                <a href="#"><i class="fab fa-youtube-square"></i></a><br>
                <a href="#"><i class="fab fa-linkedin"></i></a><br>
            </div>
        </div>
        <br>
    </div>


    <div class="container-fluid con3"
        style="background:url('{{ asset('Images/a.png') }}');  background-color: #1295BD !important;    background-repeat: no-repeat;  ">
        {{-- <div class="container-fluid con3" style=""> --}}
        <div class="row">
            <div class="col-12" style="text-align: center">
                <img src="{{ asset('Images/Asset 6.png') }}" style="margin-top: -2%;    max-width: 100%;"
                    class="text-center" alt="">
            </div>
        </div>

        <div class="row">


            <div class="col-1"></div>
            <div class="col-md-1  col-lg-1 col-12 mt-3 text-center">

                <img class="   mb-5 mb-lg-0 dyor" src="{{ asset('Images/Asset 4.png') }}" style="max-width: 100%" alt="">

                <p style="    font-size: 6px;
               color: white;">CLICK HERE TO KNOW MORE</p>
            </div>


            <div class=" col-md-8 mt-n4 mt-lg-0  col-lg-8 col-sm-12">

                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                    <div class="carousel-inner">
                        <div class="carousel-item active mt-n5  mt-lg-0">
                            <div class="row">


                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box mt-4 mt-md-2 mt-lg-0">
                                            <img src="{{ asset('Images/Asset 12.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box  mt-md-2 mt-lg-0">
                                            <img src="{{ asset('Images/Asset 2.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box  mt-md-2 mt-lg-0">
                                            <img src="{{ asset('Images/Asset 11.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" style="    background: white;
                    opacity: 1;    top: 2px;" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" style="    background: white;
                    opacity: 1;    top: 2px;" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>




                <div class="items secondslider" style="display: none">
                    <div class="card">
                        <div class="card-body"> <img class="logo" src="{{asset('Images/Asset 12.png')}}"> </div>
                    </div>
                    <div class="card">
                        <div class="card-body"> <img class="logo" src="{{asset('Images/Asset 2.png')}}"> </div>
                    </div>
                    <div class="card">
                        <div class="card-body"> <img class="logo" src="{{asset('Images/Asset 11.png')}}"> </div>
                    </div>
                    <div class="card">
                        <div class="card-body"> <img class="logo" src="{{asset('Images/Asset 2.png')}}"> </div>
                    </div>
                   
                </div>




            </div>


            <div class="col-12 col-md-1 col-lg-1 mt-3 text-center ">

                <img class="   mb-5 mb-lg-0 dyor  ssdds" src="{{ asset('Images/Asset 3.png') }}" style="max-width: 100%"
                    alt="">


                <p style="    font-size: 5px;
                    color: white;">CLICK HERE TO VOTE PROJECTS</p>
            </div>

        </div>

        <div class="row ">

            <div class="col-9">


            </div>

            <div class="col-12 col-md-2 col-lg-2 ">
                <img class="mb-2 mt-3 mt-md-0 mt-lg-0" style="width: 80%" src="{{ asset('Images/Asset 5.png') }}">
            </div>
        </div>

        <div class="row">

            <div class="col-2">

            </div>

            <div class="col-12 mt- col-md-6 col-lg-6">

                <img style="width: 100%;    box-shadow: 0 0 40px #3c3838;" src="{{ asset('Images/Live Asset.JPG') }}">
            </div>
            <div class="col-1"></div>
            <div class="col-sm-12 mt-3 mt-md-0 mt-lg-0 col-md-2 col-lg-2 ">



                <div class="card" style="    border: 6px solid #CCF7FF;">
                    <div class="card-body" style="padding:0rem">
                        <img style="width: 100%" src="{{ asset('Images/Sponsored 1.JPG') }}" alt="">
                    </div>
                </div>

                <div class="card mt-2" style="    border: 6px solid #CCF7FF;">
                    <div class="card-body" style="padding:0rem">
                        <img style="width: 100%" src="{{ asset('Images/Sponsored 2.JPG') }}" alt="">
                    </div>
                </div>

                <div class="card mt-2" style="    border: 6px solid #CCF7FF;">
                    <div class="card-body" style="padding:0rem">
                        <img style="width: 100%" src="{{ asset('Images/Sponsored 3.JPG') }}" alt="">
                    </div>
                </div>



            </div>

        </div>



        <div class="row">

            <div class="col-md-2 col-lg-2 col-sm-2 ">

            </div>


            <div class="col-md-1 col-lg-1 col-1">
                <img class="width:100%" style="border-radius: 50%;  box-shadow: 0 0 30px #3c3838;"" src="
                    {{ asset('Images/Danjo Logo.jpg') }}" alt="Avatar">
            </div>
            <div class="col-md-4 mt-md-3 mt-lg-3 ml-md-n3 ml-lg-n3 col-lg-4 col-10 ">
                <h5 class="ml-5 ml-lg-0" style="color:white">MIMIR QUIZ- SASAGOT KALANG KIKITA KANA...Danjo Capital Master
                </h5>
            </div>

        </div>

        <br>
        <div class="row">

            <div class="col-12 col-md-12 col-lg-12"
                style="    background: linear-gradient(to left, #009999 0%, #006699 100%)">

                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-12 text-center pl-0 ">
                       <img src="{{asset('Images/AdHeadline.jpg')}}" alt="" style="width: 136%; height:100px;    object-fit: fill;">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 text-center" style=" 
                    width: 0;
                    height: 0px;
                    border-top: 100px solid #007199;
                    border-left: 50px solid transparent;">
                       
                        {{-- <h1 style="color: White">ADVERTISEMENT HEADLINE</h1> --}}

                        <br>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">
                    <img class="" src="{{ asset('/Images/Asset 9.png') }}" style="max-width: 100%" alt="">
                </h3>
            </div>

        </div>




        <div class="row d-flex align-items-center justify-content-center settext">
            <div class="col-md-3 col_margin">
                <img class="img_sizing" style="width: 100%" src="{{ asset('/Images/Blog 1.jpg') }}" alt="">
                <p class="story_heading"> What To Know About The Highly Anticipated Meta Thugs NFT Drop</p>
            </div>
            <div class="col-md-3 col_margin ">
                <div class="img_sizing w-100"
                    style="background-image:url('{{ asset('Images/Blog 2.jpg') }}');    background-position: right;background-repeat: no-repeat;background-size: cover; ">
                </div>
                <p class="story_heading" style="font-size: 16px !important;">The Mimir Token lists on Apaswap Polygon DEX
                    with $MIMIR/USDT trading pair</p>
            </div>
            <div class="col-md-3 col_margin">
                <img class="img_sizing" style="width: 100%" src="{{ asset('/Images/Blog 3.jpg') }}" alt="">
                <p class="story_heading">We have opened PVU: PVP for all users.</p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center heading">
                    <img class="" src="{{ asset('/Images/Asset 10.png') }}" style="    max-width: 100%;"
                        alt="">
                </h3>

            </div>

        </div>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-3 text-center team_img_pading">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/1.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/7.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & CEO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>
            </div>
            <div class="col-md-3 text-center team_img_pading">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/2.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/8.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & CMO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fab fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>
            </div>
            <div class="col-md-3 team_img_pading text-center">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/3.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/9.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & COO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fab fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>
            </div>
        </div>
        <div class="row  d-flex align-items-center justify-content-center mt-md-5 settext1">
            <div class="col-md-3 team_img_pading text-center">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/4.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/10.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & CFO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fab fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>
            </div>
            <div class="col-md-3 team_img_pading text-center ">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/5.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/11.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & CTO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fab fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>
            </div>
            <div class="col-md-3 team_img_pading text-center ">
                <img class="img_sizing_team" src="{{ asset('/Images/2x/6.png') }}" alt="">
                <h2 class="team_name">
                    <img class="team_name_picture" src="{{ asset('/Images/2x/12.png') }}" alt="">
                </h2>
                <p class='intro_para' style="color: white">
                    Co-Founder & CDO
                </p>
                <h4 class="team_contact_icon">
                    <i class="fab fa_icon fab fa-linkedin"></i>
                    <i style="font-size:20px;padding:3px 0px 2px 0px" class="fab fa_icon fas fa-infinity"></i>
                    <i class="fab fa_icon fab fa-telegram-plane"></i>
                    <i class="fab fa_icon fab fa-twitter"></i>
                </h4>

            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center heading">
                    <img class="partners" src="{{ asset('/Images/OUR PARTNERS.png') }}" style="max-width: 100%"
                        alt="">
                </h3>
                <div class="col-lg-12">
                    <div class="text-center">
                        <img class="question_mark" src="{{ asset('/Images/QUESTION MARK.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="col-12">



                <span class="dot"></span>

            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".video").trigger('click');
        });
    </script>

@endsection
