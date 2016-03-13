<?php

$xml = new DOMDocument();
$xml->load("LEGO_CAR.xml");
$Chasis_part = '';

if (isset($_POST['Red_Chassis'])) 
{ 
	$Chasis_part = 'Red';
}  

if (isset($_POST['Blue_Chassis'])) 
{ 
	$Chasis_part = 'Blue';
}  

if (isset($_POST['Green_Chassis'])) 
{ 
	$Chasis_part = 'Green';
} 
if (isset($_POST['Finish'])) 
{ 
	//Get item Element
	$element = $xml->getElementsByTagName('CHASIS')->item(0);
	//Load child elements
	$PART = $element->getElementsByTagName('PART')->item(0);
	//Replace old elements with new
	$element->replaceChild($PART, $PART);
	$PART->nodeValue = ['$Chasis_part'];
	print $xml->saveXML();
	$xml->save('test_chassis.xml');	
} 
 
?>


<html>
<body>
	<form name="user_input" method="POST" action=''>
	<input type="submit" name="Red_Chassis"  value="Chassis_Red">
	<input type="submit" name="Blue_Chassis"  value="Chassis_Blue">
	<input type="submit" name="Green_Chassis"  value="Chassis_Green">
	<input type="submit" name="Finish"  value="Finish">
	<input type="submit" name="pieza" onclick="guardar();" value="222">
	<p>
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos1">01
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos2">02
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos3">03
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos4">04
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos5">05
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos6">06
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos7">07
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos8">08
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos9">09
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos10">10
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos11">11
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos12">12
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos13">13
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos14">14
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos15">15
	<INPUT TYPE="Radio" Name="position" onclick="checkpos();" Value="pos16">16
	</p>
	</form>
	

	

</body>
	<script type="text/javascript">
	function checkpos(){
	var	pos_num="";
	
	for (i=0;i<document.user_input.position.length;i++) {
	if (document.user_input.position[i].checked) {
		pos_num = document.user_input.position[i].value;
		alert(pos_num);
		break;
	}
	}
	
	//var pos_num = document.getElementsByName("position");
	//var len = pos_num.length
	//for(i=0;i<len;i++)
	//{
		//if(pos_num[i].checked)
		//{
			//alert(pos_num[i].value);
		//}
	//}
	}
	function guardar(){
		var valor="";
		valor =document.user_input.pieza.value;
		alert(valor);
	}

	
	</script>
</html>