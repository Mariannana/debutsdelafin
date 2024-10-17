<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>

<?php include './includes/header.php'; ?>
    <main>
        <nav>
            <ul class="menu">
                <li><a name="Et si?" href="accueil.php"><br>Et si...</a></li>
                <li><a name="Les debuts de la fin" href="accueil.php"><br>Les débuts de la fin</a></li>
                <li><a name="Une autre saison" href="accueil.php"><br>Une autre saison</a></li>
                <li><a name="Cadavre exquis" href="accueil.php"><br>Cadavre exquis</a></li>
            </ul>
        </nav>


        <section class="section1">
            <div>
                <h2>ET SI...<span class="underline2"></span></h2>
                <p>Vous avez déjà regardé, lu ou joué à une œuvre de fiction et vous vous êtes demandé : Et si les choses s'étaient passées différemment ? 
                    Et si un événement crucial avait été évité ou si une décision majeure avait été prise autrement ?
                    Nous vous offrons l'opportunité d'explorer ces univers parallèles, de plonger dans des réalités alternatives et de réinventer le destin de vos personnages préférés. Dans cette section, les fans de tous horizons sont invités à laisser libre cours à leur créativité et à partager leurs propres histoires 'Et si ?'.
                    Laissez votre imagination vagabonder, réinventez les événements, défiez les conventions et partagez vos idées avec d'autres passionnés.
                </p>
                <button class="button"><a>Ajoute ton histoire!</a></button>
            </div>

        </section>
        <nav>
            <ul class="grid">
                <li><img name="Film" class="images2" src="./images/logo1.png" alt="films"></li>
                <li><img name="Serie" class="images2" src="./images/logo2.png" alt="films"></li>
                <li><img name="Manga" class="images2" src="./images/logo3.png" alt="Manga,animés"></li>
                <li><img name="BD" class="images2" src="./images/logo4.png" alt="BD,Comics"></li>
                <li><img name="Jeux video" class="images2" src="./images/logo5.png" alt="Jeux vidéo"></li>
                <li><img name="Livre" class="images2" src="./images/logo7.png" alt="Livres"></li>
                <li><img name="All" class="images2" src="./images/logo6.png" alt="Tout"></li>
            </ul>
        </nav>
        <section>
            <article class="card grille2">
                <div id="sectionStory">



                </div>
            </article>

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