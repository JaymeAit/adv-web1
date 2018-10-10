
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
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $test24 = $row["userName"];
            
        if($test24 == $test12){
            $test=true;
           
             $_SESSION["messageReg12"] ="username already found";
            echo $_SESSION["messageReg12"];
        }
    }
} else {
    echo "0 results";
}

$conn->close();  
    
    
    
    if( $test==false){
        echo "flase";
   
    
    
    
    
    
    $conn = new PDO("mysql:host=$servername;dbname=shoppingdatabase", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
   
    $name= $_POST["username"];
    $psw= $_POST["password"];
    $email= $_POST["email"];
           try{ $sql = "INSERT INTO logindetails (userName, userPassword, userEmail)
    VALUES ('".$name."', '".$psw."', '".$email."')";
    // use exec() because no results are returned
    $conn->exec($sql);
 echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
     $_SESSION["messageReg12"] ="added";
            echo $_SESSION["messageReg12"];    
}
header('Location: register.php');

?> 








         
          