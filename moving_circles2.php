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
float radius = 75.0;
int delay = 16; 


void setup() 
{
  size(400, 400);
  noStroke();
  //strokeWeight( 1 );
  smooth();
//  noLoop();
  frameRate( 15 ); 
  X = width/2;
  Y = height/2;
  level = 8;
  nX=X;
  nY=Y;
}

void draw() 
{
  X+=(nX-X)/delay;  
  Y+=(nY-Y)/delay;  
  radius = radius + sin( frameCount / 4 ); 
  drawCircle(X, Y, radius, level);
}

void drawCircle(int x, int y, float radius, int level) 
{                    
  float tt = 126 * level/4.0;
  fill(tt);
  ellipse(x, y , radius*2, radius*2);      
  if(level > 1) {
    level = level - 1;
    drawCircle(x - radius/2, y, radius/2, level);
    drawCircle(x + radius/2, y, radius/2, level);
  }
}

// Set circle's next destination  
void mouseMoved(){  
  nX = mouseX;  
  nY = mouseY;    
}  
</script><canvas width="400" height="400"></canvas>
</div>
</body>
</html>

