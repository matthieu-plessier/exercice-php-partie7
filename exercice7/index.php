<?php
    $form = "<div class=form>
    <form action='index.php' method='get' class='form-example'>

    <select class='form-select' name = 'civilite' aria-label='Default select example'>
        <option></option>
        <option value='Mr'>Mr</option>
        <option value='Mme'>Mme</option>
    </select>

    <div class='form-example'>
        <label for='name'>Nom</label>
        <input type='text' name='name' id='name' required>
    </div>

    <div class='form-example'>
        <label for='name'>Prénom</label>
        <input type='text' name='surname' id='surname' required>
    </div>
    <div class='input-group'>
    <input type='file' name='file' class='form-control' id='inputGroupFile04' aria-describedby='inputGroupFileAddon04' aria-label='Upload' required>
    </div>  

    <div class='form-example'>
        <input type='submit' value='Allez HOP !'>
    </div>
</div>

</form>";
if (empty($_GET['civilite']) || empty($_GET['name']) || empty($_GET['surname']) || empty($_GET['file'])) {
    // si vide on reste sur le form
    $result = $form;
}else {
    $result = $_GET['civilite'].' '. $_GET ['name'].' '. $_GET['surname'].' '.$_GET['file'].' '.pathinfo('file',PATHINFO_EXTENSION);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?= $result ?>

    
</body>
</html>