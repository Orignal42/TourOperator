<?php

include 'Process/Autoload.php';

require_once("Process/Connexion.php");

include 'View/Header.php';

?>

<?php

$destination = new DestinationManager($pdo);
$allDestinations = $destination->getList();

foreach ($allDestinations as $rowDestination){
    ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/IMG/corsica.jpg" alt="Card image cap">
        <div class="card-body">
            <?php
                echo '<h4>'.$rowDestination->getLocation().'</h4>';
            ?>
            <p class="card-text">Corsica is a true natural paradise where the heritage is wonderfully well-protected. Very attached to its traditions, this characterful land clearly deserves its nickname, "the island of beauty"...</p>
        </div>
        <a class="btn btn-primary" href="/View/ListTo.php?destination=<?=$rowDestination->getLocation()?>">See more</a>
    </div>

<?php
}

?>


<?php

    include 'View/Footer.php';

?>