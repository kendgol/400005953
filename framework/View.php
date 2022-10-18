<?php 
// require "autoload.php";

class View implements ObserverInterface{
    
    private $tpl;
    private $tmp = [];//store data for the template
 

    public function setTemplate(string $filename) {

        if (!file_exists($filename)) {
            trigger_error('Invalid template given (' . $filename . ') No such file found', E_USER_ERROR);
            exit;
        }
        $this->tpl= $filename;

        // return $filename;
    }

    public function display() {

        extract($this->tmp);

        require $this->tpl;       
        
    }

    public function addVar(string $name, $value) {

        // check to make sure the variable name is valid
        if (preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) == 0) {
            trigger_error('Invalid variable name used', E_USER_ERROR);
        }
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