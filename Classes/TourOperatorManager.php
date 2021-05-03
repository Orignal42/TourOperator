<?php

class TourOperatorManager {

  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

    public function add(TourOperator $tourOperator)
    {
      

      $q = $this->db->prepare('INSERT INTO tour_operator(name, link, grade, is_prenium) VALUES(:name, :link, :grade, :is_prenium)');
      
      $q->bindValue(':name', $tourOperator->getName());
      $q->bindValue(':link', $tourOperator->getLink());
      $q->bindValue(':grade', $tourOperator->getGrade());
      $q->bindValue(':is_prenium', $tourOperator->isIsPremium());
      
      $q->execute();
      
      $tourOperator->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }


}