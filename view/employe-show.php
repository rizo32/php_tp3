{{ include('header.php', {title: 'Votre compte', pageHeader: "Modifier les information de l\'employé n.#{ employe.employeId } "}) }}

<main class="show">
    <p><strong>Courriel :</strong>{{ employe.employeCourriel }}</p>
    <p><strong>Nom :</strong>{{ employe.employeNom }}</p>
    <p><strong>Prénom :</strong>{{ employe.employePrenom }}</p>
    <!-- <p><strong>Mot de passe :</strong>{{ employe.employeMotDePasse }}</p> -->
    <p><strong>Poste :</strong>{{ employe.posteNom }}</p>
    <p><strong>Date d'embauche : </strong>{{ employe.employeDateEmbauche }}</p>
    <p><strong>École : </strong>{{ employe.ecoleNom }}</p>
    <p><a href="{{ path }}employe/edit/{{ employe.employeId }}">Une potion de polynectar!<img alt="Potion pour modifier l'apparence" src="{{ path }}img/potion.png"></img></a></p>
</main>
{{ include('footer.php') }}