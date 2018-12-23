<?php
if (isset ($_POST['login']) && isset ($_POST['mdp']))
{
$login = $_POST['login'];
$mdp = $_POST['mdp'];

echo 'Bonjour '.$login.' Vous avez comme mot de passe : '.$mdp;

;
}
?>
<br />
<a href="./indexconnect.php">retour</a>