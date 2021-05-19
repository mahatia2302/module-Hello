<?php
include("connexion_bdd.php");

class hello {
    
    /**
     * Delete lang selected from "langue"
     *
     * @param int $id 
     *
     */
    public function  deletelang($id){
        
        global $connect_db; 
        //sql to delete a record
        $sql_delete = "DELETE FROM langue WHERE id=".$id;

        // execute la requête précédente
        $connect_db->query($sql_delete);

    }
    
    /**
     * Description of function 
     *
     * @return $res_listLivres
     */
    public function getLang(){
        global $connect_db; 

        $req_lang = "SELECT * from langue" ; //$sql : contient la requete sql 
        $res_lang = $connect_db->query($req_lang); //$result : execute la requete $sql

        return $res_lang;

    }

        
    /**
     * create hello into "langue"
     *
     * @param string $name
     * @param string $translate
     *
     */
    public function createLang($name,$translate){

        global $connect_db;
        $sql = "INSERT INTO `langue`(`name`,`translate`) VALUES ('$name' , '$translate' )";
        $connect_db->query($sql);

    }

    
    
    /**
     * Update DbShoop "livres"
     *
     * @param string $new_name 
     * @param string $new_translate 
     * @param int $id_langue
     *
     */
    public function updateLang($new_name,$new_translate,$id_langue){
        global $connect_db;

        $sql_update = "UPDATE `langue` SET `name`= '$new_name',`translate`= '$new_translate'  WHERE id =".$id_langue;
        $connect_db->query($sql_update);

    }


}