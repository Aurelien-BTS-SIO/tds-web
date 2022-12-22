<?php include 'pages_utiles/header.php' ?>

<?php include "pages_utiles/menu.php"?>

<div id="curriculum_vitae">
<a href="cv.pdf">curriculum vitae</a>
</div>

<div id="box_experieneces">
    <?php
    $donnee=yaml_parse_file("Yaml/experiences.yaml");
    foreach ($donnee as $titre => $tbexperiences) {
    echo "<h1>" . $titre . "</h1>";
    foreach ($tbexperiences as $experiences) { ?>
    <div class="experiences">
        <div class="titre_experiences">
            Poste :
            <?php echo $experiences['Poste'] ?>
        </div>
        <div class="titre_experiences">
            Date de début :
            <?php echo $experiences['DateDebut'] ?>
        </div>
        <div class="titre_experiences">
            Date de fin :
            <?php echo $experiences['DateFin'] ?>
        </div>
        <div class="titre_experiences">
            Lieu :
            <?php echo $experiences['Lieu'] ?>
        </div>
        <div class="titre_experiences">
            Mission :
            <?php echo $experiences['Mission'] ?>
        </div>
        <div class="titre_experiences">
            Descriptif :
            <?php echo $experiences['Descriptif'] ?>
        </div>
        <div class="graphique">
        </div>
        <?php }
        } ?>
    </div>
</div>

<?php include "pages_utiles/footer.php"?>