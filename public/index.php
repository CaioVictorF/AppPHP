<?php require "../bootstrap.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso de php devclass</title>
    <link rel="stylesheet" href="//cdnjs.cloundflare.com/ajax/libs/twitter-bootstrap/3.3//css/botstrap.minm.css">
</head>
<body>
    <div class="container">
        <?php
        try{
            require load();
        }catch(Exception $ed){
            echo $ed->getMessage();
        }
        ?>
    </div>
</body>
</html>