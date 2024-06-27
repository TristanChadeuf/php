
<?php 
include 'header.php';
?>
<?php
session_start();
?>

<?php
$_SESSION["Prenom"]=$_POST['Prenom'];
$_SESSION["Nom"]=$_POST['Nom'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["message"]=$_POST['message'];

?>

<?php
$resultat="recuperation.txt";
$valeurtableau = array(  
    $civilite= $_POST['civilite'] . "\n",
    $Prenom= filter_INPUT(INPUT_POST, $_POST['Prenom']) . "\n",
    $Nom= $_POST['Nom']. "\n",
    $email=$_POST['email']. "\n",
    $RaisondeContact=$_POST['RaisondeContact']. "\n",
    $message=$_POST['message']. "\n",
    );



$title = "Contact";
$erreurprenom = $erreurnom = $erreurcivilite = $erreuremail = $erreurradio = $erreurmessage = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){


if(filter_has_var(INPUT_POST,$_POST['Prenom'])   && empty ($_POST['Prenom'])){
        $erreurprenom= "Prenom manquant !" ;
}
if(empty ($_POST['Nom'])){
        $erreurnom="Nom manquant";
 }
 if(empty ($_POST ["email"])){
    $erreuremail="Adresse mail pas valide";
 }
 
 if(empty ($_POST['RaisondeContact'])){
    $erreurradio="Clickez sur un choix";
 }
 if(strlen(($_POST['message']<5))){
    $erreurmessage="Minimum 5 caracteres";
 }

if ($erreurprenom=="" && $erreurnom==""&& $erreurcivilite =="" && $erreuremail==""&&  $erreurradio ==""&& $erreurmessage=="" ){
    file_put_contents($resultat, $valeurtableau, FILE_APPEND);
}


}


?>
<form action="index.php?contenu=contact" method="post">

    
        <label for="civilite"></label>
        <select name="civilite" id="civilite">
        
        <option value="Femme">Femme</option>
        <option value="Homme">Homme</option>
    
        </select>

    <div>
        <label for="Prenom"></label>
        <input placeholder=Prenom type="text" name="Prenom" value = "<?php echo  $_SESSION["Prenom"]?>">
        <span><?php echo "<p style='color:red;'>" . $erreurprenom ?></span>
    </div>

    <div>
        <label for="Nom"></label>
        <input placeholder=Nom type="text" name="Nom" value="<?php echo $_SESSION["Nom"]?>">
        <span><?php echo "<p style='color:red;'>" . $erreurnom ?></span>
    </div>

    <div>
        <label for="email"></label>
        <input   placeholder=Email type="email" name="email" value="<?php echo $_SESSION["email"]?>">
        <span><?php echo "<p style='color:red;'>" . $erreuremail?></span>
    </div>

                    <div>
                        <input for=choix type="radio" name="RaisondeContact" value="achat">
                        <label for="choix">Achat</label>
                        <span><?php echo "<p style='color:red;'>" . $erreurradio?></span>
                    </div>
                    <div>
                        <input for=choix type="radio" name="RaisondeContact" value="vente">
                        <label for="choix">Vente</label>
                        <span><?php echo "<p style='color:red;'>" . $erreurradio?></span>
                    </div>
                    <div>
                        <input for=choix type="radio" name="RaisondeContact">
                        <label for="choix">Information</label>
                        <span><?php echo "<p style='color:red;'>" . $erreurradio?></span>
                    </div>
    <div>
        <label for="message"></label>
        <textarea placeholder="Commentaire" name="message"></textarea>
        <span><?php echo "<p style='color:red;'>" . $erreurmessage?></span>
    </div>

    <button type="submit">Envoyer</button>
</form>
<?php
include 'footer.php';
?>
