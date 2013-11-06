<html>
  <head>
    
  </head>
  <body>
    <?php if (! empty($_POST)) { ?>
    <h1>Posted!</h1>
    <p><?php print_r($_POST); ?></p>
    <?php } else { ?>
    <h1>Hello test2!</h1>
    <form method="post">
      Field 1
      <input type="text" name="field1">
    </form>
    <?php } ?>
  </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

