<?php
// require "autoload.php";
// require __DIR__ . "/Model.php";
// require __DIR__ . "/ObservableInterface.php";
// require __DIR__ . "/ObserverInterface.php";
abstract class ObservableModel extends Model implements ObservableInterface {
    protected $observers = [];
    protected $dataUpdate = [];

    public function attach(ObserverInterface $observer_in): void {
        $this->observers[] = $observer_in;

    }

    //Looks through and remove model from the array
    public function detach(ObserverInterface $observer_in): void
    {
        $this->observers = array_filter($this->observers, function ($next) use ($observer_in) {
        return (! ($next === $observer_in));
        });
    }
    
    
    public function notify(): void {
        foreach($this->observers as $object) {$object->update($this);}
    }
    

    public function giveUpdate()
    {
        return $this->dataUpdate;

    }

    //update data
    public function modifyChangedData(array $change)
    {
        $this->dataUpdate = $change;
    }


    
    abstract public function getAll():array;

    abstract public function getRecord(string $id):array;

}



?>