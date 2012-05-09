<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Login slider (artsmixer.com)</title>
	
	<style type="text/css" media="screen">
		/*standaart reset*/
		* { margin: 0; padding: 0;} 
		/*zet achtergrondkleur*/
		body { background: #666;}
		/*zet standaart paragraaf afstand*/ 
		p { padding: 0 0 10px 0;} 
		/*link kleur en zonder onderlijn*/
		a { text-decoration: none; color: #000;} 
		/*als ik eroverheen ga..*/
		a:hover { text-decoration: underline;} 
		/*voor de inputveld*/
		.input { padding: 4px;} 
		
		#login-wrap {
			/*absoluut links-boven, anders verschuift de boel*/
			position: absolute; 
			/*positie van absolute*/
			top: 0; left: 0;
			width: 200px;
			background: #fff;
		}
		
		.knop {
			padding: 15px;
			border-bottom: 1px dotted #eee;
		}
		.knop a {
			/*voor de klik area*/
			display: block; 
		}
		
		#uitklappen { /*Dit is een uitklap div*/
			/*even verbergen voor jQuery*/
			display: none; 
		}
		#uitklappen div {
			padding: 15px; 
			/*staat hier omdat anders de animatie verspringt!*/
		}
	</style>

	<script src="http://www.artsmixer.com/wp-content/themes/artsmixer/js/jquery-1.2.6.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" charset="utf-8">
		// standaart begin lijn
		$(document).ready(function(){ 
			
			// als ik op een link (a) klik functie
			$('a').click(function(){ 
				// klap dan (#uitklappen) uit
				$('#uitklappen').slideToggle(); 
			// sluit de click functie
			}); 
			
		}); // standaart afsluit lijn
	</script>
	
</head>

<body>
	<div id="login-wrap">
		<p class="knop"><a href="#">Admin Login</a></p>
		<div id="uitklappen">
			<div>
				<p>Login slider voor admin..</p>
				<form name="loginform" id="loginform" action="login.php" method="post">
					<p><label>Username<br />
							<input type="text" class="input"  name='username' size="20" />
						</label></p>
					<p><label>Password<br />
							<input type="password" class="input"  name='password' size="20" />
						</label></p>
					<p class="submit">
						<input type="submit" class="submit" value="Log Me In"/></p>
				</form>

			</div>
		</div> <!-- /uitklappen -->
	</div> <!-- /login-wrap -->
</body>
</html>
