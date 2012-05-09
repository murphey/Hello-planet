
<?php
//include"";
if (isset($_POST['login_naam'], $_POST['wachtwoord']))
                {
    $verbinding = new mySQLi('localhost' , 'root' , '' , 'php_webkrant');
		 

    if (!$verbinding)
    {
        
        exit ("kon geen verbinding maken met database");
        
    }
    $login_naam = $verbinding->real_escape_string($_POST['login_naam']);
	$wachtwoord =  $verbinding->real_escape_string( $_POST['wachtwoord'] );
	$sql  =  'SELECT * FROM gebruikers WHERE login_naam = \''
		. $login_naam. '\' ';
        
    $geluk = $verbinding->query($sql);
    if (!$geluk)
    {
        
        exit("Kon geen gebruiker ophalen");
    }
    if (0 < $geluk->num_rows)
    {
        
        exit('gebruiker bestaat al');
    }
    $sql = 'INSERT INTO gebruikers'
    .'(login_naam, wachtwoord,)VALUES'

        .'(\''.$login_naam. '\',\''.$wachtwoord.'\')';
    $gelukt = $verbinding->query($sql);
    if (!$gelukt)
    {
        exit ('kon geen gebruiker toevoegen');
    }
    echo "Welkom je bent toegevoegd $login_naam";
}
echo "mama";
?>
<form action="" method="post">
	<fieldset>
		<legend>registreren</legend>
		<dl>
			<dt>
				<label for="loginnaam_box">login naam</label>
			</dt>
			<dd>
				<input type="text" name="login_naam" id="loginnaam_box" />
			</dd>
			<dt>
				<label for="wachtwoord_box">wachtwoord</label>
			</dt>
			<dd>
				<input type="password" name="wachtwoord" id="wachtwoord_box" />
			</dd>
                        <dt>				
                        
                        <label for="email_box">email</label>
			</dt>
			<dd>
				<input type="text" name="email" id="email_box" />
			</dd>
		</dl>
		<input type="submit" value="registreren" />
	</fieldset>
</form>


