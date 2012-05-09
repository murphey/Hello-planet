 <?php 
 session_start(); 
 // makes an array 
 $colors=array('red', 'yellow', 'blue'); 
 // adds it to our session 
 $_SESSION['color']=$colors; 
 $_SESSION['size']='small'; 
 $_SESSION['shape']='roundsper'; 
echo "Done";
 ?> 