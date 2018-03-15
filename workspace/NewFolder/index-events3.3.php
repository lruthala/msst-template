<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<title>Miracle</title>

	<link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link rel="shortcut icon" href="../../images/favicon.ico">
       
 
   
    
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>Home - Events Layout | Canvas</title>

</head>
<style>
.entry-title h2{
	font-size:18px !important;
}
.fancy-title h3{
	color:#232527 !important;
}
.heading-block h3{
	color:#232527 !important;
}
		
		.carousel-indicators {
		    bottom:-28px !important;
			left:0;
			width:100%;
			padding: 6px 0px;
			margin-left:0;
			top:215px !important;
		}
		.carousel-indicators li {
			width:10px;
			height:10px;	
			background:#8c8c8c !important;
			border-color:#8c8c8c !important;
		 
		}
		.carousel-indicators .active {
			width:10px;
			height:10px;
			background:#428bca !important;
			border-color:#428bca !important;
		}
		.carousel-inner .thumbnail {
			margin-bottom:0;
			border-bottom-left-radius:0;
			border-bottom-right-radius:0;
		}
		.carousel-inner .caption {
		
		}
.fluid-width-video-wrapper{
	padding:30% !important;
}

.tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("http://d2b8lqy494c4mo.cloudfront.net/mss/images/banners/event.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;padding-bottom:100px;}

.fc-calendar .fc-head > div{
		font-size:10px !important;
}

.fc-calendar .fc-head{
	padding:0px !important;
}
	
.events-calendar-header h3{
	font-size:15px !important;
}	

#form-buscar >.form-group >.input-group > .form-control {
    height: 40px;
}
#form-buscar >.form-group >.input-group > .input-group-btn > .btn{
        height: 40px; 
        font-size: 16px;
        font-weight: 300; 
        background-color:#00aae7;
       
}
#form-buscar >.form-group >.input-group > .input-group-btn > .btn .glyphicon{
 margin-right:12px;   
}    


#form-buscar >.form-group >.input-group > .form-control {
    font-size: 16px;
    font-weight: 300;
   
}

#form-buscar >.form-group >.input-group > .form-control:focus {
  border-color: #00aae7;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 1px rgba(0, 109, 0, 0.8);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 1px rgba(0, 109, 0, 0.8);
}
	
.formbuscar .input-group{

}

.search label {
	color:#fff !important;
	text-transform:capitalize !important;

}
.op{
	margin-left:60px !important;
}

.fc-calendar .fc-body{height:300px !important;
}

.fc-calendar .fc-row{height:45px !important;
}
.fc-calendar .fc-row > div > span.fc-date{
	font-size:16px !important;
	left:10px !important;
}

</style>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		  <?php include "../headerm.php";?>
	
		<!-- Content
		============================================= -->
<section>

     <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-7 text-left">
                     <h1 class="heavy micro">Recent Events</h1>
                     <br/>
      </div>
				  <br>
                  <div class="col-sm-5 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../technologies/">Events</a></li>
                        <li class="active">Recent</li>
                     </ul>
                  </div>
                   </div>
             
                <div class="container">
                 <div class="row">
                 <form role="form" id="form-buscar" class="formbuscar">
<div class="form-group">
<div class="input-group">
<input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
<span class="input-group-btn">
<button class="btn btn-info" type="submit">
<i class="glyphicon glyphicon-search" aria-hidden="true"></i> 
</button>
</span>
</div>
</div>
</form> 
 </div>  
</div>
 
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
	<form class="search">
    <label class="checkbox-inline">
      <input type="checkbox" value="">&nbsp;<span class="">Past Events</span>
    </label>
    <label class="checkbox-inline op">
      <input type="checkbox" value="">&nbsp;<span class="">Upcoming Events</span>
    </label>
    <label class="checkbox-inline op">
      <input type="checkbox" value="">&nbsp;<span class="">Conferences</span>
    </label>
    <label class="checkbox-inline op">
      <input type="checkbox" value="">&nbsp;<span class="">Webinars</span>
    </label>
  </form>
</div>
<div class="col-sm-2"></div>
</div>
</div>            
              
            </div>
            </div>
</section>
		<section id="content">

			<div class="content-wrap">
<br/>



				<div class="container clearfix">

					<div class="col_three_fifth bothsidebar nobottommargin">

						<div class="fancy-title title-border">
							<h3>Upcoming Events</h3>
						</div>

						<div id="posts" class="events small-thumbs">

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="#">
										<img src="images/events/thumbs/1.png" alt="Inventore voluptates velit totam ipsa tenetur">
										<div class="entry-date">04<span>May</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">Quarterly Meet 1 | 2017</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-danger">Team Mss</span></li>
										<li><a href="#"><i class="icon-time"></i>04th May,2017</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i>Miracle City & Miracle Heights</a></li>
									</ul>
									<div class="entry-content">
										<a class="btn btn-info">Gallery</a> <a  class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="#">
										<img src="images/events/thumbs/2.png" alt="Nemo quaerat nam beatae iusto minima vel">
										<div class="entry-date">03<span>May</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">Internship | 2017</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-danger">Team Mss</span></li>
										<li><a href="#"><i class="icon-time"></i>3rd May,2017</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Miracle City</a></li>
									</ul>
									<div class="entry-content">
										<a class="btn btn-info">Gallery</a> <a  class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="#">
										<img src="images/events/thumbs/3.png" alt="Ducimus ipsam error fugiat harum recusandae">
										<div class="entry-date">08<span>Mar</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">Women's Day | 2017</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-danger">Team Mss</span></li>
										<li><a href="#"><i class="icon-time"></i>8th March,2017</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Miracle City & Miracle Heights</a></li>
									</ul>
									<div class="entry-content">
										<a  class="btn btn-info">Gallery</a> <a class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

							<div class="entry clearfix">
								<div class="entry-image hidden-sm">
									<a href="#">
										<img src="images/events/thumbs/5.png" alt="Nisi officia adipisci molestiae aliquam">
										<div class="entry-date">14<span>Feb</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">Valentines Day | 2017</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-danger">Team Mss </span></li>
										<li><a href="#"><i class="icon-time"></i>14th February,2017</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Miracle City & Miracle Heights</a></li>
									</ul>
									<div class="entry-content">
										<a class="btn btn-info">Gallery</a> <a class="btn btn-danger">Read More</a>
									</div>
								</div>
							</div>

						</div>
 
 
 
					</div>

					<div class="col_two_fifth nobottommargin col_last">



						<div class="fancy-title title-border">
							<h4>Gallery</h4>
						</div>

						<div class="col_full masonry-thumbs col-4 clearfix" data-lightbox="gallery">
							<a href="images/events/thumbs/6.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/6.png" alt="Gallery Thumb 1"></a>
							<a href="images/events/thumbs/7.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/7.png" alt="Gallery Thumb 2"></a>
							<a href="images/events/thumbs/8.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/8.png" alt="Gallery Thumb 3"></a>
							<a href="images/events/thumbs/9.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/9.png" alt="Gallery Thumb 4"></a>
							<a href="images/events/thumbs/10.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/10.png" alt="Gallery Thumb 5"></a>
							<a href="images/events/thumbs/1.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/1.png" alt="Gallery Thumb 6"></a>
							<a href="images/events/thumbs/11.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/11.png" alt="Gallery Thumb 7"></a>
							<a href="images/events/thumbs/12.png" data-lightbox="gallery-item"><img class="image_fade" src="images/events/thumbs/12.png" alt="Gallery Thumb 8"></a>
						</div>

						<div class="fancy-title title-border">
							<h4>Video</h4>
						</div>
         				 <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/j93Yk4HMuGQ" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="item">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/E6U2Wupr-G0?list=PLvHEcCoZg9xzlcG8ZFU2ZFzcZI7DD53N1" frameborder="0" allowfullscreen></iframe>
    
      </div>
    
      <div class="item">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/KuwydB-7E3E?list=PLvHEcCoZg9xyD731ozJsVqFQIbnj20F3N" frameborder="0" allowfullscreen></iframe>
      </div>
  
    </div>

  </div>
  <br/>
  		<div class="parallax  dark" style="padding: 30px 0; background-image: linear-gradient(rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85) ), url('images/parallax/12.jpg'); background-repeat: repeat-y; height: auto;" data-stellar-background-ratio="0.3">

					<div class="container clearfix">

						<div class="events-calendar">
							<div class="events-calendar-header clearfix">
					
								<h2 style="color:#ffffff!important;font-size:23px!important;margin-top:5px;">Events Calendar</h2>
							<h3 class="calendar-month-year" style="margin-top: -7px;">
									<span id="calendar-month" class="calendar-month"></span>
									<span id="calendar-year" class="calendar-year"></span>
									<nav>
										<span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
										<span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
										<span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
									</nav>
								</h3>
							</div>
							<div id="calendar" class="fc-calendar-container"></div>
						</div>


					</div>

				</div>

  
				<!--	<div class="fancy-title title-border">
							<h4>Locations</h4>
						</div>

						<div  style="margin-bottom:30px;" class="gmap">
							<img src="/NewFolder/images/events/MiracleLocationsMap.png" alt="map" class="img-responsive" style="width:100%;">
						</div> -->
 
  
					</div>

					<div class="clear"></div>

				</div>
		<br/>	
			<div class="section nobottommargin">
					<div class="container clearfix">

						<div class="heading-block center">
						<h3>Receive <span>regular</span> Event Updates</h3>
						</div>

						<div class="subscribe-widget">
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group input-group-lg divcenter" style="max-width:600px;">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit">Subscribe Now</button>
									</span>
								</div>
							</form>
						</div>

					</div>
				</div>


			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
	
	<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>
	<script type="text/javascript" src="js/events-data.js"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">
		jQuery(document).ready( function($){
			var newDate = new Date(2016, 9, 31);
			$('#countdown-ex1').countdown({until: newDate});
		});

		var cal = $( '#calendar' ).calendario( {
			onDayClick : function( $el, $contentEl, dateProperties ) {

				for( var key in dateProperties ) {
					console.log( key + ' = ' + dateProperties[ key ] );
				}

			},
			caldata : canvasEvents
		} ),
		$month = $( '#calendar-month' ).html( cal.getMonthName() ),
		$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		}

		$('#google-map4').gMap({
			 address: 'Australia',
			 maptype: 'ROADMAP',
			 zoom: 3,
			 markers: [
				{
					address: "Melbourne, Australia",
					html: "Melbourne, Australia"
				},
				{
					address: "Sydney, Australia",
					html: "Sydney, Australia"
				},
				{
					address: "Perth, Australia",
					html: "Perth, Australia"
				}
			 ],
			 doubleclickzoom: false,
			 controls: {
				 panControl: true,
				 zoomControl: true,
				 mapTypeControl: false,
				 scaleControl: false,
				 streetViewControl: false,
				 overviewMapControl: false
			 }
		});
	</script>
	

	 <?php include '../footer.php';?>
</body>
</html>