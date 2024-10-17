<!DOCTYPE html>
<html lang="fr">

<?php include './includes/head.php'; ?>

<body>
    <?php include './includes/header.php'; ?>

    <main>
        <h2 class="title">Contactez-nous !<span class="underline"></span></h2>
        <section class="container-contact">
            <div class="contact-info">
                <h3><i class="fa-solid fa-map"></i> Adresse : </h3>
                <p>Fontcombe, Terre du milieu</p>
                <h3><i class="fa-solid fa-phone"></i> Téléphone : </h3>
                <p>08.36.65.65.65</p>
                <h3><i class="fa-solid fa-at"></i> Email : </h3>
                <p> contact@debuts-de-la-fin.fr</p>
            </div>
            <form action="#" method="post" class="formulaire">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="tel" name="telephone" placeholder="Téléphone" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
    <footer>
        <img src="assets/logo.png" alt="logo debuts de la fin">
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