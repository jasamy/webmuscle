<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Webmuscle &ndash; Website design &amp; build</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch to find out how Webmuscle can assist your company raise its online profile">
    <meta name="author" content="Webmuscle">
    <meta name="keywords" content="webmuscle, design, online profile, assisted design, freelance, jason byers, web design, system administration, contact webmuscle">    
    <script type="text/javascript" src="http://fast.fonts.com/jsapi/5674a0fa-294d-404a-af09-dc81cef40c6f.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 90px; /* 90px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<script type="text/javascript">
	function hide_fontlogo() {
	document.getElementById("mti_wfs_colophon").style.display="none";
	}
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16033145-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </head>
  <body onload="hide_fontlogo()">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"><span class="kern">W</span>ebmuscle</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
<!--              <li><a href="work.html">Work</a></li> -->
              <li class="active"><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<div class="row">
    <div class="span4">
      <h2>Get in touch</h2>
      <p>Contact Webmuscle to find out how we can help your business achieve its online goals.</p>
      <p>Simply call us on 07595 454727 or complete the form opposite and we will be in touch.</p>
    </div>
	<div class="span8">
	<div style="height:450px;margin-top:10px;">
<?php

if(isset($_GET['status']) && ($_GET['status'] == "success")) {
?>
<h2>Thank you</h2>
<p>Your details have been sent and we'll be in touch very soon.</p>
<?php } else { ?>
<form name="contactform" id="commentForm" method="post" action="email-contact.php"> 

	<p>
      <label for="name">Name (required)</label> 
        <input name="name" type="text" id="first_name" tabindex="1" size="100" maxlength="100" class="required" /> 
      <label for="telephone">Telephone (optional)</label> 
        <input name="telephone" type="text" id="first_name" tabindex="1" size="100" maxlength="100" />
      <label for="email">Email (required)</label> 
        <input name="email" type="text" id="email" tabindex="3" size="100" maxlength="100" class="required" />
    <label for="message">Message (optional)</label>
        <textarea name="message" id="message" cols="40" rows="8" tabindex="14"></textarea><br/></p>
       <input name="submit" type="submit" value="Send Message" class="button" tabindex="15" />

  </form>
  <p></p>
<?php } ?>
	</div>
	</div>
</div><!-- End of Row 1 -->
<hr>
<footer>
		<div class="row">
		<div class="span6">
        <p>&copy; Webmuscle 2012</p>
        </div>
        <div class="span6">
        <span class="pull-right left-margin-5">
		<a href="https://twitter.com/jasonleebyers" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @jasonleebyers</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</span>
        <span class="pull-right left-margin-5">
		<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
		<script type="IN/MemberProfile" data-id="http://www.linkedin.com/pub/jason-byers/6/716/8a6" data-format="click" data-related="false"></script>
		</span>
        <span class="pull-right">
		<!-- Place this tag where you want the badge to render -->
<a href="//plus.google.com/117000049533779177714?prsrc=3" rel="author" style="text-decoration:none;"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" alt="" style="border:0;width:14px;height:14px;"/></a>
		</span>
		</div>
        </div>
      </footer>

</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
	<script src="./assets/js/jquery.validate.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$("#commentForm").validate();
		});
	</script>  </body>
</html>