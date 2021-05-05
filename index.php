<?php

include 'Process/Autoload.php';

require_once("Process/Connexion.php");

include 'View/Header.php';

?>

<div class="container card-index">
    <div class="row">

<?php

$destination = new DestinationManager($pdo);
$allDestinations = $destination->getListGroupByName();

foreach ($allDestinations as $rowDestination){
    ?>
    <div class="card marg" style="width: 18rem;">
        <img class="card-img-top" src="<?=$rowDestination->getImg()?>" alt="Card image cap">
        <div class="card-body">
            <h4><?=$rowDestination->getLocation()?></h4>
            <p class="card-text"><?=$rowDestination->getDescription()?></p>
        </div>
        <a class="btn btn-primary" href="/TourOperator/View/ListTo.php?destination=<?=$rowDestination->getLocation()?>">See more</a>
    </div>

<?php
}
?>

    </div>
</div>


<?php

    include 'View/Footer.php';

?>