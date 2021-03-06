<?php
require_once 'inc/header.php';

if(!empty($_GET['p'])){
    $p = $_GET['p'];
}
else{
    $p = 'welcome';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <?
        if(is_file('css/'.$p.'.css')){
        ?>
            <link rel="stylesheet" href="css/<?=$p?>.css" type="text/css">
        <? } ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
                <?
        if(is_file('js/'.$p.'.js')){
        ?>
            <script src="js/<?=$p?>.js"></script>
        <? } ?>
        <title>
            <?php echo $p; ?>
        </title> 
    </head>
    <body>
    <?php
    if(is_file('model/'.$p.'.php')){
        require 'model/'.$p.'.php';
    }
    else{
        require 'model/404.php';
    }
    ?>
    </body>
</html>
