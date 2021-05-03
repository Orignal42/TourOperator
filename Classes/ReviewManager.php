<?php

class ReviewManager {

  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

    public function add(Review $review)
    {
      

      $q = $this->db->prepare('INSERT INTO reviews(message, author, id_tour_operator) VALUES(:message, :author, :id_tour_operator)');
      
      $q->bindValue(':message', $review->getMessage());
      $q->bindValue(':author', $review->getAuthor());
      $q->bindValue(':id_tour_operator', $review->getIdTourOperator());
      
      $q->execute();
      
      $review->hydrate([
        'id' => $this->db->lastInsertId()
      ]);
    }


}