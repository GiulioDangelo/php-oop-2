<?php
// include __DIR__ . './giochi.php';
// include __DIR__ . './cuccie.php';
// include __DIR__ . './cibo.php';
include __DIR__ . './db.php';


$giocoList= 
[
    new Giochi('palla', 20,'cane', 'https://www.mrw.it/img/cope/0iwkf4_1609360688.jpg', 'desc', 'tipo', 'marca'),
];

$cucciaList = 
[
    new Cuccia('cuccia', 30,'gatto', 'https://www.mrw.it/img/cope/0iwkf4_1609360688.jpg', 'desc', 'dimensione', 'materiali'),
];

$ciboList = 
[
    new Cibo('croccantini', 30,'cane', 'https://www.mrw.it/img/cope/0iwkf4_1609360688.jpg', 'desc', 'peso', 'calorie', 'gusto'),
    new Cibo('croccantini', 30,'gatto','https://www.mrw.it/img/cope/0iwkf4_1609360688.jpg', 'desc', 'peso', 'calorie', 'gusto')
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach($giocoList as $gioco) {?>
    <div class="gioco">
        <img src="<?= $gioco->img ?>">
        <div><?= $gioco->nome ?></div>
        <div><?= $gioco->animale ?></div>
        <div><?= $gioco->descrizione ?></div>
        <div>$<?= $gioco->prezzo ?></div>
        <div><?= $gioco->tipo ?></div>
        <div><?= $gioco->marca ?></div>
    </div>
    <?php } ?>


    <?php foreach($cucciaList as $cuccia) {?>    
    <div class="cuccia">
        <img src="<?= $cuccia->img ?>">
        <div><?= $cuccia->nome ?></div>
        <div><?= $cuccia->animale ?></div>
        <div><?= $cuccia->descrizione ?></div>
        <div>$<?= $cuccia->prezzo ?></div>
        <div><?= $cuccia->dimensione ?></div>
        <div><?= $cuccia->materiali ?></div>
    </div>
    <?php } ?>


    <?php foreach($ciboList as $cibo) {?>
    <div class="cuccia">
        <img src="<?= $cibo->img ?>">
        <div><?= $cibo->nome ?></div>
        <div><?= $cibo->animale ?></div>
        <div><?= $cibo->descrizione ?></div>
        <div>$<?= $cibo->prezzo ?></div>
        <div>peso:<?= $cibo->peso ?></div>
        <div>calorie:<?= $cibo->calorie ?></div>
        <div>sapore:<?= $cibo->gusto ?></div>
    </div>
    <?php } ?>

</body>

</html>