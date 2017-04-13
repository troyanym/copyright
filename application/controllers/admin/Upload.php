<?php

/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 13.04.2017
 * Time: 9:41
 */
class Upload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function upload_photo(){

        if(isset($_FILES)){
            //print_r($_FILES);
            $config['upload_path']          = 'upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('0');
            $data = $this->upload->data();
            $html = '<div class="alert alert-success" role="alert">Файл: '.$data['orig_name'].' успішно завантаженний! '."<p><br><img src='".base_url().'upload/'.$data['file_name']."'></p></div>";
            //print_r($data);
            echo $html;
        }
    }
}