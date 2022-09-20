<!DOCTYPE html>

<!---->
<html>
<head>
    <title>
		Branko Stojicic
	</title>
	
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="keywords" content="portfolio, web developement, web developer, web design, html5, css3, php, javascript, wordpress, seo, junior, senior, custom web sites, bootstrap">
	
	<meta name="description" content="PHP,Javascript,HTML5,CSS3,Bootstrap web development at high-end level">
	
	<!--main style-->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<!--canvas for dots-->
	<link rel="stylesheet" type="text/css" href="style/animation.css">
	<!--font awesome stuff-->
	<link rel="stylesheet" href="style/font-awesome.min.css">
	<!--google font-->
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
	<!--google font hand drawn-->
	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
	
</head>
<body>
   <!--wrapper-->
    <div id="wrapper">
      <!--background start-->
       <div id="background">
           
            <canvas></canvas>
        </div>
        <!--end background-->
        <!--navigation-->
        
        <div id="navbar-stuff">
            
           <i class="fa fa-angle-right" aria-hidden="true" id="hide"></i>
            <ul id="navbar">
            <a href="#"><li id="home" onClick="background_change(this.id)"><i class="fa fa-home" aria-hidden="true"></i></li> </a>
            <a href="#"><li id="about" onClick="background_change(this.id)"><i class="fa fa-user-md" aria-hidden="true"></i></li></a>
            <a href="#"><li id="skills" onClick="background_change(this.id)"><i class="fa fa-wrench" aria-hidden="true"></i></li></a>
            <a href="#"><li id="work" onClick="background_change(this.id)"><i class="fa fa-rocket" aria-hidden="true"></i></li></a>
            <a href="#"><li id="blog" onClick="background_change(this.id)"><i class="fa fa-file-text" aria-hidden="true"></i></li></a>
            <a href="#"><li id="contact" onClick="background_change(this.id)"><i class="fa fa-paper-plane" aria-hidden="true"></i></li></a>
            </ul>
	    </div>
	    <!--end navigation-->
	    <!--main page stuff-->
<div id="main-stuff">
    <i class="fa fa-angle-left" aria-hidden="true" id="getItBack"></i>
<div id="content">
    <div id="text-main">
        <h1>Hi! I am Branko, Web Developer</h1>
        <p>HTML, CSS, Bootstrap, PHP, MySQL, JS</p>
       <!-- <img src="images/bca.png" alt="colouring astronaut" id="minipic"> -->
    </div>
</div>
    

    
    
</div>
	    <!--end main-->
    </div>
    <!--end wrapper-->
	
	<!-- js -->
	<!--main js-->
	<script src="js/my_js.js"></script>
	<!--dots animation-->
    <script src="js/animation.js"></script>
</body>
</html>