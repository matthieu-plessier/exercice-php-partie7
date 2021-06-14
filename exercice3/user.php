<?php
    $name='';
    $surname='';
    $errorNom ='';
    $errorPrenom='';

    
    if (!empty($_GET['name'])) {
        $name= $_GET['name'];
    }else {
        $errorNom = 'erreur de saisie nom';
    }
    if (!empty($_GET['surname'])) {
        $name= $_GET['surname'];
    }
    if (empty($_GET['name']) || ($_GET['surname'])) {
    $errorPrenom = 'erreur de saisie prenom';
    };
    
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
echo "$name<br>"; 
echo "$surname<br>";
echo "$errorNom<br>";
echo "$errorPrenom<br>";
?>
    
</body>
</html>

