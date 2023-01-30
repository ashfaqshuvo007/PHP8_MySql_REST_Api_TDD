<?php

namespace Tests\Unit;


use \PHPUnit\Framework\TestCase;
use \Src\Config\Database;

use function PHPUnit\Framework\assertEquals;

class DatabaseTest extends TestCase{

    private $database;

    protected function setUp(): void 
    {
        $this->database = new Database();
    }

    public function testDatabase(): void
    {   
        $result = $this->database->getConnection();
        assertEquals("DB Connected", $result);
    }
}
