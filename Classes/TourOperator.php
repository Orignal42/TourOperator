<?php 

class TourOperator {
    
    protected $id;
    protected string $name;
    protected string $link;
    protected int $garde;
    protected bool $is_prenium;

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

    public function getName (){
        return $this->name;
    }

    public function setName  ($name){
        $this->name = $name;
    }

    public function getLink (){
        return $this->link;
    }

    public function setLink ($link){
        $this->link = $link;
    }

    public function getGrade (){
        return $this->grade;
    }

    public function setGrade ($grade){
        $this->grade = $grade;
    }

    public function isIsPremium (){
        return $this->is_prenium;
    }

    public function setIsPremium ($is_prenium){
        $this->is_prenium = $is_prenium;
    }

}

    
    
