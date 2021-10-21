<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">Formulaire d'inscription</h1>
	<div class="container">
		<form method="POST" action="action.php">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" placeholder="Entrez votre nom" name="name">
			</div>
			<div>
				<label for="firstname">Firstname</label>
				<input type="text" class="form-control" placeholder="Entrez votre prénom" name="firstname">
			</div>
			<div>
				<label for="email">email</label>
				<input type="email" class="form-control" placeholder="Entrez votre email" name="email">
			</div>
			<button type="submit" class="btn btn-primary mt-5">Valider</button>
		</form>

	</div>









</body>
</html>