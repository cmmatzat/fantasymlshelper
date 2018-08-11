<?php
  // Define path constants
  define("DS", DIRECTORY_SEPARATOR);
  define("ROOT",  $_SERVER["DOCUMENT_ROOT"] . DS);

  define("FRAMEWORK_PATH", ROOT . "framework" . DS);
  define("APP_PATH", ROOT . "application" . DS);
  
  define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
  define("VIEW_PATH", APP_PATH . "views" . DS);


  // Include important base classes
  include_once(FRAMEWORK_PATH . 'Router.class.php');
  include_once(FRAMEWORK_PATH . 'Controller.class.php');


  // Define the default Controller
  defined("DEFAULT_CONTROLLER") or define("DEFAULT_CONTROLLER", "DefaultController");
?>