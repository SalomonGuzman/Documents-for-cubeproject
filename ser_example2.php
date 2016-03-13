<?php

// include class file
include("XML/Serializer.php");

// create object
$serializer = new XML_Serializer();

// create array to be serialized
$xml = array ( "book" => array ("title" => "Oliver Twist", "author" => "Charles Dickens"));

// add XML declaration
$serializer->setOption("addDecl", true);

 // indent elements
$serializer->setOption("indent", " ");

// set name for root element
$serializer->setOption("rootName", "library");

// represent scalar values as attributes instead of element
$serializer->setOption("scalarAsAttributes", true);
      
// perform serialization
$result = $serializer->serialize($xml);

// check result code and display XML if success
if($result === true) 
{
 echo $serializer->getSerializedData();
}

?>