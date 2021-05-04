<?php

include '../Process/Autoload.php';

require_once("../Process/Connexion.php");

include 'Header.php';

?>


<form method="post" action="">
                    
    <div class="labels">
        <label>* Location :</label>
    </div>
    <div class="rightTab">
        <select name="location">
            <option value="">Please choose a location</option>
            <option value="corse">Corse</option>
            <option value="sardinia">Sardinia</option>
            <option value="ny">New York</option>
            <option value="paris">Paris</option>
            <option value="vancouver">Vancouver</option>
            <option value="london">London</option>
            <option value="maroco">Maroco</option>
            <option value="tokyo">Tokyo</option>
            <option value="venise">Venise</option>
            <option value="barcelona">Barcelona</option>
        </select>
    </div>     


    <div class="labels">
        <label for="username">* Price :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="price" required placeholder="600$">
    </div>


    <!-- <div class="labels">
        <label>* TO :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="name">
    </div>        
        
    <div class="labels">
        <label>* Grade :</label>
    </div>
    <div class="rightTab">
        <input type="number" name="grade" required>
    </div>  

    <div class="labels">
        <label>* Link :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="link" required placeholder="https//...">
    </div>  -->

        <input type="submit" id='submit' value='SIGN UP'>

</form>


<?php 

    if(isset($_POST['location']) && !empty($_POST['location']) && isset($_POST['price']) && !empty($_POST['price']))
    {
        $connexionManager = new DestinationManager($pdo);
        
        $destination = new Destination(["location"=>$_POST["location"], "price"=>intval($_POST["price"]), "id_tour_operator"=>intval($_POST["id_tour_operator"])]); 

        $connexionManager->createDestination($destination);

        header("Location: ../Admin.php?message=Nouvelle destination créée.");
    } 
        
    else
    {
        header("Location: ../Admin.php?message=Erreur, veuillez remplir les champs.");
    }

?>


<?php

    include 'Footer.php';

?>