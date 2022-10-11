<?php
// require __DIR__ . "/ObserverInterface.php";

// Observable Interface
interface ObservableInterface
{
 public function attach(ObserverInterface $observer_in): void;

 public function detach(ObserverInterface $observer_in): void;

 public function notify(): void;
}


?>