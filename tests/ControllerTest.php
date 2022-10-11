<?php 
use PHPUnit\Framework\TestCase;

// declare(strict_types=1);
// require __DIR__ . "/../framework/Controller.php";
require __DIR__ . "/../app/IndexController.php";


class ControllerTest extends TestCase
{
    public function testvalidControllerObject(): void 
    {
       $validController = new IndexController();

       $this->assertIsObject($validController, "Valid Controller Object Created.");//valid View object is created
    }

    public function test_setModel():void 
    {
        $controller = new IndexController();

        $model = new IndexModel();

        $controller = $model;

        $this->assertNull($model, "Model object initialized as null");
    }

    public function test_setView():void 
    {
        $controller = new IndexController();

        $view = new View();

        $controller = $model;


        $this->assertNull($view, "Model object initialized as null");
    }

}

?>