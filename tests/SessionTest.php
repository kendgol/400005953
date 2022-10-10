<?php 
use PHPUnit\Framework\TestCase;

// declare(strict_types=1);
require __DIR__ . "/../framework/SessionClass.php";


class SessionTest extends TestCase
{
    private $c;

    public function s() {
        $this->c = new SessionClass();
    }

    public function testvalidControllerObject(): void 
    {
       $validSession = new SessionClass();

       $this->assertIsObject($validSession, "Valid Session Object Created.");//valid View object is created
    }

    public function test_create():void
    {
        // $validSession = new sessionClass();
        $new = $this->c->create();
        $this->assertContains($new,"New Session created");
    }

//     public function test_destroy():void 
//     {
//         $validSession = new sessionClass();
//         $destroy = $validSession;
//         $result = $validSession->destroy();
//         $this->assertEmpty('',"Cleared");
//     }

//     public function test_remove():void
//     {
//         $name = "Frameworks";
//         $validSession = new sessionClass();
//         $remove = $name;
//         $result= $validSession->remove($remove);
//         $this->assertEmpty('',"Removed");
//     }

//     public function test_add():void
//     { 
//         $name = "Frameworks";
//         $validSession = new sessionClass();
//         $validSession = $name;
//         $validSession = $value;
//         $output= $validSession->add($name,$value);
//         $this->assertIsInt($value,"valid parameter");
//         $this->assertIsString($user,"valid string");

//     }

//     public function test_accessible():void
//     {
//         $validSession = new sessionClass;
//         $validSession = $user;
//         $validSession = $page;
//         $display = $validSession->accessible($user,$page);
//         $this->assertIsString($user,$page,"valid string");
//     }
   
}

?>