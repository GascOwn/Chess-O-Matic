<div class="corpo">
<h1>Benvenuto, crea la tua scacchiera!</h1>
<form action="pagina.php" method="post">
<?php 

  echo createLabel("nomeutente", "Nome utente", CreateInput("nomeutente", "text", "")) . '<br><br>';
  foreach($form as $k => $m){
    for($i = 0; $i < count($form[$k]["labels"]); $i++){
      echo createLabel($form[$k]["id"][$i], $form[$k]["labels"][$i], CreateSelect($form[$k]["id"][$i], $form[$k]["values"]));
    }
  }
  foreach($noLabelInputs as $k => $m){
    echo createInput($noLabelInputs[$k]["name"], $noLabelInputs[$k]["type"], $noLabelInputs[$k]["value"]);
  }

?>
</form>
</div>