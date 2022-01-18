<?php if (in_array($_SESSION['alt'], $acceptedValues) && in_array($_SESSION['larg'], $acceptedValues)) : ?>

<div class="corpo">
      <div>
        <h1 id="chess-title">Ciao<?php if(isset($_SESSION['nomeutente']) && $_SESSION['nomeutente'] != '') echo ' ' . 
            $_SESSION['nomeutente']; ?>, ecco la tua scacchiera!</h1>
      </div>
          <?php echo CreateChessboard($_REQUEST['alt'], $_REQUEST['larg']); ?>
    </div>

<?php else : ?>

<div class="corpo">
  <h1>Genio, metti dei valori validi!</h1>
</div>

<?php  include('tpl/form.php'); 
       endif; ?>