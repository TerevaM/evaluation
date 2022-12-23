<?php

class Hero {
    private $id;
    private $name;
    private $category;
    private $vie;
    private $attaque;
    private $first_cap;
    private $second_cap;
    private $passif;
    
    public function __construct($id, $name, $category, $vie, $attaque, $first_cap, $second_cap, $passif) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->first_cap = $first_cap;
        $this->second_cap = $second_cap;
        $this->passif = $passif;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of vie
     */ 
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     *
     * @return  self
     */ 
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of first_cap
     */ 
    public function getFirst_cap()
    {
        return $this->first_cap;
    }

    /**
     * Set the value of first_cap
     *
     * @return  self
     */ 
    public function setFirst_cap($first_cap)
    {
        $this->first_cap = $first_cap;

        return $this;
    }

    /**
     * Get the value of second_cap
     */ 
    public function getSecond_cap()
    {
        return $this->second_cap;
    }

    /**
     * Set the value of second_cap
     *
     * @return  self
     */ 
    public function setSecond_cap($second_cap)
    {
        $this->second_cap = $second_cap;

        return $this;
    }

    /**
     * Get the value of passif
     */ 
    public function getPassif()
    {
        return $this->passif;
    }

    /**
     * Set the value of passif
     *
     * @return  self
     */ 
    public function setPassif($passif)
    {
        $this->passif = $passif;

        return $this;
    }
}