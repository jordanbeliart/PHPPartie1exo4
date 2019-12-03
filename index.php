<?php
//déclaration d'une variable 'name' initialisée 'Gérard'
$name = 'Gérard';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie1 exo4</title>
  </head>
  <body>
    <!-- version sans concaténation puis avec concaténation (version à ne pas faire car inutile d'analyser le 'bonjour..., comment vas-tu ?')-->
    <p>Bonjour <?php echo $name; ?>, comment vas-tu ?</p>
    <p><?php echo 'Bonjour ' . $name . ', comment vas-tu ?'; ?></p>
  </body>
</html>
