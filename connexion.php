<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page de connexion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row"><div class="col-12 text-center">
			<h1>Page de connexion</h1>
		</div>
	</div>
	<form method="POST" action="connexion.php">
		<div>
			<label for="exampleInputEmail1">email</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
		</div>
		<div>
			<label for="exampleInputEmail1">Password</label>
			<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php
if(!empty($_POST['email']) && !empty($_POST['password']) && isset($_POST['email']) && isset($_POST['password'])){
	if($_SESSION['email'] == $_POST['email'] && $_SESSION['password']  == $_POST['password'])
	{
		echo "<h3 class='text-center'>Vous êtes connecté</h3>";
	}
	else{
		echo "<h3 class='text-center'>Mauvaises informations, connexion impossible</h3>";
	}
}

?>














</body>
</html>





