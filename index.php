<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<!--

 _________   _  __    _________  __   ____ 
/_  __/ _ ) | |/_/   / ___/ __ \/ /  / __ \
 / / / _  |_>  <    / /__/ /_/ / /__/ /_/ /
/_/ /____//_/|_|  & \___/\____/____/\____/ 
TBX & COLO Productions; F.A.T. Labs 2011
Moar: http://fffff.at/occupy-the-internet/
COPYLEFT

-->

<?php
	// IMPORTANT: Put your URL here
	$sBaseUrl = "/occupy";
	
	$sRequestUrl    = substr($_SERVER["REQUEST_URI"], strlen($sBaseUrl));

	if(strpos($sRequestUrl, "?") !== FALSE)
	{
		// Remove get parameters
		$sRequestUrl = substr($sRequestUrl, 0, strpos($sRequestUrl, "?"));
	}
	
	$sRequestUrl = substr($sRequestUrl, 1);

	if($sRequestUrl != '')
	{
		$domain = $sRequestUrl;
	}
	else
	{
		$domain = 'www.goldmansachs.com';
	}
?>

<html>
  <head>
    <title>
      Occupiing <?php echo $domain ?>
    </title>
    <script src="http://occupyinter.net/embed.js"></script>
  </head>
  <body scrolling = "no">

	<div>
	<iframe src="<?php echo 'http://' . $domain ?>" width="100%" height="100%" scrolling="auto" frameborder="0" style="position:absolute; top:100; left:0;"> </iframe>
	<?php //echo $content; ?>
	</div>
  </body>
</html>

