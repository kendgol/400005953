<?php 
 
abstract class Model {

    //Cache for the Json file
    protected $caching = [];
    
    abstract protected function getAll(): array;//Retrieves all the records from the JSON file and returns them in a multi-dimensional associative array


    abstract protected function getRecord(string $id): array;//Retrieves a database record using the id stored in the Model data structure. Returns the data in an associative array

    

    //Caching used to avoid reading the json file for every request
    public function loadData(string $fromFile):array {

        //the filename
        $file = basename($fromFile, '.json');

        //Check if file is empty or decoded
        if (isset($this->caching[$file]) || empty($this->caching[$file]))
        {
                //Read file contents
                $json_file=file_get_contents($fromFile);
                //Decode file content
                $this->caching[$file] = json_decode($json_file, true);
            
        }
    return $this->caching[$file];//Store the file
    }
}

?>