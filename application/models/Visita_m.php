<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 27/10/2019
 * Time: 20:14
 */
defined("BASEPATH");
class Visita_m extends CI_Model
{
    private $table = "planificacion";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllVisita($idVisita=null){

        $this->db->select("*");
        $this->db->from("planificacion");
        if ($idVisita!=null){
            $this->db->where("Id_Planificacion",$idVisita);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarVisita($data){

        $this->db->insert("planificacion",$data);
        return $this->db->insert_id();
    }
    public function delete_visita($data)
    {
        $this->db->where('Id_Planificacion', $data);
        $this->db->delete('planificacion',array('Id_Planificacion' => $data));
        return $this->db->affected_rows();

    }
    public function updateVisita($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}