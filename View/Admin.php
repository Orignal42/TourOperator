<?php

    include '../Process/Autoload.php';

    require_once("../Process/Connexion.php");

    include 'Header.php';

    $destination = new DestinationManager($pdo);
    $allDestinations = $destination->getListGroupByName();

    $tourOp = new TourOperatorManager($pdo);
    $allTourOp = $tourOp->getList();


    if (isset($_POST['price'])){

        $newDestination = new Destination(['location'=>$_POST['location'], 'id_tour_operator'=>$_POST['to'], 'price'=>$_POST['price']]);
        $operator = new TourOperator(['id'=>$_POST['to']]);
        $destination->add($newDestination, $operator);
    
    }

    if (isset($_POST['link'])){

        $newTourOp = new TourOperator(['name'=>$_POST['name'], 'grade'=>$_POST['grade'], 'link'=>$_POST['link'], 'is_premium'=>$_POST['premium']]);
        $tourOp->add($newTourOp);
    }

?>

<!-- FORM 1 -->

<h3>Create a new TO :</h3>
<form action="Admin.php" method="post">
    <div class="labels">
        <label>* Name</label>
        <input type="text" name="name" placeholder="TripAwsome.." required>
    </div>
    <div class="labels">
        <label>* Grade</label>
        <input type="number" name="grade" min="0" max="5">
    </div>
    <div class="labels">
        <label>* link</label>
        <input type="text" name="link" placeholder="https://..." required>
    </div>
    <div class="labels">
        <label>* Premium</label>
        <input type="number" name="premium" min="0" max="1">
    </div>

    <input type="submit" id='submit' value='Submit'>

</form>

<!-- FORM 2 -->

<!-- FORM 3 SELECT -->
<h3>Create a new Trip :</h3>

<form action="Admin.php" method="post" class="select">
                    
    <div class="labels">
        <label>* Location :</label>
    </div>
    <div class="rightTab">
        <select name="location">
            <option value="">Please choose a location</option>

            <?php foreach ($allDestinations as $rowDestination) { ?>

                <option value="<?=$rowDestination->getLocation()?>"><?=$rowDestination->getLocation()?></option>

            <?php } ?>
            
        </select>
    </div>     

    <div class="labels">
        <label >* TO :</label>
    </div>
    <div class="rightTab">
        <select name="to">
            <option value="">Please choose a TO</option>

            <?php foreach ($allTourOp as $rowTourOp) { ?>

                <option value="<?=intval($rowTourOp->getId())?>"><?=$rowTourOp->getName()?></option>

            <?php } ?>
        </select>
    </div>

    

    <div class="labels">
        <label for="price">* Price :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="price" required placeholder="600$">
    </div>

    

        <input type="submit" id='submit' value='Submit'>

</form>




<?php

    include 'Footer.php';

?>