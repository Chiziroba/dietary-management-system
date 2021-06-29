<!DOCTYPE html>
<html lang="en">
<head>
<title>DIETARY MANAGEMENT SYSTEM</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" ></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider-min.js"></script>


<!--  slider script  -->

<script>
jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        animation: "fade",
        slideshow: true,
        slideshowSpeed: 7000,
        animationDuration: 600,
        prevText: "",
        nextText: "",
        controlNav: false
    })
});
</script>

</head>
<body>
<header>
  <div class="line-top"></div>



  <!--  header.php contain logo and top menu bar  -->

  <?php include 'header.php' ?>

  <!--  header.php end  -->
  
  
  <!--  Slider start  -->
  <div class="box-slider">
    <div class="flexslider">
      <ul class="slides">
        <li> <img alt="" src="images/slide-1.jpg"></li>
        <li> <img alt="" src="images/slide-2.jpg"></li>
        <li> <img alt="" src="images/slide-3.jpg"></li>
      </ul>
    </div>
  </div>

  <!--  slider end  -->

<!-- WELCOME heading -->

  <div class="box-slogan">
    <h4>Welcome to Dietary Management System!</h4>
    <p>A Healthy Life, is a Wealthy Life. </p>
  </div>

  <!-- WELCOME heading end -->
</header>



<section id="content">

<!-- three grid content start -->

  <div class="border-horiz"></div>
  <div class="container_12 row-1">
    <article class="grid_4 thumbnail-1">
      <h3><span>SCHEDULING</span> Diet Plan </h3>
      <figure class="box-img"><img src="images/page1-img1.jpg" alt=""></figure>
      <p>Application helps create an accurate account of when the client should be eating based on the options provided</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>DIETARY </span> OPTIONS </h3>
      <figure class="box-img"><img src="images/page1-img2.jpg" alt=""></figure>
      <p>Based on the doctors diagonis the nutritionist can input the disorder and will be provide with suggestions.</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>Diet</span> Tracker </h3>
      <figure class="box-img"><img src="images/page1-img3.jpg" alt=""></figure>
      <p>Mointors and keeps track of the clients progress over-time. </p>
      <a href="#" class="btn">Read more</a> </article>
    <div class="clear"></div>
  </div>

  <!-- three grid content end -->

  <div class="border-horiz"></div>
  <div class="container_12">

  <!-- Left section popular area start -->

    <article class="grid_4">
      <h3>popular</h3>
      <ul class="list-popular">
        <li> <a href="#">30 Days Diet Program</a>
          <p>30 days of intense Diet to take your fitness to the next level!</p>
        </li>
        <li> <a href="#">Special Diet Plan </a>
          <p>Register to gain access to Special Diet Plan</p>
        </li>
        </ul>
    </article>

    <!-- Left section popular area end -->


<!-- Right section People say area start -->
    <article class="grid_8">
      <h3>What People Says about Us</h3>
      <blockquote class="quote-1"> The current healthcare system has made healthcare more accessible and efficient by use of information technology. Our systen through the implementation of computer algorithms assist individuals generate a diet plan based on diagonis given by your doctor improve your life by changing and keeping track of your eating habits. </blockquote>
      <div class="name-author">- Kyle Terik </div>
      <ul class="list-dropcap">
        <li>
          <div class="wrapper">
            <div class="dropcap">A</div>
            <a href="#">Diet workouts</a> </div>
          <figure class="box-img"><img src="images/page1-img4.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">B</div>
            <a href="#">Strength workouts</a> </div>
          <figure class="box-img"><img src="images/page1-img5.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">C</div>
            <a href="#">Cardio</a> </div>
          <figure class="box-img"><img src="images/page1-img6.jpg" alt=""></figure>
        </li>
      </ul>
    </article>
    <div class="clear"></div>
  </div>
</section>


<!-- Right section People say area start -->


<!--  footer start  -->

<footer>
  <div class="main">

  <!--  social icons  -->
    <ul class="soc-list">
      <li><a href="#"><img alt="" src="images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-4.png"></a></li>
    </ul>


    <div class="policy">Design by: <a href="#">Kyle Terik</a> </div>
    <div class="clear"></div>
  </div>
</footer>

<!--  footer end  -->


</body>
</html>