<?php
 
var_dump($_POST);
echo $_POST["password"];

if($_POST["password"] == "2020"){
    
}
else {
    echo "Mauvais couple identifiant / Mot de passe";
}

?>
<ul id="nav">
    
<li><a href="connexion.php">Page de Connexion</a></li>