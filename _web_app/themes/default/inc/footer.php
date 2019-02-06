<footer>
<ul class="footer nav">
  <li><a href="/about.php">About</a></li>
  <li><a href="/copyright-notice.php">Copyright Notice</a></li>
  <li><a href="/privacy-policy.php">Privacy Policy</a></li>
  <li><a href="/contact.php">Contact</a></li>
</ul>
<p>All images and web site content &copy; John Abbott College Graphic &amp; Web Design department, 1999-<?php echo date("Y"); ?>. All rights reserved for published and unpublished works.</p>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--
<script src="<?php echo $currentGradsFolder.$graduatingStudentFolderName  ?>_web_app/theme/<?php echo $theme ?>/js/picturefill.min.js"></script>
-->

<script>window.jQuery || document.write('<script src="<?php echo $currentGradsFolder.$graduatingStudentFolderName  ?>_web_app/theme/<?php echo $theme ?>/js/jquery-3.3.1.min.js"><\/script>')</script>

<script type="text/javascript">
	function NavShow(){
	var topPos = $(".navigation").css("display");
	if(topPos == 'none'){
	$('.navigation').css('display' , 'block');
}
	else{
	$(".navigation").css('display' , 'none');}
}
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-74044702-1','auto');ga('send','pageview');
</script>

<?php if (isset($ExtraFooterCode)) {echo $ExtraFooterCode;} else {echo NULL;} ?>


</body>
</html>
