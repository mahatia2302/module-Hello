<?php

include("connexion_bdd.php");

class langues {
    public function getLangues(){
        global $connect_bdd;
        $reqLangue = "select * From langue";
        $resLangue = $connect_bdd->query($reqLangue);

        return $resLangue;
    }



}



?>