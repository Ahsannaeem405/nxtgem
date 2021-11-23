@extends('Layouts.header')

@section('title')
    Home
@endsection
<style>
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
        color: rgba(0, 0, 0, 0.8);
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


    /* .carousel-control-next {

        right: 23% !important;
    } */

    .col_margin{
  margin-right: 20px;
  margin-left: 20px;
}

.img_sizing{
      
      height: 300px; 
      box-shadow: 10px 10px 18px #888888;
    }

    .story_heading{
  padding-top: 20px;text-align: center;justify-content: center;color: white;font-size: 20px
}


.heading{
        margin-top: 10%;
    }

    .team_img_pading{
  margin: 20px;
}

.img_sizing_team{
  border-radius: 50%;width:150px;height: 150px;box-shadow: 5px 5px  18px #888888;

}

.team_name{
  margin-top: 8px;
}

.team_name_picture{
  height: 30px;
}


.question_mark{
  height: 300px;width: 200px;margin-bottom: 90px;color:white
}
.partners{
  width: 600px;
}


.fa_icon{
  background-color: white;border-radius: 20%;
  padding: 4px;
}
</style>
@section('content')


    <div class="container-fluid con2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary video" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl " role="document">
                <div class="modal-content" style="    background: no-repeat;
                  border: 0px
              ;">
                    <div class="modal-header" style="border: 0px">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close mt-3  " style="    color: transparent;    margin-right: 15%;"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- <video type="video/mp4" src="{{asset('Images/2nd - Coming Soon Video (Convert to GIF + Add Music).mp4')}}"></video> --}}
                        {{-- <video  width="320" height="240"controls="controls autoplay">

            <source src="{{asset('Images/2nd.mp4')}}" type="video/mp4">

            <source src="{{asset('images/2nd.mp4')}}" type="video/ogg">

          Your browser does not support the video tag.

          </video> --}}

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
                    {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11 col-md-11 col-sm-6">
                <h3 class="text-center heading" style="letter-spacing: 15px;    margin-left: 78px;">INTRO VIDEO</h3>

            </div>
            <div class="col-lg-1 col-md-1 text-center col-sm-1 py-5 icons">
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
                <a href="#"><i class="fab fa-discord"></i></a><br>
            </div>
        </div>

    </div>


    {{-- <div class="container-fluid con3" style="background:url('{{asset('Images/HOMEPAGE BACKGROUND.jpg')}}');    background-size: cover;"> --}}
      <div class="container-fluid con3" style="">
      <div class="row">
        <div class="col-12" style="text-align: center">
      <img src="{{asset('Images/Asset 6.png')}}" style="margin-top: -9%;" class="text-center" alt="">
    </div>
    </div>
        <br><br>
        <div class="row">


            <div class="col-1"></div>
            <div class="col-1 mt-4">

                <img src="{{ asset('Images/Asset 4.png') }}" style="width: 100%" alt="">
            </div>


            <div class="col-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">


                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{ asset('Images/Asset 12.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
                                            <img src="{{ asset('Images/Asset 2.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="thumb-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="thumb-wrapper">
                                        <div class="img-box">
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
                    <a class="carousel-control-prev" style="    top: 26px;" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" style="    top: 26px;" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>




            </div>


            <div class="col-1 mt-4">

                <img src="{{ asset('Images/Asset 3.png') }}" style="width: 100%" alt="">
            </div>

        </div>

        <div class="row">

            <div class="col-9">


            </div>

            <div class="col-2">
                <img class="mb-2" style="width: 80%" src="{{ asset('Images/Asset 5.png') }}">
            </div>
        </div>

        <div class="row">

            <div class="col-2">

            </div>

            <div class="col-6">

                <img style="width: 100%" src="{{ asset('Images/Live Asset.JPG') }}">
            </div>
            <div class="col-1"></div>
            <div class="col-2">



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

          <div class="col-md-2 col-lg-2 ">

          </div>


          <div class="col-md-1 col-lg-1 col-sm-4 col-xs-4">
            <img class="img-fluid" style="border-radius: 50%;" src="{{asset('Images/Danjo Logo.jpg')}}" alt="Avatar" >
          </div>
          <div class="col-md-4 mt-3 ml-n3 col-lg-4 col-sm-8 ">
<h6 style="color:white">MIMIR QUIZ- SASAGOT KALANG KIKITA KANA...Danjo Capital Master</h6>
          </div>

        </div>



        <div class="row">
          <div class="col-md-12">
          <h3 class="text-center">
            <img class="" src="{{asset('/images/Asset 9.png')}}" alt="">
          </h3>
          </div>
          
          </div>
       
      
      
          
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-md-3 col_margin">
                  <img class="img_sizing" style="width: 100%" src="{{asset('/images/Blog 1.jpg')}}" alt="">  
                  <p class="story_heading"> lor dajksf a kja fjkas</p>
        </div>
        <div class="col-md-3 col_margin">
          <img class="img_sizing" style="width: 100%" src="{{asset('/images/Blog 2.jpg')}}" alt="">  
                  <p class="story_heading"> lor dajksf a kja fjkas</p>  
        </div>
        <div class="col-md-3 col_margin">
          <img class="img_sizing" style="width: 100%" src="{{asset('/images/Blog 3.jpg')}}" alt="">  
                  <p class="story_heading"> lor dajksf a kja fjkas</p>  
        </div>
        </div>


        <div class="row">
          <div class="col-lg-12">
              <h3 class="text-center heading">
                <img class="" src="{{asset('/images/Asset 10.png')}}" alt="">
              </h3>
      
          </div>
      
      </div>
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-3 text-center team_img_pading">
                <img class="img_sizing_team" src="{{asset('/images/2x/1.png')}}" alt="">  
                <h2 class="team_name">
                  <img class="team_name_picture" src="{{asset('/images/2x/7.png')}}" alt="">
                </h2>
                <p class='intro_para'>
                  Hy i am a hr of conmpany
                </p>
                <h4 class="team_contact_icon">
                  <i class="fab fa_icon fa-facebook"></i>
                  <i class="fab fa_icon fa-google-plus"></i>
                  <i class="fab fa_icon fa-twitter"></i>
                  <i class="fab fa_icon fa-whatsapp"></i>
                </h4>
      </div>
      <div class="col-md-3 text-center team_img_pading">
        <img class="img_sizing_team" src="{{asset('/images/2x/2.png')}}" alt="">  
        <h2 class="team_name">
          <img class="team_name_picture" src="{{asset('/images/2x/8.png')}}" alt="">
        </h2>
        <p class='intro_para'>
          Hy i am a hr of conmpany
        </p>
        <h4 class="team_contact_icon">
          <i class="fab fa_icon fa-facebook"></i>
          <i class="fab fa_icon fa-google-plus"></i>
          <i class="fab fa_icon fa-twitter"></i>
          <i class="fab fa_icon fa-whatsapp"></i>
        </h4>
      </div>
      <div class="col-md-3 team_img_pading text-center">
        <img class="img_sizing_team" src="{{asset('/images/2x/3.png')}}" alt="">  
        <h2 class="team_name">
          <img class="team_name_picture" src="{{asset('/images/2x/9.png')}}" alt="">
        </h2>
        <p class='intro_para'>
          Hy i am a hr of conmpany
        </p>
        <h4 class="team_contact_icon">
          <i class="fab fa_icon fa-facebook"></i>
          <i class="fab fa_icon fa-google-plus"></i>
          <i class="fab fa_icon fa-twitter"></i>
          <i class="fab fa_icon fa-whatsapp"></i>
        </h4>
      </div>
      </div>
      <div class="row  d-flex align-items-center justify-content-center">
        <div class="col-md-3 team_img_pading text-center">
          <img class="img_sizing_team" src="{{asset('/images/2x/4.png')}}" alt="">  
          <h2 class="team_name">
            <img class="team_name_picture" src="{{asset('/images/2x/9.png')}}" alt="">
          </h2>
          <p class='intro_para'>
            Hy i am a hr of conmpany
          </p>
          <h4 class="team_contact_icon">
            <i class="fab fa_icon fa-facebook"></i>
            <i class="fab fa_icon fa-google-plus"></i>
            <i class="fab fa_icon fa-twitter"></i>
            <i class="fab fa_icon fa-whatsapp"></i>
          </h4>
      </div>
      <div class="col-md-3 team_img_pading text-center">
        <img class="img_sizing_team" src="{{asset('/images/2x/5.png')}}" alt="">  
        <h2 class="team_name">
          <img class="team_name_picture" src="{{asset('/images/2x/11.png')}}" alt="">
        </h2>
      <p class='intro_para'>
        Hy i am a hr of conmpany
      </p>
      <h4 class="team_contact_icon">
        <i class="fab fa_icon fa-facebook"></i>
        <i class="fab fa_icon fa-google-plus"></i>
        <i class="fab fa_icon fa-twitter"></i>
        <i class="fab fa_icon fa-whatsapp"></i>
      </h4>
      </div>
      <div class="col-md-3 team_img_pading text-center">
        <img class="img_sizing_team" src="{{asset('/Images/2x/6.png')}}" alt="">  
        <h2 class="team_name">
          <img class="team_name_picture" src="{{asset('/Images/2x/12.png')}}" alt="">
        </h2>
      <p class='intro_para'>
        Hy i am a hr of conmpany
      </p>
      <h4 class="team_contact_icon">
        <i class="fab fa_icon fa-facebook"></i>
        <i class="fab fa_icon fa-google-plus"></i>
        <i class="fab fa_icon fa-twitter"></i>
        <i class="fab fa_icon fa-whatsapp"></i>
      </h4>
      
      </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-center heading">
            <img class="partners" src="{{asset('/Images/OUR PARTNERS.png')}}" alt="">
          </h3>
      <div class="col-lg-12">
              <div class="text-center">
                <img class="question_mark" src="{{asset('/Images/QUESTION MARK.png')}}" alt="">
              </div>
      </div>
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
