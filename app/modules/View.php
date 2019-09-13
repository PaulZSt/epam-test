<?
// Path to dir with templates for Site
define('VIEWS_BASEDIR', 'app/views/');

class View
{
    // get template by parametrs
    function fetchPartial($template, $params = array())
    {
        extract($params);
        ob_start();
        include VIEWS_BASEDIR . $template . '.php';
        return ob_get_clean();
    }

    // get rendered template in layout $content with parametrs
    function fetch($template, $params = array())
    {
        $content = $this->fetchPartial($template, $params);
        return $this->fetchPartial('layout', array('content' => $content));
    }

    // view rendered template with parametrs
    function render($template, $params = array())
    {
        echo $this->fetch($template, $params);
    }
}
