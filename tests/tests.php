<?php
    use PHPUnit\Framework\TestCase as TestCase;

use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertNull;
        
    class Tests extends TestCase
    {   
        // public function testConnection(){
        //         $mysqui = new \MySQLi("localhost", "db_admin", "rmit_password", "rmit_store_db");
        //         assertEmpty($mysqui -> connect_errno);
        // }

        public function randomTest(){
            $a = 0;
            $this -> assertEquals($a, 0);
        }
    }
