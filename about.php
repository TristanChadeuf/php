
<?php
$title = "A propos";
include 'header.php';
?>


    
<h2>Bienvenue dans la page about</h2>

<?php

function entrainement($age){
    if ($age>=18){
        echo $age . "ans ". "Tu peux acheter de l'alcool<br><br>";
    }else{
        echo $age . "ans" . "Demande a tes parents de t'acheter de l'alcool<br><br>";
    }
}
entrainement(17);


function alcool(){
for($i=1;$i<=50;$i++){
   if($i<=17){
    $age=$i;
    echo $i ." ". "ans ".  $age="Tu es mineur<br><br>";
   }else{
    echo  $i ." ". "ans"  . $age="Tu es majeur<br><br>";
   }    
}

}

alcool();
?>


<?php
include 'footer.php';
?>

