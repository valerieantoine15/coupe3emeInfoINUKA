<?php
session_start();

include 'manager/traitementMatch.php';

if (!isset($_SESSION['match'])) {
  $_SESSION['match'] = null;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/match.css" />
  <link rel="stylesheet" href="./style/petite_and_final.css" />
  <title>Finale</title>
</head>

<body>
  <main>
    <!-- sidebar -->
    <?php require './sidebar.php'; ?>

    <div class="containerMain">
      <?php if (isset($_SESSION['match']) and $_SESSION['match'] == true) : ?>
        <div class="bg_black_ma">
          <div class="match_group m_groupa">
            <div class="match_card">
              <div class="title_group ma">
                <span></span>
                <h1>Match demie Finale</h1>
                <span class="lf"></span>
              </div>
              <!-- match1 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><?= $_SESSION['groupeA'][0]['nom']   ?></p>
                </div>
                <div class="score sc">
                  <p> <input type="number" name="dfM1Score1" <?php if ($_SESSION['dfM1Etat'] || isset($_POST['submit13'])) { ?> value=<?php echo  $_SESSION['dfM1Score1'] ?> <?php }
                                                                                                                                                                            if (
                                                                                                                                                                              $_SESSION['dfM1Etat'] ||  isset($_POST['submit13'])
                                                                                                                                                                            ) { ?> disabled="disabled" <?php } ?> min="0"></p>
                  <p>-</p>
                  <p> <input type="number" name="dfM1Score2" <?php if ($_SESSION['dfM1Etat'] || isset($_POST['submit13'])) { ?> value=<?php echo  $_SESSION['dfM1Score2'] ?> <?php }
                                                                                                                                                                            if (
                                                                                                                                                                              $_SESSION['dfM1Etat'] ||  isset($_POST['submit13'])
                                                                                                                                                                            ) { ?> disabled="disabled" <?php } ?> min="0"></p>
                </div>
                <div class="equipe">
                  <p><?= $_SESSION['groupeB'][1]['nom'] ?></p>
                </div>
                <button type="submit" name="submit13" <?php if ($_SESSION['dfM1Etat'] || isset($_POST['submit13'])) { ?> style="display:none" <?php } ?>>Valider</button>
              </form>

              <!-- match 2 -->
              <form action="" method="POST">
                <div class="equipe">
                  <p><?= $_SESSION['groupeB'][0]['nom']   ?></p>
                </div>
                <div class="score sc">
                  <input type="number" name="dfM2Score1" <?php if ($_SESSION['dfM2Etat'] || isset($_POST['submit14'])) { ?> value=<?php echo  $_SESSION['dfM2Score1'] ?> <?php }
                                                                                                                                                                        if ($_SESSION['dfM2Etat'] ||  isset($_POST['submit14'])) { ?> disabled="disabled" <?php } ?> min="0">
                  <p>-</p>
                  <input type="number" name="dfM2Score2" <?php if ($_SESSION['dfM2Etat'] || isset($_POST['submit14'])) { ?> value=<?php echo  $_SESSION['dfM2Score2'] ?> <?php }
                                                                                                                                                                        if ($_SESSION['dfM2Etat'] ||  isset($_POST['submit14'])) { ?> disabled="disabled" <?php } ?> min="0">

                </div>
                <div class="equipe">
                  <p><?= $_SESSION['groupeA'][1]['nom'] ?></p>
                </div>
                <button type="submit" name="submit14" <?php if ($_SESSION['dfM2Etat'] || isset($_POST['submit14'])) { ?> style="display:none" <?php } ?>>Valider</button>
              </form>
            </div>
          </div>

          <?php

          // ============================= gestion qualifiant pour match 1 ======================
          if ($_SESSION['dfM1Etat'] && $_SESSION['dfM2Etat']) {
            if ($_SESSION['dfM1Score1'] > $_SESSION['dfM1Score2']) {

              $_SESSION['equipe1gf'] = $_SESSION['groupeA'][0]['nom'];
              $_SESSION['equipe1pf'] = $_SESSION['groupeB'][1]['nom'];
            } elseif ($_SESSION['dfM1Score1'] < $_SESSION['dfM1Score2']) {
              $_SESSION['equipe1pf'] = $_SESSION['groupeA'][0]['nom'];
              $_SESSION['equipe1gf'] = $_SESSION['groupeB'][1]['nom'];
            }
            // ============================= gestion penalite directpour match 1 ======================
            else {
              $qualifiant = rand(0, 1);

              if ($qualifiant == 0) {
                $_SESSION['equipe1gf'] = $_SESSION['groupeA'][0]['nom'];
                $_SESSION['equipe1pf'] = $_SESSION['groupeB'][1]['nom'];
              } else {
                $_SESSION['equipe1pf'] = $_SESSION['groupeA'][0]['nom'];
                $_SESSION['equipe1gf'] = $_SESSION['groupeB'][1]['nom'];
              }
            }


            // ============================= gestion qualifiant pour match 2 ======================
            if ($_SESSION['dfM2Score1'] > $_SESSION['dfM2Score2']) {
              $_SESSION['equipe2gf'] = $_SESSION['groupeB'][0]['nom'];

              $_SESSION['equipe2pf'] = $_SESSION['groupeA'][1]['nom'];
            } elseif ($_SESSION['dfM1Score1'] < $_SESSION['dfM1Score2']) {
              $_SESSION['equipe2gf'] = $_SESSION['groupeA'][1]['nom'];

              $_SESSION['equipe2pf'] = $_SESSION['groupeB'][0]['nom'];
            }
            // ============================= gestion penalite directpour match 2 ======================
            else {
              $qualifiant = rand(0, 1);

              if ($qualifiant == 0) {
                $_SESSION['equipe2gf'] = $_SESSION['groupeB'][0]['nom'];

                $_SESSION['equipe2pf'] = $_SESSION['groupeA'][1]['nom'];
              } else {
                $_SESSION['equipe2gf'] = $_SESSION['groupeA'][1]['nom'];

                $_SESSION['equipe2pf'] = $_SESSION['groupeB'][0]['nom'];
              }
            }
            $_SESSION['demiFinale'] = true;
          }


          ?>

          <?php if (isset($_SESSION['demiFinale']) && $_SESSION['demiFinale'] == true) : ?>
            <div class="match_group m_groupa">
              <div class="match_card">
                <div class="title_group ma">
                  <span></span>
                  <h1>Match Petite Finale</h1>
                  <span class="lf"></span>
                </div>
                <!-- match1 -->
                <form action="" method="POST">
                  <div class="equipe">
                    <p><?= $_SESSION['equipe1pf']  ?></p>
                  </div>
                  <div class="score sc">
                    <p><input type="number" name="pfM1Score1" <?php if ($_SESSION['pfM1Etat'] || isset($_POST['submit15'])) { ?> value=<?php echo  $_SESSION['pfM1Score1'] ?> <?php }
                                                                                                                                                                            if (
                                                                                                                                                                              $_SESSION['pfM1Etat'] ||  isset($_POST['submit15'])
                                                                                                                                                                            ) { ?> disabled="disabled" <?php } ?> min="0"></p>
                    <p>-</p>
                    <p> <input type="number" name="pfM1Score2" <?php if ($_SESSION['pfM1Etat']  || isset($_POST['submit15'])) { ?> value=<?php echo  $_SESSION['pfM1Score2'] ?> <?php }
                                                                                                                                                                              if (
                                                                                                                                                                                $_SESSION['pfM1Etat'] ||  isset($_POST['submit15'])
                                                                                                                                                                              ) { ?> disabled="disabled" <?php } ?> min="0">
                    </p>
                  </div>
                  <div class="equipe">
                    <p><?= $_SESSION['equipe2pf'] ?></p>
                  </div>
                  <button type="submit" name="submit15" <?php if ($_SESSION['pfM1Etat'] || isset($_POST['submit15'])) { ?> style="display:none" <?php } ?>>Valider</button>
                </form>

              </div>
            </div>

          <?php endif; ?>
          <?php
          if ($_SESSION['pfM1Etat']) {
            if ($_SESSION['pfM1Score1'] > $_SESSION['pfM1Score2']) {
              $_SESSION['championpf'] = $_SESSION['equipe1pf'];
              $_SESSION['2eplacepf'] = $_SESSION['equipe2pf'];
            } elseif ($_SESSION['pfM1Score1'] < $_SESSION['pfM1Score2']) {
              $_SESSION['championpf'] = $_SESSION['equipe2pf'];
              $_SESSION['2eplacepf'] = $_SESSION['equipe1pf'];
            } else {
              $champion = rand(0, 1);

              if ($champion == 0) {
                $_SESSION['championpf'] = $_SESSION['equipe1pf'];
                $_SESSION['2eplacepf'] = $_SESSION['equipe2pf'];
              } else {
                $_SESSION['championpf'] = $_SESSION['equipe2pf'];
                $_SESSION['2eplacepf'] = $_SESSION['equipe1pf'];
              }
            }

            // echo  "<p>" . $_SESSION['championpf'] . " termine en 3e position </p>";
            // echo   "<p>" . $_SESSION['2eplacepf'] . " termine en 4e position </p>";
            $_SESSION['finale'] = true;
          }
          ?>

          <?php if (isset($_SESSION['finale']) && $_SESSION['finale'] == true) : ?>
            <div class="match_group m_groupa">
              <div class="match_card">
                <div class="title_group ma">
                  <span></span>
                  <h1>Match Grande Finale</h1>
                  <span class="lf"></span>
                </div>
                <!-- match1 -->
                <form action="" method="POST">
                  <div class="equipe">
                    <p><?= $_SESSION['equipe1gf']  ?></p>
                  </div>
                  <div class="score sc">
                    <p> <input type="number" name="gfM1Score1" <?php if ($_SESSION['gfM1Etat'] || isset($_POST['submit16'])) { ?> value=<?php echo  $_SESSION['gfM1Score1'] ?> <?php }
                                                                                                                                                                            if (
                                                                                                                                                                              $_SESSION['gfM1Etat'] ||  isset($_POST['submit16'])
                                                                                                                                                                            ) { ?> disabled="disabled" <?php } ?> min="0"></p>
                    <p>-</p>
                    <p> <input type="number" name="gfM1Score2" <?php if ($_SESSION['gfM1Etat']  || isset($_POST['submit16'])) { ?> value=<?php echo  $_SESSION['gfM1Score2'] ?> <?php }
                                                                                                                                                                              if (
                                                                                                                                                                                $_SESSION['gfM1Etat'] ||  isset($_POST['submit16'])
                                                                                                                                                                              ) { ?> disabled="disabled" <?php } ?> min="0">
                    </p>
                  </div>
                  <div class="equipe">
                    <p><?= $_SESSION['equipe2gf'] ?></p>
                  </div>
                  <button type="submit" name="submit16" <?php if ($_SESSION['gfM1Etat'] || isset($_POST['submit16'])) { ?> style="display:none" <?php } ?>>Valider</button>
                </form>

              </div>
            </div>
            <?php
            if ($_SESSION['gfM1Etat']) {
              if ($_SESSION['gfM1Score1'] > $_SESSION['gfM1Score2']) {
                $_SESSION['championgf'] = $_SESSION['equipe1gf'];
                $_SESSION['2eplacegf'] = $_SESSION['equipe2gf'];
              } elseif ($_SESSION['gfM1Score1'] < $_SESSION['gfM1Score2']) {
                $_SESSION['championgf'] = $_SESSION['equipe2gf'];
                $_SESSION['2eplacegf'] = $_SESSION['equipe1gf'];
              } else {
                $champion = rand(0, 1);

                if ($champion == 0) {
                  $_SESSION['championgf'] = $_SESSION['equipe1gf'];
                  $_SESSION['2eplacegf'] = $_SESSION['equipe2gf'];
                } else {
                  $_SESSION['championgf'] = $_SESSION['equipe2gf'];
                  $_SESSION['2eplacegf'] = $_SESSION['equipe1gf'];
                }
              }

              // echo  "<br>" . $_SESSION['championgf'] . " remporte le titre du championnat coupe 3e info <br>";
              // echo   "<br>" . $_SESSION['2eplacegf'] . " termine en 2e position <br>";
            }

            ?>
          <?php endif; ?>
        </div>
    </div>
  <?php endif; ?>
  </div>
  </main>
</body>

</html>