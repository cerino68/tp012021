<?php
session_start(); //regarde si il existe une session, ou crée un tableau $_SESSION
// on peut utiliser $_session partout

//var_dump($_GET);
//echo "php ready";
$route = (isset($_GET["route"]))? $_GET["route"] : "showAccueil";
//var_dump($route);
/**incusion de l'ensemble desfonctions de contrôle (controlers.php) */
require_once "controlers.php";
/**une route = une fonctionnalité = n contrôleur */
switch($route){
    
    case "showEspacemembre" :$infos = showEspacemembre();
         //echo "je dois afficher la page 1";
    break;
    case "showPage2" :$infos = showPage2();
         //echo "je dois afficher la page 2";
    break;
    case "showFormulaire" :$infos = showFormulaire();
         //echo "je dois afficher la page formulaire";
    break;
    case "showAccueil" :$infos = showAccueil();
         //echo "je dois afficher la page d'accueil";
    break;
    case "showEspaceconseiller" :$infos = showEspaceconseiller();
         //echo "je dois afficher la page conseiller";
    break;

     case "connect" :$infos = connect();
     break;
     case "insertservice" :insertservice();
     break;
    default :$infos = showAccueil();
     //echo "je dois afficher la page d'accueil";
}
//var_dump($infos);

require_once "templates/general.php";
