<?php
    require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Indian Grill Restaurant</title>
        <meta name="description" content="Indian Grill – Authentic Indian Food in Stockholm.">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Playfair+Display|ProximaNova|Scriptina|TimesNewRomanPSMT:200,400,600,800" rel="stylesheet">
   </head>
    <body>
        
        <?php
            include('views/header.php');
            include('views/content.php');
            include('views/footer.php');
        ?>
        
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="scripts/scripts.js"></script>
    </body>
</html>