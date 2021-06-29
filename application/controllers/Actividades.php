<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 26/10/2019
 * Time: 16:09
 */
defined("BASEPATH");
class Actividades extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login_user();
//        $this->load->model('common_model');
        $this->load->helper("url");
        $this->load->model("Actividades_m");
        $this->load->helper('download');


    }

    public function index()
    {
        $data["actividades"] = $this->Actividades_m->getAllActividad();
        $data["title"] = "Actividades";
        $data['main_content'] = $this->load->view("actividades/actividades_view", $data, true);
        $this->load->view('admin/index', $data);


    }

    public function agregarActividad()
    {
        $data["title"] = "Actividad";
        $data['main_content'] = $this->load->view("actividades/actividades_new", $data, true);
        $this->load->view('admin/index', $data);


    }

    public function insertarActividad()
    {

        $mi_archivo = 'ruta';
        $config['upload_path'] = 'uploads/archivos/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '20048';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($mi_archivo)) {

            $data = array('upload_data' => $this->upload->data());
            $data = array("Id_Actividad" => 0,
                'Nombre_Actividad' => $this->input->post("Nombre_Actividad"),
                'Tipo_Documento' => $this->input->post("Tipo_Documento"),
                'Municipio' => $this->input->post("Municipio"),
                'Fecha_Inicio' => $this->input->post("Fecha_Inicio"),
                'Fecha_Fin' => $this->input->post("Fecha_Fin"),
                'verificacion' => $this->input->post("verificacion"),
                'impacto' => $this->input->post("impacto"),
                'resultado'=>$this->input->post("resultado"),
                'ruta' => $data['upload_data']['file_name'],

            );

            $result = $this->Actividades_m->insertarActividad($data);
            if ($result) {

                $this->session->set_flashdata('msg', 'Actividad agregada exitosamente');
                redirect(base_url('actividades/agregarActividad'));
            } else if ($result) {
                $this->session->set_flashdata('error_msg', 'Actividad no fue agregada');
                redirect(base_url('actividades/agregarActividad'));
            } else {

            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $data = array("Id_Actividad" => 0,
                'Nombre_Actividad' => $this->input->post("Nombre_Actividad"),
                'Tipo_Documento' => $this->input->post("Tipo_Documento"),
                'Municipio' => $this->input->post("Municipio"),
                'Fecha_Inicio' => $this->input->post("Fecha_Inicio"),
                'Fecha_Fin' => $this->input->post("Fecha_Fin"),
                'verificacion' => $this->input->post("verificacion"),
                'impacto' => $this->input->post("impacto"),
                'ruta' => $data['upload_data']['file_name'],
                'resultado'=>$this->input->post("resultado"),

            );

            $result = $this->Actividades_m->insertarActividad($data);
            if ($result) {

                $this->session->set_flashdata('msg', 'Actividad agregada exitosamente');
                redirect(base_url('actividades/agregarActividad'));
            } else if ($result) {
                $this->session->set_flashdata('error_msg', 'Actividad no fue agregada');
                redirect(base_url('actividades/agregarActividad'));
            } else {

            }
        }


    }

    public function downloads($name)
    {
        $data = file_get_contents('uploads/archivos/' . $name);
        force_download($name, $data);

    }

    public function delete_actividad()
    {
        $idActividad = $this->input->post("idActividad");

        $datos = json_decode($idActividad);

            $registro = $this->Actividades_m->capturarArchivo($datos);
        if(!$registro->ruta == "") {
            unlink("uploads/archivos/" . $registro->ruta);

            $res = $this->Actividades_m->delete_actividad($datos);
            if ($res == 1) {
                echo "El registro fue Eliminado con exito!!";


            } else if ($res == 1) {
                echo "No se elimino ningun registro";

            } else if($res) {
                echo "Error al hacer la eliminacion";

            }
        }
        $res = $this->Actividades_m->delete_actividad($datos);
        if ($res == 1) {
             echo "El registro fue Eliminado con exito!!";


        } else if ($res == 1) {
            echo "No se elimino ningun registro";

        } else if($res) {
            echo  "Error al hacer la eliminacion";

        }

    }

    public function jalar_datos()
    {
        $idActividad = $this->input->post("idActividad");
        $Actividad = $this->Actividades_m->getAllActividad($idActividad);
        echo json_encode($Actividad);
    }

    public function update_Actividad()
    {
        $info = $this->input->post("info");
        $datos = json_decode($info);

        $data = array(
            'Nombre_Actividad' => $datos[5]->value,
            'Tipo_Documento' => $datos[1]->value,
            'Municipio' => $datos[2]->value,
            'Fecha_Inicio' => $datos[3]->value,
            'Fecha_Fin' => $datos[4]->value,
            'verificacion' => $datos[6]->value,
            'impacto' => $datos[8]->value,
            'resultado' => $datos[7]->value,
//            'Nombre_Actividad'=>$datos[9]->value,

        );
        $res = $this->Actividades_m->updateActividades(array("Id_Actividad" => $datos[0]->value), $data);
        if ($res == 1) {
            $mensaje = "Datos modificados con exito!!";

            $estatus = true;
        } else if ($res == 1) {
            $mensaje = "No se modifico ningun registro";
            $estatus = true;
        } else {
            $mensaje = "Error al hacer la modificacion";
            $estatus = true;
        }
        $retorno = array("estatus" => $estatus, "mensaje" => $mensaje);
        echo json_encode($retorno);


    }
//    aqui podresmos llamar el archivo para su eliminacion


}