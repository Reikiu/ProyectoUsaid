<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 15/11/2019
 * Time: 11:47
 */
defined("BASEPATH");
class Registro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('common_model');
        $this->load->model('login_model');

    }

    public function index(){
        $data["title"]="usuarios";
        $data['country'] = $this->common_model->select('country');
        $data['power'] = $this->common_model->get_all_power('user_power');

        $this->load->view("admin/pages/register",$data);
    }
    public function agregar()
    {
        if ($_POST) {

            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'mobile' => $_POST['mobile'],
                'role' => $_POST['role'],
                'created_at' => current_datetime(),
                'puesto'=>$_POST['puesto'],
                'area' =>$_POST['area'],
            );

            $data = $this->security->xss_clean($data);

            //-- check duplicate email
            $email = $this->common_model->check_email($_POST['email']);

            if (empty($email)) {
                 $this->common_model->insert($data, 'user');

                $data = array();
                $data['registro'] = 'ok';
                $this->load->view('admin/login', $data);
                } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another email');
                redirect(base_url('registro'));
            }




        }
    }
    public function all_user_list()
    {
        $data['title'] = 'Usuarios';
        $data['users'] = $this->common_model->get_all_user();
        $data['country'] = $this->common_model->select('country');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'role' => $_POST['role']
            );
            $data = $this->security->xss_clean($data);

            $powers = $this->input->post('role_action');
            if (!empty($powers)) {
                $this->common_model->delete_user_role($id, 'user_role');
                foreach ($powers as $value) {
                    $role_data = array(
                        'user_id' => $id,
                        'action' => $value
                    );
                    $role_data = $this->security->xss_clean($role_data);
                    $this->common_model->insert($role_data, 'user_role');
                }
            }

            $this->common_model->edit_option($data, $id, 'user');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_user_list'));

        }

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['user_role'] = $this->common_model->get_user_role($id);
        $data['power'] = $this->common_model->select('user_power');
        $data['country'] = $this->common_model->select('country');
        $data['title'] = 'Usuarios|Edit';
        $data['main_content'] = $this->load->view('admin/user/edit_user', $data, TRUE);
        $this->load->view('admin/index', $data);

    }


    //-- active user
    public function active($id)
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User active Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- deactive user
    public function deactive($id)
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User deactive Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'user');
        $this->session->set_flashdata('msg', 'User deleted Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }


    public function power()
    {
        $data['title'] = 'Permisos';
        $data['powers'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/user_power', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add user power
    public function add_power()
    {
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name'],
                'power_id' => $_POST['power_id']
            );
            $data = $this->security->xss_clean($data);

            //-- check duplicate power id
            $power = $this->common_model->check_exist_power($_POST['power_id']);
            if (empty($power)) {
                $user_id = $this->common_model->insert($data, 'user_power');
                $this->session->set_flashdata('msg', 'Power added Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Power id already exist, try another one');
            }
            redirect(base_url('admin/user/power'));
        }

    }

    //--update user power
    public function update_power()
    {
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name']
            );
            $data = $this->security->xss_clean($data);

            $this->session->set_flashdata('msg', 'Power updated Successfully');
            $user_id = $this->common_model->edit_option($data, $_POST['id'], 'user_power');
            redirect(base_url('admin/user/power'));
        }

    }

    public function delete_power($id)
    {
        $this->common_model->delete($id,'user_power');
        $this->session->set_flashdata('msg', 'Power deleted Successfully');
        redirect(base_url('admin/user/power'));
    }

}