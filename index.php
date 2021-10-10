<?php
session_start();

$_SESSION['match']=null;
$tablo = [
  "Brésil",
  "Argentine",
  "France",
  "Italie",
  "Espagne",
  "Allemagne",
  "Portugal",
  "Haïti"
];

$imgEquipe = [
  'bresil.webp',
  'argentine.webp',
  'france.webp',
  'italie.webp',
  'espagne.webp',
  'allemagne.webp',
  'portugal.png',
  'haiti.png'
];

$indA = rand(0, 1);
$indB = rand(0, 1);

$indC = rand(2, 3);
$indD = rand(2, 3);

$indE = rand(4, 5);
$indF = rand(4, 5);

$indG = rand(6, 7);
$indH = rand(6, 7);

while ($indA == $indB) {
  $indB = rand(0, 1);
}
while ($indC == $indD) {
  $indD = rand(2, 3);
}
while ($indE == $indF) {
  $indF = rand(4, 5);
}
while ($indG == $indH) {
  $indH = rand(6, 7);
}

$_SESSION['equipe1A'] = $tablo[$indA];
$_SESSION['equipe1B'] = $tablo[$indB];
$_SESSION['equipe2A'] = $tablo[$indC];
$_SESSION['equipe2B'] = $tablo[$indD];
$_SESSION['equipe3A'] = $tablo[$indE];
$_SESSION['equipe3B'] = $tablo[$indF];
$_SESSION['equipe4A'] = $tablo[$indG];
$_SESSION['equipe4B'] = $tablo[$indH];

$_SESSION['imgA'] = [
  $imgEquipe[$indA],
  "$imgEquipe[$indC]",
  "$imgEquipe[$indE]",
  "$imgEquipe[$indG]"
];

$_SESSION['imgB'] = [
  $imgEquipe[$indB],
  "$imgEquipe[$indD]",
  "$imgEquipe[$indF]",
  "$imgEquipe[$indH]"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/style.css" />
  <title>Accueil</title>
</head>

<body>
  <main>
    <?php require './sidebar.php'; ?>

    <div class="containerMain">
      <div class="equipe_card">
        <div>
          <img src="./images/bresil.webp" alt="" />
          <h4>Bresil</h4>
        </div>
        <div>
          <img src="./images/france.webp" alt="" />
          <h4>France</h4>
        </div>
        <div>
          <img src="./images/espagne.webp" alt="" />
          <h4>Espagne</h4>
        </div>
        <div>
          <img src="./images/portugal.png" alt="" />
          <h4>Portugal</h4>
        </div>
        <div>
          <img src="./images/argentine.webp" alt="" />
          <h4>Argentine</h4>
        </div>
        <div>
          <img src="./images/italie.webp" alt="" />
          <h4>Italie</h4>
        </div>
        <div>
          <img src="./images/allemagne.webp" alt="" />
          <h4>Allemagne</h4>
        </div>
        <div>
          <img src="./images/haiti.png" alt="" />
          <h4>Haïti</h4>
        </div>
      </div>
      <div class="tirage_equipe">
        <span></span>
        <form action="" method="post">
          <button type="sumit" name="tirage">Tirage</button>
        </form>
        <span></span>
      </div>
      <?php if (isset($_POST['tirage'])) : ?>
        <div class="group">
          <div class="bg_black">
            <div class="group_equipe group_a">
              <div class="title_group">
                <span></span>
                <h1>GROUP A</h1>
                <span></span>
              </div>
              <ul>
                <li><img src=<?= "./images/" . $_SESSION['imgA'][0] ?> alt=""><?= $_SESSION['equipe1A'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgA'][1] ?> alt=""><?= $_SESSION['equipe2A'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgA'][2] ?> alt=""><?= $_SESSION['equipe3A'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgA'][3] ?> alt=""><?= $_SESSION['equipe4A'] ?></li>
              </ul>
            </div>
            <div class="group_equipe group_b">
              <div class="title_group">
                <span></span>
                <h1>GROUP B</h1>
                <span></span>
              </div>
              <ul>
                <li><img src=<?= "./images/" . $_SESSION['imgB'][0] ?> alt=""><?= $_SESSION['equipe1B'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgB'][1] ?> alt=""><?= $_SESSION['equipe2B'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgB'][2] ?> alt=""><?= $_SESSION['equipe3B'] ?></li>
                <li><img src=<?= './images/' . $_SESSION['imgB'][3] ?> alt=""><?= $_SESSION['equipe4B'] ?></li>
              </ul>
            </div>
          </div>
        </div>

        <?php
        $_SESSION['match'] = true;
        $_SESSION['status'] = [null, null, null, null, null, null, null, null, null, null, null, null];
        include 'Donnee/data.php';

        Equipe('equipe1A', $_SESSION['equipe1A']);
        Equipe('equipe2A', $_SESSION['equipe2A']);
        Equipe('equipe3A', $_SESSION['equipe3A']);
        Equipe('equipe4A', $_SESSION['equipe4A']);

        Equipe('equipe1B', $_SESSION['equipe1B']);
        Equipe('equipe2B', $_SESSION['equipe2B']);
        Equipe('equipe3B', $_SESSION['equipe3B']);
        Equipe('equipe4B', $_SESSION['equipe4B']);

        demiFinale();

        petiteFinale();
        grandeFinale();
        ?>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>