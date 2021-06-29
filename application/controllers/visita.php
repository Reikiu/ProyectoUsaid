<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 18:00
 */
defined("BASEPATH");
class visita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();
        $this->load->model("Visita_m");
        $this->load->model("Actividades_m");
        $this->load->model('common_model');
    }

    public function index(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["title"]="Visita";
        $data['main_content'] =$this->load->view("visita/visitas_view",$data ,  true);
        $this->load->view('admin/index', $data);



    }
    public  function agregarVisita(){
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["title"]="Visita";
        $data['main_content'] =$this->load->view("visita/visitas_new",$data ,  true);
        $this->load->view('admin/index', $data);


    }
    public function insertarVisita(){
        $data = array("Id_Planificacion"=>0,
            'Personas_que_Viajan'=>$this->input->post("Personas_que_Viajan"),
            'Responsable'=>$this->input->post("Responsable"),
            'Objetivo'=>$this->input->post("Objetivo"),
            'fechaProgramada'=>$this->input->post("fechaProgramada"),
            'Estado_Actividad'=>$this->input->post("Estado_Actividad"),
            'municipio'=>$this->input->post("municipio"),
//            'resultado'=>$this->input->post("resultado"),
            'Id_Actividad'=>$this->input->post("nombreActividad"),


        );

        $result = $this->Visita_m->insertarVisita($data);
        if ($result){
            echo "Los  datos fueron ingrensados correctamente";        }
        else if ($result){
            echo "Error ingrensar datos";
        }else{
            echo "Ingrese datos para agregar";
        }
    }
    public function delete_visita()
    {
        $idVisita = $this->input->post("idVisita");
        $datos = json_decode($idVisita);

        $res = $this->Visita_m->delete_visita($datos);
        if ($res==1){
            $mensaje = "El registro fue Eliminado con exito!!";

            $estatus = true;
        }
        else if ($res==1){
            $mensaje ="No se elimino ningun registro";
            $estatus = true;
        }else{
            $mensaje = "Error al hacer la eliminacion";
            $estatus = true;
        }
        $retorno = array("estatus"=>$estatus, "mensaje"=>$mensaje);
        echo json_encode($retorno);

    }

    public function jalar_datos(){
        $idVisita=$this->input->post("idVisita");
        $Visita = $this->Visita_m->getAllVisita($idVisita);
        echo json_encode($Visita);
    }
    public function update_visita(){
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

        );
        $res = $this->Visita_m->updateVisita(array("Id_Planificacion"=>$datos[0]->value),$data);
        if ($res==1){
            $mensaje = "Datos modificados con exito!!";

            $estatus = true;
        }
        else if ($res==1){
            $mensaje ="No se modifico ningun registro";
            $estatus = true;
        }else{
            $mensaje = "Error al hacer la modificacion";
            $estatus = true;
        }
        $retorno = array("estatus"=>$estatus, "mensaje"=>$mensaje);
        echo json_encode($retorno);


    }
}