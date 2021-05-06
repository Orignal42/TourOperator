<?php
include '../Process/Autoload.php';

require_once("../Process/Connexion.php");

include 'Header.php';
   
  
 
    session_start();
  
    
    if (isset($_POST['admin']) &&  isset($_POST['password'])) {
        $_SESSION['password']=$_POST['password'];
        $_SESSION['admin']=$_POST['admin'];
    $sql= ("SELECT * FROM admin WHERE admin = :admin AND password = :password");
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':admin' => $_POST["admin"], ':password' => $_POST["password"]));
        $count = $stmt->rowCount();
        if($count > 0)
        {
            
            header('Location: /TourOperator/View/admin.php');
        }
        else
        {
            header('Location: /TourOperator/index.php');
        }
    }
     catch (Exception $e) {
        print "Erreur de lecture! " . $e->getMessage() . "<br/>";
    }    
}
    ?>




<form method="post" action="Connection.php">
name:<input type="text" name=admin>
password:<input type=text name=password>

<button>submit<button>
</form>


<?php
    include 'Footer.php';

?>