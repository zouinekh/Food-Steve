
  
<?php
    require "CRUDProduit.php";
    $crud=new CRUDProduit();
    $res=$crud->findAll();
    ?>
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

<table class="table table-hover container place">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col"> Nom </th>
        <th scope="col"> Description</th>
        <th scope="col"> Prix</th>
        <th scope="col"> Modify</th>
        <th scope="col"> Delete</th>
      </tr>
    </thead>
    <tbody>
    
     
        
        <?php foreach($res as $produit): ?>
          <tr class="table-info">
          <th scope="row"><?= $produit->id?></th>
        <td><?= $produit->Nom?></td>
        <td><?= $produit->description?></td>
        <td><?= $produit->prix ?></td>
        <td><a href="modify.html.php?id=<?= $produit->id ?>"type="button" class="btn btn-warning">Modify</a>
        </td>
        <td><a href="delete_product.php?id=<?= $produit->id ?>"  type="button" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        <?php endforeach; ?>
   
     
    </tbody>
  </table>
  