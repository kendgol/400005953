<?php 
class View {
    
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
}

?>