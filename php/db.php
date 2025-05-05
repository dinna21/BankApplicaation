<?php
$conn = new mysqli("localhost","root","Dinu2002#","bank_app");
if($conn -> connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>
