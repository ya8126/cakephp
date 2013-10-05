<?php

// app/webroot/Security_data.php
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
</head>

<body>
	<h1>SecurityData</h1>
	<form action="SecurityData/index" method="post">
		email:<input type="text" name="data[Xuser][email]" ><br>
		name:<input type="text" name="data[Xuser][name]"><br>

		pass:<input type="password" name="data[Xuser][pass]"><br>
		ID:<input type="text" name="data[Xuser][id]"><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>