<?php header("Content-Type: text/css; charset=utf-8");
session_start();
require_once('../lib.php');
$width = $_SESSION['larg'] * 10;
?>

@import "style.php";

#scacchiera {
  width: <?php echo $width; ?>vh;
  margin: 10vh auto;
  border: 20px groove burlywood;
}

#chess-title {
  text-align: center;
}

.riga-scacchiera {
  display: flex;
  flex-direction: row;
}

.quadrato-primario, .quadrato-secondario {
  width: 10vh;
  height: 10vh;
}

.quadrato-primario {
  background-color: #<?php echo $_SESSION['pcol']; ?>;
}

.quadrato-secondario {
  background-color: #<?php echo $_SESSION['scol']; ?>;
}


