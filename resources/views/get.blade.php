<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Product List Carousel for Ecommerce Website</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   
    <style>
    body {
     background-color: #4A148C
 }

 .card {
     position: relative;
     display: flex;
     width: 100px;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 11px;
     -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
     -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
     box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
 }

 .card .card-body {
     padding: 1rem 1rem
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
     margin-top: 250px
 }

 .slick-slide {
     margin: 10px
 }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
             
				<div class="items">
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/google-logo.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/linkedin.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/yahoo.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/amazon.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/48/000000/netflix.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/ios-filled/100/000000/mac-os.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/48/000000/dell--v1.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/hp.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/ebay.png"> </div>
					</div>
					<!---->
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/ibm.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/sap.png"> </div>
					</div>
					<div class="card">
						<div class="card-body"> <img class="logo" src="https://img.icons8.com/color/100/000000/ebay.png"> </div>
					</div>
				</div>
               




            </div>
        </div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
</body>

</html>
