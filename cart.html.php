<?php
    require "CRUDProduit.php";
    $crud=new CRUDProduit();
    $id=$_GET['id'];
    $res=$crud->find($id);
?>
<head>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

</head><div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right text-muted">items</div>
                        </div>
                    </div>    
                    <div class="row border-top border-bottom">
                    <?php foreach($res as $produit): ?>

                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="./assets/img/<?=$produit->img ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?= $produit->Nom?></div>
                                <div class="row"><?= $produit->description?></div>
                            </div>
                     
                            <div class="col"> <?= $produit->prix ?> DT<span class="close">&#10005;</span></div>
                        </div>
           
                    </div>
                  
                    <div class="back-to-shop"><a href="index.html.php">&leftarrow; Back to shop</a><span class="text-muted"></span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">&nbsp;&nbsp; ITEMS</div>
                        <div class="col text-right">DT<?= $produit->prix ?> </div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Delivery 7 DT</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">DT<?= $produit->prix ?></div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>
            
        </div>             <?php endforeach; ?>