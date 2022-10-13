<?php

// My Variables 

$name =$_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender =$_POST['gender'];
$country = $_POST['country'];

$file = fopen("userdata.csv", 'a'); '<br>';

//Function to Write in "userdata.csv"
fwrite ($file, "Name:".$name. "Email:".$email ."Date of Birth:".$dob ."Gender:".$gender. "Country:".$country);
fclose($file);



//User return using print_r method
print_r($_POST);

echo "<br>";

// User return data
echo "Name:".$name;
echo "<br>";
echo "Email:".$email;
echo "<br>";
echo "Date of Birth:".$dob;
echo "<br>";
echo "Gender:".$gender;
echo "<br>";
echo "Country:".$country;
echo "<br>";

?>