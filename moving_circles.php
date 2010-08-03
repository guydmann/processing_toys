<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include("../../header.html"); ?>

<body>

<?php include("../../topbar.phtml"); ?>
<script type="text/javascript" src="processing-0.9.4.js"></script>
<script type="text/javascript" src="processing.init.js"></script>


<div style="padding: 3em">
<br><br><br>
<script type="application/processing">
//GLOBAL VARIABLES
int X, Y;  
int nX, nY; 

void setup() 
{
  size(200, 200);
  noStroke();
  smooth();
//  noLoop();
  frameRate( 15 ); 
  X = 126;
  Y = 170;
  level = 6;
  nX=0;
  nY=0;
}

void draw() 
{
  drawCircle(X-nX, Y-nY, level);
}

void drawCircle(int x, int radius, int level) 
{                    
  float tt = 126 * level/4.0;
  fill(tt);
  ellipse(x, 100, radius*2, radius*2);      
  if(level > 1) {
    level = level - 1;
    drawCircle(x - radius/2, radius/2, level);
    drawCircle(x + radius/2, radius/2, level);
  }
}

// Set circle's next destination  
void mouseMoved(){  
  nX = mouseX;  
  nY = mouseY;    
}  
</script><canvas width="200" height="200"></canvas>
</div>
</body>
</html>

