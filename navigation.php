<?php 
function getNavItem($link, $title) {
    $classActive="";

    $_SERVER['SCRIPT_NAME'] == $link ? $classActive="class='active'" : '';
    return "<li><a href=$link $classActive>$title</a></li>";
}
?>

<div id="navigation">
    <ul class="menu">
        <?php echo getNavItem("/index.php","Accueil")?>
        <?php echo getNavItem("/login.php","Connexion")?>
        <?php echo getNavItem("/register.php","Inscription")?>
        
    </ul>
</div>