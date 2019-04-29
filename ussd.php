<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "")
 {
  // ......
 	$response = "CON Welcome to Ho Technical University\n Select the menu\n ";
 $response .= "1. Admission \n";
 $response .= "1. Programmes\n";
 $response .= "1. About Us\n";
 $response .= "1. Help\n";
}

else if ($text == "1")
{
	// logic for first level response
	// Admission menu
	$response = "CON Admission \n";
    $response .= "1. Requirements \n";
    $response .= "2. Status \n";
    $response .= "3. \n";
    $response .= "4. \n";
 
}

else if ($text == "2"){
$response = "CON Programmes \n";
    $response .= "1. HND Programmes \n";
    $response .= "2. BTECH Programmes \n";
    $response .= "3. MTECH \n";
    $response .= "4. \n";
}

else if ($text == "1*2"){
$response = "CON Requirements -> Grades \n";
    $response .= "1 \n";
    $response .= "2. WASSCE HOLDERS
 Five (5) passes (A1-C6)  in all subjects, including English Language and Mathematics; and at least two (2) of the passes must be relevant to the area of specialization
Or
 Six passes (A1-D7) in all subjects, including English Language and Mathematics; and must possess a minimum of D7 in any three (3) of the passes relevant to the area of specialization \n";
    $response .= "3.  \n";
    $response .= "4. \n";
}

else if ($text == "2*1")
{
	$response = "CON HND Programmes \n";
    $response .= "1. Computer Sci. \n";
    $response .= "2. Banking and Finance \n";
    $response .= "3. Accounting \n";
    $response .= "4. Hospitality\n";
}

else if ($text == "2*2") 
{
 $response = "CON HND BTECH Programmes \n";
    $response .= "1. BTech Hospitality and Tourism management \n";
    $response .= "2. BTech Automobile Engineering \n";
    $response .= "3.  \n";
    $response .= "4. \n";
}

else if ($text == "2*3") 
{
 $response = "CON HND BTECH Programmes \n";
    $response .= "1. BTech Hospitality and Tourism management \n";
    $response .= "2. BTech Automobile Engineering \n";
    $response .= "3.  \n";
    $response .= "4. \n";
}
?>