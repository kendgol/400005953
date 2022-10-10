<?php


//Observer Child Class of Model(model.php)
class ConcreteClassModel extends Model {

    // Retrieves all the records from the JSON file
    public function getAll(): array {

            //Read the json file
            $json = file_get_contents('./data/user.json');
            //Convert JSON object to PHP object
            $json_record = json_decode($json, true);
    
           //return database record
           return ($json_record);
    
    }

    public function getRecord(string $id): array {
        
        //Read the json file
        $json = file_get_contents('./data/user.json');

        $json_record = json_decode($json, true);

        $this->id = $id;

        //return database record
        return $json_record[$id];
        // echo $json_record[$id];

    }

}


?>