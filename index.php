<?php 
session_start(); 
$token = bin2hex(random_bytes(32));
?>

<!DOCTYPE html>

<!--
  ____               _      ____        _       _   _                 
 |  _ \__      _____| |__  / ___|  ___ | |_   _| |_(_) ___  _ __  ___ 
 | |_) \ \ /\ / / _ \ '_ \ \___ \ / _ \| | | | | __| |/ _ \| '_ \/ __|
 |  __/ \ V  V /  __/ |_) | ___) | (_) | | |_| | |_| | (_) | | | \__ \
 |_|     \_/\_/ \___|_.__(_)____/ \___/|_|\__,_|\__|_|\___/|_| |_|___/
                                                                      
 
                                                           Version 2.0
 
                               Patrick Pulfer <patrick@pweb.solutions>
 
-->


<?php

// Debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


// Importing libraries
    require './libraries/header.php';
    require './libraries/Parsedown.php';
    $Parsedown = new Parsedown();

// Pages according to IFs	
 	if(isset($_POST['action'])){ } // Perform Action
  elseif(isset($_GET['o']) && $_GET['o'] == 'success') {require "./pages/order_success.php";}  // Page: Registration Forms for events
	else{require './pages/first.php';}	

// Others
  require './libraries/footer.php';
?>

</body></html>