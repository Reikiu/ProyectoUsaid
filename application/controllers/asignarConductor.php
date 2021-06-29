<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 20:12
 */
defined("BASEPATH");
class asignarConductor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();

        $this->load->model("AsignarConductor_m");
        $this->load->model("Registro_m");
        $this->load->model("Actividades_m");
        $this->load->model("Logistica_m");
        $this->load->model('common_model');

    }

    public function index(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["detalle_de_actividad"]=$this->Logistica_m->getAllLogistica();
        $data["usuarios"]=$this->Registro_m->getAllUsuarios();
        $data["planificacion"]=$this->AsignarConductor_m->getAllPlanificacion();
        $data["title"]="asignarConductor";
        $data['main_content'] =$this->load->view("asignarConductor/asignarCond_view",$data, true);
        $this->load->view('admin/index', $data);


    }

    public function jalar_datos(){
        $idConductor=$this->input->post("idConductor");
        $conductor = $this->AsignarConductor_m->getAllPlanificacion($idConductor);
        echo json_encode($conductor);
    }
    public function update_conductor(){
        $info = $this->input->post("info");
        $datos = json_decode($info);
        $data = array(
//            'Nombre_Actividad'=>$datos[9]->value,
            "Personas_que_Viajan"=>$datos[7]->value,
            "Responsable"=>$datos[6]->value,
            "Objetivo" =>$datos[3]->value,
            "fechaProgramada"=>$datos[4]->value,
            "Estado_Actividad"=>$datos[5]->value,
            "municipio"=>$datos[1]->value,
//            "resultado" =>$datos[8]->value,
            "Id_Actividad" =>$datos[2]->value,
            "conductor" =>$datos[8]->value,

        );
        $res = $this->AsignarConductor_m->updateConductor(array("Id_Planificacion"=>$datos[0]->value),$data);
        if ($res==1){
            $mensaje = "El conductor agrego correctamente!!";

            $estatus = true;
        }
        else if ($res==1){
            $mensaje ="No se pudo agregar el conductor";
            $estatus = true;
        }else{
            $mensaje = "Error al tratar de insertar conductor";
            $estatus = true;
        }
        $retorno = array("estatus"=>$estatus, "mensaje"=>$mensaje);
        echo json_encode($retorno);


    }
}