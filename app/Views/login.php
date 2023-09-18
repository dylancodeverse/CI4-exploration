<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <!-- 

    The session() function is used to get the Session object, 
        and session()->getFlashdata('error') is used to display the error related 
        to CSRF protection to the user. 
    However, by default, if a CSRF validation check fails, 
        an exception will be thrown, so it does not work yet.  

-->

<?= session()->getFlashdata('error') ?>

<!-- 

    The validation_list_errors() function provided by the Form Helper 
        is used to report errors related to form validation.

-->
<?= validation_list_errors() ?>


    <form action="/connect" method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Se Connecter</button>
    </form>
</body>
</html>
