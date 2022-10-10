<?php 
 
abstract class Model {
    abstract protected function getAll(): array;//Retrieves all the records from the JSON file and returns them in a multi-dimensional associative array


    abstract protected function getRecord(string $id): array;//Retrieves a database record using the id stored in the Model data structure. Returns the data in an associative array

}

?>