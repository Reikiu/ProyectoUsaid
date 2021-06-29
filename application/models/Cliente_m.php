<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 23/9/2019
 * Time: 13:59
 */
defined("BASEPATH");

class Cliente_m extends CI_Model
{
    private $table = "cliente";
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllClientes($idCliente=null){

		$this->db->select("*");
		$this->db->from("cliente");
		if ($idCliente!=null){
		    $this->db->where("id",$idCliente);
        }
		$query = $this->db->get();
		return $query->result();
	}

	public function insertarCliente($data){

		$this->db->insert("cliente",$data);
		return $this->db->insert_id();
	}
    public function delete($id)
    {
        $this->db->delete('cliente', array('id' => $id));

    }
    public function updateCliente($where, $data){
	    $this->db->update($this->table,$data, $where);
	    return $this->db->affected_rows();
    }

}
