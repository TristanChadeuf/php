
<?php
$title = "Contact";
include 'header.php';
?>

<form action="index.php?contenu=submit" method="post">

    
        <label for="civilité"></label>
        <select name="genre">
        <option value="Femme">Femme</option>
        <option value="Homme">Homme</option>
    
    <div>
        <?php
        if(empty ($_POST['Prenom'])){
                echo"Remplisser Prénom";
        }
        
        if(empty ($_POST['Nom'])){
            echo"Remplisser Nom";
         }
         if(filter_var ($_POST['email'])){
            echo"Adresse Mail valide";
         }else{
            echo"Adresse Mail invalide";
         }
         if(isset ($_POST['RaisondeContact'])){
            print $_POST['RaisondeContact'];
         }else{
            echo"Pas dans les choix valide";
         }
         if(strlen(($_POST['message']<=4))){
            echo"Minimum 5 caractères";
         }
    ?>
        <label for="Prenom"></label>
        <input placeholder=Prenom type="text" name="Prenom">
    </div>

    <div>
        <label for="Nom"></label>
        <input placeholder=Nom type="text" name="Nom">
    </div>

    <div>
        <label for="email"></label>
        <input   placeholder=Email type="email" name="email">
    </div>

    <div>
        <input for=choix type="radio" name="RaisondeContact" value="achat">
        <label for="choix">Achat</label>
    </div>
    <div>
        <input for=choix type="radio" name="RaisondeContact" value="vente">
        <label for="choix">Vente</label>
    </div>
    <div>
        <input for=choix type="radio" name="RaisondeContact" value="Information">
        <label for="choix">Information</label>
    </div>
    <div>
        <label for="message"></label>
        <textarea placeholder="Commentaire" name="message"></textarea>
    </div>

    <button type="submit">Envoyer</button>
</form>
<?php
include 'footer.php';
?>
