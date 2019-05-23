<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title>ME</title>
	<link href="me.css" rel="stylesheet" />
</head>
<body>
	<header>
		<h3 class="tj-head">Tijani</h3>
	</header>

	<center>
		<form method="post">
			<div>
				<input class="tj-input" type="text" name="title" placeholder ="Title"/>
			</div>
			<div>
				<input class="tj-input" type="text" name="description" placeholder ="Description" />
			</div>
			<div>
				<input class="tj-input" type="file" accept="application/zip" name="file" />
			</div>

			<button class="tj-btn" name="submit">Got It</button>
		</form>
	</center>

</body>
</html>