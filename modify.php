
<?php
      require "CRUDproduit.php";
      $msg="here";
      if (!empty($_POST)){
         echo "here";
        $id=$_GET['id'];
        $nom=$_POST['name'];
        $desc=$_POST['desc'];
        $prix=$_POST['prix'];
        $img=$_POST['image'];
        $crud = new CRUDproduit();

        $res = $crud->update($id,$nom,$desc,$prix,$img);

        if($res)
               $msg = "Update effectuÃ©e";
        else
              $msg = "probleme Updating !";
    
    echo($msg);
      }?>