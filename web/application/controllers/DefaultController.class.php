<?php

class DefaultController extends Controller
{	

  public function __construct()
  {
    parent::__construct();
  }

  public function index($args = false)
  {
    echo "default/index.php";
  }

}

?>