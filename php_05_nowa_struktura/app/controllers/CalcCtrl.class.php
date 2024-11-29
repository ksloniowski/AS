<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';



class CalcCtrl {
    private $form;
    private $result;
    private $hide_intro;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
        $this->hide_intro = false;
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

            $this->result->result = ($this->form->kwota + (($this->form->odsetki / 100) * $this->form->kwota)) / $this->form->okres;
            getMessages()->addInfo('Wykonano obliczenia');
        }
        $this->generateView();

    }


    public function generateView(){
    
        getSmarty()->assign('page_title', 'Zadanie nr 05a');
        getSmarty()->assign('page_description', 'Kontroler główny, Nowa struktura');
        getSmarty()->assign('page_header', 'Jeden punkt wejścia');

        getSmarty()->assign('hide_intro',$this->hide_intro);
    
        getSmarty()->assign('res',$this->result);
        getSmarty()->assign('form',$this->form);
    
        getSmarty()->display('CalcView.html');
    }
}
?>