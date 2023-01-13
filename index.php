<?php
session_start(); 
$myTitle = "Accueil";
require "header.php";
$isPseudo = (isset($_SESSION["pseudo"]));
?>

<h1>Bienvenue à toi <?php echo ($isPseudo ? "<span class='pseudo'>" . $_SESSION["pseudo"] . "</span> ": "")?> :) </h1>

<?php 

echo $isPseudo ?"<h2>Tu es bien connecté.</h2>" : "<p style='font-size:2rem'>Tu vas être redirigé vers la page de connexion dans <span id='countdown'>3</span> secondes. </p>" . header("refresh:3;url=login.php");
?>
<br>
<a <?php echo $isPseudo ? "":"style='display:none'" ?>href="logout.php">
<input type="submit" value="Deconnexion">
    </a>

<?php require "footer.php" ?>
<script>
let countdown = document.getElementById("countdown");

setInterval(() => {
    (countdown.textContent !== "0" )? countdown.textContent-- : countdown.textContent == 0;
    
}, 1000);
    </script>