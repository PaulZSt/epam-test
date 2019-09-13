<?
// connect files
define('ROOT', dirname(__FILE__));
define('USER','1');
define('TEMPLATE', dirname(__FILE__).'/app/views');
require_once(ROOT.'/app/modules/Autoload.php');
require_once(ROOT.'/lib/Router.php');
require_once(ROOT.'/lib/rb.php');
R::setup( 'mysql:host=195.242.161.84;dbname=epam','epam', 'epampass');
// get url config
$routes=ROOT.'/app/config/routes.php';

// start router
$router = new Router($routes);
$router->run();

?>