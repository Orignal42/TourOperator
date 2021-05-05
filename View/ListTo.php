<?php

    include '../Process/Autoload.php';

    require_once("../Process/Connexion.php");

    include 'Header.php';

?>


<?php

 $test = new DestinationManager($pdo);

    if (isset($_GET['destination'])) {

       $arrayDestination = $test->getDestinationByLocation($_GET['destination']);
        echo "<h1>".$_GET['destination']."</h1>";
         
       foreach ($arrayDestination as $destination){ 
           $to =  $test->getDestibyTo($destination);
           ?>

                       
            <div class="card mb-3" style="width: 800px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?=$destination->getImg()?>" class="card-img-top" style="width: 17rem;">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$to->getName()?></h5>
                        <p class="card-text"><?=$destination->getDescription()?></p>
                        <p class="card-text"><small class="text-muted"><?=$destination->getPrice().' $'?></small></p>
                    </div>
                    </div>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-comment" data-idTour="<?=$to->getId()?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop">                                  Comments 💬
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Comments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <!-- AJAX POUR LES COMS DANS JS ET GETREVIEW -->

                    </div>
                    <div class="modal-footer">
                        <h5>Write your comment...</h5>
                        <form action="" method="">
                        <div class="labels">
                            <label>* Name</label>
                            <input id="input-author" type="text" name="author" placeholder="Pierre" required>
                        </div>
                        <div class="labels">
                            <label>* Comment</label>
                            <input id="input-message" type="textarea" name="comment" placeholder="Your comment" required>
                        </div>
                        <button class="btn btn-dark btn-form-review" id='submit' type="button" class="">Dark</button>
                        </form>
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

       <?php }
    } ?>


<?php

    include 'Footer.php';

?>