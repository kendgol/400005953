<?php 
 
 abstract class Controller {

    protected $view = null;
    protected $model = null;
    
    // assigns the Model object to the protected attribute $model in the Controller class, which is initialized as null
    protected function setModel(Model $m)
    {
        $this->model = $m;
    }


    // assigns the View object to the protected attribute $view in the Controller class, which is initialized as null.
    protected function setView(View $v)
    {
        $this->view = $v;
    }

    //performs the page’s business logic
    abstract public function run();

}

?>