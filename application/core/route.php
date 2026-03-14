<?php
class Route {
    static function start() {
        $controller_name = 'Main';
        $action_name = 'index';
        
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        $routes = explode('/', trim($uri, '/'));

        if (!empty($routes) && $routes[0] == 'my_mvc_site') {
            array_shift($routes);
        }

        if ( !empty($routes[0]) ) {
            $controller_name = $routes[0];
        }

        if ( !empty($routes[1]) ) {
            $action_name = $routes[1];
        }

        $controller_name = 'Controller_'.ucfirst($controller_name);
        $action_name = 'action_'.$action_name;

        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        
        if(file_exists($controller_path)) {
            include $controller_path;
        } else {
            die("404: Контроллер $controller_name не найден по пути $controller_path");
        }
        
        $controller = new $controller_name;
        if(method_exists($controller, $action_name)) {
            $controller->$action_name();
        } else {
            die("404: Метод $action_name не найден");
        }
    }
}