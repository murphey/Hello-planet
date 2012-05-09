<?php

session_start();
error_reporting(0);
$page = '../index.php';
$page = '../pages/winkelmandje.php';
$_SESSION["totaal"] = $totaal;

include 'connect.php';
if (isset($_GET['toevoegen']))
{
    $kwaliteit = mysql_query('SELECT product_id, kwaliteit FROM producten WHERE product_id='.mysql_real_escape_string((int)$_GET['toevoegen']));
    while ($kwaliteit_row = mysql_fetch_assoc($kwaliteit))
    {
        if ($kwaliteit_row['kwaliteit']!=$_SESSION['mandje_'.(int)$_GET['toevoegen']])
        {
            $_SESSION['mandje_'.(int)$_GET['toevoegen']]+='1';
        

        }
    }
                           header('Location: '.$page);

} 
 if (isset ($_GET['wissen']))
 {
     
     $_SESSION['mandje_'.(int)$_GET['wissen']]--;
          header ('Location:'. $page);

 }
 if (isset ($_GET['verwijderen']))
 {
     $_SESSION['mandje_'.(int) $_GET['verwijderen']]='0';
     header ('Location:'. $page);
 }
//  if ($_POST[naamm] <= $totaal) 
//  {
//      $_SESSION['mandje_'.(int) $_GET['naamm']]='22';
//      $_POST['naamm']+2;
//      echo "www";
//      
//  }
 

//    if ($_POST[naa] == "add") {
//  $resultaat = $_POST[naamm] + 2;
//           echo $resultaat;
//}

if (isset ($_POST['toevoegen']))
{        $_SESSION['mandje_'.(int)$_POST['toevoegen']]+='1';
         header ('Location:'. $page);

}
if (isset ($_POST['verwijderen']))
{        $_SESSION['mandje_'.(int)$_POST['verwijderen']]--;
         header ('Location:'. $page);
}
if (isset ($_POST['wijzigen']))
{
         $_SESSION['mandje_'.(int)$_POST['wijzigen']]=$_POST['aantal'];
         header('Location:'. $page);
}
 function mandje()
 
 { 
       foreach($_SESSION as $naam => $value){

     if ($value>0) {
         if (substr($naam, 0, 7)=='mandje_')
         {
             $product_id = substr($naam, 7, (strlen($naam)-7));
//             echo $value. '<br/>';
             $get = mysql_query('SELECT product_id, naam, prijs FROM producten WHERE product_id='.mysql_real_escape_string((int)$product_id));
        
             while($get_row= mysql_fetch_assoc($get))
             { 
               
                        
                 $sub = $get_row['prijs']*$value;
                

//                          $naamm = $_POST['naamm']+1;
                        echo $naam ;  
                 echo '<br><br><br><table class="text_table">
								<tr>
                                                                    
								<td BGCOLOR="F0F0F0"><b>'.$get_row['naam'].'</td>
                                                                <td>

                                                                    <form action="./winkelmandje.php" method="POST">
                                                                        <input type="hidden" name="verwijderen" value="'.$product_id.'" />
                                                                        <input type="submit" value="-" />
                                                                    </form>
                                                                        <form action="./winkelmandje.php" method="POST">
                                                                        <input type="hidden" name="wijzigen" value="'.$product_id.'" />
                                                                        <input type="text" name="aantal" size="2" value="'.$value.'" />
                                                                        <input type="submit" value="wijzigen" />
                                                                    </form>
                                                                    <form action="./winkelmandje.php" method="POST">
                                                                        <input type="hidden" name="toevoegen" value="'.$product_id.'" />
                                                                        <input type="submit" value="+" />
                                                                    </form>
                                                                    

                                                                    
                                                                    <!--
                                                                    <b>'.$value.' <a href="../php/mandje.php?wissen='
                         .$product_id.'"><input type=submit value="-"></a>
                                                                    <a href="../php/mandje.php?toevoegen='.$product_id.'"><input type=submit value="+"></a></b>
                                                                    -->
                                                                </td>
                                                                <td><b>'.number_format($get_row['prijs'],2).'</b></td>
								<td><b>&euro; '.$sub
                         .' <br/><a href ="../php/mandje.php?verwijderen='. $product_id.'"><p>wissen</p></a><br/></b>
                                                                </td>
</tr>           

							'. '<br/><br/> </table> ' ;              
      
//<a href ="../php/mandje.php?naamm='. $product_id.'">[naamm]</a><br/>
//                        number_format($sub, 2).'
//                             <a href="../php/mandje.php?wissen='.$product_id.'">[-]</a>
//                             <a href="../php/mandje.php?toevoegen='.$product_id.'">[+]</a>
//                             <a href ="../php/mandje.php?verwijderen='. $product_id.'">[verwijderen]</a><br/>'; 
                 
               
//                    echo ' Winkelwagen  '.$value.' producten &euro; ' . number_format($get_row['prijs'], 2);   
                    
     
             } 
        }
           $totaal += $sub;  
           $tot = 'hallo';
           
     }
                        //     else 
                        //     {
                        //         
                        //     echo "Je mandje is leeg schat.";
                        //     }
//       echo $naam. 'has value '.$value.'<br/> ';
     }

     if ($totaal==0 )
     {
      echo "Uw winkelmandje is helaas leeg.";

     }
     else {
         
//            echo ' Totaal: &euro; '.  number_format($totaal, 2);
      

          }
       
//echo $value;
 
    }

    function testa (){
        echo '&nbsp; &nbsp;  ';
        //echo '<h1>' . array_sum( $_SESSION ) . '</h1>';
//        var_dump($_SESSION);

     foreach($_SESSION as $naam => $value){

     if ($value>0) {
         if (substr($naam, 0, 7)=='mandje_')
         {
             $product_id = substr($naam, 7, (strlen($naam)-7));
             $get = mysql_query('SELECT product_id, naam, prijs FROM producten WHERE product_id='.mysql_real_escape_string((int)$product_id));
        
             while($get_row= mysql_fetch_assoc($get))
             { 
                 $sub = $get_row['prijs']*$value;
                 $naamP =$get_row['naam'].'<br>';
                
                 } 
        }
           $totaal += $sub; 

     }
                     
     }

     if ($totaal==0 )
     {
      echo "Uw winkelmandje is helaas leeg.";

     }
     else{
         echo '<table><tr><td class="text_table_totaal"><p class="text_winkelmandje"><b>  Totaal artikelen ('. array_sum( $_SESSION ) .') :&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   &euro;'.  number_format($totaal, 2).'</b></p></tr> </table></br>                                                                
             <form action="uwgegevens.php" method="POST">
             <br> <br>
        <input type="hidden" name="totaal_id" value="'. $totaal.' " />
            <input type="hidden" name="naam_id" value="'. $naamP.' " />
      <div id="bestelling">  <input type="image" src="../images/buttons/verder_met_bestelling.png" value="" /> </div>                                                                         
        </form>';


     }


     
    }
function producten ( $product_id )
{
    $get = mysql_query('SELECT product_id, naam, beschrijving, prijs FROM producten WHERE product_id = '.$product_id.' ORDER BY product_id DESC');
    if (mysql_num_rows($get)==0)
    {
       echo "Er is geen product om te weergeven"; 
    }
    else {
        
        While ($get_row = mysql_fetch_assoc($get)) 
        {
 
                echo '<h2>'.$get_row['naam'].'</h2><br /><p class="text_product">'.$get_row['beschrijving']. '</p><br/> &euro; ' .number_format( $get_row['prijs'], 2).'<a href="../php/mandje.php?toevoegen='.$get_row['product_id'].'"><div id="button_toevoegen_winkelmandje"></div></a>.';
                
                                      

                }
                        

    } 

    
}

?>

<!--<form action="../pages/uwgegevens.php" method="POST">
 <INPUT type = "text"  size="3"  name = "naamm" value="
 <?php// echo $product_id; ?> ">  
  <INPUT type = "submit"  value ="aantal" name = "call">
  <input type="radio" name="naa" value="add"> add
  <input type="radio" name="naa" value="wissen"> wis<br>
</form>-->

        

<?php //echo $hans; '
 ?>
