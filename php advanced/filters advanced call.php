<?php
//Sanitize a String
$str = "<h1>welcome!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo"<br>";
//Validate an Integer
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo"<br>";
//Validate an IP Address
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
echo"<br>";
//Sanitize and Validate an Email Address
$email = "preethi7@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
echo "<br>";
//Sanitize and Validate a URL

$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
echo "<br>";
//Validate IPv6 Address
// Variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}
echo "<br>";
//Validate an Integer Within a Range
/* variable to check */
$int = 1200;

/* min value */
$min = 100;
/* max value */
$max = 2000;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
echo "<br>";
//callback function
$s1="Welcome";
$s2="To";
function c1($s1){
    echo $s1." ";
}
function c2($s2){
    echo $s2." ";
}
function display($arg1,$arg2){
    $arg1($arg2);//c2("To");
}
display("c1",$s1);
display("c2",$s2);
echo "<br>";
//array_map
function call($a){
    return strlen($a);
}
$a=array("a1","a2","a3");
print_r(array_map("call",$a));
?>