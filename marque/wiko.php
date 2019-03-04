<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="../css/mesventes.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<?php

include "../helper/navbar.php";

?>
<h2 class="text-center card-header">Liste des articles de la marque Wiko en vente</h2>
<div class="container">
    <?php

    returnUtilisateur($id);
    $wiko = infoswiko();
    $count = (int)countwiko()[0]->count;
    for($i=0;$i<$count;$i++)
    {   ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                    <h4 class="pull-right"><?=$wiko[$i]->prix;?> <img src="../img/coin.png"></h4>
                    <h4><?=$wiko[$i]->libelle;?></h4>
                    <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$wiko[$i]->description;?></p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product<?=$wiko[$i]->idprod;?>_view"><i class="fa fa-search"></i>En savoir plus</button>
                </div>
                <div class="space-ten"></div>
            </div>
        </div>
    <?php }
    for($i=0;$i<$count;$i++)
    {   ?>
    <div class="modal fade product_view" id="product<?=$wiko[$i]->idprod;?>_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title" >Marque : <?=$wiko[$i]->nommarque;?> - Modèle : <?=$wiko[$i]->libelle;?></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4 style="text-transform: none">Vendeur: <?=$wiko[$i]->nom;?> <?=$wiko[$i]->prenom;?><span></span></h4>
                            <p>Description : <?=$wiko[$i]->description;?></p>
                            <h3 class="text">Prix : <?=$wiko[$i]->prix;?> <img src="../img/coin.png"></h3>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Etat : <?=$wiko[$i]->etat;?><br>
                                        Taille de l'écran : <?=$wiko[$i]->tailleecran;?><br>
                                        4G compatible : <?=$wiko[$i]->connectivite;?><br>
                                        Stockage : <?=$wiko[$i]->stockagememoire;?><br>
                                        Couleur : <?=$wiko[$i]->couleur;?><br>
                                        OS : <?=$wiko[$i]->systemexploit;?><br>
                                    </p>
                                </div>
                            </div>
                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Acheter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php } ?>