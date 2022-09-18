<?php
        
    class Test extends \PHPUnit\Framework\TestCase
    {   
        // public function testConnection(){
        //         $mysqui = new \MySQLi("localhost", "db_admin", "rmit_password", "rmit_store_db");
        //         assertEmpty($mys.qui -> connect_errno);
        // }

        public function randomTest(){
            $a = 0;
            $this -> assertEquals($a, 0);
        }

        public function true(){
            $b = true;
            $this -> assertTrue($b);
        }
    }
