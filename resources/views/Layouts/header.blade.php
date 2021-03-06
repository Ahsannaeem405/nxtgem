<!doctype html>
<html lang="en" style="
overflow-x: hidden;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <title>@section('title') @show</title>

</head>
<style>
    .bg-light {
        background-color: black !important;
    }

    .navbar-toggler {
        background: white;
    }

    .nav-link {
        color: white !important;
    }

    .navbar-brand {
        color: white !important;
    }

    .page-footer {
        background: black;
        color: white;
    }

    .con {
        border-top: 2px solid linear-gradient(to left, #009999 0%, #006699 100%);

          /* background: linear-gradient(to left, #009999 0%, #006699 100%)  */
    }

    .list-unstyled li a {
        color: white;
    }

    .btn_sub {
        background: linear-gradient(to right, #ffffff -8%, #1495bf 54%);
        font-weight: bold;
        color: #001E2C;
    }


    .example {
        padding: 10px;
        font-size: 17px;
        float: left;
        width: 60%;
        background: black;
        color: white;
        border: 1px solid lightgray;
        border-right: none !important;
        outline: none !important;


    }

    .search {
        background: linear-gradient(to right, #ffffff -8%, #1495bf 54%);

    }

    .button {
        float: left;
        width: 20%;
        padding: 14px;
        background: black;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        font-weight: bold;
        outline: none !important;
        border-left: none;
        cursor: pointer;
    }

    .example button:hover {
        background: black;
    }

    .example::after {
        content: "";
        clear: both;
        display: table;
    }



    body {
        background: url('https://www.studio-aegis.com/uploads/1/0/3/8/10380626/background-images/245373741.png') no-repeat center center;
        /* color: white; */
    }

    #preloader {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 999;
        overflow: visible;
        background: url('Images/NXTGEM Preloader.gif') no-repeat center center;
        /* background-size: contain; */
    }

    #content {
        display: none;
    }


    .advertise_styling {
        font-size: 40px;
        background-color: #18c7fc;
        margin-top: 20px;
        margin-bottom: 20px;
        height: 100px;
    }

    .advertise_back_color {
        background-color: #1295db
    }

    @media only screen and (max-width: 768px) {

        #abc {

            display: none;
        }

        #abc1 {

            display: none;
        }

        .navbar12{

          display: block !important;
        }
        .navbar12new{

          display: none;
        }

    }

    .logo_sizing {
        width: 50px;
        height: 45px;
    }


    @media only screen and (max-width: 425px) and (min-width: 320px)  {

#footpara{

float: left !important;
}
    }



    @media only screen and (max-width: 425px) and (min-width: 320px) {

.advertise_styling{


    background-size: 100% 35px !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
}

.fa-times{
    margin-top: 32px !important;
    font-size: 14px !important;
}
    }
</style>

<body style="
  overflow-x: hidden;">
    <div id="preloader"></div>
    @section('header')

        <div class="advertise_back_color">

            <div class="container">
                <div class="row d-flex align-items-center justify-content-center" >
                    <div class="col-md-10 text-center advertise_styling" style="background:url('{{asset('Images/Header.png')}}');">
                     
                        <i style="float: right;color: white;font-size: 31px;" class="fas fa-times"></i>
                    </div>


                </div>

            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar12" style="padding: 0px;display:none">
           
          
          
          
          
          <a class="navbar-brand ml-3" href="#">

                <img class="logo_sizing  " src="{{ asset('Images/122preview.png') }}" alt="">
            </a>
            <button class="navbar-toggler mt-2" style="float: right;    background: deepskyblue;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item m-2 active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Daily Top 10</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Game List</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Upcoming </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Exchange </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Comunity </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Marketplace </a>
                    </li>


                </ul>

                <div id="abc1" style=" 
              height: 0px;
              border-bottom: 55px solid #00D7FE;
              border-left: 50px solid transparent;">

                    <form class="form-inline my-2 my-lg-0" style="float:right">

                        <div id="abc" style=" 
                height: 0px;
                border-bottom: 55px solid black;
                border-left: 50px solid transparent;">
                            <input type="text" style="    border: 0px;    padding-bottom: 2px;" class="example mt-2"
                                placeholder="Search.." name="search">


                            <button style="padding-bottom: 6px;    border: 0px;" type="submit" class="button mt-2"><i
                                    class="fa fa-search"></i></button>
                        </div>


                        <div style=" 
              height: 0px;
              border-bottom: 55px solid #00D7FE;
              border-right: 50px solid transparent;">
                        </div>
                    </form>
                </div>



            </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar12new" style="padding: 0px;background-color:#1295bd !important">
            <div class="container-fluid">



                <div class="row" style="    width: 100%;">


                    <div class="col-12" style="background-color: #1295BD">


                        <div class="row">

                            <div class="col-10" style="background-color: #1295BD;    display: flex;       width: 0;
                            height: 0;
                            border-top: 92px solid black;
                            border-right: 40px solid transparent;">



                              <div class="row" style="position: absolute;margin-top:-75px;">

                                <div class="col-12" style="display: flex">

                                <a class="navbar-brand ml-4" href="#">

                                    <img class="logo_sizing " src="{{ asset('Images/122preview.png') }}" alt="">
                                </a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item m-1 active">
                                            <a class="nav-link" href="#">Home </a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Daily Top 10</a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Game List</a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Upcoming </a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Exchange </a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Resources</a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Comunity </a>
                                        </li>
                                        <li class="nav-item m-1" style="padding-left: 20px">
                                            <a class="nav-link" href="#">Marketplace </a>
                                        </li>


                                    </ul>

  
                                </div>

                            </div>

                          </div>
                        </div>
                            <div class="col-2" style="margin: 0px;position: absolute;padding:0px;
                            right: 0;">





<form class="form-inline my-2 my-lg-0" style="float:right">

  <div id="abc" class="" style=" 
height: 0px;    margin-top: 18px;
border-bottom: 55px solid black;
border-left: 23px solid transparent;">
      <input type="text" style="    border: 0px;    padding-bottom: 2px;" class="example mt-2"
          placeholder="Search.." name="search">


      <button style="padding-bottom: 6px;    border: 0px;" type="submit" class="button mt-2"><i
              class="fa fa-search"></i></button>
  </div>



</form>





                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </nav>

    @show

    @yield('content')


    @section('footer')

        <!-- Footer -->


        <footer class="page-footer font-small  blue pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row p-2">



                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-4 col-12 mb-md-0 mb-3">

                        <!-- Links -->
                        <h3 class="text-uppercase">Submit Project</h3>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">ABOUT US</a>
                            </li>
                            <li>
                                <a href="#!">SIGN UP</a>
                            </li>
                            <li>
                                <a href="#!">LOGIN</a>
                            </li>

                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-4 col-12 mb-md-0 mb-3">

                        <!-- Links -->
                        <h3 class="text-uppercase">Contact</h3>

                        <ul class="list-unstyled">
                            <li>
                                <p class="mt-4" style="font-size: 14px;">If you have any thoughts or questions you'd like to share with us, send us a mail to
                                    <span style="color: #1495BF"> contact@nxgem.io</span> or get in touch with us through
                                    our social media channels.
                                </p>
                            </li>


                        </ul>

                    </div>
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-4 pr-0 col-12 mb-md-0 mb-3">

                        <!-- Links -->
                        <h3 class="text-uppercase">Stay In Touch</h3>

                        <ul class="list-unstyled">
                            <li class="mt-3">
                                <input type="text" class="form-control" placeholder="Email">
                            </li>
                            <li class="mt-2">
                                <button style="border: 0px;" class="form-control btn_sub">SUBSCRIBE TO OUR
                                    NEWSLETTER</button>
                            </li>


                        </ul>

                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->
            <div class="container con p-2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 ">
                        <img src="{{ asset('Images/footer.JPG') }}" style="width: 200px;" alt="">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-4">
                        <p>Terms and Conditions | Privacy Policy | Disclaimer</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 py-4">
                        <p style="float: right" id="footpara"> ?? 2021 All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer -->


    @show

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    
    
    

    <script>

$(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 10,
slidesToScroll: 10,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 6,
slidesToScroll: 6,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 4,
slidesToScroll: 4
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 3,
slidesToScroll: 3
}
}

]
});
});
    </script>
    
    <script>
        var preloader;

        function preload(opacity) {
            if (opacity <= 0) {
                showContent();
            } else {
                preloader.style.opacity = opacity;
                window.setTimeout(function() {
                    preload(opacity - 1)
                }, 800);
            }
        }

        function showContent() {
            preloader.style.display = 'none';
            document.getElementById('content').style.display = 'block';
        }

        document.addEventListener("DOMContentLoaded", function() {
            preloader = document.getElementById('preloader');
            preload(1);
        });
    </script>

    
</body>

</html>
