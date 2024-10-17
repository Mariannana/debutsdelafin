<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>
    <?php include './includes/header.php'; ?>

    <main>
        <section class="container-story">
            <h2 class="title">Ajoute une histoire! !<span class="underline"></span></h2>
            <div class="info-story">
                <h3><i class="fa-solid fa-heart" style="color: #ededed;"></i> Les fanfictions ne doivent pas avoir de caractère
                  offensant !</h3>
                <p>Pas de langage grossier ou violent dans le titre, car ces textes peuvent être vus de tous.
                  Vous pourrez être plus explicite dans votre histoire.
                </p>
                <h3><i class="fa-solid fa-face-smile-beam" style="color: #ededed;"></i> Choisissez bien votre catégorie ! </h3>
                <p>Par exemple, dans le cas d'une "autre saison", choisissez "série" dans le formulaire</p>
                <h3><i class="fa-solid fa-pen-fancy" style="color: #ededed;"></i> Essayez de faire attention à l'orthographe </h3>
            </div>
            <div class="new-story">
                <form action="./serveur/addStory.php" method="POST">
                    <label for="categorie_histoire">Catégorie d'histoire :</label>
                    <br>
                    <select name="categorie_histoire" id="categorie_histoire" required>
                        <option value="1">Et si?</option>
                        <option value="2">Les débuts de la fin</option>
                        <option value="3">Une autre saison</option>
                        <option value="4">Cadavre Exquis</option>
                    </select>
                    <br>
                    <label for="type_oeuvre" required>Type d'œuvre :</label>
                    <br>
                    <select name="type_oeuvre" id="type_oeuvre">
                        <option value="1">Livre</option>
                        <option value="2">Film</option>
                        <option value="3">BD</option>
                        <option value="4">Série</option>
                        <option value="5">Jeux vidéo</option>
                        <option value="6">Manga</option>
                    </select>
                    <br>
                    <label for="auteur">Auteur de l'œuvre d'origine :</label>
                    <br>
                    <input type="text" name="nom_auteur" id="nom_auteur" required>
                    <br>
                    <br>
                    <label for="oeuvre">Oeuvre d'origine:</label>
                    <br>
                    <input type="text" name="nom_oeuvre" id="nom_oeuvre" required>
                    <br>
                    <label for="titre">Titre de l'histoire :</label>
                    <br>
                    <input type="text" name="titre_histoire" id="titre_histoire" required>
                    <br>
                    <label for="texte">Texte de l'histoire :</label>
                    <br>
                    <textarea name="texte_histoire" id="texte_histoire" rows="10" cols="40" required></textarea>
                    <br>
                    <input class="button" type="submit" value="Ajoute ton histoire">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <img src="./assets/logo.png" alt="logo debuts de la fin">
        <hr>
        <div class="footer">
            <a href="#"><i class="fa-brands fa-discord fa-xl" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i></a>
            <a href="#"><i class="fa-brands fa-facebook fa-xl" style="color: #ffffff;"></i></a>
            <p>©2023 <br> Les débuts de la fin </p>
            <br>

        </div>
    
    </footer>
</body>
<script src="./scripts/displayStory.js"></script>
</html>

