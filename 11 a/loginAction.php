
 <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingdatabase";

    
  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT userName, userPassword, userEmail FROM logindetails";
$result = $conn->query($sql);
$test= false; 
$test12= $_POST["username"];
$test36= $_POST["password"];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $test24 = $row["userName"];
          $test34 = $row["userPassword"];  
        if($test24 == $test12){
          
            echo "username  found";
            if($test34==$test36){
                  $test=true;
                echo"password found";
                 $_SESSION["message"] = "";
                $_SESSION["userName12"] ="";
                 $_SESSION["userName12"] = $_POST["username"];
                header('Location: Home.php');
            }
            else{
                echo"password not found";
                 
             $_SESSION["message"] = "incorrect username or password";
                 header('Location: login.php');
            }
        }
        else{
            echo"username not found";
            
           $_SESSION["message"] = "incorrect username or password";
         header('Location: login.php');
        }
    }
} else {
    echo "0 results";
}

$conn->close();  
    
    
    
   


?> 








         
          