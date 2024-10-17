<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>
    <main class="connexion">
        <section class="grid-co">
           
          <nav id="mainco">
               <img src="./images/logo.png">
            </nav>
            <article>
                <form class="form formConnexion" method="POST" action="./serveur/connection.php">
                    <fieldset class="field-co">
                        <legend>Se connecter</legend>
                        <label for="email">Email : </label>
                        <br>
                        <input type="email" id="email" name="email" placeholder="Veuillez saisir votre email"
                            minlength="2" maxlength="50" size="20">
                        <br>
                        <label for="password"> Mot de passe: </label>
                        <br>
                        <input type="password" id="password" name="password" minlength="5" maxlength="20" size="20"
                            placeholder="Veuillez saisir votre mot de passe">
                        <br>
                        <input class="button" type="submit" name="submit" value="Se connecter" />
                        <br>
                        <label for="password">Pas encore de compte?</label>
                        <br>
                        <a href="createAccountForm.php" class="button">S'inscrire</a>
                    </fieldset>
                </form>
            </article>
            <aside>
                <img id=chat src="./assets/catco.png">
            </aside>
        </section>
    </main>   
</body>
<script src="./scripts/scriptLog.js"></script> 
</html>