<?php 

$testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore';

$toCensure = $_GET['censure'];

$censored = ' *** ';

?>



<form action="" method="get">
    <input type="text" name='censure'>
</form>



<p>
    La lunghezza testo è:
    <?php echo strlen($testo) ?> 
    caratteri 
  </p>

  

  <p>
   <h2>Testo: </h2><?php echo $testo ?>
  </p>

  <p>
    <h2>Testo censurato :</h2> <?php echo str_replace($toCensure, $censored, $testo)?>
  </p>
