
<?php 
  
// Declare class 
class API { 
       
} 
   
// Declare an object 
$value = new EncodeAPI(); 
   
// Set the object elements 
$value->organisation = "EncodeAPI"; 
$value->email = "blackshark37@gmail.com"; 
  
// Use json_encode() function 
$json = json_encode($value); 
   
// Display the output 
echo($json); 
  
?> 