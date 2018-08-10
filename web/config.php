<?php
  // Define path constants
  define("DS", DIRECTORY_SEPARATOR);
  define("ROOT",  $_SERVER["DOCUMENT_ROOT"] . DS);

  define("FRAMEWORK_PATH", ROOT . "framework" . DS);
  define("APP_PATH", ROOT . "application" . DS);
  
  define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
  define("VIEW_PATH", APP_PATH . "views" . DS);

  // Include important base classes
?>