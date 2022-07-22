<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $paragOriginale =
        "Ahi Marì che disperazione
        trovarsi al tramonto
        davanti alla mediocrità,
        e così mi riempio la bocca
        con la filastrocca
        che canta la complicità!
        Ahi Marì che disperazione
        trovarsi a cantare
        canzoni d'amore per te.";

        $lunghezzaParagOriginale = strlen($paragOriginale);

        $censured = $_GET['badword'];
        $paragCensurato = str_replace($censured, '***', $paragOriginale);
    ?>
    
    
    <h2>Paragrafo originale:</h2>
    <p> <?php echo $paragOriginale?> </p>
   
    <hr>
    <div> Il paragrafo è composto da <?php echo$lunghezzaParagOriginale ?> caratteri e adesso ne censurerò qualcuno!</div>
    <hr>

    <h2>Paragrafo censurato:</h2>
    <p></p><?php echo $paragCensurato ?></p>

    <hr>
    <div> Adesso il paragrafo è composto da <?php echo strlen($paragCensurato) ?> caratteri.</div>
    <hr>

</body>
</html>