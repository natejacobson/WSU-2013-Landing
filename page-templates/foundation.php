<?php /* Template Name: Foundation */ ?>

<?php $directory = "/wp-content/themes/landing/page-templates/foundation"; ?>

<?php while ( have_posts() ) : the_post(); ?>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>The Campaign for Washington State University: Because the World Needs Big Ideas</title>
<meta name="description" content="">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php echo $directory; ?>/css/style.css">
<style>
#HeadBranding {
	background-image: url(<?php echo $directory; ?>/img/banners/bryansky.jpg);
}
h3 {
	color: #87081f;
}
h2 {
	color:#5f6a72;
	font-weight:200;
	letter-spacing: 4px;
}
.letterstyle {
	margin-top:38px;
	margin-bottom:32px;
	font-size: 11px;
	text-transform: uppercase;
	padding-right: 22px;
	padding-left: 22px;
	font-weight: 400;
	word-spacing: 2px;
}
.campaignleftcol {
	width:474px;
	float: left;
	margin-right:0px;
	padding-right:16px;
}
.campaignrightcol {
	width:438px;
	float: left;
	border: 1px solid #b8bfc4;
	padding: 8px;
	text-align: center;
}
.grayaccent {
	background-color: #b8bfc4;
	height: 11px;
	width: 438px;
}
.footCol {
	width:400px;
	margin-left:350px;
}
</style>
</head>
<body>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started --> 
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<header>
    <div id="utilitybarContainer">
        <div id="utilitybar"> <a HREF="/"><img src="<?php echo $directory; ?>/img/insidelogo.png" width="400" height="30" alt="The Campaign for Washington State University" class="up"/></a> </div>
    </div>
    <div id="GiveContainer">
        <div id="GiveTop"></div>
    </div>
    <div id="HeadBrandingContainer">
        <div id="HeadBranding"></div>
    </div>
</header>
<div role="main">
    <div id="mainContentWrap">
        <div class="insideBODYcontent">
            <div class="campaignleftcol">
                <?php the_content(); ?>
            </div>
            <div class="campaignrightcol">
                <div class="grayaccent"></div>
                <h2 class="campaigntitle">CAMPAIGN PROGRESS</h2>
                <p><img src="<?php echo $directory; ?>/img/campaignprogress.jpg" width="377" height="342" alt="The Campaign progress"></p>
                <p>&nbsp; </p>
                <div class="grayaccent"></div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="footSeperaterContainer">
        <div class="footSeperater"></div>
    </div>
    <div id="FooterContent">
        <div class="footCol"> <img src="<?php echo $directory; ?>/img/footerlogo.png" alt="Washington State University Foundation" width="224" height="41" /> <span class="indent"> <span style="display: block; margin-left:11px;">
            <p>WSU Foundation<br>
                Town Centre Building, 3rd Floor<br>
                255 E. Main Street, Suite 301<br>
                PO Box 641925<br>
                Pullman, WA 99164-1925<br>
                <br>
                Phone: 509-335-6686<br>
                or 800-GIV-2-WSU (448-2978)<br>
                Fax: 509-335-4788<br>
                Email: <a HREF="mailto:foundation@wsu.edu">foundation@wsu.edu</a></p>
            <p>IRS Tax ID: 91-1075542</p>
            </span> </span> </div>
    </div>
</footer>
<!-- JavaScript at the bottom for fast page loading --> 
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script> 
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> 
<!-- end scripts -->
</body>
</html>

<?php endwhile; ?>