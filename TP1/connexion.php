<?php 
$titre = "Connexion";
include 'header.php'; ?>
	<div class="container">
		
		<form action="traitement.php" method="post">
			<div class="form-group">
				<label for="login" class="form-label">login</label>
				<input type="text" class="form-control" name="login" required="true">
			</div>
			<div class="form-group">
				<label for="password" class="form-label">password</label>
				<input type="password" class="form-control" name="password" required="true">
			</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-success" name="connexion">
					Connexion
				</button>

				<a href="inscription.php" class="btn btn-primary"> Inscription</a>

			</div>

		</form>

	</div>
<?php include 'footer.php';?>
