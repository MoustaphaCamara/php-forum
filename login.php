<?php 
session_start();
$myTitle = "Connexion";
require "header.php";

$bdd = new PDO(
    "mysql:host=localhost;
    charset=utf8;
    dbname=espace_membres;",
    "root",
    "");
// echo $_GET["test1"];
    if(isset($_POST['send'])){
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {
            
            $pseudo = htmlspecialchars($_POST["pseudo"]);
            $mdp = sha1(htmlspecialchars($_POST["mdp"]));

            $recupUser = $bdd->prepare("SELECT * FROM users WHERE pseudo = ? AND mdp = ?");
            $recupUser->execute(array($pseudo,$mdp));

            if($recupUser->rowCount() > 0) {
                $_SESSION['pseudo']= $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                header('Location:index.php');
            } else {
                echo "Votre mdp ou pseudo est incorrect.";
            }
        } else {
            echo "Vous n'avez pas renseigné votre identifiant ou mot de passe.";
        } 

    }
require "form.php";
?>


<h1>Connexion</h1>
<?php 
if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["pseudo"])) {
    echo "<h3>Une session est déjà en cours : <span class='pseudo'>" . $_SESSION["pseudo"] . "</span>. Merci de te déconnecter avant d'initier une nouvelle session.</h3>";
} else {
    echo "<section id='connexion'>" . form("connexion","send","Se connecter") . "</section>";
};
require "footer.php" ;?>