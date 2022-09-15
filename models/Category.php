<?php 
    class Category{
        //DB-related attributes
        private $table = 'categories';
        private $conn;

        //Category attributes
        public $id;
        public $name;
        public $created_at;

        //constructor
        public function __construct($db){
            $this->conn = $db;
        }

        //Get Categories
        public function read(){

            //Create Query
            $query = 'SELECT id, name, created_at FROM '. $this->table .
            ' ORDER BY created_at DESC';

            //Prepare statement 
            $stmt = $this->conn->prepare($query);

            //Execute query
            $stmt->execute();

            return $stmt;
        }
    }