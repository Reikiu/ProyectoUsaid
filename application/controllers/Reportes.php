<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/12/2019
 * Time: 21:44
 */
defined("BASEPATH");
class Reportes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();
        $this->load->model("Visita_m");
        $this->load->model("Actividades_m");
        $this->load->model('common_model');
        $this->load->model("Resultado_m");
        $this->load->model("Logistica_m");
    }
    public function index(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["actividad_finalizada"]=$this->Resultado_m->getAllResultado();
        $data["detalle_de_actividad"]=$this->Logistica_m->getAllLogistica();
        $data["title"]="Reportes municipales";
        $data['main_content'] =$this->load->view("reportes/reportes_view",$data ,  true);
        $this->load->view('admin/index', $data);

    }
    public  function Reportesall(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["actividad_finalizada"]=$this->Resultado_m->getAllResultado();
        $data["detalle_de_actividad"]=$this->Logistica_m->getAllLogistica();
        $data["title"]="Reportes general";
        $data['main_content'] =$this->load->view("reportes/reportesall_view",$data ,  true);
        $this->load->view('admin/index', $data);


    }

}