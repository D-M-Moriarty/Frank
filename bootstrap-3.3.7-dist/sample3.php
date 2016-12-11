<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://w3bits.com/wp-content/themes/bits2/labs.css">
	<title>Responsive CSS Masonry - W3Bits</title>
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom-css.css" rel="stylesheet">

<style type="text/css">
  /* fluid 5 columns */
.grid-sizer,
.grid-item { 
  float: left;
  width: 20%; 
}
/* 2 columns */
.grid-item--width2 { 
  float: left;
  width: 40%; }
img{
  width: 100%;
}
</style>

<script type="text/javascript">
  $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});
  $('.grid').masonry({
  // options
  itemSelector: '.grid-sizer',
  columnWidth: 400
});
  $('.grid').masonry({
  // options
  itemSelector: '.grid-item--width2',
  columnWidth: 600
});
</script>


</head>
<body>

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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="grid">
  <!-- width of .grid-sizer used for columnWidth -->

  <?php  

        for ($i=2; $i < 37; $i++) { 
            

            echo "<div class='grid-sizer'>";
            echo "<img src='images/$i.jpg'>";
            echo "</div>";
            $i+=1;
            echo "<div class='grid-item'>";
            echo "<img src='images/$i.jpg'>";
            echo "</div>";
            $i+=1;
            echo "<div class='grid-item grid-item--width2'>";
            echo "<img src='images/$i.jpg'>";
            echo "</div>";

          
        }

      ?>
  <!-- <div class="grid-sizer"><img src="images/2.jpg"></div>
  <div class="grid-item"><img src="images/4.jpg"></div>
  <div class="grid-item grid-item--width2"><img src="images/5.jpg"></div> -->
  ...
</div>

  


	

<script src="js/bootstrap.min.js"></script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="/path/to/masonry.pkgd.min.js"></script>

<script type='text/javascript' src='http://w3bits.com/wp-content/themes/bits2/js/base.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://w3bits.com/wp-content/themes/bits2/js/prettify.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://w3bits.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>
</body>
</html>