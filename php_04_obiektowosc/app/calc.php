<?php

require_once dirname(__FILE__).'/../config.php';

require_once $config->root_path.'/app/CalcCtrl.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();




// require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

// function getParams(&$kwota, &$odsetki, &$okres)
// {
//     $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
//     $odsetki = isset($_REQUEST['odsetki']) ? $_REQUEST['odsetki'] : null;
//     $okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
// }

// function validate(&$kwota, &$odsetki, &$okres, &$msgs, &$infos, &$hide_intro)
// {
//     if (!(isset($kwota) && isset($odsetki) && isset($okres))) return false;
//     $hide_intro = true;
//     $infos[] = 'Przekazano parametry.';

//     if ($kwota == "") $msgs[] = 'Kwota kredytu jest wymagana';
//     if ($odsetki == "") $msgs[] = 'Oprocentowanie jest wymagane';
//     if ($okres == "") $msgs[] = 'Okres kredytowania jest wymagany';

//     if (count($msgs) != 0) return false;
//     if (!is_numeric($kwota) || $kwota <= 0) $msgs[] = 'Kwota musi być liczbą dodatnią';

//     if (!is_numeric($odsetki) || $odsetki <= 0) $msgs[] = 'Oprocentowanie musi być liczbą dodatnią';

//     if (!is_numeric($okres) || $okres <= 0) $msgs[] = 'Okres kredytowania musi być liczbą dodatnią';

//     if (count($msgs) != 0) return false;
//     else return true;
// }

// function process(&$kwota, &$odsetki, &$okres, &$msgs, &$infos, &$result)
// {
//     $infos[] = 'Parametry poprawne. Wykonuję obliczenia.';

//     $kwota = floatval($kwota);
//     $odsetki = floatval($odsetki);
//     $okres = intval($okres);

//     if ($kwota > 10000) {
//         $msgs[] = 'Operowanie na kwotach powyżej 10,000zł wymaga uprawnień administratora';
//     } else {
//         $result = ($kwota + (($odsetki / 100) * $kwota)) / $okres;
//     }
// }

// $kwota = null;
// $odsetki = null;
// $okres = null;
// $result = null;
// $messages = array();
// $infos = array();
// $hide_intro = false;

// getParams($kwota, $odsetki, $okres);
// if (validate($kwota, $odsetki, $okres, $messages, $infos, $hide_intro)) {
//     process($kwota, $odsetki, $okres, $messages, $infos, $result);
// }

// $smarty = new Smarty();

// $smarty->assign('app_url', _APP_URL);
// $smarty->assign('root_path', _ROOT_PATH);
// $smarty->assign('page_title', 'Tytuł');
// $smarty->assign('page_description', 'Szablonowanie Smarty');
// $smarty->assign('page_header', 'Szablony Smarty');

// $smarty->assign('hide_intro', $hide_intro);

// $smarty->assign('kwota', $kwota);
// $smarty->assign('odsetki', $odsetki);
// $smarty->assign('okres', $okres);
// $smarty->assign('result', $result);
// $smarty->assign('messages', $messages);
// $smarty->assign('infos', $infos);

// $smarty->display(_ROOT_PATH . '/app/calc.html');

?>
