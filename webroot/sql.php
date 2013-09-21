<?php
// app/webroot/sql.php
	if (!empty($_POST['email'])&&!empty($_POST['pass'])){
		$conn = mysql_connect('127.0.0.1', 'cake', 'cakepass');
		mysql_select_db('cake', $conn);
		
		$sql = 	"SELECT * FROM xusers WHERE email='" . $_POST['email'] .
				"' AND pass='" . $_POST['pass'] . "' LIMIT 1";
		var_dump($sql);
		$result = mysql_query($sql, $conn);
		
		if ($result){
			$user = mysql_fetch_assoc($result);
		}
	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
</head>

<body>
<?php if(!empty($user)){ ?>
	<h1>Hello!!</h1>
<?php } else { ?>
	<form action="" method="post">
		email:<input type="text" name="email" ><br>
		pass:<input type="password" name="pass"><br>
		<input type="submit" name="submit">
	</form>
<?php } ?>
</body>
</html>