<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Merci <?php echo $_POST['Prenom'] . ' ' . $_POST['nom'] . ' ' ; ?>de nous avoir contacté à propos de “<?php echo $_POST['sujet'] ?>”.</h1>
    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['Email'] ?> ou par téléphone au <?=$_POST['telephone'] ?> dans les plus brefs délais pour traiter votre demande : 
<?= $_POST['message'] ?></p>
</body>
</html>