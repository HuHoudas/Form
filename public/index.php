<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
</head>

<body>
    <form action="./thanks.php" method="post" class="container">
        <h1 class="text-center">Contrat</h1>

        <p class="row">
            <label for="nom" class="form-label">Nom </label>
            <input type="text" name="nom" id="nom" class="form-control">
        </p>

        <p class="row">
            <label for="Prenom" class="form-label">Prénom </label>
            <input type="text" name="Prenom" id="Prenom" class="form-control">
        </p>

        <p class="row">
            <label for="Email" class="form-label">E-mail </label>
            <input type="email" name="Email" id="Email" class="form-control">
        </p>

        <p class="row">
            <label for="telephone" class="form-label">Téléphone </label>
            <input type="tel" name="telephone" id="telephone" class="form-control">
        </p>

        <label for="sujet">Sujet</label>
        <select name="sujet" id="sujet">
            <option value="oui">oui</option>
            <option value="non">non</option>
        </select>

        <p class="row">
            <label for="message" class="form-label">Message </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

</body>

</html>