<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="assets/js/main.js"></script>
    <title>Responsive website food</title>
</head>
<header class="l-header" id="header">
    <nav class="nav bd-container">
        <a href="/index.html.php" class="nav__logo">FOOD STEVE</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
            <li class="nav__item"><a href="/index.html.php" class="nav__link active-link">Home</a></li>
                <li class="nav__item"><a href="/Products.html.php" class="nav__link ">Products</a></li>
                <li class="nav__item"><a href="/addProduct.html.php" class="nav__link">ADD Product</a></li>
                <li class="nav__item"><a href="/login.html" class="nav__link">Logout</a></li>
                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<form  method="post">
<div class="container place">
    <div>
    <label class="col-form-label mt-4" for="inputDefault">Product Name</label>
    <input type="text"  name="name"class="form-control" placeholder="Product Name" id="inputDefault">
    </div>

    <div>
    <label class="col-form-label mt-4" for="inputDefault">Description</label>
    <input type="text" name="desc" class="form-control" placeholder="Description" id="inputDefault">
    </div>


    <div>
    <label class="col-form-label mt-4" for="inputDefault">Prix</label>
    <input type="text" name="prix" class="form-control" placeholder="Description" id="inputDefault">
    </div>
  
    <div>
    <label class="col-form-label mt-4" for="inputDefault"></label>
    </div>

    <div >
    <label for="file" class="label-file" style=" cursor: pointer;
    color: #00b1ca;
    font-weight: bold;">Choisir une image</label>
    <input id="file" name="image" class="input-file" style="display: none;" type="file">
    </div>
    <div>
    <label class="col-form-label mt-4" for="inputDefault"></label>
    </div>
    <button type="submit" class="btn btn-success">ADD</button>
    <button type="submit" class="btn btn-danger">REST</button>

</div>

</form>
<?php
      require "CRUDproduit.php";
      $msg="";
      if (!empty($_POST)){
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $prix=$_POST['prix'];
        $image=$_POST['image'];
        $p = new produit($name,$desc,$prix,$image);
        $crud = new CRUDproduit();
        $res = $crud->add($p);
         if($res)
               $msg = "insertion effectuÃ©e";
          else
              $msg = "probleme d'insertion !";
      }
?>
  <div class="card-body">
      <?php if(!empty($msg)): ?>
      <div class="alert alert-success">
          <?= $msg;?>
      </div>
      <?php
        header('location:Products.html.php');  

    endif;?>
      </div>