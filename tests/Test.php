<?php

use function PHPUnit\Framework\assertNull;

    class Test extends \PHPUnit\Framework\TestCase
    {   
        public function testConnection(){
                $mysqui = new mysqli("localhost", "db_admin", "rmit_password", "rmit_store_db");
                assertNull($mysqui -> connect_errno);
        }

        public function randomTest(){
            $a = 0;
            $this -> assertEquals($a, 0);
        }

        public function true(){
            $b = true;
            $this -> assertTrue($b);
        }
    }
