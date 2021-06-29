<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 16/11/2019
 * Time: 19:42
 */
defined("BASEPATH");
class Resultado extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();
        $this->load->model("Resultado_m");
        $this->load->model("Visita_m");
        $this->load->model("Actividades_m");
        $this->load->model('common_model');
    }

    public function index(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividad_finalizada"]=$this->Resultado_m->getAllResultado();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["title"]="Resultado";
        $data['main_content'] =$this->load->view("resultado/resultado_view",$data ,  true);
        $this->load->view('admin/index', $data);


    }
//    public  function agregarActividad(){
//        $data["title"]="Agregar-Cliente";
//        $data['main_content'] =$this->load->view("resultado/resultado_new",$data ,  true);
//        $this->load->view('admin/index', $data);
//
//
//
//    }
    public function insertarResultado(){

        $data = array("idResultado"=>0,
            'Agenda'=>$this->input->post("Agenda"),
            'Observaciones'=>$this->input->post("Observaciones"),
            'partOtrosM'=>$this->input->post("partOtrosM"),
            'partOtrosF'=>$this->input->post("partOtrosF"),
            'hReaInvertidas'=>$this->input->post("hReaInvertidas"),
            'acividadRea'=>$this->input->post("acividadRea"),
            'fechaProSesion'=>$this->input->post("fechaProSesion"),
            'fechaRegistro'=>$this->input->post("fechaRegistro"),
            'partMunicM'=>$this->input->post("partMunicM"),
            'partMunicH'=>$this->input->post("partMunicH"),
            'Acuerdos'=>$this->input->post("Acuerdos"),
            'idVisita'=>$this->input->post("idVisita"),
//            'fechaRegistro'=>$this->input->post("fechaRegistro"),

        );

        $result = $this->Resultado_m->insertarResultado($data);
        if ($result){
            echo "Los  datos fueron ingrensados correctamente";        }
        else if ($result){
            echo "Error ingrensar datos";
        }else{
            echo "Ingrese datos para agregar";
        }
    }
    public function delete_resultado()
    {
        $idResultado = $this->input->post("idResultado");
        $datos = json_decode($idResultado);

        $res = $this->Resultado_m->delete_resultado($datos);
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
        $idResultado=$this->input->post("idResultado");
        $Resultado = $this->Visita_m->getAllVisita($idResultado);
        echo json_encode($Resultado);
    }
    public function jalar_datos2(){
        $idResultado=$this->input->post("idResultado");
        $Resultado = $this->Resultado_m->getAllResultado($idResultado);
        echo json_encode($Resultado);
    }
    public function update_resultado(){
        $info = $this->input->post("info");
        $datos = json_decode($info);

        $data = array(
            'Agenda'=>$datos[1]->value,
            'Observaciones'=>$datos[2]->value,
            'partOtrosM'=>$datos[6]->value,
            'partOtrosF'=>$datos[5]->value,
            'hReaInvertidas'=>$datos[7]->value,
            'acividadRea'=>$datos[8]->value,
            'fechaProSesion'=>$datos[9]->value,
            'fechaRegistro'=>$datos[10]->value,
            'partMunicM'=>$datos[3]->value,
            'partMunicH'=>$datos[4]->value,
            'Acuerdos'=>$datos[11]->value,
//            'Nombre_Actividad'=>$datos[9]->value,

        );
        $res = $this->Resultado_m->updateResultado(array("idResultado"=>$datos[0]->value),$data);

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