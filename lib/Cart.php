<?php

class Cart
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addtocart($cartid, $userid, $itemid)
    {
        $query = "SELECT * FROM cart where item_id = :id";
        $this->db->query($query);
        $this->db->bindparams(":id", $itemid);
        $result = $this->db->single();
        if ($result) {
            return false;
        } else {
            $query = "INSERT INTO cart (cart_id, user_id, item_id ) VALUES (:cartid,:userid,:itemid)";
            $this->db->query($query);
            $this->db->bindparams(":cartid", $cartid);
            $this->db->bindparams(":userid", $userid);
            $this->db->bindparams(":itemid", $itemid);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function  fetchcart($userid)
    {
        $query = "SELECT * FROM cart where user_id = :userid";

        $this->db->query($query);
        $this->db->bindparams(":userid", $userid);
        $result = $this->db->resultSet();

        return $result;
    }

    public function deletefromcart($id)
    {
        $query = "DELETE FROM cart where item_id = :id";
        $this->db->query($query);
        $this->db->bindparams(":id", $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
