<?php
    require_once dirname(__FILE__).'/../../config.php';

    function getParamsLogin(&$form){

        $form['login'] = isset($_REQUEST['login']) ? $_REQUEST ['login'] : null;
        $form['passwd'] = isset($_REQUEST['passwd']) ? $_REQUEST ['passwd'] : null;

    }


    function validateLogin(&$form, &$messages){

        if(!(isset($form['login']) && isset($form['passwd']))) return false;

        if($form['login'] == '') $messages[] = 'Pole "Login" jest wymagane';

        if($form['passwd'] == '') $messages[] = 'Pole "Hasło" jest wymagane';


        if(count($messages) > 0) return false;

        if($form['login'] == "admin" && $form['passwd'] == "admin"){
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }

        if($form['login'] == "user" && $form['passwd'] == "user"){
            session_start();
            $_SESSION['role'] = 'user';
            return true;
        }

        $message[] = 'Niepoprawny login lub hasło';
        return false;
    }

    $form = array();
    $messages = array();


    getParamsLogin($form);

    if(!validateLogin($form, $messages)){
        include _ROOT_PATH.'/app/security/login_view.php';
    }
    else{
        header("Location: "._APP_URL);
    }


?>