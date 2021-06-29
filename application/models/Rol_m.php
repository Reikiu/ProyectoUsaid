<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 15/11/2019
 * Time: 12:16
 */

class Rol_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRol($idRol=null){

        $this->db->select("*");
        $this->db->from("rol");
        if ($idRol!=null){
            $this->db->where("id",$idRol);
        }
        $query = $this->db->get();
        return $query->result();
    }

}