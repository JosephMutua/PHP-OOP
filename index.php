<?php 
    require 'includes/newclass.inc.php';
    require 'includes/personClass.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $owner1 = new Pet();

        echo  $owner1->owner();

        $person1 = new Citizen();
        $person1 -> setName("Joseph");
        echo $person1 ->name;



    ?>
    
</body>
</html>