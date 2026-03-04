<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion EmergenceApp</title>
    <script src="../js/jquery.js"></script>
</head>

<body>
    <div style="position: fixed; top: 0; bottom: 0; left: 0; right: 0;  display: flex; justify-content: center; background-image: url('../../model/bg/backgrou.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div style="margin: auto; padding: 4px; display: flex; justify-content: space-between; width: 90%;">

            <div class="right" style="border-radius: 4px; padding: 4px; background-color: white; backdrop-filter: blur(40%); width: 35%; text-align: center;">

                <div>
                    <h2>CONNECTEZ-VOUS!</h2>
                    <hr>
                    <form action="#" method="POST">

                        <label for="email_num" style="font-size: 11px;">

                            <input type="text" name="email_num" id="email_num" placeholder="Entrer votre Email ou Tél" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="mot_de_passe" style="font-size: 11px;">

                            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Entrer un mot de passe" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <input type="submit" value="Se Connecter" style="margin-top: 10px; width: 90%; background-color: #1e72df; color: white; border: none; border-radius: 4px; padding: 5px; cursor: pointer;"><br><br>

                        <a href="inscription.php" style="text-decoration: none; font-weight: bold; font-size: 14px; color: #25a330;">S'inscrire plutot!</a>
                    </form>
                </div>

            </div>

            <div class="left" style="width: 40%; display: flex;">
                <div style="margin: auto;">
                    <div align="center">
                        <img src="../../model/logo/Logo.jpeg" width="180px">
                    </div>
                    <div align="center" style="filter: opacity(0.6);">
                        Nous sommes ravis de vous revoir sur EmergenceApp. Connectez-vous pour continuer à explorer, partager et collaborer avec Votre communauté.
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>