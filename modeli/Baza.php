<?php


    class Baza  {


        public $sql;
        public $host="localhost";
        public $user="root";
        public $pass="";
        public $database="web_shop";

        public function __construct(){

            $this->sql=mysqli_connect($this->host,$this->user,$this->pass,$this->database);
        }
    }