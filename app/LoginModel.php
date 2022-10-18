<?php

//Observer Child Class of Model(model.php)
class LoginModel extends ObservableModel {

    // Retrieves all the records from the JSON file
    public function getAll(): array {

        return [];
    
    }

    public function getRecord(string $id): array {
        
       
        $data = $this->loadData(DATA_DIR . '/users.json');
        
        $record = array();
        $record = array("email"=> $row["email"], "password"=> $row['password']);


        
        return $record;

    }
}


?>