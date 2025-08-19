<?php

    if(session_status() == PHP_SESSION_NONE)
    {
      session_start();
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Index</title>
</head>

<body>

<?php if(isset($_SESSION['ime'])): ?>
    <h3>Dobrodosao <?=$_SESSION['ime']?></h3>
    <a href="prekiniSesiju.php">Obrisi sesiju</a>
<?php  else:  ?>
    <form action="logika.php" method="post">
      <input type="text" name="ime">
      <button>Zapamti ime</button>
    </form>
<?php endif; ?>
    
</body>

</html>