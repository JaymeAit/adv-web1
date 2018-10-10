
 <?php
session_start();
$_SESSION["contactMessage"]=" your information has been submitted";
   $test12= $_POST["myInput"];
echo $test12;

if ($test12== "plastic bags"){
    
  header('Location: plasticBags.php');  
}
else if ($test12=="canvas bags"){
    header('Location: canvasBags.php');
}
else if ($test12=="luggage bags"){
    header('Location: luggageBags.php');
}
else if ($test12=="hand bags"){
    header('Location: handBags.php');
}
else if ($test12=="about us"){
    header('Location: aboutUs.php');
}
else if ($test12=="contact us"){
    header('Location: contactUs.php');
}
else if ($test12=="our mission"){
    header('Location: ourMission.php');
}
else if ($test12=="register"){
    header('Location: register.php');
}
else if ($test12=="home"){
    header('Location: Home.php');
}
else if ($test12=="login"){
    header('Location: login.php');
}
else if ($test12=="checkout info"){
    header('Location: checkoutInfo.php');
}
else{
    header('Location: Home.php');
}




?> 








         
          