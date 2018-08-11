<?php

class DefaultController extends Controller
{	

  public function __construct()
  {
    parent::__construct();
  }

  public function index($args)
  {
    echo "default/index.php";
  }

}

?>