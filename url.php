<html>
  <body>
    <?php
    $file = file_get_contents($_REQUEST["url"]);
    echo $file;
    ?>
  </body>
</html>
