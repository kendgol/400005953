<?php 
use PHPUnit\Framework\TestCase;

// declare(strict_types=1);
// require __DIR__ . "/../framework/Model.php";
require __DIR__ . "/../app/IndexModel.php";

class ModelTest extends TestCase
{
    /** @test */
    //Tests if a valid Model object is created
    public function validModelObject(): void 
    {
       $validModel = new IndexModel();//Create object for child class by calling the concrete class that extends the abstract Model

       $this->assertIsObject($validModel, "Valid Model Oject Created.");//valid View object is created
    }

    // public function test_getAll():void
    // {
    //          $model = new IndexModel();
    //          $output = $validModel->getAll();


    // }

    // public function test_getRecord():void
    // {
    //     $model = new IndexModel();
    //     $idTest = $validModel->getRecord();

    // }

    // Test invalid parameters for getRecord
    public function test_InvalidParameters():void 
    {

        // $validModel = new IndexModel();
        $idTest1 = "1234COMSCI";
        // $output = $validModel->getRecord($idTest1);
        

        $invalidTest = $this->createMock('IndexModel', 'getRecord');

        $invalidTest->expects($this->once())
            ->method('getRecord')
            ->with($idTest1); 

        $idTest2 = "1234COMSCI";
        $invalidTest->getRecord($idTest2);

    }


}

?>