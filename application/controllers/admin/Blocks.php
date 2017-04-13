<?php
/**
 * Created by PhpStorm.
 * User: troyanym
 * Date: 12.04.2017
 * Time: 20:30
 */

class Blocks extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->ion_auth->in_group('admin')) {
            $this->session->set_flashdata('message','У вас нет прав к группам пользователя');
            redirect('admin','refresh');
        }

        $this->load->model('land_model');
    }

    public function index()
    {
        $this->data['page_title'] = 'Блоки';
        $this->data['blocks'] = $this->land_model->getBlocks('content');
        $this->render('admin/blocks/list_blocks_view');
    }

    public function create()
    {
        $this->data['page_title'] = 'Создать группу';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('group_name','Group name','trim|required|is_unique[groups.name]');
        $this->form_validation->set_rules('group_description','Group description','trim|required');

        if($this->form_validation->run()===FALSE)
        {
            $this->load->helper('form');
            $this->render('admin/groups/create_group_view');
        }
        else
        {
            $group_name = $this->input->post('group_name');
            $group_description = $this->input->post('group_description');
            $this->ion_auth->create_group($group_name, $group_description);
            $this->session->set_flashdata('message',$this->ion_auth->messages());
            redirect('admin/groups','refresh');
        }
    }

    public function edit($block_id = NULL)
    {
        $block_id = $this->input->post('block_id') ? $this->input->post('block_id') : $block_id;
        $this->data['page_title'] = 'Изменить блок';
        $this->load->library('form_validation');

        $this->form_validation->set_rules('block_title','block title','trim|required');
        $this->form_validation->set_rules('block_subtitle','block subtitle','trim|required');
        $this->form_validation->set_rules('block_id','block id','trim|integer|required');

        if($this->form_validation->run() === FALSE)
        {
            if($block = $this->land_model->getBlockById((int) $block_id))
            {
                $this->data['block'] = $block;
            }
            else
            {
                $this->session->set_flashdata('message', 'The block doesn\'t exist.');
                redirect('admin/blocks', 'refresh');
            }
            $this->load->helper('form');
            $this->render('admin/blocks/edit_block_view');
        }
        else
        {
            $block_title = $this->input->post('block_title');
            $block_subtitle = $this->input->post('block_subtitle');
            $block_body = $this->input->post('block_body');
            $block_id = $this->input->post('block_id');
            $this->ion_auth->update_block($block_id, $block_title, $block_subtitle);
            $this->session->set_flashdata('message',$this->ion_auth->messages());
            redirect('admin/blocks','refresh');
        }
    }


}