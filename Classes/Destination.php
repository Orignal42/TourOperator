<?php 

class Destination {

    
    protected $id;
    protected string $location;
    protected int $price;
    protected int $id_tour_operator;


    /* CONSTRUCT */

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    /* HYDRATE */

    public function hydrate($donnees){
        foreach ($donnees as $key =>$value) {
        
            $method = 'set'.ucfirst($key);
        
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
        }
    }

    public function getId (){
        return $this->id;
    }

    public function setId ($id){
        $this->id = $id;
    }

    public function getLocation (){
        return $this->location;
    }

    public function setLocation ($location){
        $this->location = $location;
    }

    public function getPrice (){
        return $this->price;
    }

    public function setPrice ($price){
        $this->price = $price;
    }

    public function getIdTourOperator (){
        return $this->id_tour_operator;
    }

    public function setIdTourOperator ($id_tour_operator){
        $this->id_tour_operator = $id_tour_operator;
    }

}
