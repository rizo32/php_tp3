<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rizo e2295331">
    <link rel="stylesheet" href="{{ path }}css/style.css"> 
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="{{ path }}">Accueil</a>
        <a href="{{ path }}employe/index">Registre du personnel (emp)</a>
        <a href="{{ path }}employe/create">Embauche (dum)</a>
        <span class="filler"></span>
        <span class="filler"></span>
        <span class="filler"></span>
        <a href="{{ path }}employe/login">Se connecter</a>
        <!-- <a href="{{ path }}">Créer un compte</a> -->
    </nav>
    <main>
        <h1>Bienvenue au portail des employés des écoles de magie</h1>
        <img class="grosse-img" src="{{ path }}img/magie.png">

</body>
</html>