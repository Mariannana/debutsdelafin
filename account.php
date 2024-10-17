<?php
session_start();
?>

<!DOCTYPE html>
<html>

<?php include './includes/head.php'; ?>

<body>
  <header class="account-header">
    <a href="index.php"><img id="logo-account" src="./assets/logop.png" alt="Debuts de la fin"></a>
    <h2><img src="./assets/akuma.png" alt="Votre image de profil">Goukix</h2>
    <button class="button"><a href="logout.php">> Se Déconnecter</a></button>
  </header>
	<main>
		<h1 class="title">Mon compte<span class="underline"></span></h1>
		
		<section class="account-flex">
			<nav>
				<ul>
                    <li><i class="fa-solid fa-book fa-xl"></i><a href="#">Mes histoires</a></li>
                    <li><i class="fa-solid fa-book-open fa-xl"></i><a href="addStoryForm.php">Publier une histoire</a></li>
                    <li><i class="fa-solid fa-sheet-plastic fa-xl"></i><a href="#">Brouillons</a></li>
                    <li><i class="fa-solid fa-star fa-xl"></i><a href="#">Mes histoires favorites</a></li>
				</ul>
			</nav>
			<nav>
				<ul>
                    <li><i class="fa-solid fa-comment fa-xl"></i><a href="#">Mes commentaires</a></li>
                    <li><i class="fa-solid fa-check-to-slot fa-xl"></i><a href="#">Mes votes</a></li>
                    <li><i class="fa-solid fa-pen fa-xl"></i><a href="#">Modifier votre profil</a></li>
                    <li><i class="fa-solid fa-trash fa-xl"></i><a href="#">Supprimer votre compte</a></li>
				</ul>
			</nav>
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

</html>