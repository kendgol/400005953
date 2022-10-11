<?php 
 
class SessionClass {

    protected $useraccess = ['profile' => 
							[	
                                "Test User",
                                "Michael Godborn",
                                "James Storm"
							]
						];

    public function create() {
        session_start();
    }

    // Ensure that when the user clicks the log out link that all session data and any cookies placed in the user’s browser is cleared.
    public function destroy() {
        session_destroy();
		setcookie("PHPSESSID", '', time() - 3600);//set the cookie time to a negative value so the browser can delete it
    }

    public function add($name, $value) {

        if (!preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name)) {
            trigger_error('Invalid variable name', E_USER_ERROR);
        }       

        $_SESSION[$name] = $value;
    }
    
    //Missing function taken from video that acts as a getter and setter
    public function missing($name) {
       
        if(isset($_SESSION[$name]))
        {	
            return $_SESSION[$name];
        }

        return null;
    }


    public function remove($name) {
        
        if(isset($_SESSION[$name]))
        {
            unset($_SESSION[$name]);// remove a variable named $name from session management
        }
    }

    public function accessible($user, $page): bool {
        if(in_array($user, $this->useracess[$page]))
        {
            return true;
        }

        return false;
    }



}

?>