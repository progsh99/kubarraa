<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>الخبراء</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-database.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-storage.js"></script>

  <link rel="stylesheet" type="text/css" href="{{secure_asset('/css2/font-awesome.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css2/bootstrap.min.css') }}" />

<style>
/*
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
*/


body {
	font-family: 'Open Sans', sans-serif;
	line-height: 20px;
	color: #999999;
	font-size: 300;
	font-size: 16px;



text-align : center ;
direction : rtl ;

}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
h1, h2, h3, h4, h5, h6
{
	font-family: 'Raleway', sans-serif;
	font-weight: 600;
	color: #222222;
}
a, a:hover, a:focus, a:active{
    outline: none;
}

.section-padding{
	padding: 60px 0px;

}
h2 {
    line-height: 20px;
    margin: 0;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
}
hr.botm-line {
    height: 3px;
    width: 60px;
    background: #ffb737;
    position: relative;
    border: 0;
    margin: 20px 0 20px 0;
}

/***************************************
banner
***************************************/
.navbar {
    margin-bottom: 0px;
    border: 0px;
}
.navbar {
    border-radius: 0px;
}
.navbar-default {
    background-color: #fff;
    padding: 20px 0;
    transition: all 0.3s;
}
.navbar-default {
    background-color: transparent;
    border: 0px;
}
.navbar {
    border-radius: 0px;
}

.navbar-brand
{
	font-family: 'Chewy', cursive;
	font-size: 32px;
}

.navbar-brand img {
    padding-top: 2px;
    width: 120px !important;
}

.navbar-default .navbar-brand, .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
    color: #EA6045;
}

@media (max-width: 768px) {
	.navbar-collapse {
		background: rgba(28,74,90, 0.9);
	}
}

.top-nav-collapse {
    padding: 0;
    background: rgba(28,74,90, 0.9);
}

.white, .white:hover, .white:focus
{
	color: #fff;
	width: 100% !important;
}
.block
{
	display: block;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover {
    color: #fff;
    text-transform: uppercase;
    background-color: rgba(12, 184, 182, 0.21);
}
.navbar-default .navbar-nav > li > a
{
	color: #fff;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: 300;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus
{
	color: #fff;
    text-transform: uppercase;
    background-color: rgba(12, 184, 182, 0.21);
}
.affix {
    background-color: #ffffff !important;
}
.affix .navbar-nav > li > a:hover, .affix .navbar-nav > li > a:focus
{
    background-color: rgba(12, 184, 182) !important;
}
#banner{
	background: url('../img/bg-banner.jpg') no-repeat fixed;
	background-size: cover;
	min-height: 650px;
	position: relative;
}
.bg-color{
	background-color: RGBA(13, 70, 83, 0.78);
	min-height: 650px;
}
.banner-info{
	padding-top: 190px;
}
.banner-logo img{
	display: inline-block;
}
.banner-text{
	color: #fff;
}
.banner-text h1{
	font-family: 'Candal', sans-serif;
	font-size: 35px;
	text-transform: uppercase;
	padding-bottom:15px;
}
.btn-appoint, .btn-appoint:hover, .btn-appoint:focus{
	margin-top: 30px;
	padding: 10px 20px;
	font-size: 12px;
	background-color: rgba(12, 184, 182, 0.91);
	border-radius: 3px;
	color: #fff;
}
.overlay-detail a i {
    text-align: center;
    position: absolute;
    bottom: 25px;
    font-size: 38px;
    color: #fff;
    margin: 0 auto;
}
.text-primary i{
    padding-top: 8px;
    display: inline-block;
}
/***************************************
services
***************************************/
.icon i{
	color: #0cb8b6;
	font-size: 45px;
	margin-bottom: 25px;
}
.service-info{
	margin-bottom: 20px;
}
.icon-info h4{
	padding-bottom: 15px;
}
.icon-info p{
	font-size: 15px !important;
}
/***************************************
cta-1
***************************************/
.schedule-tab {
	background-color: #0CB8B6;
	float: left;
}
.medi-info{
	border-right: 1px solid #fff;
}
.medi-info, .time-info{
	padding: 20px;
	color: #fff;
}
.medi-info h3, .time-info h3{
	padding-bottom: 16px;
	color: #fff;
	font-weight: 600;
}
.medi-info-btn, .medi-info-btn:hover, .medi-info-btn:focus {
    margin: 15px 0px 5px;
    display: inline-block;
    border: solid white 2px;
    padding: 3px 8px;
    font-size: 12px;
    color: #fff;
    font-weight: 400 !important;
    cursor: pointer;
}
td {
    border: 0px solid #ededed;
    border-top: 1px solid rgba(216, 216, 216, 0.5);
    padding: 6px 10px 6px 0;
}
.medi-info, .time-info{
    font-size: 14px;
}
/***************************************
about
***************************************/
#about{
    background-color: rgba(238, 238, 238, 0.15);
}
.lg-line{
	line-height: 1.4;
	font-size: 28px;
}
.more-features-box-text-icon {
    float: left;
    width: 40px;
    height: 40px;
    padding-top: 6px;
    background: #0cb8b6;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    color: #fff;
    text-align: center;
}
.more-features-box-text-description h3{
    padding-bottom: 15px;
}
.more-features-box-text-icon i {
    font-size: 18px;
    line-height: 26px;
}
.more-features-box-text-description{
	margin-left: 80px;
	margin-bottom: 35px;
}
.sec-para{
	padding-bottom: 10px;
}
/***************************************
doctor team
***************************************/
.thumbnail {
	border-radius: 0px;
}
.caption h3{
    padding-bottom: 5px;
}
.caption p{
    padding-bottom: 10px;
}
/***************************************
testimonial
***************************************/
#testimonial{
    background-color: #eee;
}
.testi-details {
    background: #fff;
    padding: 14px 24px;
    margin-bottom: 20px;
    box-shadow: 3px 3px 2px 0px rgba(0,0,0,0.18);
    position: relative;
}
.testi-info a {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #fff;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
}
.testi-info a img{
	border-radius: 50%;
}
.testi-info h3 {
    display: inline-block;
    line-height: 22px;
    font-weight: 600;
    color: #000;
    margin-top: 8px;
}
.testi-info h3 > span {
    display: block;
    line-height: 16px;
    font-weight: 400;
}
.testi-details::after {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent;
    border-left: 0;
    bottom: -40px;
    left: 56px;
    border-top-color: #fff;
    border-width: 20px;
}
.testi-details::before {
    content: '';
    position: absolute;
    transform: rotate(45deg);
    width: 0px;
    height: 0px;
    bottom: -30px;
    left: 45px;
    border-style: solid;
    border-width: 15px;
    border-color: transparent;
    z-index: -1;
    box-shadow: 3px -13px 5px 0px rgba(0, 0, 0, 0.18);
    border-left: 0;
}
/***************************************
cta -2
***************************************/
#cta-2{
	background-color: rgb(41, 48, 46);
}
.white{
	color: #fff;
}
.icon-play, .icon-play:hover, .icon-play:focus{
	background-color: #0CB8B6;
	padding: 5px 10px;
	color: #fff;
	text-decoration: none;
	padding: 5px 17px;
	margin-top: 26px;
	display: block;
}
.text-primary {
    color: #0cb8b6;
}
.icon-mar
{
	margin-right: 7px;
}
/***************************************
contact us
***************************************/
.space {
    margin-top: 40px;
}
.btn-form, .btn-form:hover, .btn-form:focus {
    background-color: #0cb8b6;
    color: #fff;
    border-radius: 0px;
    padding: 10px 20px;
}
.br-radius-zero {
    border-radius: 0px;
}
.form-control{
	height: 40px;
}

.validation {
    color: red;
    display:none;
    margin: 0 0 20px;
    font-weight:400;
    font-size:13px;
}

#sendmessage {
    color: green;
    border:1px solid green;
    display:none;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#errormessage {
    color: red;
    display:none;
    border:1px solid red;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#sendmessage.show, #errormessage.show, .show {
	display:block;
}


/***************************************
footer
***************************************/
#footer{
	background-color: #325C6A;
}
.ftr-tle {
    height: 50px;
}
.info-sec {
    color: #fff;
}
.quick-info li i {
    font-size: 8px;
    width: 15px;
    height: 15px;
    line-height: 15px;
    text-align: left;
}
.social-icon li {
    float: left;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    margin-right: 5px;
}
.bglight-blue {
    background-color: #3498DB;
}
.bgred {
    background-color: #E74C3C;
}
.bgdark-blue {
    background-color: #2C3E50;
}
.bglight-blue {
    background-color: #3498DB;
}
.top-footer {
    padding: 40px 0px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}
.footer-line {
    padding: 30px 0px;
    color: #fff;
}

.footer-line a {
    color: #0CB8B6;
}

.quick-info li a{
    color: #fff;
}
.site-link, .site-link:hover, .site-link:focus
{
    color: #0cb8b6;
    text-transform: none;
}
@media (min-width: 551px) and (max-width: 980px){

}
@media (min-width: 220px) and (max-width: 551px){
    .testi-info{
        margin-bottom: 20px;
    }
    .marb20{
        margin-top: 30px;
    }
    h2{
        font-size: 24px;
        line-height: 1.2;
    }
    .section-title{
        margin-bottom: 30px;
    }
    .medi-info {
    border: 0px;
    border-bottom: 1px solid #fff;
    }
    .service-info{
        margin-top: 20px;
        margin-bottom: 0px;
    }
    .caption h3 {
    font-size: 14px;
    }
    .caption p{
    font-size: 12px;
    padding-bottom: 5px;
    }
    .caption ul li a i{
        font-size: 14px;
    }
    .banner-text h1{
        font-size: 24px;
    }
}


 



</style>
</head>

<body id="myPage"  >
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#">
              <img src="{{url('/images/logo.png')}}" width="200" height="100" style="margin-left: 90% ;" />

                
              
              </a>

              
            </div>
            <div class="collapse navbar-collapse navbar-right"id="myNavbar">
              <ul class="nav navbar-nav" style= "display : inline; direction : rtl ;">
                <li class=""><a href="#footer">تواصل معنا</a></li>
                
               
                <li class=""><a href="#cta-2">المكاتب</a></li>
                <li class=""><a href="#doctor-team">العمليات</a></li>
                <li class=""><a href="#service">خدماتنا</a></li>
             
                <li class="active"><a href="#banner">الصفحة الرئيسية </a></li>
              </ul>
            </div>
           
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info" >
           
            <div class="banner-logo text-center">



            </div>
            <div class="banner-text text-center">
            

            </div>

            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">

    <div>
          <h2 class="ser-title">خدماتنا : </h2>
       </br>
          <p>  تعرف على اهم خدماتنا : </p>
</br>
</br>
        </div>
 
      <div class="row">
        
        <div class="col-md-3 col-sm-3">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
            <h4>الطيران :</h4>
            
              <p>شرح عن الخدمة </p>
                        </div>
          </div>
</div>
<div class="col-md-3 col-sm-3">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
            <h4>العمليات والرعاية الصحية : </h4>
             
              <p>شرح عن الخدمة </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
            <h4>الاقامة والسكن :</h4>
              <p>شرح عن الخدمة </p>
                        </div>
          </div>
</div>
<div class="col-md-3 col-sm-3">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
             

            <h4>افضل الاطباء :</h4>

              <p>شرح عن الخدمة </p>
                        </div>
          </div>






          
        </div>


       
        
      </div>
      
    </div>
  </section>
  <!--/ service-->
  <!--cta-->

        
  <!--cta-->
  <!--about-->
 
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <h2 class="ser-title">تعرف على اهم العمليات لدينا :</h2>
</br>
</br>
        </div>


        <script>

const firebaseConfig = {

apiKey: "AIzaSyBHIHhERzXQmQWWtHXHbyKUy3ZU25FmUIE",

authDomain: "kubaraa-59964.firebaseapp.com",

databaseURL: "https://kubaraa-59964-default-rtdb.firebaseio.com",

projectId: "kubaraa-59964",

storageBucket: "kubaraa-59964.appspot.com",

messagingSenderId: "72693922570",

appId: "1:72693922570:web:6a9ad466303b81f16c18f3"

};


firebase.initializeApp(firebaseConfig);

</script>

               



















        @foreach ($pr as $pr)
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
          <img id="{{$pr->mainid}}"   alt = "image here"  />


          <script>






var playersRef990 = firebase.database().ref('operations');

var playersRef9902 = playersRef990.child('{{$pr->mainid}}');
//alert(playersRef990);
var posthtml2 = "" ;
playersRef9902.once("value", function (blogs9) {
if (blogs9.exists()) {


blogs9.forEach(function (singleBlog9) {
//alert(singleBlog9.val()) ;
//posthtml2 +=  "<img src= '"+singleBlog9.val()+"' alt = 'image here' class='img-responsive' >  ";                   

document.getElementById("{{$pr->mainid}}").src = singleBlog9.val() ;


});
//  $("#{{$pr->mainid}}").html(posthtml2);
}
});

</script>



            <div class="caption">
              <h3> {{$pr->opname}}</h3>
              <p> {{$pr->des }}  &nbsp;   &nbsp;   &nbsp;  </p>
              <p>
              {{$pr->price }} $
</p>
</br>
<a href="/showop/{{$pr->mainid }}"> تفاصيل العملية</a>
            </div>
          </div>
        </div>
        
        @endforeach

     
        
      </div>
    </div>
  </section>
 
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
      @foreach ($pr2 as $pr2)



        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
          
            <div class="caption">
              <h3>{{$pr2->name}}</h3>
              <p>{{$pr2->city}}</p>
              <p>{{$pr2->address}}</p>
              <p>{{$pr2->phone}}</p>
            </div>
          </div>
        </div>

        @endforeach

       
      
      </div>
    </div>
  </section>
  
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
             
            </div>
          
          </div>
         
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
        
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                
            
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright All Rights Reserved 2022
            <div class="credits">
            
              Designed by <a href="https://www.instagram.com/programmer.shosha/"> Shahad ALEdani </a> &copy; for alkubaraa Company 2022
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script type="text/javascript" src="js2/jquery.min.js"></script>
  <script type="text/javascript" src="js2/jquery.easing.min.js"></script>

  <script type="text/javascript" src="js2/bootstrap.min.js"></script>
  

  <script src="contactform/contactform.js"></script>
<script>

(function($) {

// Add smooth scrolling to all links in navbar
$(".navbar a,a.btn-appoint, .quick-info li a, .overlay-detail a").on('click', function(event) {

  var hash = this.hash;
  if (hash) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function() {
      window.location.hash = hash;
    });
  }

});

$(".navbar-collapse a").on('click', function() {
  $(".navbar-collapse.collapse").removeClass('in');
});

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
  if ($(".navbar-default").offset().top > 50) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
});

})(jQuery);


</script>


</body>

</html>
