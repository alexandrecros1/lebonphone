<?php

include "../helper/navbar.php";

$id = $_SESSION['iduser'];
$utilisateur = returnUtilisateur($id);
$user = infosUser($id);

$credit = credit($id);

if(isset($_POST['ajouter1'])){
    updatecredits1($id);
}

if(isset($_POST['ajouter2'])){
    updatecredits2($id);
}

if(isset($_POST['ajouter5'])){
    updatecredits5($id);
}

if(isset($_POST['ajouter10'])){
    updatecredits10($id);
}

if(isset($_POST['ajouter25'])){
    updatecredits25($id);
}

if(isset($_POST['ajouter50'])){
    updatecredits50($id);
}

if(isset($_POST['ajouter100'])){
    updatecredits100($id);
}
?>
<div class="badge-center">
    <h3 class="text-center card-header">Crédits actuels sur le compte : <?=$credit['0']->credit;?> <img src="../img/coin.png"></h3><br>
    <h3 class="text-center card-header">Acheter du crédit en toute sécurité avec notre partenaire : <br>
        <img src="../img/paypal.png" style="width: 180px"></h3><br>
    <form action="../helper/acheter.php" method="POST">
        <div style="text-align: center">
            <button type="submit" name="ajouter1" class="btn btn-success">02,00€ = 1 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter2" class="btn btn-success">04,00€ = 2 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter5" class="btn btn-success">10,00€ = 5 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter10" class="btn btn-success">20,00€ = 10 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter25" class="btn btn-success">50,00€ = 25 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter50" class="btn btn-success">100,00€ = 50 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <button type="submit" name="ajouter100" class="btn btn-success">200,00€ = 100 <img src="../img/coin.png" style="width:20px"></button><br><br>

            <h6 class="text-center card-header">(1 <img src="../img/coin.png" style="width: 15px"> = 2,00€)</h6>
        </div>
    </form>
</div>