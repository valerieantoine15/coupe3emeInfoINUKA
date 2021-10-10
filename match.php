<?php
session_start();

include 'manager/traitementMatch.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/match.css" />
  <title>Document</title>
</head>

<body>
  <main>
    <!-- sidebar -->
 <?php require "./sidebar.php"; ?>

    <div class="containerMain">
      <?php if (isset($_SESSION['match']) AND $_SESSION['match'] == true) : ?>
        <div class="bg_black_ma">
          <div class="match_group m_groupa">
            <div class="match_card">
              <div class="title_group ma">
                <span></span>
                <h1>Match du group a</h1>
                <span class="lf"></span>
              </div>

              <!-- match1 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m1score1A" value="<?= isset($_SESSION['status'][0]) ? $_SESSION['equipe1A']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][0]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m1score2A" value="<?= isset($_SESSION['status'][0]) ? $_SESSION['equipe2A']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][0]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit1" <?= isset($_SESSION['status'][0]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>

              <!-- match2 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m2score3A" value="<?= isset($_SESSION['status'][1]) ? $_SESSION['equipe3A']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][1]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m2score4A" value="<?= isset($_SESSION['status'][1]) ? $_SESSION['equipe4A']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][1]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit2" <?= isset($_SESSION['status'][1]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>

              <!-- match3 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m3score1A" value="<?= isset($_SESSION['status'][2]) ? $_SESSION['equipe1A']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][2]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m3score3A" value="<?= isset($_SESSION['status'][2]) ? $_SESSION['equipe3A']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][2]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit3" <?= isset($_SESSION['status'][2]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>

              <!-- match4 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m4score2A" value="<?= isset($_SESSION['status'][3]) ? $_SESSION['equipe2A']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][3]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m4score4A" value="<?= isset($_SESSION['status'][3]) ? $_SESSION['equipe4A']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][3]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit4" <?= isset($_SESSION['status'][3]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>

              <!-- match5 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m5score1A" value="<?= isset($_SESSION['status'][4]) ? $_SESSION['equipe1A']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][4]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m5score4A" value="<?= isset($_SESSION['status'][4]) ? $_SESSION['equipe4A']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][4]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit5" <?= isset($_SESSION['status'][4]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>

              <!-- match6 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2A']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m6score2A" value="<?= isset($_SESSION['status'][5]) ? $_SESSION['equipe2A']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][5]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m6score3A" value="<?= isset($_SESSION['status'][5]) ? $_SESSION['equipe3A']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][5]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgA'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3A']['nom']  ?></p>
                </div>
                <button type="submit" name="submit6" <?= isset($_SESSION['status'][5]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
            </div>
          </div>

          <!-- Match Group B -->
          <div class="match_group m_groupb">
            <div class="match_card">
              <div class="title_group ma">
                <span></span>
                <h1>Match du group b</h1>
                <span class="rg"></span>
              </div>

              <!-- match1 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m7score1B" value="<?= isset($_SESSION['status'][6]) ? $_SESSION['equipe1B']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][6]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m7score2B" value="<?= isset($_SESSION['status'][6]) ? $_SESSION['equipe2B']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][6]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit7" <?= isset($_SESSION['status'][6]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
              <!-- match2 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m8score3B" value="<?= isset($_SESSION['status'][7]) ? $_SESSION['equipe3B']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][7]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m8score4B" value="<?= isset($_SESSION['status'][7]) ? $_SESSION['equipe4B']['score'][0] : '0' ?>" <?= isset($_SESSION['status'][7]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit8" <?= isset($_SESSION['status'][7]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
              <!-- match3 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m9score1B" value="<?= isset($_SESSION['status'][8]) ? $_SESSION['equipe1B']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][8]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m9score3B" value="<?= isset($_SESSION['status'][8]) ? $_SESSION['equipe3B']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][8]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit9" <?= isset($_SESSION['status'][8]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
              <!-- match4 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m10score2B" value="<?= isset($_SESSION['status'][9]) ? $_SESSION['equipe2B']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][9]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m10score4B" value="<?= isset($_SESSION['status'][9]) ? $_SESSION['equipe4B']['score'][1] : '0' ?>" <?= isset($_SESSION['status'][9]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit10" <?= isset($_SESSION['status'][9]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
              <!-- match5 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][0] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe1B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m11score1B" value="<?= isset($_SESSION['status'][10]) ? $_SESSION['equipe1B']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][10]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m11score4B" value="<?= isset($_SESSION['status'][10]) ? $_SESSION['equipe4B']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][10]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][3] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe4B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit11" <?= isset($_SESSION['status'][10]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>
              <!-- match6 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][1] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe2B']['nom']   ?></p>
                </div>
                <div class="score">
                  <p><input type="number" min="0" max="20" name="m12score2B" value="<?= isset($_SESSION['status'][11]) ? $_SESSION['equipe2B']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][11]) ? 'disabled' : '' ?> /></p>
                  <p>-</p>
                  <p><input type="number" min="0" max="20" name="m12score3B" value="<?= isset($_SESSION['status'][11]) ? $_SESSION['equipe3B']['score'][2] : '0' ?>" <?= isset($_SESSION['status'][11]) ? 'disabled' : '' ?> /></p>
                </div>
                <div class="equipe">
                  <p><img src="<?= './images/' . $_SESSION['imgB'][2] ?>" alt="" /></p>
                  <p><?= $_SESSION['equipe3B']['nom']  ?></p>
                </div>
                <button type="submit" name="submit12" <?= isset($_SESSION['status'][11]) ? 'class="active-button" disabled' : '' ?>>Valider</button>
              </form>


            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>