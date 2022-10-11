<?php
require "autoload.php";

class ProfileController extends Controller 
{
    public function run()
    {
        SessionClass::create( );

        $session = new SessionClass();
        $view = new View();
        
        $view->setTemplate(TPL_DIR . '/profile.tpl.php' );

        // set the model and the view
        $this->setModel(new ProfileModel());
        $this->setView($view);
        
        $this->model->attach($this->view);

        $user = $session->see('user');
        if ($session->accessible($user, 'profile')) {
        
        //Retrieve courses the user is registered in
        $data = $this->model->getAll( );
        //Notify model to update the changed data
        $this->model->modifyChangedData($data);
        // tell the model to contact its observers
        $this->model->notify();
        }
        else {
        $view->setTemplate(TPL_DIR . '/login.tpl.php' );
        $view->display();
        }
    }

    public function CreateModel() : ObservableModel
	{
		return new ProfileModel();
	}

	public function CreateView() : View
	{
		$view = new View();
        $view->setTemplate(TPL_DIR . '/profile.tpl.php');
		return $view;
	}
    

}
?>