<?php

class Router {
  protected $routes = [];

  public function registerRoute($method, $uri, $controller) {
    $this -> routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller
    ];
  }

  /**
   * sdd a GET rout
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

   public function get($uri, $controller) {
    $this -> registerRoute('GET', $uri, $controller);
   }

  /**
   * sdd a POST rout
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

   public function post($uri, $controller) {
    $this -> registerRoute('POST', $uri, $controller);
   }
   
  /**
   * sdd a PUT rout
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

   public function put($uri, $controller) {
    $this -> registerRoute('PUT', $uri, $controller);
   }

  /**
   * sdd a Delete rout
   * 
   * @param string $uri
   * @param string $controller
   * @return void
   */

   public function delete($uri, $controller) {
    $this -> registerRoute('DELETE', $uri, $controller);
   }

  /**
   * route the request
   * 
   * @param string $uri
   * @param string $method
   * @return void
   */
  public function route($uri, $method) {
    foreach ($this->routes as $route) {
      if($route['uri'] === $uri && $route['method'] === $method) {
        require basePath($route['controller']);
        return;
      }
    }

    http_response_code(404);
    loadView('error/404');
    exit;
  }
}