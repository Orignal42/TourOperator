<?php

include '../Process/Autoload.php';

require_once("../Process/Connexion.php");

include 'Header.php';

?>

<form method="post" action="../Process/insert.php">
                    
    <div class="labels">
        <label>* Location :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="location" required placeholder="Your location">
    </div>     


    <div class="labels">
        <label for="username">* Price :</label>
    </div>
    <div class="rightTab">
        <input type="text" name="price" required placeholder="600$">
    </div>


    <div class="labels">
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
    </div> 

        <input type="submit" id='submit' value='SIGN UP'>

</form>



<?php

    include 'Footer.php';

?>