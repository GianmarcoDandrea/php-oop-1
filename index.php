<?php 
require_once __DIR__ . '/Models/Movie.php';


$movies = [
    new Movie('The Lord Of The Rings - The Fellowship Of The Ring', '178 minutes', 'Fantasy', 'English', [9, 8, 8 ,8 ,9 ],'2001'),
    new Movie('The Lord Of The Rings - The Two Towers', '179 minutes', 'Fantasy', 'English', [9, 9, 7 ,7 ,9 ]),
    new Movie('The Lord Of The Rings - The Return of the King', '200 minutes', 'Fantasy', 'English', [9, 9, 10 ,10 ,9 ] ,'2003')
];

var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>


</body>
</html>