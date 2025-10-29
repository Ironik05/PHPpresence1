<?php
declare (strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>g
    <?php
    //Jour 1
    //Exercice 1
    $nom = "Call of Duty";
    $prix = 60;
    $plateforme = "PSS";
     //Definition d'une classe 
    class JeuVideo {
     //Proprietes
        public $nom;
        public $prix;
        public $plateforme;

     //Constructeur
     public function _construct($nom, $prix, $plateforme = null) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->plateforme = $plateforme;
     }
    }
    
    ?>
</body>
</html>