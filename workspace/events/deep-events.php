<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     
    <title>Upcoming Events | Miracle</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/default.css" />
	<link rel="stylesheet" type="text/css" href="/css/component.css" />
	<script src="/js/menuLoad.js"></script>
	<script src="/js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->   
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <style>
      .event .panel-body {
  background: #BBDEFB;
  border: 1px solid #448AFF;
  padding:0;
  margin:0;
  height:86px;
}
.event .panel-body > div {
  padding: 0 10px;
}
.event .panel-body .rsvp {
  border-left: none;
  padding: 0;
  text-align: center;
  position: relative;
  background: #64B5F6;
  color: white;
  height: 100%;
}

.event .rsvp > div {
  font-size: 12px;
  position: absolute;
  bottom: 0;
  background: #42A5F5;
  width: 100%;
}

.event .rsvp i {
  font-size: 2em;
  display: block;
  position:relative;
  top:17%;
  margin-bottom:5px;
}
.event .rsvp i:last-of-type{
    font-size:1.5em;
    margin-top:-23px;
}

.event .rsvp span {
  cursor: pointer;
  padding: 0 5px;
  margin: 5px 0;
  width:45%;
}
.event .rsvp span:first-of-type{
  border-right: 1px solid white;
}
.event .rsvp span:hover{
  color: #1565C0;
}

.event .info{
  font-size: 28px;
}

.event .info > div, .event .info > ul{
  font-size: 12px;
}

.event .author .profile-image {
  position: absolute;
  background: white;
  padding: 3px;
  width: 5em;
  border-radius: 50%;
  border: 1px solid #CCC;
  box-sizing: content-box;
  z-index: 1;
  top:4px;
}

.event .author img {
    width:100%;
    border-radius:50%;
}

/* Overwrites */
.nav-tabs a {
  background: #90CAF9;
  color: white;
}
.info .nav-tabs li.active a {
  background-color: #448AFF;
  color: white;
}
.info .nav-tabs li:hover a, .info .nav-tabs li.active:hover a {
  background: #00BCD4;
  color: white;
}
.tab-content {
  background: white;
  border-radius: 0 10px;
  padding: 10px;
}

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    .event .panel-body {
        height:158px;
    }
    
    .event .rsvp {
        min-height:100%;
    }
    
    .event .rsvp i {
        font-size:4em;
        top:5%;
    }
    
    .event .panel-body .author {
      position: relative;
      color: #2196F3;
      padding:10px;
      height:100%;
    }
    .event .profile {
      position: relative;
      z-index: 0;
      border-left: 2px solid white;
      top: -5px;
      padding-left: 55px;
      height: 100%;
      left: 10%;
    }
    .event .profile strong {
      display: block;
      color: white;
      font:20px bold 'Fredoka One', serif;
      -webkit-text-stroke-width: .6px;
      -webkit-text-stroke-color: #448AFF;
      margin-bottom: 5px;
    }
    .event .author .profile i {
      color:  #448AFF;
      padding-left: 0;
    }
    .event .profile .links {
      position: absolute;
      bottom: 0;
    }
    .event .profile article {
        padding:0 41px 0 0;
    }
    .event .author .profile i:hover{
      color:  #00BCD4;
    }
    .event .author .profile-image {
      position: absolute;
      background: white;
      padding: 3px;
      width: 30%;
      border-radius: 50%;
      border: 1px solid #CCC;
      box-sizing: content-box;
      z-index: 1;
      top:13px;
    }
    .event .author img {
      width: 100%;
      border-radius: 50%;
    }
}

/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) { 
    .event .profile {
      left: 17%;
    }
}

/* Large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  }
    </style>
</head><!--/head-->
<?php include '../header.php';?>
<body>
  <section id="career" class="container">
    <br>
        <br>
        <br>
        <br>
        <div class="row">
          
          <div class="col-sm-6 ">
            <h1 class="heavy">Upcoming Events</h1>

          </div>
          <div class="col-sm-6">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../events/recent.php">Events</a></li>
                <li class="active">Upcoming Events</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
        </div>
        
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<!-- Start your code here -->
<div class="panel panel-default event">
  <div class="panel-body">
    <div class="rsvp col-xs-2 col-sm-2">
      <i>18</i>
      <i>nov</i>
      <div class="hidden-xs">
        <span class="fa fa-thumbs-up fa-2x"></span>
        <span class="fa fa-thumbs-down fa-2x"></span>
      </div>
    </div>
    <div class="info col-xs-8 col-sm-7">
      Dynamic Quality Cost System 
      <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
      <div class="hidden-xs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="location">Location</div>
            <div role="tabpanel" class="tab-pane" id="profile">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis feugiat sem, eu sagittis libero. Duis non odio ut nibh volutpat tempus eget interdum elit. 
            </div>
          </div>
        </div>
    </div>
    <div class="author col-xs-2 col-sm-3">
        <div class="profile-image">
            <img src="http://api.randomuser.me/portraits/med/men/71.jpg"/>
        </div>
        <div class="profile hidden-xs">
            <strong>Robert White</strong>
            <article>Event leader and founder of this group</article>
            <div class="links hidden-sm">
              <i class="fa fa-github-square fa-2x col-xs-3"></i>
              <i class="fa fa-google-plus-square fa-2x col-xs-3"></i>
              <i class="fa fa-facebook-square fa-2x col-xs-3"></i>
              <i class="fa fa-linkedin-square  fa-2x col-xs-3"></i>
            </div>
        </div>
        
    </div>
  </div>
</div>
<div class="panel panel-default event">
  <div class="panel-body">
    <div class="rsvp col-xs-2 col-sm-2">
      <i>18</i>
      <i>nov</i>
      <div class="hidden-xs">
        <span class="fa fa-thumbs-up fa-2x"></span>
        <span class="fa fa-thumbs-down fa-2x"></span>
      </div>
    </div>
    <div class="info col-xs-8 col-sm-7">
      Event Title
      <div class="visible-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elitero..</div>
      <div class="hidden-xs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="location">Location</div>
            <div role="tabpanel" class="tab-pane" id="profile">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis feugiat sem, eu sagittis libero. Duis non odio ut nibh volutpat tempus eget interdum elit. 
            </div>
          </div>
        </div>
    </div>
    <div class="author col-xs-2 col-sm-3">
        <div class="profile-image">
            <img src="http://api.randomuser.me/portraits/med/men/71.jpg"/>
        </div>
        <div class="profile hidden-xs">
            <strong>Robert White</strong>
            <article>Event leader and founder of this group</article>
            <div class="links hidden-sm">
              <i class="fa fa-github-square fa-2x col-xs-3"></i>
              <i class="fa fa-google-plus-square fa-2x col-xs-3"></i>
              <i class="fa fa-facebook-square fa-2x col-xs-3"></i>
              <i class="fa fa-linkedin-square  fa-2x col-xs-3"></i>
            </div>
        </div>
        
    </div>
  </div>
</div>
    <br/>
    <br/>
  </section>
  <!-- /Career -->

  <?php include '../footer.php';?>
    
</body>
</html>