<?php

$x = htmlspecialchars($_POST['username']);
$y = htmlspecialchars($_POST['password']);

echo "<html>$x</html><br>";
echo "<html>$y</html>";

?>
