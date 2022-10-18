<?php
// require "autoload.php";

// require __DIR__ . "/../framework/ObservableModel.php";

//Observer Child Class of Model(model.php)
class IndexModel extends ObservableModel {

    // Retrieves all the records from the JSON file
    public function getAll(): array {

        $data = $this->loadData(DATA_DIR . '/courses.json' );
        
        
        // next stage, get most popular and most favourite
        $popular_column = array_column($data['courses'], 3);//3 because popular is third column in the firld
        $recommended_column = array_column($data['courses'], 2);//Create a column
        $extra = $data['courses'];//Copy of courses array
        
        array_multisort($recommended_column, SORT_DESC, $data['courses']) ;
        $recommended = array_slice($data['courses'], 0, 8);
        
        array_multisort($popular_column, SORT_DESC, $extra);
        $popular = array_slice($extra, 0, 8);
        
        return ['popular'=>$popular, 'recommended'=>$recommended ];
        
    
    }

    public function getRecord(string $id): array {
        
        //Read the json file
        return [];

    }
}


?>