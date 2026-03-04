<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription EmergenceApp</title>
    <script src="../js/jquery.js"></script>

    <script>
        $(document).ready(function() {
            $('.tab_sw').click(function() {
                var index = $(this).attr("class").split(" ")[1].split("_")[1];

                $('.divs').hide();
                $('.tab_sw').css("color", "#7e7e7e");
                $('.tab_sw').css("background-color", "white");
                $(".div_" + index).show();
                $(this).css("color", "white");
                $(this).css("background-color", "#7300d1");
            });
        });
    </script>
</head>

<body>
    <div style="position: fixed; top: 0; bottom: 0; left: 0; right: 0;  display: flex; justify-content: center; background-image: url('../../model/bg/backgrou.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div style="margin: auto; padding: 4px; display: flex; justify-content: space-between; width: 90%;">

            <div class="left" style="width: 40%; display: flex;">
                <div style="margin: auto;">
                    <div align="center">
                        <img src="../../model/logo/Logo.jpeg" width="180px">
                    </div>
                    <div align="center" style="filter: opacity(0.6);">
                        Bienvenue sur EmergenceApp, le réseau social fait pour tous les acteurs du système éducatif.<br>Rejoignez-nous des à présent.
                    </div>
                </div>
            </div>

            <div class="right" style="border-radius: 4px; padding: 4px; background-color: white; backdrop-filter: blur(40%); width: 35%; text-align: center;">
                <div style="display: flex; justify-content: space-between;">
                    <div class="tab_sw tab_0" align="center" style="width: 30%; background-color: #7300d1; border-radius: 4px; padding: 3px; color: #FFFFFF; cursor: pointer;">Enseignant</div>
                    <div class="tab_sw tab_1" align="center" style="width: 30%; border-radius: 4px; padding: 3px; color: #7e7e7e; cursor: pointer;">Parent</div>
                    <div class="tab_sw tab_2" align="center" style="width: 30%; border-radius: 4px; padding: 3px; color: #7e7e7e; cursor: pointer;">Eleve</div>
                </div>

                <div class="divs div_0">
                    <h2>INSCRIPTION ENSEIGNANT</h2>
                    <hr>
                    <form action="#" method="POST">
                        <label for="nom_prenom" style="font-size: 11px;">

                            <input type="text" name="nom_prenom" id="nom_prenom" placeholder="Entrer votre Noms" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br>

                        <div style="font-size: 11px;">Sexe
                            <label for="sexe" style="font-size: 11px;">
                                <input type="radio" name="sexe" id="sexe" value="M" required checked> Masculin
                                <input type="radio" name="sexe" id="sexe" value="F" required> Féminin
                            </label>
                        </div><br>

                        <label for="date" style="font-size: 11px;">

                            <input type="date" name="date" id="date" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" placeholder="Date de Naissance" required>
                        </label><br><br>

                        <label for="email_num" style="font-size: 11px;">

                            <input type="text" name="email_num" id="email_num" placeholder="Entrer votre Email ou Tél" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="mot_de_passe" style="font-size: 11px;">

                            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Entrer un mot de passe" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="code_eta" style="font-size: 11px;">

                            <input type="text" name="code_eta" id="code_eta" placeholder="Entrer Code Etablissement" style="width: 90%; text-align: center; outline: none; border: 1px solid #2c0880; border-radius: 4px; background-color: #c8b1ff; padding: 5px;" required>
                        </label><br>

                        <input type="submit" value="S'inscrire" style="margin-top: 10px; width: 90%; background-color: #4CAF50; color: white; border: none; border-radius: 4px; padding: 5px; cursor: pointer;"><br><br>

                        <a href="connexion.php" style="text-decoration: none; font-weight: bold; font-size: 14px; color: #00a7d1;">Se Connecter plutot!</a>
                    </form>
                </div>

                <div class="divs div_1" style="display: none;">
                    <h2>INSCRIPTION PARENT</h2>
                    <hr>
                    <form action="#" method="POST">
                        <label for="nom_prenom" style="font-size: 11px;">

                            <input type="text" name="matric_enf" id="matric_enf" placeholder="Entrer Matricule Enfant " style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br>

                        <div style="font-size: 11px;">Sexe
                            <label for="sexe" style="font-size: 11px;">
                                <input type="radio" name="sexe" id="sexe" value="M" required checked> Masculin
                                <input type="radio" name="sexe" id="sexe" value="F" required> Féminin
                            </label>
                        </div><br>

                        <label for="email_num" style="font-size: 11px;">

                            <input type="text" name="email_num" id="email_num" placeholder="Entrer votre Email ou Tél" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="mot_de_passe" style="font-size: 11px;">

                            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="EntrerMot de passe" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br>

                        <input type="submit" value="S'inscrire" style="margin-top: 10px; width: 90%; background-color: #4CAF50; color: white; border: none; border-radius: 4px; padding: 5px; cursor: pointer;"><br><br>

                        <a href="connexion.php" style="text-decoration: none; font-weight: bold; font-size: 14px; color: #00a7d1;">Se Connecter plutot!</a>
                    </form>
                </div>

                <div class="divs div_2" style="display: none;">
                    <h2>INSCRIPTION ELEVE</h2>
                    <hr>
                    <form action="#" method="POST">
                        <label for="nom_prenom" style="font-size: 11px;">

                            <input type="text" name="nom_prenom" id="nom_prenom" placeholder="Entrer votre Noms" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br>

                        <div style="font-size: 11px;">Sexe
                            <label for="sexe" style="font-size: 11px;">
                                <input type="radio" name="sexe" id="sexe" value="M" required checked> Masculin
                                <input type="radio" name="sexe" id="sexe" value="F" required> Féminin
                            </label>
                        </div><br>

                        <label for="date" style="font-size: 11px;">

                            <input type="date" name="date" id="date" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="email_num" style="font-size: 11px;">

                            <input type="text" name="email_num" id="email_num" placeholder="Entrer votre Email ou Tél" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="mot_de_passe" style="font-size: 11px;">

                            <input type="password" name="mot_de_passe" id="mot_de_passe" placeholder="Entrer Mot de passe" style="width: 90%; text-align: center; outline: none; border: 1px solid #ccc; border-radius: 4px; background-color: #f0f0f0; padding: 5px;" required>
                        </label><br><br>

                        <label for="code_eta" style="font-size: 11px;">

                            <input type="text" name="code_eta" id="code_eta" placeholder=" Code Etablissement" style="width: 90%; text-align: center; outline: none; border: 1px solid #2c0880; border-radius: 4px; background-color: #c8b1ff; padding: 5px;" required>
                        </label><br>

                        <input type="submit" value="S'inscrire" style="margin-top: 10px; width: 90%; background-color: #4CAF50; color: white; border: none; border-radius: 4px; padding: 5px; cursor: pointer;"><br><br>

                        <a href="connexion.php" style="text-decoration: none; font-weight: bold; font-size: 14px; color: #00a7d1;">Se Connecter plutot!</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>