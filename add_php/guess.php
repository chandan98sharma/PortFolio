<html>
<head>
<title>Chandan Sharma 352aadcd</title>
</head>
<body>
<h1>Welcome to my guessing game</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
Guess number
<input type="text" name="guess">
<input type="submit">
</form>


<?php 
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 39 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 39 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }

?>

</body>
