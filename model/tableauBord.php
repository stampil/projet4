<?php
if(empty($_SESSION['Sid'])){
    header('Location: ?p=connection&sessionout');
    exit();
}
?>