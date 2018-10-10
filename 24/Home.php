<?php
if (session_id() == '' || !isset($_SESSION)) {

session_start();
 


}
  
?>
<!doctype html>
<html lang="en">
<head>
<title>Home </title>
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
    


<div id="myPictures" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

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

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myPictures" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myPictures" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div id="myPageContent" class="container text-center">    
 
  <div class="row">
    <div class="col-sm-4">
      <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. </p>
        
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    </div>
    <div class="col-sm-4"> 
        <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. </p>
        
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p> 
    </div>
    <div class="col-sm-4">
      <h3>Project 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. </p>
        
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    </div>
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