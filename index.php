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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <title>
            <?php echo $p; ?>
        </title> 
    </head>
    <body>
    <?php
    require 'model/'.$p.'.php';
    ?>
<script>
  $(document).ready(function() {
    console.info('Jquery ready');  
  });
</script>
    </body>
</html>