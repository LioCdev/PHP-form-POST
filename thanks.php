<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thank you</title>
</head>
<body>
    
    <p>Merci <?= $_POST['user_name']; ?> de nous avoir contacté à propos de <?= $_POST['sujet']; ?>.
    Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['user_email']; ?> ou par téléphone au <?= $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande : 
    <?= $_POST['user_message']; ?></p>

</body>
</html>