<?php
require_once 'init.php';





getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('calcCredit', 'CalcCtrl', ['user', 'admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user', 'admin']);

getRouter()->go();





// getConfig()->login_action = 'login';




// switch($action){
//     default:
//         control('app\\controllers', 'CalcCtrl', 'generateView', ['user', 'admin']);
//     case 'login':
//         control('app\\controllers', 'LoginCtrl', 'doLogin');
//     case 'calcCredit':
//         control(null, 'CalcCtrl', 'process', ['user', 'admin']);
//     case 'logout':
//         control(null, 'LoginCtrl', 'doLogout', ['user', 'admin']);
// }

?>