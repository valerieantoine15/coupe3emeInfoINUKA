<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./style/victory.css" />
    <title>Recompense</title>
</head>

<body>
    <main>

        <?php require './sidebar.php'; ?>

        <div class="containerMain">
            <table>
                <thead>
                <tr>
                    <th>1er Place</th>
                    <th>2ème Place</th>
                    <th>3ème Place</th>
                </tr>
                </thead>

                <tr>
                    <td><?= $_SESSION['championgf'] ?></td>
                    <td><?= $_SESSION['2eplacegf'] ?></td>
                    <td><?= $_SESSION['championpf'] ?></td>
                </tr>
            </table>

            <div class="trophy">
                <h1><?= $_SESSION['championgf'] ?></h1>
                <img src="./images/icons/8i7C.gif" alt="">
            </div>
        </div>
    </main>
</body>

</html>