<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/DB/db.php';

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
    <?php include __DIR__ . "/partials/header.php"; ?>

    <table class="table my-3">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Lenght</th>
                <th scope="col">Genre</th>
                <th scope="col">Language</th>
                <th scope="col">Ratings</th>
                <th scope="col">Year</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie) { ?>
                <tr>
                    <td scope="row"><?php echo $movie->name; ?></td>
                    <td><?php echo $movie->lenght; ?></td>
                    <td>
                        <ul class="list-unstyled">
                            <?php foreach($movie->$genres as $genre) {?>
                                <li>
                                    <?php echo $genre;?>
                                </li>
                            <?php } ?>
                        </ul>
                    </td>
                    <td><?php echo $movie->language; ?></td>
                    <td><?php echo $movie->ratings; ?></td>
                    <td><?php echo $movie->year; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>







    <?php include __DIR__ . "/partials/footer.php"; ?>
</body>

</html>