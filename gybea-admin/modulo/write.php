<?php
if(isset($_POST['submit'])){
$firstName = "First Name:".$_POST['pname']."
";
$lastName = "Last Name:".$_POST['nname']."
";
$file=fopen("file.txt", "a");
fwrite($file, $firstName);
fwrite($file, $lastName);
fclose($file);
}
?>
