<?php 

class Review {
    
    // protected $id;
    protected string $message;
    protected string $author;
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

    public function getMessage (){
        return $this->message;
    }

    public function setMessage  ($message){
        $this->message = $message;
    }

    public function getAuthor (){
        return $this->author;
    }

    public function setAuthor ($author){
        $this->author = $author;
    }

    public function getIdTourOperator (){
        return $this->id_tour_operator;
    }

    public function setIdTourOperator ($id_tour_operator){
        $this->id_tour_operator = $id_tour_operator;
    }

}

    
    
