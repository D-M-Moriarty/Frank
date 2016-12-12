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
        /*background-image: url('images/18.jpg');
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

	.navbar {
    border-radius: 0;
    background-color: #fff;
        border-color: #fff;
        opacity: .9;
  }
/*
	footer {
		position:absolute;
		bottom:0;
		left:0;
		background-color: #fff;
		height: auto;
		opacity: .9;
	}*/
		

	p{
		font-size: 1.45em;
		color: #342605;
		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
		margin-top: 1em;

	}

	h1{
		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
		margin-top: .5em;
		font-weight: bold;
		color: #6b6f3b;
	}

	#bootstrap-overrides .footer {
		width: 100%
		height: 4em;
		color: #fff;
	}

	#bootstrap-overrides .navbar a{
    color: #6b6f3b;
  }

	.rightText {
		background-color: #fff;
		border-radius: 5px;
		width: 35%;
		opacity: .9;
	}

	.imgresize {
		width: 70%;
		margin: 0 auto;
		margin-bottom: 2em;
	}


	#bootstrap-overrides .row {
		margin-top: 2em;
	}

	@media only screen and (min-width: 300px) {
          .rightText {
          	width: 90%;
          	margin: 0 auto;
          }

          .imgresize {
			width: 97%;
		  }
      }

	@media only screen and (min-width: 400px) {
          .rightText {
          	width: 95%;
          	margin: 0 auto;
          }

          .imgresize {
			width: 100%;
		  }
      }

      @media only screen and (min-width: 700px) {
          .rightText {
			/*background-color: #fff;*/
			border-radius: 5px;
			width: 80%;
			opacity: .9;
		   }

		  .imgresize {
			width: 90%;
			margin: 0 auto;
			margin-bottom: 2em;
		   }

		   p{
			font-size: 1.5em;
		   }
      }

      @media only screen and (min-width: 900px) {
          .rightText {
			/*background-color: #fff;*/
			border-radius: 5px;
			width: 50%;
			opacity: .9;
		   }

		  .imgresize {
			width: 90%;
			margin: 0 auto;
			margin-bottom: 2em;
		   }

		   p{
			font-size: 1.5em;
		   }
      }

      @media only screen and (min-width: 1100px) {
          .rightText {
			/*background-color: #fff;*/
			border-radius: 5px;
			width: 50%;
			opacity: .9;
		   }

		  .imgresize {
			width: 70%;
			margin: 0 auto;
			margin-bottom: 2em;
		   }

		   p{
			font-size: 1.43em;
		   }
      }

      @media only screen and (min-width: 1280px) {
          .rightText {
			/*background-color: #fff;*/
			border-radius: 5px;
			width: 36%;
			opacity: .9;
		   }

		  .imgresize {
			width: 70%;
			margin: 0 auto;
			margin-bottom: 2em;
		   }

		   p{
			font-size: 1.45em;
		   }
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
    color: #fff;
    height: auto;
    opacity: .9;
  }

  footer a {
  	color: #fff;
  }

  .footer,
.push {
  height: auto;
  margin-top: 4em;
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
      <a class="navbar-brand" href="#">Abbeyland Art</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



  <div class="container wrapper">
    <div class="row">
      <div class="col-sm-6 col-md-6">
      
        <div class="thumbnail imgresize">
          <img src="images/13.jpg" alt="...">
        </div>
      </div>
      <div class="col-sm-6 col-md-5 rightText">
      <h1>The Abbey Children</h1>
        <p> A story of two children growing up near an old abbey
        	and church in Milltown, Co. Kerry. The family pets, the abbey and old white church
        	are brought to life with stories of the resident animals that live there. 
        	The story has been written and illustrated by the children's father Frank.</p>
        <p>Frank Molloy grew up in Chester, England, an old roman city close to Liverpool.
        	Frank first worked at Chester Zoo for several years before moving to Dublin where he met
        	his wife Barbara. They now have two children Ciara and Wayne and live near Milltown,
        	Co. Kerry. Frank has had an interest in art and nature all his life and decided 
        	to record their time in Milltown with pictures and words.</p>
          </div>
        </div>
      </div>
    </div><!-- end of row -->
  </div><!-- End of the container -->




	<footer class="footer">
      <div class="mg-footer-widget">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div  class="widget">
                <h2 class="mg-widget-title">Contact US</h2>
                <strong>CONTACT FRANK</strong><br>
			        Tel: +353 (0) 87 7517729,<br>
			        Email: <a href=#>studio@abbeylandarts.ie</a> 
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
                <p style="font-size: 100%;color: #fff;">To view my social media for current news and offers, visit the our pages with the icons below</p>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>