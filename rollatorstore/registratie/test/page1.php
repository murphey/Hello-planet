 <?php 
 // this starts the session 
 session_start(); 
 
 // echo variable from the session, we set this on our other page 
 echo "Our color value is ".$_SESSION['color']; 
 echo "Our size value is ".$_SESSION['size']; 
 echo "Our shape value is ".$_SESSION['shape']; 
 ?> 