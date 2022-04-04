<?php

require_once('libs/smarty/Smarty.class.php');
require_once('config/config.php');
 
class Template{
     
    private $_smarty;
    
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        

        return $instance;
    }
     /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
         $this->_smarty = new Smarty();
         
        global $template_config;
        $this->_smarty->template_dir = $template_config['template_dir'];
        $this->_smarty->compile_dir = $template_config['compile_dir'];
        $this->_smarty->cache_dir = $template_config['cache_dir'];
        $this->_smarty->config_dir = $template_config['config_dir'];
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    } 
   

    function mostrar($template, $data = array()){
    	foreach($data as $key => $value){
	        $this->_smarty->assign($key, $value);
	    }
	    $this->_smarty->display($template . '.tpl');
	}


	function asignar($clave,$valor){
		$this->_smarty->assign($clave, $valor);
	}
}

?>