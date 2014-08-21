<?php
include '../phps/index.php';
?>
<html>
<head>
  <title>Example Old Paradigm Programming</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>Exercise 03</h1>

<?php
  if($error===true) {
?>
  <p class="error">There was an error in your input</p>
<?php } ?>

<form name="form1" action="index.php" method="post">
  <label for="name">Name: </label><input type="text" name="name" value="<?=$name?>"/>
  <input type="submit" value="Send" />
</form>

<?php
if($result){
  echo "<p class=\"reverse\">Your reversed string is: $result</p>";
}
?>
</body>
</html>