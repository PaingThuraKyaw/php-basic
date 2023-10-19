<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php 
    $name = "My name is Paing Thura Kyaw";
    $age = 20;
    $gf = 3;
    ?>
    <h3> Name : <?=  $name ?></h3>
    <p>Age : <?= $age ?></p>


    <?php
        if($gf > 0) :
    ?>

    <h1>kg ma lay si tl</h1>

    <?php  else :?>

        <h1>kg ma lay ma shi bu</h1>
            <?php endif; ?>


</body>
</html>