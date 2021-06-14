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
<div class="form">
<form action="index.php" method="get" class="form-example">

    <select class="form-select" name = "civilite" aria-label="Default select example">
        <option selected>Civilité</option>
        <option value="1">Mr</option>
        <option value="2">Mme</option>
    </select>

    <div class="form-example">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div class="form-example">
        <label for="email">Prénom</label>
        <input type="text" name="surname" id="surname" required>
    </div>

    <div class="form-example">
        <input type="submit" value="Allez HOP !">
    </div>
</div>

</form>
    
</body>
</html>