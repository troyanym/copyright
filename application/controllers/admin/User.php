<?php
/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 07.04.2017
 * Time: 11:32
 */

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
    }

    public function index()
    {
    }

    public function login()
    {
        $this->data['page_title'] = 'Логин';
        if($this->input->post())
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember','Remember me','integer');
            if($this->form_validation->run()===TRUE)
            {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
                {
                    redirect('admin', 'refresh');
                }
                else
                {
                    $this->session->set_flashdata('message',$this->ion_auth->errors());
                    redirect('admin/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');
        $this->render('admin/login_view','admin_master');
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect('admin/user/login', 'refresh');
    }

    public function profile()
    {
        if(!$this->ion_auth->logged_in())
        {
            redirect('admin');
        }
        $this->data['page_title'] = 'Профиль пользователя';
        $user = $this->ion_auth->user()->row();
        $this->data['user'] = $user;
        $this->data['current_user_menu'] = '';
        if($this->ion_auth->in_group('admin'))
        {
            $this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin_view.php', NULL, TRUE);
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','Имя','trim');
        $this->form_validation->set_rules('last_name','Фамилия','trim');
        $this->form_validation->set_rules('company','Компания','trim');
        $this->form_validation->set_rules('phone','Телефон','trim');

        if($this->form_validation->run()===FALSE)
        {
            $this->render('admin/user/profile_view','admin_master');
        }
        else
        {
            $new_data = array(
                'first_name' => $this->input->post('Имя'),
                'last_name' => $this->input->post('Фамилия'),
                'company' => $this->input->post('Компания'),
                'phone' => $this->input->post('Телефон')
            );
            if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');
            $this->ion_auth->update($user->id, $new_data);

            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('admin/user/profile','refresh');
        }
    }
}