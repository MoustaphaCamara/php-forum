<?php
session_start();
$myTitle = "Inscription"; 
require "header.php";

$bdd = new PDO(
    "mysql:host=localhost;
    charset=utf8;
    dbname=espace_membres;",
    "root",
    '');

if(isset($_POST['envoi'])){
    if( !empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        
        // define user and password
        
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $mdp = sha1(htmlspecialchars($_POST["mdp"]));
        
        // CHECK IF USER EXISTS
        $recupUser = $bdd->prepare("SELECT * FROM users WHERE pseudo = ? AND mdp = ?");
        $recupUser->execute(array($pseudo,$mdp));
        
        if($recupUser->rowCount()>0) {
            echo "Il y a déjà un utilisateur avec ce pseudo";
        } else {
            // create new session
            $insertUser = $bdd->prepare("INSERT INTO users(pseudo, mdp) VALUES(?, ?)");
            $insertUser-> execute(array($pseudo,$mdp));
            $_SESSION['pseudo']= $pseudo;
            $_SESSION['mdp'] = $mdp;
            echo("Ton compte a bien été créé ! Tu es connecté sous le pseudo de <strong>" . $pseudo . "</strong>.");
        }
 
    } else {
        echo "Pourrais-tu remplir tous les champs, stp ?";
    }
};
require "form.php";
?>

<h1>Inscription</h1>
<?php 
if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["pseudo"])) {
    echo "<h2>Vous avez déjà une session en cours. Veuillez vous déconnecter pour vous inscrire sous un autre nom.</h2>";
} else {
    echo "<section id='inscription'>" . form("","envoi","S'inscrire") . "</section>";
}
?>
    
<?php require "footer.php" ?>