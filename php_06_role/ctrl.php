<?php
require_once 'init.php';


getConfig()->login_action = 'login';




switch($action){
    default:
        control('app\\controllers', 'CalcCtrl', 'generateView', ['user', 'admin']);
    case 'login':
        control('app\\controllers', 'LoginCtrl', 'doLogin');
    case 'calcCredit':
        control(null, 'CalcCtrl', 'process', ['user', 'admin']);
    case 'logout':
        control(null, 'LoginCtrl', 'doLogout', ['user', 'admin']);
}


// switch($action){
//     default:
//         include 'check.php';
//         $ctrl = new app\controllers\CalcCtrl();
//         $ctrl->generateView();
//     break;
//     case 'login':
//         $ctrl = new app\controllers\LoginCtrl();
//         $ctrl->doLogin();
//     break;
//     case 'calcCredit' :
//         include 'check.php';
//         $ctrl = new app\controllers\CalcCtrl();
//         $ctrl->process();
//     break; 
//     case 'logout':
//         include 'check.php';
//         $ctrl = new app\controllers\LoginCtrl();
//         $ctrl->doLogout();
//     break;
// }

?>