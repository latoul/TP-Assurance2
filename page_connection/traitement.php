<?php
if (isset ($_POST['login']) && isset ($_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    if ($login === "laurent") {
        if ($mdp === "mdp") {
            echo 'Bonjour '.$login.' Vous avez comme mot de passe : '.$mdp;
        }
        else {
            echo 'Mot de passe incorrect';
        };
    }
    else {
        echo 'Nom de compte inconnu';
    };
}
?>
<br />
<a href="./indexconnect.php">retour</a>