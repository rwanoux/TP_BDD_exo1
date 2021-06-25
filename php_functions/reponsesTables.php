<?php
// définir les constantes de connexion à la base de donnée
define("SERVER","localhost");//adresse du server
define("BDD_NAME", "aden_tp_correc_rwan");//nom de la bdd
define("USER", "root");//user
define("PASSWORD", "root");//mot de passe



function grabTable($table)
{


    try{
        //--connexion à la base donnée
        $pdo = new PDO("mysql:host=".SERVER.";dbname=".BDD_NAME.";charset=utf8", USER, PASSWORD);
    
    }catch(PDOException $error){
        //---gestion des erreurs
        //-si erreur :
        print("___ERREUR___ : ".$error->getMessage());//----> afficher l'erreur
        die();//-----> stopper tout traitement
    }
    
    $sql="SELECT * FROM ".$table ;
    return $pdo->query($sql);
}




?>