<!--Design by kishan maurya@MCA-->
<!DOCTYPE html>
<html>
<head>
	<title>School ! Find Jobs</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="stock-.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
    html,body{
      overflow-x: hidden;
    }
  *{list-style: none;text-decoration: none;}
  footer{
  left: 0px;
  bottom: 0px;
  width: 100%;
  height: 40px;
}
    .img{
      margin-top: 50px;
      background-image: url(laptop-.jpg);
      height: 470px;
      opacity: .8;
    }
    .boxshadow{
      text-shadow: 3px 3px 5px black;
    }
    .shadow{
      box-shadow: 3px 3px 5px black;
    }
    nav{
      position: fixed;
      top: 0px;
      left: 0px;
    }
    .ml{
      margin-left: 90px;
    }
    .mr{
      border-left: none;
      border-top: none;
      border-bottom: none;
      border-right: 1px solid #ccc;
    }
    .mg{
      margin-top: 40px;
      margin-left: 285px;
    }
    .bottom{
      margin-bottom: 90px;
    }
  </style>
  <script>
    $(function() {
    var $c = $('#logocarousel'),
        $w = $(window);
    $c.carouFredSel({
        align: false,
        items: 5,
        scroll: {
            items: 1,
            duration: 8000,
            timeoutDuration: 0,
            easing: 'linear',
            pauseOnHover: 'immediate'
        }
    });
    $(".js-dark-logo").hide();
    $(".js-light-logo").show();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 300) {
            $(".js-light-logo").hide();
            $(".js-dark-logo").show();
        }

        if (scroll >= 900) {
          $(".signup-btn").removeClass("btn-line");
        }
    });

    $('.nav-toggle').click( function (){
            $('.static-home-nav').toggleClass('open');
        });
    $w.bind('resize.example', function() {
        var nw = $w.width();
        if (nw < 990) {
            nw = 990;
        }
        $c.width(nw * 3);
        $c.parent().width(nw);
    }).trigger('resize.example');
});
    $('.can-hover').hover(
            function () {
                $(this).addClass('is-show').siblings().removeClass('is-show');
            }
        );
    $('a.intro-vid').click(function(){
      autoPlayVideo('2ezIlKN4C60','450','283');
    });
    $('a.intro-vid').click(function(){
      $( ".school_modal" ).addClass( "fadeIn" ).removeClass("hidden");
    });
    $('.icon-cancel-large').click(function(){
      $("#videoContainer").empty();
      $( ".school_modal" ).addClass( "hidden" ).removeClass("fadeIn");
      //$("#videoContainer").stopVideo();
    });
    function autoPlayVideo(vcode, width, height){
      "use strict";
      $("#videoContainer").html('<iframe width="'+width+'" height="'+height+'" src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&wmode=transparent&enablejsapi=1" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');
    }
    function preFillContact() {
        var fullname = "", email = "", subject = "", message = "";
        if (window.HR && window.HR.currentUser) {
            fullname = encodeURIComponent(window.HR.currentUser.get("firstname")+ " " + window.HR.currentUser.get("lastname"));
            email = encodeURIComponent(window.HR.currentUser.get("email"));
        }
        subject = encodeURIComponent("Interested in HackerRank for School");
        location.href = "/work/contact?fullname=" + fullname + "&email=" + email +
         "&subject=" + subject + "&message=" + message;
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() > 900) {
            $( ".intro-vid img" ).addClass("come-left");
        }
        if ($(this).scrollTop() > 1600) {
            $( ".leaderboard-img img" ).addClass("come-right");
        }
    });
    /* Slider */
  var slider = (function(){
    /* Variable Declarations */
    var position = 0;
    var slides = $('.x-slider li');
    var pagination = $(".slider-pagination div");
    var current = slides.eq(position);
    var currPag = pagination.eq(position);
    var numSlides = slides.length;

    var slide = function (position, dir){
      if (dir !== "stay") {
        current.removeClass("left-x").removeClass("right-x");
        current.removeClass('current');
        currPag.removeClass('active');

        current = slides.eq(position);
        currPag = pagination.eq(position);

        if (dir === "right") {
          current.css("transform", "0 50%").addClass('current');;
        } else {
          current.addClass("right-x").addClass('current');;
        }
        currPag.addClass('active');
      }
      return position;
    };

    $(".slider-pagination div").on("click", function (){
      if ($(this).index() < position) {
        var dir = "left";
      }
      else if ($(this).index() > position) {
        var dir = "right";
      }
      else {
        var dir = "stay";
      }
      position = slide($(this).index(), dir);
    });

    /* Navigation Event Listeners */
    $(".prev").on("click", function(){
      if ((position - 1) === -1) {
        position = slide(numSlides - 1, "left");
      }
      else {
        position = slide(position - 1, "left");
      }
    });

    $(".next").on("click", function(){
      if ((position + 1) === numSlides) {
          position = slide(0, "right");
      }
      else {
        position = slide(position + 1, "right");
      }
    });
  });
  slider();
</script>

</head>
<body>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#myModal").modal('show');
    });
  </script>
  <!--modal form--->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Subscribe our Newsletter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body bg-dark">
              <p class="text-white">Subscribe to your contact to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="mobile number...">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Subscribe</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary pull-right btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
	<nav class="navbar navbar-expand-xl fixed-top bg-white  navbar-fluid-lg shadow">
		<a class="navbar-brand" href="home.php">
      <i class="fas fa-user-md text-success boxshadow" style="font-size: 40px;">
        <i class="boxshadow" style="font-family: monospace;margin-left: 10px;">Talent Hunt</i>
      </i>
    </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-default" style="color: white;" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active font-weight-bold text-success" style="margin-left: 350px;">
        <a class="nav-link text-success" href="#" >For Developer<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          For Companies
        </a>
        <div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
            <a class="dropdown-item font-weight-bold text-white bg-dark" href="aboutus.php">Screening</a>
            <a class="dropdown-item font-weight-bold text-white bg-dark" href="aboutus.php">Interviewing</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled font-weight-bold" href="#">For School</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="form-control mr-sm-2 btn btn-outline-success"><a href="login.php" class="text-dark">Log in</a></button> 
      <button class="btn btn-success my-2 my-sm-0 text-white" type="submit"><a href="home.php" class="text-white">SignUp</a></button>
    </form>
  </div>
</nav>
<div class="container-fluid-inverse">
	<div class="row bg-dark justify-content-center img">
    <div class="col-lg-12 justify-content-center">
       <h1 class="text-success text-center " style="margin-top: 140px;">Turn your class into a programming powerhouse.</h1>
            <h6 class="large mlB font-weight-bold text-center text-white">
              For Students. Professors. Organizations.</h6>
            <div class="row justify-content-center">
              <div class="col-lg-4 justify-content-center">
                <form action="#" method="post" class="mt-5">
                  <div class="form-group">
                    <button class="btn btn-success" data-toggle="model" data-target="#exampleModalLong" style="margin-left: 100px;" type="button"><h4>Contact Us now</h4></button>
                    <!-- Button trigger modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-danger" id="exampleModalLongTitle">Join Find@jobs</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="text-success font-weight-bold text-center">Please signUp</p>
                          <p class="txet-primary font-weight-bold text-center">Hiring your Talent</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
	     </div>
       <div class="row mr mt-4">
         <div class="col-lg-12">
           <h5 class="text-center text-dark">
           Hundreds of campuses coding on Find Jobs</h5>
         </div>
       </div>
       <div class="row">
         <div class="hrw-logos container" id="wrapper">
        <h5 class="block-margin text-center plT bold">Hundreds of campuses coding on HackerRank</h5>
        <div class="logo-slider slider unstyled plT plB text-center school-logo" id="logocarousel">
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/1-944547cf0df93ac64af1d8534f9959a5.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/2-043df0d765f8bcc66ba6df773544bbf0.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/3-5a85979bee6ecc3fe5a0bce6bb5d8f3f.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/4-5c513a1054a677e4df569cfd7047f333.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/5-10e09f85e493eedea14febe367907ab9.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/6-18ce0b1b8d45cd590db49914a568aa44.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/7-165b22af7d7ec9b9e5944a981c8980ab.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/8-09fb69eac18f87f426a97393694498e3.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/9-2e93e69c003d19a24e77b66020de2d58.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/10-22c4d6df7e37056235048765caa10913.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/11-3ce5cb66ccb900f5c5329a8ca634cbaa.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/12-d2bfd30a93b4f8692e4ddb857ee95b59.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/13-bcbc38d2cd1067e9f05d950a8adc6f9e.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/14-52cc49eced51a3d75b0dce6e853e141c.png">
            </div>
            <div class="slide">
                <img src="https://hrcdn.net/hackerrank/assets/static/school/15-88b3473dd09a025f2934ac4cd4e7ec12.png">
            </div>
        </div>
    </div>
         </div>
       </div>
       <div class="row mr bottom">
         <div class="col-lg-6 mr">
           <p class="text-dar" style="margin-left: 140px;margin-top: 50px; font-size: 22px;color: #979fc3;"><i class="fas fa-quote-left" style="font-size: 40px;"></i>
            I'm late to the party, but @Find Jobs is<br> 
            addictive.Spent four hours in a row<br>
            solving problems yesterday. #tired<br>
             #coding #fun"</p>
             <p class="font-weight-bold mb-5 text-dark bottom" style="margin-left: 140px;line-height: 0px;">-Mr.Kishan Maurya. D.Y.Patil institute of mgt & Resurch</p>
         </div>
         <div class="col-lg-6 mr">
           <p class="text-dar" style="margin-left: 130px;margin-top: 50px; font-size: 22px;color: #979fc3;"><i class="fas fa-quote-left" style="font-size: 40px;"></i>
            Find Jobs has allowed us to reach a<br> 
            wider, more diverse population of <br>
            talent, as well as enhancing and <br>
            streamlining our screening process.</p>
            <p class="font-weight-bold mb-5 text-dark bottom" style="margin-left: 140px; line-height: 0px;">-Mr.Abhishek,Rakesh D.Y.Patil institute of mgt & Resurch</p>
         </div>
       </div>
	   <div class="row">
        <div class="col-lg-4">
          <h6 class="ml-5 mt-5">
          <i class="fas fa-user-md text-success" style="font-size: 40px;"></i><i class="font-weight-bold text-success" style="font-size: 25px;">Talent Hunt</i>
          </h6>
          <u class="ml-5">9589608579</u>
          <p class="ml-5 font-weight-bold">&copy2018 Kishan-iT-Solutions</p>
          <p>
            <i class="ml-5 fab fa-facebook-f" style="font-size: 30px;"></i>
            <i class="ml-3 fab fa-twitter-square" style="font-size: 30px;"></i>
            <i class="ml-3 fab fa-linkedin" style="font-size: 30px;"></i>
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row m-5">
            <div class="col-lg-3">
              <p class="font-weight-bold">COMPANY</p>
                <li>About</li>
                <li>Careers</li>
                <li>Blog</li>
                <li>Privacy policy</li>
                <li>Contacts</li>
            </div>
            <div class="col-lg-3">  
                <p class="font-weight-bold">DEVELOPERS</p>
                <li>Scoring</li>
                <li>Envoirment</li>
                <li>FAQ</li>
                <li>For School</li>
                <li>SignUp</li>
            </div>
            <div class="col-lg-3">
                <p class="font-weight-bold">COMPANIES</p>
                <li>Soltion</li>
                <li>Customer</li>
                <li>Pricing</li>
                <li>Try For Free</li>
                <li>Terms of Services</li>
            </div>
            <div class="col-lg-3">
                <p class="font-weight-bold">RESOURESES</p>
                <li>API</li>
                <li>Guid</li>
                <li>Video</li>
                <li>Partners</li>
                <li>Event Views</li>
            </div>
          </div>
        </div>
    </div>
</div>
</body>
</html>