<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("../../header.html"); ?>

<body>

<?php include("../../topbar.phtml"); ?>
<script type="text/javascript" src="./processing-0.9.4.js"></script>
<script type="text/javascript" src="./processing.init.js"></script>



<div style="padding: 3em">
<h2>Clock App</h2>
		To enlarge a small clock merely click on it<br>
<br><br><br>
<script type="application/processing">
<?php include("./clock.pjs"); ?>
</script>
<canvas width="400" height="400"></canvas>
</div>
</body>
</html>

