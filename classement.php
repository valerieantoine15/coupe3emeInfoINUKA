<?php

session_start();
include 'manageClassement/groupeA.php';
include 'manageClassement/groupeB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Classement</title>
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/classement.css"/>
</head>

<body>
  <main>
    <!-- sidebar -->
 <?php require './sidebar.php'; ?>

    <div class="containerMain">
    <?php if (isset($_SESSION['match']) AND $_SESSION['match'] == true) : ?>
      <section class="classement">
        <div class="bg_black_ma">
          <div class="classement_group classement_g_a">
            <table>
              <div class="title_group">
                <span></span>
                <h1>Classement GROUP A</h1>
                <span></span>
              </div>
              <tr>
                <th>Equipe</th>
                <th>MJ</th>
                <th>MG</th>
                <th>MN</th>
                <th>MP</th>
                <th>BP</th>
                <th>BC</th>
                <th>DIF</th>
                <th>PTS</th>
              </tr>
              <?= ordonnerA(); ?>
            </table>
          </div>
          <div class="classement_group classement_g_b">
            <table>
              <div class="title_group">
                <span></span>
                <h1>Classement GROUP B</h1>
                <span></span>
              </div>
              <tr>
                <th>Equipe</th>
                <th>MJ</th>
                <th>MG</th>
                <th>MN</th>
                <th>MP</th>
                <th>BP</th>
                <th>BC</th>
                <th>DIF</th>
                <th>PTS</th>
              </tr>
              <?= ordonnerB(); ?>
            </table>
          </div>
        </div>
      </section>
      <?php endif;?>
    </div>
  </main>
</body>

</html>