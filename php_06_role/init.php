<?php

require_once 'core/Config.class.php';
$config = new core\Config();
require_once 'config.php';

function &getConfig(){
    global $config;
    return $config;
}

require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){
    global $msgs;
    return $msgs;
}

$smarty = null;
function &getSmarty(){
    global $smarty;
    if (!isset($smarty)){
        include_once 'lib/smarty/Smarty.class.php';
        $smarty = new Smarty();

        $smarty->assign('config',getConfig());
        $smarty->assign('msgs',getMessages());

        $smarty->setTemplateDir(array(
            'one' => getConfig()->root_path.'/app/views',
            'two' => getConfig()->root_path.'/app/views/templates'
        ));
    }
    return $smarty;
}

require_once 'core/ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/functions.php';

session_start();
$config->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array();

$action = getFromRequest('action');
?>