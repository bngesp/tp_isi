<?php 
$titre = "Inscription";
include 'header.php'; ?>


<div class="container">
	
	<form action="traitement.php" method="post">
		<div class="form-group">
				<label for="nom" class="form-label">nom</label>
				<input type="text" class="form-control" name="nom" required="true">
			</div>
	<div class="form-group">
				<label for="prenom" class="form-label">prenom</label>
				<input type="text" class="form-control" name="prenom" required="true">
			</div>

	<div class="form-group">
				<label for="mail" class="form-label">mail</label>
				<input type="email" class="form-control" name="mail" required="true">
			</div>
			<div class="form-group">
				<label for="login" class="form-label">login</label>
				<input type="text" class="form-control" name="login" required="true">
			</div>

			<div class="form-group">
				<label for="password" class="form-label">password</label>
				<input type="password" class="form-control" name="password" required="true">
			</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-success" name="inscription">
					Inscription
				</button>

				<a href="connexion.php" class="btn btn-primary"> retour</a>

			</div>


	</form>


</div>



<?php include 'footer.php';?>