<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body> -->
<div id="div_sur_footer" class="row" >
<a href="../index.php"><input class="boutonorange" type="button" value="Retour à l'Accueil"></a>
<input class="boutonorange" type="button" value="Votre devis" style="display:none">

    <div id="div_textnous" class="col-md-12 col-sm-12 col-xm-12">
        <form method ="post" action="./traitement.php" name="form_div_textnous">
            <span class="span_textnous">Votre code client ou votre e-mail:</span>
            <input id="login" type="text"name="login"/><br /><br />
            <span class="span_textnous">Votre mot de passe :</span>
            <input id="acces" type="password"name="mdp"/><br /><br />
            <span class="span_textnous">Mot de passe oublié?:<a href="#"  id="oublimdp" onclick="javascript:alerte()"> Clicker ici</a></span><br /><br />
            <input id="validez" type="submit" value="Validez" />
        </form>
    </div>
</div>

<!-- </body>
</html> -->

<script>
    function alerte()
    {
    alert("Un mail va vous être envoyé pour réinitialiser votre mot de passe");
    }
</script>
