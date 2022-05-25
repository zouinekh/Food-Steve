<?php
class produit{
    private $id,$nom,$desc,$prix,$img;
    function __construct($n,$d,$p,$img)
    {
        $this->nom=$n;
        $this->desc=$d;
        $this->prix=$p;
        $this->img=$img;

    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setNom($Nom)
    {
        $this->nom = $Nom;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getdesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setdesc($des)
    {
        $this->desc = $des;

        return $this;
    }

    /**
     * Get the value of qte
     */ 
    public function getprix()
    {
        return $this->prix;
    }

    /**
     * Set the value of qte
     *
     * @return  self
     */ 
    public function setPrix($p)
    {
        $this->prix = $p;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setImage($img)
    {
        $this->img = $img;

        return $this;
    }
}
