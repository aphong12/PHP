<?php

class Connection
{
    private $conn;

    public function getAdd()
    {
        if(!$this->conn){
            $this->conn = new PDO('mysql:host=localhost;dbname=NVC','root','@Phong1203');
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
    }
}