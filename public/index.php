<?php
// if(isset($_GET['p'])){
//     if($_GET['p'] == 'image'){
//         include "../pages/images.php";
//     }elseif(($_GET['p']) == 'contact'){
//         include "../pages/Contact.php";
//     }elseif(($_GET['p']) == 'livredor'){
//         include "../pages/livredor.php";
//     }else{
//         include "../pages/Accueil.php";
//     }
// }
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'image':
            include "../pages/images.php";
            break;
        case 'contact':
            include "../pages/Contact.php";
            break;
        case 'livredor':
            include "../pages/livredor.php";
            break;
        case 'accueil':
            include "../pages/Accueil.php";
            break;
        default:
            echo "Erreur 404";
            break;
    }
}else{
    include "../pages/Accueil.php";
}
// 
