<?php
  // HEAD
  // echo -> para mostrar / imprimir
  function head_practice($title, $descripcion, $autor, $estilo) {
?>

  <html>
    <head>
      <title><?php echo $title; ?></title>
      <meta charset="UTF-8">
      <meta name="description" content="<?php echo $descripcion; ?>">
      <meta name="author" content="<?php echo $autor; ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo $estilo; ?>">

    </head>

<?php
    }
?>

<?php
// HEADER
  function header_practice($imagen) {
?>
    <header>
      <img src="<?php echo $imagen; ?>">
      <button>SIGN IN</button>
      <button>PRICES</button>
      <br><br>
    </header>
<?php
  }
?>

<?php
function sum($num_1, $num_2, $codigo_1, $codigo_2) {
  if ($codigo_1 == $codigo_2) {
    return ($num_1 + $num_2);
  } else {
    return "No captcha match.";
  }
}

function body_cal() {
  ?>

  <body>
    <form method="post" action="">
      First Number: <input type="number" name="n1">
      <br>
      Second Number: <input type="number" name="n2">
      <br><br>
      
      <input type="text" value="<?php echo $random_number = rand(10000, 99999); ?>" readonly>

      <br>
      Coloque el codigo que ve: 
      <input type="text" name="captcha">


      <input type="hidden" name="codigo" value="<?php echo $random_number; ?>">
      <br>
      

      <input type="submit" value="SUM">
      <br>
    </form>

  <?php
}
?>





<?php
// FOOTER
  function footer() {
?>


  


<?php
  }
?>
  </body>
  </html>
  


