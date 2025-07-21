
<?php
var_dump($_POST);
?> 

<?php
    var_dump($_POST["email"]);
    var_dump($_POST["password"]);
?> 

<h2> Bonjour <?= $_POST["name"] ?> !</h2>

<?php
if (isset($_POST["name"])) {
  // Je prépare la variable à afficher
  $name = $_POST["name"];
}
?>


<h2> Bonjour <?= $name ?> !</h2>