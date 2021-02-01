<?php

require_once "models/DbConnect.php";
require_once "models/Utilisateur.php";

//1. je crée un utilisateur "concret"
$user = new Utilisateur();

//2. on luidonne un email et un mot de passe
$user->setEmail("céicilà@sansmail.fr");
$user->setMotDePasse(password_hash("test", PASSWORD_DEFAULT));

//3. on utilise sa methode insert pour l'enregistrer
$user->insert();