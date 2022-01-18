<?php
session_start();
require_once('lib.php');

if(array_key_exists('ID', $_REQUEST)){

  $id= $_REQUEST['ID'];
}
else{
  $id= 'home';
}

$stylesheet = $objects[$id]['stylesheet'];
include ('header.php');
?>

  <div id="container">
    <div id="menu">

<?php echo Menu($menu);?>

    </div>
    <div id="content">

<?php include($objects[$id]['tpl']);

    if(isset($_REQUEST['submit'])){
      $_SESSION['nomeutente'] = $_REQUEST['nomeutente'];
      $_SESSION['larg'] = $_REQUEST['larg'];
      $_SESSION['alt'] = $_REQUEST['alt'];
      $_SESSION['pcol'] = $_REQUEST['pcol'];
      $_SESSION['scol'] = $_REQUEST['scol'];
    }
?>
  </div>
</div>

<?php include ('footer.php');?>
