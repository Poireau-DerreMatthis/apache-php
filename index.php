<form action="" method="post">
<p>nom : <input type="text" name="firstname" /></p>
<p><input type="submit" value="OK"></p>
</form>

<?php
if ($_POST) {
}

if ($_POST) {
  var_dump($_POST);
  $mysqlConnection = new mysqli("mysql", "root", "Not24get","NON");
  $sqlQuery = 'INSERT INTO utilisateur (firstname, `name`) VALUES ("' . $_POST['firstname'] . '", "test");';
  $mysqlConnection->query($sqlQuery);
}
?>