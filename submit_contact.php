
<?php 
$title = "submit";
include 'header.php';

?>

<h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h3 class="card-title">Rappel de vos informations</h3>
        <p class="card-text"><b>Civilité</b> : <?php echo $_POST['genre']; ?></p>
        <p class="card-text"><b>Prénom</b> : <?php echo $_POST['Prenom']; ?></p>
        <p class="card-text"><b>Nom</b> : <?php echo $_POST['Nom']; ?></p>
        <p class="card-text"><b>Mail</b> : <?php echo $_POST['email']; ?></p>
        <p class="card-text"><b>Choix</b> : <?php echo $_POST['RaisondeContact']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_POST['message']; ?></p>
    </div>
</div>
<?php
include 'footer.php';
?>