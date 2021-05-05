<?php

    include '../Process/Autoload.php';

    require_once("../Process/Connexion.php");

    $reviewManager = new ReviewManager($pdo);

    $tourOp = new TourOperator(['id'=>intval($_POST['idTO'])]);

    $reviews = $reviewManager->getList($tourOp);

?>

    <div id="<?=$tourOp->getId()?>">

    <?php foreach ($reviews as $review) { ?>
        
        <div>
            <h2><?=$review->getAuthor()?></h2>
            <p><?=$review->getMessage()?></p>
        </div>

<?php } ?>
    

    </div>
