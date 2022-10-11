<?php 
use PHPUnit\Framework\TestCase;

// declare(strict_types=1);
require __DIR__ . "/../framework/View.php";


class ViewTest extends TestCase
{
    /** @test */
    public function testvalidView(): void 
    {
       $validView = new View();

       $this->assertIsObject($validView, "Valid View Object Created.");//valid View object is created
    }

    public function test_setTemplate()
    {
        $view = new View();

        $filename = "view.tpl.php";

        $output = $view->setTemplate($filename);

        $this->assertIsString($output);
    }

    public function test_display()
    {
        $view = new View();
        $filename = "view.tpl.php";
        $view->setTemplate($filename);
        $output = $view->display();
        $this->assertIsString($filename, "Display is valid");

    }


    public function test_addVar()
    {
        $testArray = array("Course"=>"Frameworks", "Code" =>"COMP3385"); 
        $value = "Frameworks";

        // $name = "Course";
        // $value = "Frameworks";
        $view = new View();

        $output = $view->addVar($value, $testArray);
        $this->assertContains($value, $testArray, "Added variable is valid");
    }


}


?>