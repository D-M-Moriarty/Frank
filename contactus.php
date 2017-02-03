<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom-css.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      

      html,body{
        margin: 0px;
        background-color: #fff;
        /*color: background-color: #371e54;*/
       /* background-image: url('images/18.jpg');
        background-size: 100% auto;
        background-repeat: repeat;
        background-position: top;*/
        height: 100%;
        margin: 0;

      }

      .wrapper {
  min-height: 100%;

  /* Equal to height of footer */
  /* But also accounting for potential margin-bottom of last child */
  margin-bottom: -50px;
}

      .theForm {
        width: 80%;
        margin: 5em auto;
      }

      .btnColor {
        background-color: #6b6f3b;
        border-color: #6b6f3b;
      }


      #bootstrap-overrides .mg-copyright li{
  list-style-type: none;
  display: inline;
  padding: 1em;
  
}

#bootstrap-overrides .mg-copyright {
  width: 100%;
  background-color: #6b6f3b;
  height: auto;
  padding: 1em;
  position: relative;
  left: -2em;
}

#bootstrap-overrides .mg-footer-social li{
  display: inline;
  font-size: 200%;
  padding-right: .3em;
  position: relative;
  left: -1.5em;
}

.copyright {
  color: #fff;
}

footer {
    /*position: absolute; 
    bottom: 0; 
    left: 0; */
    width: 100%;
    background-color: #6b6f3b;
    height: auto;
    opacity: .9;
  }

  footer, footer a {
    color: #fff;
  }

  .footer,
.push {
  height: auto;
  margin-top: 3em;
}

#bootstrap-overrides .navbar {
    border-radius: 0;
    /*background-color: #fff;*/
        border-color: #fff;
        opacity: .9;
        
  }

  #bootstrap-overrides .navbar a{
    color: #6b6f3b;
  }

  #contact {
    float: left;
    margin-bottom: -1em;
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
  }

  @media only screen and (min-width: 300px) {
          #contact {
            margin-left: 10%;
          }
      }

      @media only screen and (min-width: 400px) {
          #contact {
            margin-left: 10%;
          }
      }

      @media only screen and (min-width: 700px) {
          #contact {
            margin-left: 24%;
          }
      }

      @media only screen and (min-width: 900px) {
          
      }

      @media only screen and (min-width: 1100px) {
          
      }

      @media only screen and (min-width: 1280px) {
          
      }


    </style>


</head>
<body id="bootstrap-overrides">
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Abbeyland Art</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="book.php">Book</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li class="active"><a href="#">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <div class="container wrapper">

  <h1 id="contact">Contact</h1>
  <div class="theForm">

    <form class="form-horizontal" role="form" method="post" action="mailto:frank@abbeylandarts.com" enctype="text/plain">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
        </div>
      </div>
      <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-8">
          <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btnColor">
          <input name="Make Order" type="submit" value="Submit">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          <! Will be used to display an alert to the user>
        </div>
      </div>
    </form>
  </div>
    
    
    
  </div>

  <footer class="footer">
      <div class="mg-footer-widget">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div  class="widget">
                <h2 class="mg-widget-title">Contact US</h2>
                <strong>CONTACT FRANK</strong><br>
              Tel: +353 (0) 87 7517729,<br>
              Email: <a href="mailto:frank@abbeylandarts.com">frank@abbeylandarts.com</a> 
              <ul class="mg-footer-nav mg-copyright">
                    <li><a href="#">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              
            </div>
            <div class="col-md-3 col-sm-6">
              
            </div>
            <div class="col-md-3 col-sm-6">
              <div  class="widget">
                <h2 class="mg-widget-title">Social Media</h2>
                <p style="font-size: 100%">To view my social media for current news and offers, visit the our pages with the icons below</p>
                <ul class="mg-footer-social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="mg-copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="mg-footer-nav">
                <li><a href="#">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contactus.php">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <p class="copyright">&copy; 2016 <a href="#">Darren Moriarty</a>. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div> -->
    </footer>

 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <!-- or -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>

    <script>
      $(window).on('load', function(){
        $('.wrapContainer').masonry({
          columnWidth: '.block',
          itemSelector: '.block'
        });
      });
    </script>

</body>
</html>