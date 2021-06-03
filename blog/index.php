<?php


    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "erreur";
        }
    }else{
        $page = "accueil";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


        <?php
            include "core/header.php";
        ?>
        
        <?php
                include 'pages/'.$page.'.php';
        ?>
        <?php
            include "core/footer.php";
        ?>
