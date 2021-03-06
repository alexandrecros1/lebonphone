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
<h2 class="text-center card-header">Liste des articles de la marque Nokia en vente</h2>
<div class="container">
    <?php

    returnUtilisateur($id);
    $nokia = infosnokia();
    $count = (int)countnokia()[0]->count;
    for($i=0;$i<$count;$i++)
    {   ?>
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                    <h4 class="pull-right"><?=$nokia[$i]->prix;?> <img src="../img/coin.png"></h4>
                    <h4><?=$nokia[$i]->libelle;?></h4>
                    <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?=$nokia[$i]->description;?></p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-primary" style="margin-bottom: 5px" data-toggle="modal" data-target="#product<?=$nokia[$i]->idprod;?>_view"><i class="fa fa-search"></i>En savoir plus</button>
                    <?php
                    if($nokia[$i]->dispo == true){
                        echo'<form action="../telephone/achat.php" method="post">
                        <input name="idprod" value="' . $nokia[$i]->idprod . '" hidden>
                        <input type="submit" name="achattel" value="Acheter" class="btn btn-danger" disabled="disabled">
                    </form>';
                    }
                    else
                    {
                        echo '<form action="../telephone/achat.php" method="post">
                        <input name="idprod" value="' . $nokia[$i]->idprod . '" hidden>
                        <input type="submit" name="achattel" value="Acheter" class="btn btn-success">
                    </form>';
                    }
                    ?>
                </div>
                <div class="space-ten"></div>
            </div>
        </div>
    <?php }
    for($i=0;$i<$count;$i++)
    {   ?>
    <div class="modal fade product_view" id="product<?=$nokia[$i]->idprod;?>_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title" >Marque : <?=$nokia[$i]->nommarque;?> - Modèle : <?=$nokia[$i]->libelle;?></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4 style="text-transform: none">Vendeur: <?=$nokia[$i]->nom;?> <?=$nokia[$i]->prenom;?><span></span></h4>
                            <p>Description : <?=$nokia[$i]->description;?></p>
                            <h3 class="text">Prix : <?=$nokia[$i]->prix;?> <img src="../img/coin.png"></h3>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>Etat : <?=$nokia[$i]->etat;?><br>
                                        Taille de l'écran : <?=$nokia[$i]->tailleecran;?><br>
                                        4G compatible : <?=$nokia[$i]->connectivite;?><br>
                                        Stockage : <?=$nokia[$i]->stockagememoire;?><br>
                                        Couleur : <?=$nokia[$i]->couleur;?><br>
                                        OS : <?=$nokia[$i]->systemexploit;?><br><br>
                                        <strong>Statut :
                                            <?php
                                            if ($nokia[$i]->dispo == true){
                                                echo 'Indisponible';
                                            }
                                            else{
                                                echo 'Disponible';
                                            }
                                            ?></strong>
                                    </p>
                                </div>
                            </div>
                            <div class="space-ten"></div>
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