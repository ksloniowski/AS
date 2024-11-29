<?php
require_once $config->root_path.'/lib/smarty/Smarty.class.php';
require_once $config->root_path.'/lib/Messages.class.php';
require_once $config->root_path.'/app/CalcForm.class.php';
require_once $config->root_path.'/app/CalcResult.class.php';



class CalcCtrl {

    private $msgs;
    private $form;
    private $result;
    private $hide_intro;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
    }

    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->odsetki = isset($_REQUEST['odsetki']) ? $_REQUEST['odsetki'] : null;
        $this->form->okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->odsetki) && isset($this->form->okres))){
            return false;
        } else{
            $this->hide_intro = true;
        }


        if ($this->form->kwota == ""){
            $this->msgs->addError = ('Kwota kredytu jest wymagana');
        }
        if ($this->form->odsetki == ""){
            $this->msgs->addError = ('Oprocentowanie jest wymagane');
        }
        if ($this->form->okres == ""){
            $this->msgs->addError = ('Okres kredytowania jest wymagany');
        }

        if (!$this->msgs->isError()){
            if(!is_numeric($this->form->kwota) || $this->form->kwota <= 0){
                $this->msgs->addError('Kwota musi być liczbą dodatnią');
            }

            if(!is_numeric($this->form->odsetki) || $this->form->odsetki <= 0){
                $this->msgs->addError('Oprocentowanie musi być liczbą dodatnią');
            }

            if(!is_numeric($this->form->okres) || $this->form->okres <= 0){
                $this->msgs->addError('Okres kredytowania musi być liczbą dodatnią');
            }
        }

            return ! $this->msgs->isError();
    }

    public function process(){

        $this->getparams();

        if($this->validate()){
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->odsetki = floatval($this->form->odsetki);
            $this->form->okres = intval($this->form->okres);
            $this->msgs->addInfo('Parametry poprawne. Wykonuję obliczenia');

            $this->result->result = ($this->form->kwota + (($this->form->odsetki / 100) * $this->form->kwota)) / $this->form->okres;
            $this->msgs->addInfo('Wykonano obliczenia');
        }
        $this->generateView();

    }


    public function generateView(){
        global $config;
    
        $smarty = new Smarty();
        $smarty->assign('config', $config);
    
        $smarty->assign('page_title', 'Zadanie nr 04');
        $smarty->assign('page_description', 'Obiektowosc');
        $smarty->assign('page_header', 'Obiekty PHP');
    
        $smarty->assign('hide_intro', $this->hide_intro);
    
        $smarty->assign('res', $this->result);
        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
    
        $smarty->display($config->root_path.'/app/calcView.html');
    }
}
?>