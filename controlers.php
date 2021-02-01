<?php

function showAccueil(){
    //echo"je suis le contrôleur responsable de la page d'accueil <br>";
    return[
      "template" =>"accueil.php"
    ];
}
function showEspaceconseiller(){
  //echo"je suis le contrôleur responsable de la conseiller <br>";
  return[
    "template" =>"espaceconseiller.php"
  ];
}

function showEspacemembre(){
    //echo"je suis le contrôleur responsable de la page 1 <br>";
    return[
        "template" =>"espacemembre.php"
      ];

}

function showPage2(){
    //echo"je suis le contrôleur responsable de la page 2 <br>";
    return[
        "template" =>"page2.php"
      ];

}

function showFormulaire(){
    //echo"je suis le contrôleur responsable de la page Formulaire <br>";
    return[
        "template" =>"formulaire.php"
      ];

}

function connect(){
     require_once "models/DbConnect.php";
     require_once "models/Utilisateur.php";

  var_dump($_POST);
  echo "un utilisateur essaye de seconnecter!";
  //1. je écupère les informations de connexin de l'utilisateur
  //2. je vais voir si il existe un utilisateur correspondant à l'adresse mail
  $user= new Utilisateur();
  $user->setEmail($_POST["email"]);
  $retour=$user->selectByEmail(); //renvoie false ou un tableau

  var_dump($retour);
  //3. si oui, je vérifie que le mot de passe utilisé est correct

  if($retour){
 /*$retour= ["id_utilisateur"=>5
     //"email"=>toto@gmail.com",
     //mot_de_passe"=>"$2yhfhrib557cjchil...."
 //]*/
    if(password_verify($_POST["password"], $retour["mot_de_passe"])){

      echo "l'utilisateur a le droit de se connecter";



  //4. je connecte l'utilisateur (en utilisant les sessions)

      $_SESSION["id_utilisateur"] = $retour["id_utilisateur"];
      $_SESSION["email"] = $retour["email"];

      // je redirige vers ma page 1 (utilisée en tant qu'espace membre)
      header("Location:index.php?route=showEspacemembre");
      exit;
    }
  }


  //CONNEXION FAILD : je redirige vers le formulaire de connexion
  header("Location:index.php?route=showFormulaire");
  exit;
}
function insertservice(){
  require_once "models/Service.php";
  $ser = new models/Service();
  $ser->setNom($_post["nom"]);
  $ser->insert();
}