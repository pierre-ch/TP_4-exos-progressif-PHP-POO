<?php

class Produit
{
    private $code;
    private $nom;
    private $prix;

    public function __construct($unCode, $unNom, $unPrix)
    {
        $this->code = $unCode;
        $this->nom = $unNom;
        $this->prix = $unPrix;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function afficheInfo()
    {
        $vretour = "";
        $vretour = "Code : ".$this->code;
        $vretour =+ "Nom : ".$this->nom;
        $vretour =+ "Prix : ".$this->prix;
        return $vretour;
    }
}

?>