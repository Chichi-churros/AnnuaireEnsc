<?php
    function Connexion ($ID, $MdP){
        require("connect.php");
            
        if($BDD){
            $_Requete = "SELECT * FROM utilisateur WHERE IdUtilisateur='$ID' AND MdPUtilisateur='$MdP'";
            $_utilisateur = $BDD->query($_Requete);

            $Compteur = 0;

            while($Tuple = $_utilisateur -> fetch()){
                $Compteur = $Compteur + 1;
            }
            if ($Compteur==1){
                header("Location: Recherche.php");
            }
            else{
                $error = "Utilisateur non reconnu";
            }
        }
    }
?>