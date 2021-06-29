<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2/9/2019
 * Time: 15:22
 */

class Prueba extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}

	public function index(){
		$data["title"]="Home";
		$this->load->view("layout/head",$data);
		$this->load->view("layout/menu");
		$this->load->view("layout/nav_content");
		$this->load->view("prueba");
		$this->load->view("layout/footer");
	}


}
