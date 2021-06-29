<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 17:58
 */
defined("BASEPATH");
class Logistica extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();
        $this->load->helper("url");
        $this->load->model("Logistica_m");
        $this->load->model("Visita_m");
        $this->load->model("Actividades_m");
        $this->load->model('common_model');

    }

    public function index(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["detalle_de_actividad"]=$this->Logistica_m->getAllLogistica();
        $data["title"]="Logistica";
        $data['main_content'] =$this->load->view("logistica/logistica_view",$data ,  true);
        $this->load->view('admin/index', $data);
    }
    public  function agregarLogistica(){
        $data["user"]=$this->common_model->getAllusuario();
        $data["actividades"]=$this->Actividades_m->getAllActividad();
        $data["planificacion"]=$this->Visita_m->getAllVisita();
        $data["title"]="Logistica";
        $data['main_content'] =$this->load->view("logistica/logistica_new",$data ,  true);
        $this->load->view('admin/index', $data);


    }
    public function insertarLogistica(){


        $data = array("Id_Detalle"=>0,
            'Lugar'=>$this->input->post("Lugar"),
            'Equipo_Y_Material_Requerido'=>$this->input->post("Equipo_Y_Material_Requerido"),
            'Hora_Retorno_Oficina'=>$this->input->post("Hora_Retorno_Oficina"),
            'Hora_Salida_Oficina'=>$this->input->post("Hora_Salida_Oficina"),
            'Hora_Fin_Sesion'=>$this->input->post("Hora_Fin_Sesion"),
            'Hora_Inicio_Sesion'=>$this->input->post("Hora_Inicio_Sesion"),
            'actividad'=>$this->input->post("actividad"),
        );


        $result = $this->Logistica_m->insertarLogistica($data);
        if ($result){
            echo "Los  datos fueron ingrensados correctamente";        }
        else if ($result){
            echo "Error ingrensar datos";
        }else{
            echo "Ingrese datos para agregar";
        }
    }
    public function delete_logistica()
    {
        $idActividad = $this->input->post("idLogistica");
        $datos = json_decode($idActividad);

        $res = $this->Logistica_m->delete_logistica($datos);
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
        $idActividad=$this->input->post("idLogistica");
        $Actividad = $this->Logistica_m->getAllLogistica($idActividad);
        echo json_encode($Actividad);
    }
    public function datosVisita(){
        $idLogistica=$this->input->post("idLogistica");
        $Actividad = $this->Visita_m->getAllVisita($idLogistica);
        echo json_encode($Actividad);
    }
    public function update_logistica(){
        $info = $this->input->post("info");
        $datos = json_decode($info);

        $data = array(
            'Lugar'=>$datos[1]->value,
            'Equipo_Y_Material_Requerido'=>$datos[2]->value,
            'Hora_Retorno_Oficina'=>$datos[4]->value,
            'Hora_Salida_Oficina'=>$datos[3]->value,
            'Hora_Fin_Sesion'=>$datos[6]->value,
            'Hora_Inicio_Sesion'=>$datos[5]->value,

        );

        $res = $this->Logistica_m->updateLogistica(array("Id_Detalle"=>$datos[0]->value),$data);
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
    function cargar_archivo() {

        $mi_archivo = 'archivo';
        $config['upload_path'] = "uploads/";
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }
}