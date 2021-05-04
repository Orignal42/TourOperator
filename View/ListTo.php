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
            echo $to->getName().' '.$destination->getPrice().'$'.'<br>';
        }
    }

?>



<?php

    include 'Footer.php';

?>