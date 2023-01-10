<?php
// Start the session
session_start();

// Set session variables
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "fish";
echo "Session variables are set.";
echo"<br>";

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo"<br>";
print_r($_SESSION);

echo"<br>";
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "black";
$_SESSION["favanimal"] = "lion";
print_r($_SESSION);
?>


</body>
</html>
