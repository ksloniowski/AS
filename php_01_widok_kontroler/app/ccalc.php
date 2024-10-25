<?php
    require_once dirname(__FILE__).'/../config.php';

    $kwota = $_REQUEST ['kwota'];
    $odsetki = $_REQUEST ['odsetki'];
    $okres = $_REQUEST ['okres'];


    if(!(isset($kwota) && isset($odsetki) && isset($okres))){
        $messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
    }

    // sprawdzenie, czy przekazano parametry
    if($kwota == "") $messages [] = 'Kwota kredytu jest wymagana';
    if($odsetki == "") $messages [] = 'Oprocentowanie jest wymagane';
    if($okres == "") $messages [] = 'Okres kredytowania jest wymagany';

    if(empty($messages)){
        if(!is_numeric($kwota) || $kwota <= 0) $messages []= 'Kwota musi być liczbą dodatnią';
        
        if(!is_numeric($odsetki) || $odsetki <=0) $messages []= 'Oprocentowanie musi być liczbą dodatnią';

        if(!is_numeric($okres) || $okres <=0) $messages []= 'Okres kredytowania musi być liczbą dodatnią';
    }

    if(empty($messages)){

        $kwota = intval($kwota);
        $odsetki =intval($odsetki);
        $okres = intval($okres);

        $result = ($kwota + ($odsetki/100))/$okres;
    }
    include 'ccalc_view.php';