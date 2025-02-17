<?php
if(isset($_GET['p'])){
    if($_GET['p'] == 'image'){
        include 'images.php';
    }elseif($_GET['p'] == 'contact'){
        include 'Contact.php';
    }elseif($_GET['p'] == 'livredor'){
        include 'livredor.php';
    }else{
        include 'accueil.php';
    }
}