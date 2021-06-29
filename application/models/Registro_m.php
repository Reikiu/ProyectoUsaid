<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 15/11/2019
 * Time: 11:47
 */

class Registro_m extends CI_Model
{
    private $table = "usuarios";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsuarios($idUsuario=null){

        $this->db->select("*");
        $this->db->from("$this->table");
        if ($idUsuario!=null){
            $this->db->where("Id_Usuario",$idUsuario);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarRegistro($data){

        $this->db->insert("usuarios",$data);
        return $this->db->insert_id();
    }
    public function delete_registro($data)
    {
        $this->db->where('Id_Usuario', $data);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
//'actividades', array('Id_Actividad' => $id

    }
    public function updateRegistro($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}