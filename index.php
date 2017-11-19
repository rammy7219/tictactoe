<?php include 'game.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="description" content="Free Web tictactoe game">
	<meta name="keywords" content="Game,Strategy,Fun">
	<meta name="author" content="Web2Dezine">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>TicTacToe</title>
</head>
<body bgcolor="#3490DE">
<h1 align="center">TicTacToe Game</h1>
<form name="tictactoe" method="post" action="index.php" align="center">
<?php
for ($i=0; $i<=8; $i++) {
	printf('<input type="text" name="box%s" value="%s" id="box">', $i, $box[$i]);
	if ($i == 2 || $i == 5 || $i == 8) {
		print('<br />');
	}
}
if ($winner == 'n') {
	print('<input type="submit" name="submitbtn" value="Start" id="start">');
} else {
	print('<input type="button" name="newgamebtn" value="Play Again" onclick="window.location.href=\'index.php\'">');
}
?>
</form>

</body>
</html>
