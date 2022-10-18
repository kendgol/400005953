<?php
require "autoload.php";

class LoginController extends Controller 
{
    public function run()
    {
        //create model object
        $view = new View();
        //set the template
        $view->setTemplate(TPL_DIR . '/login.tpl.php');

        //set the model
        $this->setModel(new ProfileModel());
        //set the view
        $this->setView($view);
        //tell the mdoel to update the change data 
        $this->model->attach($this->view);

     
        $data = $this->model->getAll();

        // tell the model to update the changed data
        $this->model->modifyChangedData($data);

        // tell the model to contact its observers
        $this->model->notify();
        }

    
}


?>