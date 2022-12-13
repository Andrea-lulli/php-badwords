<?php 

$testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore';

$toCensure = $_GET['censure'];

$censored = ' *** ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name='censure'>
</form>



<div>
    La lunghezza testo è:
    <?php echo strlen($testo) ?> 
    caratteri 
  </div>

  

  <div>
   <h2>Testo: </h2><?php echo $testo ?>
  </div>

  <div>
    <h2>Testo censurato :</h2> <?php echo str_replace($toCensure, $censored, $testo)?>
  </div>
    
</body>
</html>




