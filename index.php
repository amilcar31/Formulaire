
<?php
$name = "Billy";
$lastname = "Elliot";
$profil_photo = "http://unsplash.it/100/100";


$images = [
    "http://unsplash.it/100/100",
    "http://unsplash.it/100/200",
    "http://unsplash.it/200/200",
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <p> <?php echo "Nom: $name"; ?> </p>
    <p> <?="Nom: $name";?> </p>
    
    <div class="usecard">
        <h2> <?=$name;?>  </h2>
        <h2>  <?=$lastname;?> </h2>
        <img src="http://unsplash.it/100/100">
    </div>
    
    
    <div class="images">
    <ol>
        <?php foreach($images as $image):?>
        <li> <img src="<?=$image?>",alt=""></li>
        <?php endforeach; ?>
    
    </ol>
h   </div>
    
    <form action="/add-user.php" method="post">
      <input type="text" name="name">
      <input type="email" name="email">
      <input type="password" name="password">
    
      <input type="submit" value="Submit">
    </form> 
    <style>
    
    </style>
</body>
</html>