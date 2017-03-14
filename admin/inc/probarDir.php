<?php
if(is_dir("../../uploads/prueba nombre/"))
  echo "es dir";
 else {
     echo "no es dir";
     mkdir("../../uploads/prueba nombre/", 0777);
 }

 ?>
