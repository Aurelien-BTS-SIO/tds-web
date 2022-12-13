<?php include 'pages_utiles/header.php' ?>

<?php include 'pages_utiles/menu.php' ?>

<div id="box_competences">
    <?php 
        $donnee=yaml_parse_file("Yaml\competences.yaml");
        foreach ($donnee as $titre => $tbCompetences) {
            echo "<h1>" . $titre . "</h1>";
            foreach ($tbCompetences as $competence) { ?>
            <div class="competence">
                <div class="titre_competence">
                    <?php echo $competence["nom"] ?>
                </div>
                <div class="graphique">
                    <div class="pourcent"><?php echo $competence["niveau"] ?> %</div>
                    <div class="barre">
                        <div class="progression" style="width: <?php echo $competence["niveau"] ?>%"></div>
                    </div>
                </div>               
            </div>
    <?php }
        } ?>

</div>


<?php include "pages_utiles/footer.php"?>
