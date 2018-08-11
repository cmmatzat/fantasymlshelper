<?php
	class Router {

		public function __constuct()
		{
			
		}
		
    // Handle the given page request
		public function route($request)
		{
      // Break the URI into parts
			$uri = trim($request, '/');
			$uri = explode('/', $uri);

      // Select the appropriate controller
			$controllerClass = Router::getController($uri[0]);
			array_shift($uri);
      
      // Create new controller
			$controller = new $controllerClass;

      // Select and call controller method
			$method = method_exists($controller, strtolower($uri[0])) ? $uri[0] : 'index';
			array_shift($uri);
			$controller->$method($uri);
		}

    // Format a controller class name to get the class filepath
		private static function controllerPath($controllerClassName)
		{
			return CONTROLLER_PATH . $controllerClassName . '.class.php';
		}
    
    // Determine the appropriate class given the argument
    private static function getController($uri0)
    {
      // Check if a class is given
      $controllerClass = ($uri0 == NULL) ? DEFAULT_CONTROLLER : ucfirst(strtolower($uri0)) . 'Controller';
      
      // Check controller directory for the class
      $controller_dir = scandir(CONTROLLER_PATH);
      if (!in_array($controllerClass . '.class.php', $controller_dir))
      {
        // Use the default controller if not found
        $controllerClass = DEFAULT_CONTROLLER;
      }
      
      // Import the class and return the chosen class name
      require_once(Router::controllerPath($controllerClass));
      return $controllerClass;
    }

	}
?>