<?php

include 'manager/classementManage.php';

if (isset($_POST['submit1'])) {
    $_SESSION['equipe1A']['score'][0] = $_POST['m1score1A'];
    $_SESSION['equipe2A']['score'][0] = $_POST['m1score2A'];
    $_SESSION['status'][0] = true;
    traitementClassement('equipe1A', 'equipe2A', 0);
}


if (isset($_POST['submit2'])) {
    $_SESSION['equipe3A']['score'][0] = $_POST['m2score3A'];
    $_SESSION['equipe4A']['score'][0] = $_POST['m2score4A'];
    $_SESSION['status'][1] = true;
    traitementClassement('equipe3A', 'equipe4A', 0);
}

if (isset($_POST['submit3'])) {
    $_SESSION['equipe1A']['score'][1] = $_POST['m3score1A'];
    $_SESSION['equipe3A']['score'][1] = $_POST['m3score3A'];
    $_SESSION['status'][2] = true;
    traitementClassement('equipe1A', 'equipe3A', 1);
}

if (isset($_POST['submit4'])) {
    $_SESSION['equipe2A']['score'][1] = $_POST['m4score2A'];
    $_SESSION['equipe4A']['score'][1] = $_POST['m4score4A'];
    $_SESSION['status'][3] = true;
    traitementClassement('equipe2A', 'equipe4A', 1);
}

if (isset($_POST['submit5'])) {
    $_SESSION['equipe1A']['score'][2] = $_POST['m5score1A'];
    $_SESSION['equipe4A']['score'][2] = $_POST['m5score4A'];
    $_SESSION['status'][4] = true;
    traitementClassement('equipe1A', 'equipe4A', 2);
}



if (isset($_POST['submit6'])) {
    $_SESSION['equipe2A']['score'][2] = $_POST['m6score2A'];
    $_SESSION['equipe3A']['score'][2] = $_POST['m6score3A'];
    $_SESSION['status'][5] = true;
    traitementClassement('equipe2A', 'equipe3A', 2);
}

if (isset($_POST['submit7'])) {
    $_SESSION['equipe1B']['score'][0] = $_POST['m7score1B'];
    $_SESSION['equipe2B']['score'][0] = $_POST['m7score2B'];
    $_SESSION['status'][6] = true;
    traitementClassement('equipe1B', 'equipe2B', 0);
}


if (isset($_POST['submit8'])) {
    $_SESSION['equipe3B']['score'][0] = $_POST['m8score3B'];
    $_SESSION['equipe4B']['score'][0] = $_POST['m8score4B'];
    $_SESSION['status'][7] = true;
    traitementClassement('equipe3B', 'equipe4B', 0);
}

if (isset($_POST['submit9'])) {
    $_SESSION['equipe1B']['score'][1] = $_POST['m9score1B'];
    $_SESSION['equipe3B']['score'][1] = $_POST['m9score3B'];
    $_SESSION['status'][8] = true;
    traitementClassement('equipe1B', 'equipe3B', 1);
}

if (isset($_POST['submit10'])) {
    $_SESSION['equipe2B']['score'][1] = $_POST['m10score2B'];
    $_SESSION['equipe4B']['score'][1] = $_POST['m10score4B'];
    $_SESSION['status'][9] = true;
    traitementClassement('equipe2B', 'equipe4B', 1);
}

if (isset($_POST['submit11'])) {
    $_SESSION['equipe1B']['score'][2] = $_POST['m11score1B'];
    $_SESSION['equipe4B']['score'][2] = $_POST['m11score4B'];
    $_SESSION['status'][10] = true;
    traitementClassement('equipe1B', 'equipe4B', 2);
}

if (isset($_POST['submit12'])) {
    $_SESSION['equipe2B']['score'][2] = $_POST['m12score2B'];
    $_SESSION['equipe3B']['score'][2] = $_POST['m12score3B'];
    $_SESSION['status'][11] = true;
    traitementClassement('equipe2B', 'equipe3B', 2);
}

if (isset($_POST['submit13'])) {
    $_SESSION['dfM1Score1'] = $_POST['dfM1Score1'];
    $_SESSION['dfM1Score2'] = $_POST['dfM1Score2'];
    $_SESSION['dfM1Etat'] = true;
}

if (isset($_POST['submit14'])) {
    $_SESSION['dfM2Score1'] = $_POST['dfM2Score1'];
    $_SESSION['dfM2Score2'] = $_POST['dfM2Score2'];
    $_SESSION['dfM2Etat'] = true;
}

if (isset($_POST['submit15'])) {
    $_SESSION['pfM1Score1'] = $_POST['pfM1Score1'];
    $_SESSION['pfM1Score2'] = $_POST['pfM1Score2'];
    $_SESSION['pfM1Etat'] = true;
}

if (isset($_POST['submit16'])) {
    $_SESSION['gfM1Score1'] = $_POST['gfM1Score1'];
    $_SESSION['gfM1Score2'] = $_POST['gfM1Score2'];
    $_SESSION['gfM1Etat'] = true;
    header('Location:./victory.php');
}
