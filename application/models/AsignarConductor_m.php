<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 20:48
 */
defined("BASEPATH");
class AsignarConductor_m extends CI_Model
{
        private $table = "planificacion";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPlanificacion($idPlanificacion=null)
    {

        $this->db->select("*");
        $this->db->from("planificacion");
        if ($idPlanificacion != null) {
            $this->db->where("Id_Planificacion", $idPlanificacion);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function updateConductor($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}