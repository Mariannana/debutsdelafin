<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>
    <main>
        <section class="grid-co">
            <aside>
                <img id="chat" src="./assets/catco.png">
            </aside>
            <nav id="mainco">
                <img src="./assets/logo.png">
                <!-- <a href="index.html"> > Retour à l'accueil</a> -->
            </nav>

            <article>

                <form class="form formInscrip" method="POST">
                    <fieldset class="field-co">
                        <legend>Rejoins-nous !</legend>
                        <br>
                        <label for="prenom">Prénom : </label>
                        <br>
                        <input type="text" id="prenom" name="prenom" minlength="2" maxlength="20" size="50"
                            placeholder="Veuillez saisir votre prénom">
                        <br>
                        <label for="nom">Nom : </label>
                        <br>
                        <input type="text" id="nom" name="nom" minlength="2" maxlength="20" size="50"
                            placeholder="Veuillez saisir votre nom">
                        <br>
                        <label for="login">pseudo : </label>
                        <br>
                        <input type="text" id="login" name="login" minlength="2" maxlength="20" size="50"
                            placeholder="Veuillez saisir votre nom">
                        <br>
                        <label for="email">Email : </label>
                        <br>
                        <input type="text" id="email" name="email" minlength="5" maxlength="50" size="50"
                            placeholder="Veuillez saisir votre email">
                        <br>
                        <label for="password"> Mot de passe: </label>
                        <br>
                        <input type="password" id="password" name="password" minlength="5" maxlength="20" size="50"
                            placeholder="Veuillez créer votre mot de passe">
                        <br>
                        <label for="confirmpassword"> Confirmer le mot de passe: </label>
                        <br>
                        <input type="password" id="confirmpassword" name="confirmpassword" minlength="5" maxlength="20" size="50"
                            placeholder="Veuillez confirmer votre mot de passe">
                        <br>
                        <input type="submit" name="submit" value="s'inscrire"  class="button" />
                    </fieldset>
                </form>

            </article>
        </section>
    </main>
</body>
<script src="./scripts/scriptLog.js"></script>
</html>