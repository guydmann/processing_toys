
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("../../header.html"); ?>

<body>

<?php include("../../topbar.phtml"); ?>
<script type="text/javascript" src="processing-0.9.4.js"></script>
<script type="text/javascript" src="processing.init.js"></script>


<div style="padding: 3em">
click to change the colors
<br><br><br>
<script type="application/processing">
int nX, nY;
int width; 
int dX, dY; 

void setup() {  

   width = 400;
   // All Examples Written by Casey Reas and Ben Fry  
   // unless otherwise stated.  
   size(width, width);  
   smooth();  
   background(0);  
   strokeWeight(10);  
   frameRate(7); 
    
  nX=0;
  nY=0;
  dX=0;
  dY=0;
}

void draw() 
{
   
   for(int i = 0; i < width; i=i+5) {  
     float r = random(170-(nX%170),190+(nY%170));  
     float s = random(dX,280+(dY%180));  
     float x = random(0, width);  
     int strokeColor = hsvToRgb(s, 100, 100);
     stroke(strokeColor[0],strokeColor[1],strokeColor[2],80);  

//     stroke(r, 100);  
	
	float line_choice = random(0,4);
	if (line_choice >3) {
		line(i, 0, x, height);  
	} else if  (line_choice >2) {
		line( x, 0, i, height);  
	} else if  (line_choice >1) {
		line(0, x, width, i);  
	} else {
		line(0, i, width, x);  
	}
   }
/*  X+=(nX-X)/delay;  
  Y+=(nY-Y)/delay;  
  radius = radius + sin( frameCount / 4 ); 
  drawCircle(X, Y, radius, level); */
}

void mouseMoved(){  
  nX = mouseX;  
  nY = mouseY;    
}  

void mouseClicked(){  
  dX = mouseX;  
  dY = mouseY;    
}  

</script><canvas width="400" height="400"></canvas>
</div>
</body>
</html>

