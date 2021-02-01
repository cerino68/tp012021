<?php

class Service extends DbConnect{
    private $idService;
    private $nom;
    private $type;
    private $prix;
    }
    function getIdService(): ?int{
       return $this->idService = $id;
    }
    function getNom(): ?int{
        return $this->nom = $nom;
    }
    function getType(): ?int{
        return $this->type = $type;
    }
    function getPrix(): ?int{
        return $this->prix = $prix;
    }
    function setIdService($id){
        $this->idService = $id;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function setType($type){
        $this->type = $type;
    }
    function setPrix($prix){
        $this->prix = $prix;
    }
    function insert(){
        $query = "INSERT INTO services (nom) VALUES(:nom);";
        $result = $this->pdo->prepare($query);

        $result->bindValue("nom", $this->nom, PDO::PARAM_STR);

        if(!$result->execute()) {
            var_dump($result->errorInfo());
        }
    }
    


    function update(){}
    function delete(){}
    function select(){}
    function selectAll(){}
   