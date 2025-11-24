<?php 
$games =[
    ["Gamename"=> "Half-life","Editor"=>"Sierra Studios","year"=>1998],
    ["Gamename"=>"Minecraft","Editor"=>"Mojang Studios","year"=>2011],
    ["Gamename"=>"Fortnite","Editor"=>"Epic Games","year"=>2017]
    
];
$recentGameYear = 0;
$recentGameName = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php 
    foreach($games as $game){
      if ($game["year"] > $recentGameYear) {
                $recentGameYear = $game["year"];
                $recentGameName = $game["Gamename"];
            }
            ?>
            <li>Name: <?=$game["Gamename"]  ?> - Editor: <?= $game["Editor"] ?> - Release year: <?= $game["year"] ?></li>
        <?php } ?>
    </ul>
    <p>The most recent game is <?= $recentGameName ?> - <?= $recentGameYear ?></p></li>
    </ul>
</body>
</html>