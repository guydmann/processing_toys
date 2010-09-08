<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("../../header.html"); ?>

<body>

<?php include("../../topbar.phtml"); ?>
<script type="text/javascript" src="./processing-0.9.4.js"></script>
<script type="text/javascript" src="./processing.init.js"></script>
<script type="text/javascript" src="./clock_control.js"></script>


<div style="padding: 3em">
<h2>Clock App</h2>
runs smoothly in Chrome<br>
Firefox image is crisper<br>
suggest using Chrome<br>
<br>
This clock has been submitted to the <a href="http://www.tokyoflash.com/blog/?p=1725&lang=en">Tokyo Flash Design Contest</a>
<br>
<br>
To enlarge a small clock click on the image or any of the links below<br>
<a href="javascript:setClock(0)">Clock 0</a>
&nbsp;&nbsp;
<a href="javascript:setClock(1)">Clock 1</a>
&nbsp;&nbsp;
<a href="javascript:setClock(2)">Clock 2</a>
&nbsp;&nbsp;
<a href="javascript:setClock(3)">Clock 3</a>
&nbsp;&nbsp;
<a href="javascript:setClock(4)">Clock 4</a>
<br>
<br>
<canvas id="clock" data-src="clock.pjs" width="400" height="400"></canvas>
</div>
</body>
</html>

