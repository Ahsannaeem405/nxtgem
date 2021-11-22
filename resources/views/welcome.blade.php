@extends('Layouts.header')

@section('title')
Home
@endsection
<style>
    .con2{
        background-color: #96E1FF;
        height: 400px;
        display: block;
    }
    .heading{
        margin-top: 10%;
    }
    .icons a{
        font-size: 30px;
        color: black;
    }
    .con1{
        margin-left: auto;
        margin-right: auto;
        display: none;
    }
    .video{
        display: none !important;

    }





</style>
@section('content')


<div class="container-fluid con2">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <video type="video/mp4" src="{{asset('Images/2nd - Coming Soon Video (Convert to GIF + Add Music).mp4')}}"></video> --}}
          {{-- <video  width="320" height="240"controls="controls autoplay">

            <source src="{{asset('Images/2nd - Coming Soon Video (Convert to GIF + Add Music).mp4')}}" type="video/mp4">

            <source src="{{asset('images/2nd - Coming Soon Video (Convert to GIF + Add Music).mp4')}}" type="video/ogg">

          Your browser does not support the video tag.

          </video> --}}

          <video controls width="250">

            <source src="/media/cc0-videos/flower.webm"
                    type="video/webm">

            <source src="/media/cc0-videos/flower.mp4"
                    type="video/mp4">

            Sorry, your browser doesn't support embedded videos.
        </video>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    <div class="row">
        <div class="col-lg-11">
            <h3 class="text-center heading">INTRO VIDEO</h3>

        </div>
        <div class="col-lg-1 py-5 icons">
            <a href="#"><i class="fab fa-discord"></i></a>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

    $(".video").trigger('click');
});
</script>

@endsection
