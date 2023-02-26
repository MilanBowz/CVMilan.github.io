<?php
$myText = $_POST["mytext"];
file_put_contents("test.txt", $myText);
?>