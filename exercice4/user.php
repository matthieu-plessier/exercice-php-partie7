<?php
    $name= $_POST['name'];
    $surname= $_POST['surname'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// meme exo que le 3 mais en POST
echo "$name<br>"; 
echo $surname;  

    ?>
</body>
</html>