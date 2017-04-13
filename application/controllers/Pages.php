<?php

/**
 * Created by PhpStorm.
 * User: Chernomorets
 * Date: 03.04.2017
 * Time: 10:43
 */
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        $data = array();

        $this->load->template('common/home', $data);
    }

    public function view($page)
    {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Упс, у нас нет такой страницы!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->template('pages/'.$page, $data);
    }
}