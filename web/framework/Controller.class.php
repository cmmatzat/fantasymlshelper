<?php

class Controller
{ 
  protected $templates;
  protected $defaultMethod = 'index';
  protected $useSecondaryMenu = false;

  public function __construct()
  {
    $this->templates = array(
        "header" => TEMPLATE_PATH . 'header.php',
        "navbar" => TEMPLATE_PATH . 'navbar.php',
        "body" => TEMPLATE_PATH . 'body.php'
      );
  }

  public function index($args = false)
  {
    $pageCss = CSS_PATH . 'index.css';
    $secondaryNav = false;
    $content = VIEW_PATH . 'index.php';

    require($this->templates['header']);
    require($this->templates['navbar']);
    require($this->templates['body']);
  }

  public function getDefaultMethod()
  {
    return $this->defaultMethod;
  }

}

?>