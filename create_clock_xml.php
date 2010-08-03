<?php 
	$FileName = "clock.xml";
	$FileHandle = fopen($FileName, 'w') or die("can't open file");
	$stringData = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	$stringData .= "<Module>\n";
	$stringData .= "<ModulePrefs title=\"Hypno Clock\" width=\"400\" height=\"400\"/>\n";
	$stringData .= "<Content type=\"html\">\n";
	$stringData .= "<![CDATA[\n\n";
	$stringData .= "<script type=\"text/javascript\" src=\"http://guydmann.no-ip.org/code/processing_toys/processing-0.9.4.js\"></script>\n";
	$stringData .= "<script type=\"text/javascript\" src=\"http://guydmann.no-ip.org/code/processing_toys/processing.init.js\"></script>\n";
	$stringData .= "<div>\n";
	$stringData .= "<script type=\"application/processing\">\n";
	$stringData .= file_get_contents("./clock.pjs"); 
	$stringData .= "</script>\n";
	$stringData .= "<canvas width=\"400\" height=\"400\"></canvas>\n";
	$stringData .= "</div>\n\n";
	$stringData .= "]]>\n";
	$stringData .= "</Content>\n";
	$stringData .= "</Module>\n";
	fwrite($FileHandle, $stringData);
	fclose($FileHandle);
?>
