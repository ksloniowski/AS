<?php

    require_once dirname(__FILE__).'/../config.php';

    include _ROOT_PATH.'/app/security/check.php';


    function getParams(&$kwota, &$odsetki, &$okres){
        $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $odsetki = isset($_REQUEST['odsetki']) ? $_REQUEST['odsetki'] : null;
        $okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
    }



    function validate(&$kwota, &$odsetki, &$okres, &$messages){

        if(!(isset($kwota) && isset($odsetki) && isset($okres))) return false;

        if($kwota == "") $messages [] = 'Kwota kredytu jest wymagana';
        if($odsetki == "") $messages [] = 'Oprocentowanie jest wymagane';
        if($okres == "") $messages [] = 'Okres kredytowania jest wymagany';
    

        if (count($messages) != 0) return false;
        
        if(!is_numeric($kwota) || $kwota <= 0) $messages []= 'Kwota musi być liczbą dodatnią';
            
        if(!is_numeric($odsetki) || $odsetki <=0) $messages []= 'Oprocentowanie musi być liczbą dodatnią';
    
        if(!is_numeric($okres) || $okres <=0) $messages []= 'Okres kredytowania musi być liczbą dodatnią';

        if (count($messages) != 0) return false;
        else return true;
    }



    function process(&$kwota, &$odsetki, &$okres, &$messages, &$result){
        global $role;


        $kwota = intval($kwota);
        $odsetki =intval($odsetki);
        $okres = intval($okres);

        if($kwota > 10000 && $role != 'admin'){
            $messages[] = 'Operowanie na kwotach powyżej 10,000zł jedynie z uprawnieniami administratora';
        }
        else{
            $result = ($kwota + (($odsetki/100)*$kwota))/$okres;
        }
    }



    $kwota = null;
    $odsetki = null;
    $okres = null;
    $result = null;
    $messages = array();

    getParams($kwota, $odsetki, $okres);
    if(validate($kwota, $odsetki, $okres, $messages)){
        process($kwota, $odsetki, $okres, $messages, $result);
    }

    include 'calc_view.php';
?>