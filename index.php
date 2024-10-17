<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>
    <?php include './includes/header.php'; ?>
    <main>
        <article class="intro">
            <h2>LES DEBUTS DE LA FIN<span class="underline"></span> </h2>
            <p>
                Bienvenue dans notre monde où l'imagination et la créativité règnent en maître !
                <br>
                Et si vous pouviez changer le déroulement d'une histoire ? <br>
                Ici, vous avez le pouvoir de modifier le cours des récits, de donner une suite aux œuvres qui vous ont
                enchanté(e)s, voire même de réécrire une saison entière d'une série ( on pense fort à une série avec des
                dragons...!), <br>
                ou en anticipant la prochaine dans une autre saison.
                <br> Partagez vos idées et collaborez avec nos auteurs passionnés dans un Cadavre Exquis exaltant, où
                les fils narratifs s'entremêlent pour tisser une histoire infinie. Rejoignez-nous et laissez votre plume
                danser avec une créativité sans entraves.
            </p>
            <br>
            <a class="button-story" href="addStoryForm.php">Ajoute une histoire !</a>
        </article>

        <nav>
            <ul class="navbar">
                <li class="container_image"><a href="sections.php"><img class="images" src="./images/back.png"
                            alt="Et si...">
                        <p class="imgText">Et si...</p>
                    </a></li>
                <li class="container_image"><a href="sections.php"><img class="images" src="./images/batman.png"
                            alt="débuts de la fin">
                        <p class="imgText">Débuts de la fin</p>
                    </a></li>
                <li class="container_image"><a href="sections.php"><img class="images" src="./images/bb.png"
                            alt="Une autre saison">
                        <p class="imgText">Une autre saison?</p>
                    </a></li>
                <li class="container_image"><a href="sections.php"><img class="images" src="./images/dark.png"
                            alt="Cadavre exquis">
                        <p class="imgText">Cadavre exquis</p>
                    </a></li>
            </ul>
        </nav>

        <article class="card">
            <h3>LES HISTOIRES LES MIEUX NOTEES DU MOMENT:<span class="underline2"></span></h3>
            <div id="bestStory" class="card-body">
             


            </div>
        </article>

        <section class="grille">
            <article class="card">
                <h3>DERNIERES HISTOIRES AJOUTEES:<span class="underline2"></span></h3>

                <div id="lastAdd" class="card-body">



                </div>
            </article>

            <article class="card">
                <div class="card-title">
                    <h3>ALEATOIRE<span class="underline2"></span></h3>
                </div>
                <div id="randomStory" class="card-body">



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
<script src="./scripts/menu_burger.js"></script>
</html>