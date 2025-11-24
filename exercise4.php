<?php 
$details = ["firstname" =>"Saniya Rose","lastname" =>"Joy","email" =>"saniyarose003@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 4</h1>
    <h2><?= $details["firstname"] ?> <?= $details["lastname"] ?></h2>
    <h2><?= $details["firstname"] . " " . $details["lastname"] ?></h2>
    <h2><?= "first name is: {$details["firstname"]} and last name is: {$details["lastname"]} " ?></h2>
   
</body>
</html>