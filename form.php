<?php include ('includes/header.php'); ?>

<h1 class="header center text-lighten-4">Wil je mat wat vragen?</h1>
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

  		if (empty($naam)) 
  		{
  			echo 'Vul uw naam in alstublieft..<br />';
  		}

  		if (empty($email))
  		{
  			echo 'Vul uw email is alstublieft..<br />';
  		}

  		if (empty($bericht))
  		{
  			echo 'Vul uw bericht is alstublieft..<br />';
  		}

  		else 
  		{
  			echo 'Uw bericht is verzonden!';
  		}
  	}
  ?>

<?php include ('includes/footer.php'); ?>