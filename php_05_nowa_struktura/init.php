<?php

require_once dirname(__FILE__).'/core/Config.class.php';
$config = new Config();
include dirname(__FILE__).'/config.php';

function &getConfig(){
    global $config;
    return $config;
}

require_once getConfig()->root_path.'/core/Messages.class.php';
$msgs = new Messages();

function &getMessages(){
    global $msgs;
    return $msgs;
}

$smarty = null;
function &getSmarty(){
    global $smarty;
    if (!isset($smarty)){
        include_once getConfig()->root_path.'/lib/smarty/Smarty.class.php';
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

require_once getConfig()->root_path.'/core/functions.php';

$action = getFromRequest('action');
?>