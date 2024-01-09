<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/DB/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/Views/layout/head.php"; ?>

    <?php include __DIR__ . "/Views/partials/header.php"; ?>

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
                            <?php foreach($movie->genres as $genre) {?>
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







<?php include __DIR__ . "/Views/layout/footer.php"; ?>
