<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favpet"]);
    if (empty($firstname)) 
    {
        header("Location: ./index.php");
    }
    echo "this is what you provided:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pet;
    header("Location: ./index.php");
}
else 
{
    header("Location: ./index.php");   
}