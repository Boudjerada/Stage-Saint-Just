<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->

<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css");?>">
    <title><?= $title ?></title>
    

 
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid border"> <!--container global de la page-->

    <!--Script de redirection vers page d'accueil quand écran inactif durant 1 min -->
    <script>
        
        var chrono;
        function startTimer(){
	// le second paramètre de la fonction setTimeout() est en millisecondes
	// 1min = 1*60*1000 ms
	// la fonction redirection() sera exécutée dans 1 min
	// on récupère l'identifiant du timer dans chrono
	    chrono = setTimeout("document.location = 'http://localhost/ci2/'",60000);	
    }	

    // remise à 0 du timer avec pour identifiiant le contenu de chrono, s'il y a eu un mouvement dans la page 
    // [évenement onmousemove()]
    // puis redémarrage du timer en appelant la fonction startTimer()
        function resetTimer(){
	        clearTimeout(chrono);
	        startTimer();
        }
 
        document.onmousemove = function(){
            resetTimer()
        }

    //Lancement timer de départ
        startTimer();

 
    </script>