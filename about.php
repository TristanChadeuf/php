
<?php
$title = "A propos";
include 'header.php';
?>


    
<h2>Bienvenue dans la page about</h2>

<?php

function entrainement($age){
    if ($age>=18){
        echo "Tu peux acheter de l'alcool<br>";
    }else{
        echo "Demande a tes parents de t'acheter de l'alcool<br>";
    }
}
entrainement(18);


function alcool(){
for($i=1;$i<=50;$i++){
   if($i<=17){
    $age=$i;
    echo $i ." ". "ans ".  $age="Tu es mineur<br>";
   }else{
    echo $i ." ". "ans"  . $age="Tu es majeur<br>";
   }    
}

}

alcool();
?>


<?php
include 'footer.php';
?>

