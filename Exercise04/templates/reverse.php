<html>
<head>
  <title>Example Application Mode Thinking</title>
</head>
<body>
<style type="text/css">
  p.error {
    border-width: 1px;
    border-color: red;
    color: red;
  }
  p.reverse {
    border-width: 1px;
    border-color: green;
    color: green;
  }
</style>

<h1>Exercise 04</h1>

<?php
if ($name == "") {
?>
  <p class="error">There was an error in your input</p>
<?php
}
?>

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