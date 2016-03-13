<?php

$xml = new DOMDocument();
$xml->load("LEGO_CAR.xml");
//Get item Element
$element = $xml->getElementsByTagName('BODY_LAYER1')->item(0);

if (isset($_POST['Red_Chassis'])) 
{ 
	//Load child elements
	$CHILD = $element->getElementsByTagName('POS1')->item(0);
	$PART = $CHILD->getElementsByTagName('PART')->item(0);
	//Replace old elements with new
	$CHILD->replaceChild($PART, $PART);
	$PART->nodeValue = 'Red';
	print $xml->saveXML();
	$xml->save('test_chassis.xml');
}  

if (isset($_POST['Blue_Chassis'])) 
{ 
	//Load child elements
	$CHILD = $element->getElementsByTagName('POS2')->item(0);
	$PART = $CHILD->getElementsByTagName('PART')->item(0);
	//Replace old elements with new
	$CHILD->replaceChild($PART, $PART);
	$PART->nodeValue = 'Blue';
	print $xml->saveXML();
	$xml->save('test_chassis.xml');	
}  


 
?>


<html>
<body>
	<form name="user_input" method="POST" action=''>
	<input type="submit" name="Red_Chassis"  value="Chassis_Red">
	<input type="submit" name="Blue_Chassis"  value="Chassis_Blue">



	</form>
	

	

</body>

</html>