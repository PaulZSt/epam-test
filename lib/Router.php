<?
class Router {
    private $routes;
 
    function __construct($routesPath){
        $this->routes = include($routesPath);
    }

    function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
 
        if(!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER['PATH_INFO'], '/');
        }
 
        if(!empty($_SERVER['QUERY_STRING'])) {
            return trim($_SERVER['QUERY_STRING'], '/');
        }
    }
 
    function run(){
        $uri = $this->getURI();

        foreach($this->routes as $pattern => $route){

           // echo $pattern;
            if(preg_match("~$pattern~", $uri)){

                //echo '<br><br>';
                //echo $uri;
                $internalRoute = preg_replace("~$pattern~", $route, $uri);
                $segments = explode('/', $internalRoute);
                $controller = ucfirst(array_shift($segments)).'Controller';
                $action = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;
                $debug = '0';
                if($debug == '1') {
                    echo '<br>';
                    echo 'Контроллер - ' . $controller . ' Акшн - ' . $action . ' Параметры - ' . $parameters;
                    print_r($parameters);
                    echo '<br>';
                    echo 'Внутренний путь - ' . $internalRoute . ' Сегменты - ' . $segments;
                    print_r($segments);
                }
                // Подключаем файл контроллера, если он имеется
                $controllerFile = ROOT.'/app/controllers/'.$controller.'.php';
                if(file_exists($controllerFile)){
                    include($controllerFile);
                }
 

                if(!is_callable(array($controller, $action))){
                    header("HTTP/1.0 404 Not Found");
                    echo 'Нет контроллера! Контроллер - '.$controller.' Акшн - '.$action;
                    return;
                }

                call_user_func_array(array($controller, $action), $parameters);
                return;
            }
        }

        echo '404';
        return;
    }
}


?>