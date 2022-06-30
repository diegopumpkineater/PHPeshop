<?php

//PRODUCT CLASS
class Product
{
    private $db;

    //CONSTRUCTOR
    public function __construct()
    {
        $this->db = new Database;
    }

    public function fetchproducts()
    {
        $query = "SELECT * FROM product";

        $this->db->query($query);
        $result = $this->db->resultSet();

        return $result;
    }

    public function fetchbrands()
    {
        $query = "SELECT DISTINCT item_brand FROM product";

        $this->db->query($query);
        $result = $this->db->resultSet();

        return $result;
    }

    public function fetchone($id)
    {
        $query = "SELECT * FROM product where item_id = :id";

        $this->db->query($query);
        $this->db->bindparams(":id", $id);
        $result = $this->db->single();
        return $result;
    }
}
