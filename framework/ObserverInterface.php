<?php
// require __DIR__ . "/ObservableInterface.php";

// Observer Interface
interface ObserverInterface
{
 public function update(ObservableInterface $observable_subject_in): void;

}

?>