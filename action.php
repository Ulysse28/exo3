<?php
session_start();

function random_password($minLength, $maxLength)
{
	$length = rand($minLength, $maxLength);
	$password = "";
	$alphas = range('A', 'Z');
	for($i = 0; $i < $length; $i++)
	{
		$password.=$alphas[rand(0, 25)];
	}
	return $password;	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vos infos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<?php
	if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']))
	{
		$name = htmlspecialchars($_POST['name']);
		$firstname = htmlspecialchars($_POST['firstname']);
		$email = htmlspecialchars($_POST['email']);
		$password =  random_password(7, 15);

		$_SESSION['name'] = $name;
		$_SESSION['firstname'] = $firstname;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		?>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1>Vos informations</h1>
					>			</div>
					<div class="col-12">
						<p>Votre prénom : <?= $name;?></p>
					</div>
					<div class="col-12">
						<p>Votre prénom : <?= $firstname;?></p>
					</div>
					<div class="col-12">
						<p>Votre prénom : <?= $email;?></p>
					</div>

					<div class="col-12">
						<p>Votre mot de pass: <?= $password;?></p>
					</div>
				</div>
				<div class="col-12">
					<a href="connexion.php">Votre page de connexion</a>
				</div>
			</div>
			<?php
		}
		else
		{
			echo "<h3 class='text-center'>Attention, remplir tous les champs !!</h3>";
		}

		?>

	</body>
	</html>