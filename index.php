<?php


if ($_GET["contenu"]){

    $tout = ($_GET["contenu"]);

    if($tout == "contact"){
        include 'contact.php';
    }

    elseif ($tout == "about"){
        include 'about.php';

    }
    elseif($tout == "contenu"){
        include 'contenu.php';
    }
    elseif($tout == "submit"){
        include 'submit_contact.php';
    }

    else{
        include '404.php';
    }
}
?>