<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
		$this->form->odsetki = getFromRequest('odsetki');
		$this->form->okres = getFromRequest('okres');
    }

    public function validate(){
        if (!(isset($this->form->kwota) && isset($this->form->odsetki) && isset($this->form->okres))){
            return false;
        } else{
            $this->hide_intro = true;
        }

        if ($this->form->kwota == ""){
            getMessages()->addError('Kwota kredytu jest wymagana');
        }
        if ($this->form->odsetki == ""){
            getMessages()->addError('Oprocentowanie jest wymagane');
        }
        if ($this->form->okres == ""){
            getMessages()->addError('Okres kredytowania jest wymagany');
        }

        if (!getMessages()->isError()){
            if(!is_numeric($this->form->kwota) || $this->form->kwota <= 0){
                getMessages()->addError('Kwota musi być liczbą dodatnią');
            }

            if(!is_numeric($this->form->odsetki) || $this->form->odsetki <= 0){
                getMessages()->addError('Oprocentowanie musi być liczbą dodatnią');
            }

            if(!is_numeric($this->form->okres) || $this->form->okres <= 0){
                getMessages()->addError('Okres kredytowania musi być liczbą dodatnią');
            }

            if(!inRole('admin') && $this->form->kwota >= 10000){
                getMessages()->addError('Obliczenia na kwotach powyżej 10,000zł tylko z uprawnieniami administratora!');
            }
        }

        

            return ! getMessages()->isError();
    }

    public function process(){

        $this->getParams();

        if($this->validate()){

            $this->form->kwota = floatval($this->form->kwota);
            $this->form->odsetki = floatval($this->form->odsetki);
            $this->form->okres = intval($this->form->okres);
            getMessages()->addInfo('Parametry poprawne. Wykonuję obliczenia');


            $this->result->result = round(($this->form->kwota + (($this->form->odsetki / 100) * $this->form->kwota)) / $this->form->okres, 2);
            getMessages()->addInfo('Wykonano obliczenia');
        }
        $this->generateView();

    }


    public function generateView(){

        getSmarty()->assign('user', unserialize($_SESSION['user']));
    
        getSmarty()->assign('page_title', 'Zadanie 6a');
        getSmarty()->assign('page_description', 'Ochrona dostępu - role');
        getSmarty()->assign('page_header', 'Ochrona dostępu - role');

        getSmarty()->assign('hide_intro',$this->hide_intro);
    
        getSmarty()->assign('res',$this->result);
        getSmarty()->assign('form',$this->form);
    
        getSmarty()->display('CalcView.tpl');
    }
}
?>