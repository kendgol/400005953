<?php 
require "autoload.php";

class View implements ObserverInterface{
    
    private $tpl;
    private $tmp = [];
 

    public function setTemplate(string $filename) {

        $this->tpl= $filename;

        return $filename;
    }

    public function display() {

        extract($this->tmp);

        $this->tpl;       
        
    }

    public function addVar(string $name, $value) {

                $this->tmp[$name] = $value;   
    }

    //Give update for data that is given
    public function update(ObservableInterface $observable_subject_in): void
    {
        $viewrecord = $observable_subject_in->giveUpdate();
        foreach ($viewrecord as $k=>$r)
        {
            $this->addVar($k, $r);
        }
        $this->display();
    }
}


?>