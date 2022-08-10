<?php
class Product {
    private $conn;
    private $table = 'book';

    public $id;
    public $name;
    public $price; 
    public $attr;
    
    public function __construct($db){
        $this->db;
        }

    public function getProduct(){
        $query = 'SELECT * FROM ' . $this->table .  '';

        $stmt = $this->conn->prepare($query);
        return $stmt;

       

       
    }    

}