<html>
  <head>
    
  </head>
  <body>
    <?php if (! empty($_POST)) { ?>
    <h1>Posted!</h1>
    <p><?php print_r($_POST); ?></p>
    <a href="https://m.wonga.co.za/">Go to site</a>
    <?php } else { ?>
    <h1>Hello test2!</h1>
    <form method="post">
      <label for="field1">Field 1</label>
      <input id="field1" type="text" name="field1">
      <br />
      <label for="field2">Field 2</label>
      <input id="field2" type="text" name="field2">
      <br />
      <input type="submit" value="Submit" />
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

