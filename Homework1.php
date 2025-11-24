<?php 
$movies = [
["title" => "Titanic", "year" => 1997],
["title" => "The Conjuring", "year" => 2013],
["title" => "The Mask", "year" => 1994],
["title" => "Enola Holmes", "year" => 2020]
];
$mostRecent = $movies[0];
foreach ($movies as $movie) {
if ($movie["year"] > $mostRecent["year"]) {
$mostRecent = $movie;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
<ul>
<?php foreach ($movies as $movie): ?>
<li><?php echo $movie["title"] . " (" . $movie["year"] . ")"; ?></li>
<?php endforeach; ?>
</ul>

<h2>Most Recent Movie</h2>
<p><?php echo $mostRecent["title"] . " (" . $mostRecent["year"] . ")"; ?></p>
</body>
</html>