<?php
class Utilisateur extends DbConnect{
    private $id_utilisateur;
    private $mot_de_passe;
    private $email;

function getIdUtilisateur(){
    return $this->id_utilisateur;
}
function getIdMotDePasse(){
    return $this->mot_de_passe;
}
function getEmail(){
    return $this->email;
}
function setIdUtilisateur($id){
    $this->id_utilisateur = $id;
}
function setEmail($email){
    $this->email = $email;
}
function setMotDePasse($pass){
    $this->mot_de_passe = $pass;
}
function insert(){
    $query = "INSERT INTO utilisateurs (email, mot_de_passe) VALUES(:email, :mdp)";
    $result = $this->connectObj->prepare($query);

    $result->bindValue("email", $this->email);
    $result->bindValue("mdp", $this->mot_de_passe);

    $result->execute();

}
function selectByEmail(){

    $query = "SELECT id_utilisateur, mot_de_passe, email FROM utilisateurs WHERE email=:email";
    $result = $this->connectObj->prepare($query);

    $result->bindValue("email", $this->email);
    if(!$result ->execute()){
    var_dump($result->errorInfo());
}
  
 return $result->fetch();
 //return false (si pas d'utilisateur trouvé)
 //return[
     //"id_utilisateur"=>5
     //"email"=>toto@gmail.com",
     //mot_de_passe"=>"$2yhfhrib557cjchil...."
 //]

}
}