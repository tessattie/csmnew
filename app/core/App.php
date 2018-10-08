<?php
session_start();
class App
{
	protected $controller = 'home'; 
	protected $method = 'index';
	protected $params;

	public function __construct()
	{

		// for prod
		// define('DIRECTORY_NAME', "/app");
		// define("ROOT_DIRECTORY", "/data/58/5/114/42/5114368/user/6148186/htdocs/cmsa");

		// for dev
		define("ROOT_DIRECTORY", "C:/wamp/www/caisses");


		define('DIRECTORY_NAME', "/caisses");
		$controllerName = $this->controller;
		$methodName = $this->method;

		// returns array : see function below
		$url = $this->parseUrl();

		// if(empty($_SESSION['caisses']['code']) && $url[0] != "login"){
		// 	header('Location:'.DIRECTORY_NAME.'/public/login');
		// }

		// $_SESSION['cmsa']['active'] = $url[0];

		if( file_exists(ROOT_DIRECTORY.'/app/controllers/'.$url[0].'.php'))
		{
			$this->controller = $url[0];
			$controllerName = $url[0];
			unset($url[0]);
		}

		// $_SESSION['cmsa']['active'] = $controllerName;

		require_once ROOT_DIRECTORY.'/app/controllers/'.$this->controller.'.php';
		
		$this->controller = new $this->controller;

		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				$methodName = $url[1];
				unset($url[1]);
			}
		}
		
		// verify if url has parameters, if not, pass an empty array 
		$this->params = $url ? array_values($url) : array();
		call_user_func_array(array($this->controller, $this->method), $this->params);

	}

	public function parseUrl()
	{
		if(isset($_GET['url']))
		{
			// rtrim : deletes extra slash at the end of the URL
			// filter_var : verifies that its a URL and delete all illegal caracters from $_GET['url']
			// explode : returns an array
			return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}           
}