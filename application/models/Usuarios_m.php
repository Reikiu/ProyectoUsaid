<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 27/10/2019
 * Time: 23:52
 */
defined("BASEPATH");
class Usuarios_m extends CI_Model
{
    private $table = "usuarios";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsuario($idUsuario=null){

        $this->db->select("*");
        $this->db->from("usuarios");
        if ($idUsuario!=null){
            $this->db->where("Id_Usuario",$idUsuario);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insertarUsuario($data){

        $this->db->insert("usuarios",$data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->delete('usuarios', array('Id_Usuario' => $id));

    }
    public function updateUsuario($where, $data){
        $this->db->update($this->table,$data, $where);
        return $this->db->affected_rows();
    }
}