<?php


function form($formClass, $submitButton,$action) {
    return (
    '<form class="'.$formClass.'" method="POST" action="" align=center>
    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" autocomplete="off">
    <br>
    
    <label for="password">Mdp : </label>
    <input type="password" name="mdp" autocomplete="off" minlength="8" maxlength="12">
    
    <br>
    
    <input type="submit" name="'.$submitButton.'" value="'.$action.'">
    </form>
    '
    )
;}

?>