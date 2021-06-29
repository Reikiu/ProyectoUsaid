<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 22:31
 */


class Logistica_m extends CI_Model
{
    private $table = "detalle_de_actividad";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllLogistica($idLogistica=null){

        $this->db->select("*");
        $this->db->from("detalle_de_actividad");
        if ($idLogistica!=null){
            $this->db->where("Id_Detalle",$idLogistica);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarLogistica($data){

        $this->db->insert("detalle_de_actividad",$data);
        return $this->db->insert_id();
    }
    public function delete_logistica($data)
    {
        $this->db->where('Id_Detalle', $data);
        $this->db->delete('detalle_de_actividad');
        return $this->db->affected_rows();
//'actividades', array('Id_Actividad' => $id
    }
        public function updateLogistica($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}