<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 21:01
 */

class Actividades_m extends CI_Model
{
    private $table = "actividades";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllActividad($idActividad=null){

        $this->db->select("*");
        $this->db->from("actividades");
        if ($idActividad!=null){
            $this->db->where("Id_Actividad",$idActividad);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarActividad($data){

        $this->db->insert("actividades",$data);
        return $this->db->insert_id();
    }
    public function delete_actividad($data)
    {
        $this->db->where('Id_Actividad', $data);
        $this->db->delete('actividades');
        return $this->db->affected_rows();
//'actividades', array('Id_Actividad' => $id

    }
    public function updateActividades($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
    function capturarArchivo($id){
        $this->db->select('ruta');
        $this->db->where('Id_Actividad',$id);
        $this->db->from('actividades');
        $resultado = $this->db->get();
        return $resultado->row();
    }
}