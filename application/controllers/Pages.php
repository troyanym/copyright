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
        //$this->load->model('news_model');
    }

    public function index() {

        $data = array();

        $this->load->template('common/home', $data);

        /*$this->load->library('email');

        $client = array(
            'name' => 'Alexei',
            'email' => 'fdsfdas'
        );

        $message = 'Меня зовут: ' . $client['name'];
        $message .= '<br>' . 'Мой email: ' . $client['email'];

        $this->email->from('chernomorets.alexei@gmail.com', 'Alexei');
        $this->email->to('troyanym@mail.ru');

        $this->email->subject('Заявка на копирайтинг');
        $this->email->message($message);

        $this->email->send();
        echo $this->email->print_debugger();*/
    }

    public function send_req() {
        $this->load->library('email');

        $client = array(
            'name' => $this->input->post('client_name'),
            'email' => $this->input->post('client_email'),
            'phone' => $this->input->post('client_phone'),
            'text' => $this->input->post('client_text')
        );

        $message = 'Меня зовут: ' . $client['name'];
        $message .= '<br>' . 'Мой email: ' . $client['email'];
        $message .= '<br>' . 'Мой телефон: ' . $client['phone'];
        $message .= '<br>' . 'Краткое описание того что хочу: ' . $client['text'];

        $this->email->from('chernomorets.alexei@gmail.com', 'Alexei');
        $this->email->to('troyanym@mail.ru');

        $this->email->subject('Заявка на копирайтинг');
        $this->email->message($message);

        if($this->email->send())
        {
            $data['success'] = 'Заявка принята! Я свяжусь свяжусь с вами как только заявка поступит в обработку!';
        }
        else
        {
            $data['error'] = "Заявка не отправлена! Возможно произошел сбой в системе, попробуйте позже :(";
        }

        echo json_encode($data);
    }

    public function send_ask() {
        $this->load->library('email');

        $client = array(
            'name' => $this->input->post('client_name'),
            'email' => $this->input->post('client_email'),
            'text' => $this->input->post('client_ask')
        );

        $message = 'Меня зовут: ' . $client['name'];
        $message .= '<br>' . 'Мой email: ' . $client['email'];
        $message .= '<br>' . 'Краткое описание того что хочу: ' . $client['text'];

        $this->email->from('chernomorets.alexei@gmail.com', 'Alexei');
        $this->email->to('troyanym@mail.ru');

        $this->email->subject('Вопрос по копирайтингу');
        $this->email->message($message);

        if($this->email->send())
        {
            $data['success'] = 'Вопрос поступил в обработку! Ответ прийдет к вам на почту в ближайшее время..';
        }
        else
        {
            $data['error'] = "Заявка не отправлена! Возможно произошел сбой в системе, попробуйте позже :(";
        }

        echo json_encode($data);
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