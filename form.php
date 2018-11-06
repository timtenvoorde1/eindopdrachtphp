<?php include ('includes/header.php'); ?>

<h1 class="header center text-lighten-4">Wil je mij wat vragen?</h1>
	<div class="row center">
	    <h5 class="header col s12">Doe dat via het formulier hieronder!</h5>
	</div>
	<div class="row">	
	    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="col s12 l6">
	      <div class="row">
	        <div class="input-field col s6 offset-s9">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="name" name="name" type="text" class="validate">
	          <label for="naam">Naam</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6 offset-s9">
	          <i class="material-icons prefix">email</i>
	          <input id="email" type="email" name="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	      </div>

	      <div class="row">
	      	<div class="input-field col s6 offset-s9">
			    <select name="JaNee">
			      <option value="ja" name="ja">Ja</option>
			      <option value="nee" name="nee">Nee</option>
			    </select>
			    <label>Bent u 18 jaar of ouder?</label>
			  </div>
	      </div>
	      <div class="row">
	      	<div class="input-field col s6 offset-s9">
	      		<p>
			    <label>
				    <input name="gender" value="man" type="radio" />
				    <span>Man</span>
				</label>
				</p>
				<p>
				<label>
				   <input name="gender" value="vrouw" type="radio" />
				   <span>Vrouw</span>
				</label>
				</p>
				<p>
				<label>
				   <input class="with-gap" value="anders" name="gender" type="radio" />
				   <span>Anders</span>
				</label>
				</p>
				<p>
			      <label>
			        <input type="checkbox" class="filled-in" value="fortnite" name="checkbox[]" />
			        <span>Fortnite</span>
			      </label>
    			</p>
    			<p>
			      <label>
			        <input type="checkbox" class="filled-in" value="pubg" name="checkbox[]" />
			        <span>League of Legends</span>
			      </label>
    			</p>
    			<p>
			      <label>
			        <input type="checkbox" class="filled-in" value="csgo" name="checkbox[]" />
			        <span>CSGO</span>
			      </label>
    			</p>
			</div>
		  </div>
	      <div class="row">
	        <div class="input-field col s6 offset-s9">
	          <i class="material-icons prefix">mode_edit</i>
	          <textarea id="textarea" name="bericht" class="materialize-textarea"></textarea>
	          <label for="icon_prefix2">Bericht</label>
	        </div>
	      </div>
	      <button class="btn waves-effect waves-light col s6 offset-s9" type="submit" name="submit">Verstuur
	    	<i class="material-icons right">send</i>
	  	  </button>
	    </form>
  	</div>

  <?php
  	if (isset($_POST['submit']))
  	{
  		$naam = htmlspecialchars($_POST['name']);
  		$email = htmlspecialchars($_POST['email']);
  		$bericht = htmlspecialchars($_POST['bericht']);
  		$checkbox = $_POST['checkbox'];
  		$gender = $_POST['gender'];
  		$janee = $_POST['JaNee'];
  		
  		echo $naam . "<br />";
  		echo $email . "<br />";
  		echo $bericht . "<br />";
  		echo $gender . "<br />";
  		echo $janee . "<br />";

  		foreach ($checkbox as $value) 
  		{
  			echo $value . "<br />";
  		}

  		// if (empty($naam)) 
  		// {
  		// 	echo 'Vul uw naam in alstublieft..<br />';
  		// }

  		// if (empty($email))
  		// {
  		// 	echo 'Vul uw email is alstublieft..<br />';
  		// }

  		// if (empty($bericht))
  		// {
  		// 	echo 'Vul uw bericht is alstublieft..<br />';
  		// }

  		// if (empty($janee))
  		// {
  		// 	echo 'Klik alstublieft ja als u 18 jaar of ouder bent, of nee als u jonger dan 18 bent.';
  		// }

	   // 	if ($_POST['JaNee'] == 'ja') 
	  	// {
	  	// 	echo 'U bent 18 jaar en ouder.<br/>';
	  	// }

	  	// if ($_POST['JaNee'] == 'nee') 
	  	// {
	  	// 	echo 'U bent jonger dan 18.<br/>';
	  	// }
	  	// if ($_POST['gender'] == 'man')
	  	// {
	  	// 	echo 'U bent een man';
	  	// }

	  	// if ($_POST['gender'] == 'vrouw')
	  	// {
	  	// 	echo 'U bent een vrouw';
	  	// }
	  	
	  	// if ($_POST['gender'] == 'anders')
	  	// {
	  	// 	echo 'U bent anders';
	  	// }

  		// else 
  		// {
  		// 	echo 'Uw bericht is verzonden!';
  		// }
  	}
  ?>

<?php include ('includes/footer.php'); ?>