<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 16/11/2019
 * Time: 19:42
 */

class Resultado_m extends CI_Model
{
    private $table = "actividad_finalizada";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllResultado($idResultado=null){

        $this->db->select("*");
        $this->db->from($this->table);
        if ($idResultado!=null){
            $this->db->where("idResultado",$idResultado);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarResultado($data){

        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    public function delete_resultado($data)
    {
        $this->db->where('idResultado', $data);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
//'actividades', array('Id_Actividad' => $id

    }
    public function updateResultado($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}