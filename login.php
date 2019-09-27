<!--Design by kishan maurya@MCA-->
<!DOCTYPE html>
<html>
<head>
	<title>Login ! Talent Hunt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="icon" type="image/jpg" href="stock-.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  *{list-style: none;
    text-decoration: none;}
  footer{
  left: 0px;
  bottom: 0px;
  width: 100%;
  height: 40px;
}
    .img{
      margin-top: 50px;
      background-image: url(Desarroll.jpg);
      height: 630px;
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
</head>
<body>
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
        <a class="nav-link disabled font-weight-bold" href="school.php">For School</a>
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
       <h1 class="text-white text-center mt-5">Practice coding. Complete. Talent Hunt.</h1>
            <h5 class="large mlB font-weight-bold text-center text-white">
              Join over 3 million programmers and improve your skills</h5>
            <div class="row justify-content-center">
              <div class="col-lg-4 justify-content-center">
                <form action="#" method="post" class="mt-5">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <p class="text-white">
                    <input type="checkbox" name="pass" class="text-white">Remember Me!
                    <a href="#" style="margin-left: 100px;">Forgot your password?</a>
                  </p>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-outline-success btn-block">Login</button>
                  </div>
                  <div class="form-group">
                    <p class="text-center text-white">Connect With</p>
                    <button class="btn btn-primary fab fa-facebook-f ml-4 mr-4"><i class="ml-2">facebook</i></button>
                    <button class="btn btn-danger fab fa-google-plus mr-4"><i class="ml-2">google</i></button>
                    <button class="btn btn-success fab fa-linkedin"><i class="ml-2">Linkedin</i></button>
                  </div>
                      <p class="aside fnt-sz-small text-center  signup-info text-white" style="font-size: 13px;">
                   By signing up you agree to our <a target="_blank" href="/terms-of-service">Terms of Service</a> and <a target="_blank" href="/privacy">Privacy Policy</a>
                 </p>
                 <button type="button" class="btn btn-outline-warning mt-4 ml" data-toggle="modal" data-target="#exampleModalLong">Hiring Talent? Contact Us</button>
                 <!-- Button trigger modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title-sm text-dark" id="exampleModalLongTitle">Join Talent Hunt</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body bg-dark">
                          <p class="text-white font-weight-bold">Please signUp</p>
                          <form>
                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text fas fa-user text-primary"></div>
                              </div>
                              <input type="text" name="" class="form-control" placeholder="Enter user">
                            </div>
                            <div class="input-group form-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text fas fa-lock text-primary"></div>
                              </div>
                              <input type="text" name="" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-block btn-primary">Submit</button>
                            </div>
                          </form>
                          <p class="txet-primary font-weight-bold text-center text-white">Hiring your Talent</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
	     </div>
       <div class="row mr mt-5">
         <div class="col-lg-6 mr">
           <img src="developers-.png" class=" mg">
           <h5 style="margin-left: 250px;">DEVELOPERS</h5>
           <h4 style="margin-left: 160px;">Practice, Compete, Talent Hunt</h4>
           <p style="margin-left: 120px;">The HackerRank Community is the largest learning and <br>
           <p style="margin-left: 165px;line-height: 0px;">competition community for programmers</p></p>
           <button class="btn btn-success mt-3 mb-5" style="margin-left: 230px;">Solve Challange Now</button>
         </div>
         <div class="col-lg-6 mr">
           <img src="tech-.png" class=" mg">
           <h5 style="margin-left: 250px;">COMPANIES</h5>
           <h4 style="margin-left: 160px;">Assess, Screen, Interview</h4>
           <p style="margin-left: 120px;">HackerRank for Work is the leading end-to-end technical <br>
           <p style="margin-left: 165px;line-height: 0px;">recruiting platform for hiring engineers</p></p>
           <button class="btn btn-success mt-3 mb-5" style="margin-left: 270px;">Learn More</button>
         </div>
       </div>
       <div class="row mr bottom">
         <div class="col-lg-6 mr">
           <p class="text-dar" style="margin-left: 140px;margin-top: 50px; font-size: 22px;color: #979fc3;"><i class="fas fa-quote-left" style="font-size: 40px;"></i>
            I'm late to the party, but @Talent Hunt is<br> 
            addictive.Spent four hours in a row<br>
            solving problems yesterday. #tired<br>
             #coding #fun"</p>
             <p class="font-weight-bold mb-5 text-dark bottom" style="margin-left: 140px;line-height: 0px;">-Mr.Kishan Maurya. D.Y.Patil institute of mgt & Resurch</p>
         </div>
         <div class="col-lg-6 mr">
           <p class="text-dar" style="margin-left: 130px;margin-top: 50px; font-size: 22px;color: #979fc3;"><i class="fas fa-quote-left" style="font-size: 40px;"></i>
            Talent Hunt has allowed us to reach a<br> 
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