<?php
if (session_id() == '' || !isset($_SESSION)) {

session_start();



}
?>
<!doctype html>
<html lang="en">
<head>
<title>checkout </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
  <style>
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
        
        <li id="header-item1"> <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form></li> 
        
             
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
</body>
</html>