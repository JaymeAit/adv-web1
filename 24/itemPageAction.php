
 <?php


if (session_id() == '' || !isset($_SESSION)) {
session_start();

    $itemCategory2= $_POST["itemName1"];
    echo $itemCategory2;
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppingdatabase";
    try{
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    $test=false;
        $numberOfItems1= 0;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT itemName, itemCategory, itemPrice,itemDescription,quantity,itemPic FROM items";
$result = $conn->query($sql);
    
        try{
      while($row = $result->fetch_assoc()) {
        $test24 = $row["itemName"];
            
        if($test24 == $itemCategory2){
            echo "sdfdsf";
            
           $numberOfItems1=$numberOfItems1+1;
             $_SESSION["messageReg12"] ="category found ";
            echo $_SESSION["messageReg12"];
            echo $numberOfItems1;
             $_SESSION["itemNameDis"] = $row["itemName"];
            $_SESSION["itemCatDis"] = $row["itemCategory"];
            $_SESSION["itemPriDis"] = $row["itemPrice"];
            $_SESSION["itemDescDis"] = $row["itemDescription"];
            $_SESSION["itemPicDis"] = $row["itemPic"];
            $_SESSION["itemQuantDis"] = $row["quantity"];
            
            echo $_SESSION["itemNameDis"];
            
        }
    }
        }
        catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage(); 
}
        
}
    catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage(); 
}
}
 else {
    echo "0 results";
}

    













$_SESSION["contactMessage"]=" your information has been submitted";
   
header('Location: itemPage.php');

?> 








         
          