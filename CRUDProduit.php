<?php
include_once "produit.php";
require_once "connexion.php";
class CRUDProduit
{  private $pdo;
    function __construct()
    {  $cnx=new connexion();
        $this->pdo=$cnx->getConnexion();
    }

    function add(produit $p1){
        $sql="insert into  services (Nom,description,prix,img) values ('".$p1->getNom()."','"
        .$p1->getdesc()."',".$p1->getprix().",'".$p1->getImg()."')";
        
        $res=$this->pdo->exec($sql);
        
        return($res);

    }   
    function find($id){
        $sql="select * from services where id =".$id;
        $obj=$this->pdo->query($sql);// objet PDOStatement
        $res=$obj->fetchAll(PDO::FETCH_OBJ);
        return ($res);
    } 
    function delete($id){
        $sql="delete from services where id ='".$id."'";
        $res=$this->pdo->exec($sql);
        return($res);


    }

    function findAll(){
        $sql="select * from services";
        $obj=$this->pdo->query($sql);// objet PDOStatement
        $res=$obj->fetchAll(PDO::FETCH_OBJ);
        return ($res);
    }
    function update($id,$nom,$desc,$prix,$img){
        $sql = "update services set Nom='".$nom."', description='".$desc."',prix=".$prix.",img='".$img."' where id=".$id."";
        $res=$this->pdo->exec($sql);
        return($sql);}


}