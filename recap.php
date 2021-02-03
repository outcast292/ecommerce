<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>recu</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.slim.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/dilevery.css">

<body>
<?php
  require_once "req/navbar.php";

  ?>
  <div class="container-fluid" style="background-color: rgb(0,0,40);">
    <div class="jumbotron mb-0 mt-5">
    <div class="card">
    <div class="title">recu de la commande </div>
    <div class="info">
        <div class="row">
            <div class="col-7"> <span id="heading">Date</span><br> <span id="details">10 October 2018</span> </div>
            <div class="col-5 pull-right"> <span id="heading">commande numero</span><br> <span id="details">012j1gvs356c</span> </div>
        </div>
    </div>
    <div class="pricing">
        <div class="row">
            <div class="col-9"> <span id="name">Product 1</span> </div>
            <div class="col-3"> <span id="price">$ 1000</span> </div>
        </div>
        <div class="row">
            <div class="col-9"> <span id="name">Product 2</span> </div>
            <div class="col-3"> <span id="price">$ 1200</span> </div>
        </div>
    </div>
    <div class="total">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3"><bigger>$ 2200</bigger></div>
        </div>
    </div>
    <div class="tracking">
        <div class="title">Suivie de la commande</div>
    </div>
    <div class="progress-track">
        <ul id="progressbar">
            <li class="step0 active " id="step1">Commandé</li>
            <li class="step0 active text-center" id="step2">Expedié</li>
            <li class="step0 active text-right" id="step3">En route</li>
            <li class="step0 text-right" id="step4">Livré</li>
        </ul>
    </div>
    
</div>
<div class="d-flex justify-content-end  ">
<button type="print" class="btn btn-primary" onclick="window.print()"> imprimer</button>
</div>

    </div>
  </div>  

  <div class="container-fluid">
    <?php
    require_once "req/footbar.php";

    ?>
  </div>



</body>

</head>
</html>