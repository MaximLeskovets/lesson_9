<?php
    require_once "list.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Машины</title>
</head>
<body>


    <?php
        $audi->getImage();
        $audi->getInfo();
        $bmw->getImage();
        $bmw->getInfo();
        $ford->getImage();
        $ford->getInfo();
        $nisan->getImage();
        $nisan->getInfo();
        $ferrari->getImage();
        $ferrari->getInfo();
    ?>

</body>
</html>
