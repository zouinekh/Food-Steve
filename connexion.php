<?php
class connexion{
function getConnexion(){ 
        $db="mysql:host=localhost;dbname=restproject";
        $user="root";
        $pw='';
        $cnx=new PDO($db,$user,$pw);
 return $cnx;
}
}