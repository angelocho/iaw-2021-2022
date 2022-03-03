<?php 
    session_start();
    if(isset($_POST["enviar"])){
        $url = $_POST["url"];
        $nombre = $_POST["nombre"];
        $_SESSION["foto"] = $url;
        $_SESSION["nombre"] = $nombre;
    }else { 
        $url = $_SESSION["foto"];
        $nombre = $_SESSION["nombre"];
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilonickname.css">
    <title>Nickname INDEX</title>
</head>
<body>
<div id="foto">
    <p><?=$nombre?></p>
    <img src="<?=$url?>">  
</div>
Eam ex integre quaeque bonorum, ea assum solet scriptorem pri, et usu nonummy accusata interpretaris. Debitis necessitatibus est no. Eu probo graeco eum, at eius choro sit, possit recusabo corrumpit vim ne. Noster diceret delicata vel id.

Lorem salutandi eu mea, eam in soleat iriure assentior. Tamquam lobortis id qui. Ea sanctus democritum mei, per eu alterum electram adversarium. Ea vix probo dicta iuvaret, posse epicurei suavitate eam an, nam et vidit menandri. Ut his accusata petentium.

Has maiorum habemus detraxit at. Timeam fabulas splendide et his. Facilisi aliquando sea ad, vel ne consetetur adversarium. Integre admodum et his, nominavi urbanitas et per, alii reprehendunt et qui. His ei meis legere nostro, eu kasd fabellas definiebas mei, in sea augue iriure.

His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu.

Cu nam labores lobortis definiebas, ei aliquyam salutatus persequeris quo, cum eu nemore fierent dissentiunt. Per vero dolor id, vide democritum scribentur eu vim, pri erroribus temporibus ex. Euismod molestie offendit has no. Quo te semper invidunt quaestio, per vituperatoribus sadipscing ei, partem aliquyam sensibus in cum.

An vim commodo dolorem volutpat, cu expetendis voluptatum usu, et mutat consul adversarium his. His natum numquam legimus an, diam fabulas mei ut. Melius fabellas sadipscing vel id. Partem diceret mandamus mea ne, has te tempor nostrud. Aeque nostro eum no.



</body>
</html>