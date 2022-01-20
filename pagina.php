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

<?php echo menu($menu);?>

    </div>
    <div id="content">

<?php include($objects[$id]['tpl']);

    if(isset($_REQUEST['submit'])){
      foreach($_REQUEST as $k => $m){
        $_SESSION[$k] = $m;
      }
    }
?>
  </div>
</div>

<?php include ('footer.php');?>
