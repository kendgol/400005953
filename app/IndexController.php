<?php
require "autoload.php";

// require __DIR__ . "/../framework/Controller.php";
// require __DIR__ . "/../framework/ObserverInterface.php";
// require __DIR__ . "/../framework/ObservableInterface.php";
// require __DIR__ . "/../framework/ObservableModel.php";
class IndexController extends Controller {
   
    public function run() {
            //create model object
            $view = new View();
            //set the template
            $view->setTemplate(TPL_DIR . '/index.tpl.php');

            //set the model
            $this->setModel(new IndexModel());
            //set the view
            $this->setView($view);

            $this->model->attach($this->view);

         
            $data = $this->model->getAll() ;

            // tell the model to update the changed data
            $this->model->modifyChangedData($data);

            // tell the model to contact its observers
            $this->model->notify( ) ;
            }


}




?>