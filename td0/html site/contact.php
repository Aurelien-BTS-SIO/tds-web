<?php include 'pages_utiles/header.php' ?>

<?php include "pages_utiles/menu.php"?>

<div class="contactez-moi">
<h1>Contactez-moi</h1>
<p>une question, envie d'avoir d'avantage d'informations sur mon parcours. N’hésitez pas à utiliser ce formulaire pour prendre contact avec moi !</p>
<form action="/page-traitement-donnees" method="post">
<div>
<label for="nom">Votre nom</label>
<input type="text" id="nom" name="nom" placeholder="Nom" required>
</div>
<div>
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="email.com" required>
</div>
<div>
<label for="sujet">Sujet</label>
<input type="sujet" id="sujet" name="sujet" placeholder="" required>
</div>
<div>
<label for="message">Votre message</label>
<textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>

<?php include "pages_utiles/footer.php"?>