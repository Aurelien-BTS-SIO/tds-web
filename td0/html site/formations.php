<?php include 'pages_utiles/header.php' ?>

<?php include "pages_utiles/menu.php"?>

<div id="curriculum_vitae">
<a href="cv.pdf">curriculum vitae</a>
</div>

<div id="box_experieneces">
    <?php
    $donnee=yaml_parse_file("Yaml/formations.yaml");
    foreach ($donnee as $titre => $tbformations) {
    echo "<h1>" . $titre . "</h1>";
    foreach ($tbformations as $formations) { ?>
    <div class="formations">
        <div class="titre_formations">
            Nom :
            <?php echo $formations['Nom'] ?>
        </div>
        <div class="titre_formations">
            Organisme :
            <?php echo $formations['Organisme'] ?>
        </div>
        <div class="titre_formations">
            Date de Debut :
            <?php echo $formations['DateDebut'] ?>
        </div>
        <div class="titre_formations">
            Date de Fin :
            <?php echo $formations['DateFin'] ?>
        </div>
        <div class="titre_formations">
            Lieu :
            <?php echo $formations['Lieu'] ?>
        </div>
        <div class="titre_formations">
            Descriptif :
            <?php echo $formations['Descriptif'] ?>
        </div>
        <div class="graphique">
        </div>
        <?php }
        } ?>
    </div>
</div>

<?php include "pages_utiles/footer.php"?>