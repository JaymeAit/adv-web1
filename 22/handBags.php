<?php
if (session_id() == '' || !isset($_SESSION)) {

session_start();
    $itemCategory2="hand bag";
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
        $test24 = $row["itemCategory"];
            
        if($test24 == $itemCategory2){
            $test=true;
           $numberOfItems1=$numberOfItems1+1;
             $_SESSION["messageReg12"] ="category found ";
            echo $_SESSION["messageReg12"];
            echo $numberOfItems1;
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

    
 print_r($_SESSION);



?>

<?php

if(isset($_POST["add_SC"])){
    
   if(isset($_SESSION["SC"])){
       
       $stored_items_id=array_column($_SESSION["SC"],"item_name");
       if(!in_array($_POST["name_hid"],$stored_items_id))
       {
           $count= count($_SESSION["SC"]);
 $stored_items=array('item_name'=>$_POST["name_hid"],'item_price'=>$_POST["price_hid"],'item_quantity'=>$_POST["quant"] );
       $_SESSION["SC"][$count]=$stored_items;     
   }
       else{
           echo "item already added "; 
        
   
           
               echo $_POST["name_hid"];
           echo $_POST["quant"];
           $count= count($_SESSION["SC"]);
           echo $count;
      
           foreach($_SESSION["SC"]as $keys =>$values){
               $value=$_POST["name_hid"];
                  if($values["item_name"]== $_POST["name_hid"]){
                      
                      $n1=$values["item_name"];
                      $p1=$values["item_price"];
                      
                      
             $newq=$values["item_quantity"]+$_POST["quant"] ;
               echo $newq;
                 $_SESSION["SC"][$keys]['item_quantity']=$newq;      
  
                      
                  }
           }
               echo $value;
   
           
     
       }
   }
    else{
        $stored_items=array('item_name'=>$_POST["name_hid"],'item_price'=>$_POST["price_hid"],'item_quantity'=>$_POST["quant"] );
        $_SESSION["SC"][0]=$stored_items;      
    }   
}

  if(isset($_POST["del_SC"])){
      
          
      echo $_POST["name_hid"];
           foreach($_SESSION["SC"]as $keys =>$values){
               $value=$_POST["name_hid"];
                  if($values["item_name"]== $_POST["name_hid"]){    
                   unset($_SESSION["SC"][$keys]);
               }
               
               echo $value;
   
           }
   }



 if(isset ($_GET["action"])){
       if($_GET["action"]=="empty"){
          unset($_SESSION["SC"]);
                   
               }       
           }
          


?>

<?php

if(isset($_POST["add_W"])){
    
   if(isset($_SESSION["WishL"])){
       
       $stored_items_id=array_column($_SESSION["WishL"],"item_name");
       if(!in_array($_POST["name_hid"],$stored_items_id))
       {
           $count= count($_SESSION["WishL"]);
 $stored_items=array('item_name'=>$_POST["name_hid"],'item_price'=>$_POST["price_hid"],'item_quantity'=>$_POST["quant"] );
       $_SESSION["WishL"][$count]=$stored_items;     
   }
       else{
              echo "error";
                      
                  }
           
            
   
           
     
       }
   
    else{
        $stored_items=array('item_name'=>$_POST["name_hid"],'item_price'=>$_POST["price_hid"],'item_quantity'=>$_POST["quant"] );
        $_SESSION["WishL"][0]=$stored_items;      
    }   
}

  if(isset($_POST["del_W"])){
      
          
      echo $_POST["name_hid"];
           foreach($_SESSION["WishL"]as $keys =>$values){
               $value=$_POST["name_hid"];
                  if($values["item_name"]== $_POST["name_hid"]){    
                   unset($_SESSION["WishL"][$keys]);
               }
               
               echo $value;
   
           }
   }



 if(isset ($_GET["action"])){
       if($_GET["action"]=="emptyW"){
          unset($_SESSION["WishL"]);
                   
               }       
           }
          


?>
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;

}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */

</style>


<!doctype html>
<html lang="en">
<head>
<title>hand bags </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
  <style>
      * {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
      li{
          
          margin:6px;
          background-color: gray;
          text-decoration-color: white;
          padding: 9px;
          border-radius: 20px;
      }
      
      #headerimg{
          border-radius: 50%;
      }
      #header-item{
          border-radius: 20px;
   margin-top: :2000px;
          height: 50px;
          
      }
       #header-item1{
          border-radius: 20px;
   margin-top: :2000px;
          height: 50px;
          float: right;
           margin-left: 360px;
      }
       #header-text{
          border-radius: 20px;
          color: white;
        height: 35px;
          
        
           text-align:center;
          
      }
      #active{
          color: blue;
      }
      #content{
          margin-left: 50px;
          margin-right: 50px;
          
      }
      #bottomNav{
        background-color: gray;
      }
      #myPictures{
          width: 925px;
          margin: auto;
      }
      #myPageContent{
          width: 925px;
          margin: auto;
          text-align: left;
      }
      #footerContent{
          width: 925px;
          margin: auto;
          text-align: left;
        
      }
      footer{
          background-color: gray;
          width: 925px;
      }
      .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>  
     <link rel="icon" href="image.jpg" type="image/gif" sizes="16x16">
</head>
<body>
    <div id="content">
    <div class="Navbar-container" >
    <div class="container-fluid list-center">
    
          <div id="navabarList" class="col-md-9 col-md-offset-2" >
    
            
    <ul class="nav navbar-nav">
        <li id="header-item" class="active"><a id="header-text"  href="Home.php">Home</a></li>
            <li id="header-item"><a id="header-text"  href="ourMission.php">our mission </a></li> 
        <li id="header-item">

            <div class="dropdown"><a id="header-text" >Buy our products </a>
             <div class="dropdown-content">
    <a href="luggageBags.php">Luggage bags</a>
    <a href="plasticBags.php">plastic bags</a>
    <a href="canvasBags.php">canvas bags</a>
                 <a href="handBags.php">hand bags</a>
  </div>
            </div></li>                
        <li> <img id="headerimg" src="image.jpg" alt="logo" style="height: 50px;,width:30;" ></li> 
        <li id="header-item"><a id="header-text" href="aboutUs.php">About us</a></li>
        <li id="header-item"><a  id="header-text"  href="contactUs.php">Contact us </a></li>
            <li id="header-item"><a id="header-text"  href="checkoutInfo.php">checkout info</a></li> 
      </ul> 
        
            
            
            
            
    </div>
         <div id="bottomNav" class="col-md-8 col-md-offset-2" >
            
    <ul class="nav navbar-nav">
                
        <?php if (isset($_SESSION['userName12']))
{?>
       <li id="header-item" class="active"><a id="header-text" href="signOut.php"><span class="glyphicon glyphicon-log-in"></span> sign out</a></li>
        <?php } 
        
        else{?>
          <li id="header-item" class="active"><a id="header-text" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                
        <?php }?>
        
          <li id="header-item" class="active"><a id="header-text" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> checkout</a></li>  
      <li> <?php 
       if(isset($_SESSION['userName12'])){ ?>
          <p id="header-text"> <?php echo "welcome user ".$_SESSION["userName12"];?></p>
      <?php  }
               
        ?></li> 
              
        <li id="header-item1"> 
                
            <form autocomplete="off" action="searchAction.php" method="post">
  <div class="autocomplete" style="width:150px;">
    <input id="myInput" type="text" name="myInput" class="form-control" placeholder="search...">
  </div>
   <input type="submit" value="search">     
          
</form>
        
        </li>  
             
      </ul> 
        
    </div>
    
    </div>
    </div>
    


<div id="myPictures" class="carousel slide" >
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
        <img  src="b1.jpg" alt="Image"style="height:400px;">
        <div class="carousel-caption">
          <h3>environmentally friendly</h3>
          <p>cleanbags</p>
        </div>      
      </div>

      <div class="item">
        <img src="b2.jpg"alt="Image"style="height:400px;">
        <div class="carousel-caption">
          <h3>bio degradable</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

 
</div>
  <br>
<div id="myPageContent" class="container text-center"> 
    
       <?php if (isset($_SESSION['userName12']))
{?>
      <div id="wish-list">
<div class="txt-heading">wish list</div>

<a id="btnEmpty" href="handBags.php?action=emptyW">clear wish list</a>
<?php
if(isset($_SESSION["WishL"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>

<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		

    if(!empty($_SESSION["WishL"])){
      
    foreach ($_SESSION["WishL"] as $KEYS => $values){
        $item_price = (int)$values["item_quantity"]*(int)$values["item_price"];
		?>
    
    
				<tr>
				<td><?php echo $values["item_name"];?> </td>
			

        <td style="text-align:center;">
            
            
             
        
            
            
               <form method="post" action="handBags.php?action=deleteW&code="<?php echo $values["item_name"];?>"">
	
              <?php $itemName=$values["item_name"];?>
                   
                   
             <input type= "hidden" name="name_hid" value="<?php echo $values["item_name"]?>"/>
              
              <input type="submit"name="del_W" value="remove item" class="btn btn-success" />
		
		</form>
            
     
                    </td>

    </tr>
    
    
    
    
    
    
    
				<?php
			
		}
    }
		?>


</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Wish list is empty</div>
<?php 
}
?>
</div>
    
    
    
    
          <button onclick="listView()"><i class="fa fa-bars"></i> List</button>
<button onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>
    
    
    
     <div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="handBags.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["SC"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
	
<?php		

    if(!empty($_SESSION["SC"])){
      
    foreach ($_SESSION["SC"] as $KEYS => $values){
        $item_price = (int)$values["item_quantity"]*(int)$values["item_price"];
		?>
    
    
				<div class="row">
		<div class="column" style="background-color:#ccc;"><p>item name:</p><?php echo $values["item_name"];?> </div>
			<div class="column" style="background-color:#ccc;"><p>price:</p>	<?php echo $values["item_price"];?> </div>
                    <div class="column" style="background-color:#ccc;"><p>qty:</p>	<?php echo $values["item_quantity"];?> </div>


   <div class="column" style="background-color:#ccc;">
            
            
             
        
            
            
            <form method="post" action="handBags.php?action=delete&code="<?php echo $values["item_name"];?>"">
	
              <?php $itemName=$values["item_name"];?>
                 
                   
             <input type= "hidden" name="name_hid" value="<?php echo $values["item_name"]?>"/>
              
              <input type="submit"name="del_SC" value="remove item" class="btn btn-success" />
		
		</form>
            
     
                   </div>
    
    </div>
    
    
    
    
    
    
				<?php
				$total_quantity += $values["item_quantity"];
       
        
				$total_price += ((int)$values["item_price"]*(int)$values["item_quantity"]);
		}
    }
		?>

<tr>
<td colspan="2" align="right">Total qty:</td>
<td align="right"><?php echo $total_quantity; ?></td>
 </tr>
    <tr>
    <td colspan="2" align="right">Total price:</td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
    
    
    
    
    
    
    
    
    
    

<?php } ?>
    
    
 <?php if($test==true)
{
    
    $sql = "SELECT itemName, itemCategory, itemPrice,itemDescription,quantity,itemPic FROM items";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $test24 = $row["itemCategory"];
            $picture= $row["itemPic"];
        if($test24 == $itemCategory2){ ?>
  <div class="row">
    <div class="col-sm-3">
      <img src="<?php echo $picture; ?>" class="img-responsive" style="width:100%" alt="https://placehold.it/150x80?text=IMAGE"> 
        <h3><?php echo $row["itemName"];?></h3>

         <p><?php echo $row["itemDescription"];?></p>
        <form action="itemPageAction.php" method="post">
<input type="hidden" id="itemName" name="itemName1" value= "<?php echo $row["itemName"];?>">
  <input type="submit" value="View Item">
</form> 
       <?php if (isset($_SESSION['userName12']))
{?>
    <form method="post" action="handBags.php?action=add&code="<?php echo $row["itemName"];?>"">
	
                         <input type= "text" name="quant" class="form-control" value=1>
              <input type= "hidden" name="name_hid" value="<?php echo $row["itemName"];?> "/>
          <input type= "hidden" name="price_hid" value="<?php echo $row["itemPrice"];?> "/>    
       
              
              
              
              <input type="submit"name="add_SC" value="Add to Cart" class="btn btn-success" />
		
		</form>
        
          <form method="post" action="handBags.php?action=add&code="<?php echo $row["itemName"];?>"">
	
                         <input type= "hidden" name="quant" class="form-control" value=1>
              <input type= "hidden" name="name_hid" value="<?php echo $row["itemName"];?> "/>
          <input type= "hidden" name="price_hid" value="<?php echo $row["itemPrice"];?> "/>    
       
              
              
              
              <input type="submit"name="add_W" value="Add to wish list" class="btn btn-success" />
		
		</form>
        
        
     <?php } else{ 
        
        
        
        ?>
        <p>login first to buy</p>
        
        <?php } ?>
        

    </div>
    <?php }}} ?>
  </div>
</div><br>


<footer class="container-fluid text-center">
 
    <div id=footerContent>
    <div class="col-sm-3"> 
        <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
   
    </div>
    <div class="col-sm-3"> 
        <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
   
    </div>
    <div class="col-sm-3"> 
        <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
   
    </div>
        <div class="col-sm-3"> 
        <h3>Our Social Media</h3>
           <a href="https://www.facebook.com/">
       <img id="footerimg" src="f1.png" alt="facebook" style="height: 50px;" >
                             </a>
             <a href="https://www.youtube.com/">
   <img id="footerimg" src="y2.png" alt="youtube" style="height: 50px;" >
            </a>
             <a href="https://twitter.com/?lang=en">
            <img id="footerimg" src="t1.png" alt="twitter" style="height: 50px;" >
                 </a>
    </div>
    </div>
    
    
</footer>
    </div>
    <script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "25%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["plastic bags", "canvas bags","luggage bags","hand bags","about us","contact us","our mission","register","home","login","checkout info"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
</body>
</html>