<?php
  // Get the config file to set up the webpage
  require_once( $_SERVER["DOCUMENT_ROOT"] . '/config.php' );

  // Start the router
  $router = new Router();
  $router->route($_SERVER['REQUEST_URI']);
?>