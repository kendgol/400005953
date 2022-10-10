<?php 
use PHPUnit\Framework\TestCase;

// declare(strict_types=1);
require __DIR__ . "/../framework/Model.php";
require __DIR__ . "/../framework/ConcreteClassModel.php";

class ModelTest extends TestCase
{
    /** @test */
    //Tests if a valid Model object is created
    public function validModelObject(): void 
    {
       $validModel = new ConcreteClassModel();//Create object for child class by calling the concrete class that extends the abstract Model

       $this->assertIsObject($validModel, "Valid Model Oject Created.");//valid View object is created
    }

    // public function test_getAll():void
    // {
    //          $model = new ConcreteClass();
    //          $output = $validModel->getAll();


    // }

    // public function test_getRecord():void
    // {
    //     $model = new ConcreteClass();
    //     $idTest = $validModel->getRecord();

    // }

    // Test invalid parameters for getRecord
    public function test_InvalidParameters():void 
    {

        // $validModel = new ConcreteClass();
        $idTest1 = "1234COMSCI";
        // $output = $validModel->getRecord($idTest1);
        

        $invalidTest = $this->createMock('ConcreteClassModel', 'getRecord');

        $invalidTest->expects($this->once())
            ->method('getRecord')
            ->with($idTest1); 

        $idTest2 = "1234COMSCI";
        $invalidTest->getRecord($idTest2);

    }


}

?>