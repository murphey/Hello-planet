<?php
    $title = $_POST['title'];
    $price = $_POST['price'];
    $plu = $_POST['plu'];

    //echo them so we can see whats going on.
    echo 'Title: '.$title.'<br/>Price: '.$price.'<br/>PLU: '.$plu;

    // For Debugging try var_dumping $_POST
    var_dump($_POST); // This will show all the posted variables only
    var_dump($_REQUEST) // This will show all GET & Posted variables.

?><form action="../pages/uwgegevens.php" method="POST">
<input type="text" name="title" value="<?php echo $title; ?>" />
<input type="text" name="price" value="<?php echo $price; ?>" />
<input type="text" name="plu" value="<?php var_dump($plu);  ?>" />
<input type="submit" name="submit" value="Submit"/>
</form>